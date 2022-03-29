<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Post;
class PostController extends Controller
{
    public function index(){
        return view('article', [
            "articles" =>  Post::all()
        ]);
    }
    public function content(Post $article){
        return view('konten', [
            "article" => $article
        ]);
    }
    
}