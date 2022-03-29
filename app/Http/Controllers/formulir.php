<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Post;
class formulir extends Controller
{
    public function index()
    {
        return view('formulir');
    }
    public function store(Request $request)
    {
        $post = new formulir;
        $post->idPasien = $request->idPasien;
        $post->idDokter = $request->idDokter;
        $post->kondisiKesehatan = $request->kondisiKesehatan;
        $post->suhu = $request->suhu;
        $post->gambar = $request->gambar;
        $post->save();
        return redirect('formulir')->with('status', 'Blog Post Form Data Has Been inserted');
    }
    
}