<?php

namespace App\Http\Controllers;

use App\Berita;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use PDF;


class TentangKamiController extends Controller
{
    public function index()
    {
        $data['data'] = Berita::orderBy('id', 'DESC')->paginate(4);
        return view('tentang_kami', $data);
    }

    public function generatePDF()

    {
        $data = ['title' => 'Welcome to belajarphp.net'];

        $pdf = PDf::loadView('PDF', $data);
        return $pdf->stream();
    }

    public function sejarah()
    {
        return view('sejarahkami');
    }

    public function details($id)
    {
        $id = base64_decode($id);
        $berita['berita'] = Berita::findOrFail($id);
        return view('berita', $berita);
    }
}
