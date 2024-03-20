<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;

class BeritaController extends Controller
{
    //
    public function index()
    {
    	$news = News::latest()->paginate(10);
        return view('admin.body.berita', compact('news'));
 
    }
}
