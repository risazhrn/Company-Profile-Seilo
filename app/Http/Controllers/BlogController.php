<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Media;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $search = $request->s;
        $blogs = Blog::query();
        if (isset($search)) {
            $blogs = $blogs->where('judul', 'LIKE', "%$search%");
        }
        $blogs = $blogs->orderBy('created_at', 'desc')->paginate(5);
        $recentNews = Blog::orderBy('created_at', 'desc')->limit(3)->get();
        return view('blog.index', compact('blogs', 'recentNews'));
    }

    public function indexAdmin()
    {
        $blogs = Blog::all();
        return view('admin.blog.index', compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.blog.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'isi' => 'required',
            'gambar' => 'required|image|max:2000|',
            'judul' => 'required',
        ]);

        DB::beginTransaction();

        if ($request->gambar->isValid()) {
            $file = $request->gambar;
            $path = $file->store('images');
            $media = Media::create([
                'name' => $file->getClientOriginalName(),
                'type' => $file->getMimeType(),
                'size' => $file->getSize(),
                'path' => $path,
            ]);
        }
        try {
            Blog::create([
                'judul' => $request->judul,
                'slug' => Str::slug($request->judul) . '-' . rand(100, 999),
                'isi' => $request->isi,
                'user_id' => Auth::id(),
                'media_id' => $media->id,
            ]);
            DB::commit();
            return to_route('admin.blog.index')->with('success', 'Berhasil menambahkan postingan blog.');
        } catch (\Exception $e) {
            DB::rollback();
            return to_route('admin.blog.index')->with('fail', 'Gagal menambahkan postingan blog!');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Blog $blog)
    {
        return view('blog.detail', compact('blog'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Blog $blog)
    {
        return view('admin.blog.edit', compact('blog'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Blog $blog)
    {
        $request->validate([
            'isi' => 'required',
            'gambar' => 'image|max:2000|',
            'judul' => 'required',
        ]);

        if ($request->hasFile('gambar')) {
            $file = $request->gambar;
            $path = $file->store('images');
            $media = Media::create([
                'name' => $file->getClientOriginalName(),
                'type' => $file->getMimeType(),
                'size' => $file->getSize(),
                'path' => $path,
            ]);
            $blog->media_id = $media->id;
        }

        $blog->judul = $request->judul;
        $blog->isi = $request->isi;
        $blog->save();

        return to_route('admin.blog.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Blog $blog)
    {
        $blog->delete();

        return 'success';
    }
}
