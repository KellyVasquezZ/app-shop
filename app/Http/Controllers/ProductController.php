<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductController extends Controller
{
    public function index(){
        $products = Product::all();
        return view('admin.products.index')->with(compact('products')); //Listado
    }
    public function create(){
        return view('admin.products.create'); //Formulario de Registro
    }
    public function store(){
        return view(''); //Registrar el nuevo producto en la BD
    }
}
