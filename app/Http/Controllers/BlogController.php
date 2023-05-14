<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Media;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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
        $blogs = $blogs->paginate(5);
        $recentNews = Blog::orderBy('created_at', 'asc')->limit(3)->get();
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

        // dd($request->gambar->getSize());
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

        Blog::create([
            'judul' => $request->judul,
            'slug' => Str::slug($request->judul),
            'isi' => $request->isi,
            'user_id' => Auth::id(),
            'media_id' => $media->id,
        ]);

        return to_route('admin.blog.create');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $slug)
    {
        return view('blog.detail');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
