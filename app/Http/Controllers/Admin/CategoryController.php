<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        // Misal menampilkan view list kategori
        return view('admin.categories.index');
    }
}
