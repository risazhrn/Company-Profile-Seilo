<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Media;
use App\Models\Program;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ProgramController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $programs = Program::query()->orderBy('created_at', 'desc')->paginate(10);
        return view('program.index', compact('programs'));
    }

    public function indexAdmin()
    {
        $programs = Program::all();
        return view('admin.program.index', compact('programs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.program.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'gambar' => 'required|image|max:2000|',
            'judul' => 'required',
            'deskripsi' => 'required',
            'tgl_dibuka' => 'required|date',
            'tgl_ditutup' => 'required|date|after_or_equal:tgl_dibuka',
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
            Program::create([
                'judul' => $request->judul,
                'deskripsi' => $request->deskripsi,
                'user_id' => Auth::id(),
                'media_id' => $media->id,
                'tgl_dibuka' => $request->tgl_dibuka,
                'tgl_ditutup' => $request->tgl_ditutup,
            ]);
            DB::commit();
            return to_route('admin.program.index')->with('success', 'Berhasil menambahkan program.');
        } catch (\Exception $e) {
            DB::rollback();
            return to_route('admin.program.index')->with('fail', 'Gagal menambahkan program!');
        }

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Program $program)
    {
        return view('admin.program.edit', compact('program'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Program $program)
    {
        $request->validate([
            'gambar' => 'image|max:2000|',
            'judul' => 'required',
            'deskripsi' => 'required',
            'tgl_dibuka' => 'required|date',
            'tgl_ditutup' => 'required|date|after_or_equal:tgl_dibuka',
            'aktif' => 'required',
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
            $program->media_id = $media->id;
        }
        $program->judul = $request->judul;
        $program->deskripsi = $request->deskripsi;
        $program->tgl_dibuka = $request->tgl_dibuka;
        $program->tgl_ditutup = $request->tgl_ditutup;
        $program->aktif = $request->aktif;
        $program->save();

        return to_route('admin.program.index')->with('success', 'Berhasil mengubah program.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Program $program)
    {
        //
    }
}
