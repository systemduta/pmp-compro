<?php

namespace App\Http\Controllers;

use App\Berita;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Intervention\Image\ImageManagerStatic as Image;
use Illuminate\Support\Facades\Storage;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $data['data'] = Berita::all();
        return view('admin.berita', $data);
    }

    public function edit($id)
    {
        $berita['berita'] = Berita::findOrFail($id);
        return view('admin.edit', $berita);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'image' => 'required',
            'title' => 'required',
            'deskripsi' => 'required',
        ]);

        $berita = new Berita();
        $image                  = $request->image;
        $namafile = time() . '.' . $image->getClientOriginalExtension();
        Image::make($image)->resize(778, 572, function ($constraint) {
            $constraint->aspectRatio();
        })->save('berita/' . $namafile);
        $image->move('berita-original/', $namafile);
        $berita->image             = $namafile;
        $berita->title = $request->title;
        $berita->deskripsi = $request->deskripsi;

        $berita->save();
        Session::flash('tambah', 'Berita telah berhasil di tambahkan');
        return redirect()->route('berita');
    }

    public function update(Request $request, $id)
    {
        $berita = Berita::find($id);

        if ($request->file('image')) {
            $image                  = $request->image;
            $namafile = time() . '.' . $image->getClientOriginalExtension();
            Image::make($image)->resize(778, 572, function ($constraint) {
                $constraint->aspectRatio();
            })->save('berita/' . $namafile);
            $image->move('berita-original/', $namafile);
            $berita->image             = $namafile;
        }
        $berita->title = $request->title;
        $berita->deskripsi = $request->deskripsi;

        $berita->save();

        return redirect()->route('berita');
    }

    public function destroy($id)
    {
        $berita = Berita::find($id);
        $berita->delete();
        return redirect()->back();
    }
}
