<?php

namespace App\Http\Controllers;

use App\Models\product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $data = [
            'products' => product::all(),
            'title' => 'toko amin al husseini'
        ];
        return view('collection', $data);
    }
}
