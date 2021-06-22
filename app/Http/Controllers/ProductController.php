<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductController extends Controller
{
    public function index(){
        $products = Product::paginate(10);
        return view('admin.products.index')->with(compact('products')); //Listado
    }

    public function create(){
        return view('admin.products.create'); //Formulario de Registro
    }

    public function store(Request $request){
        //Validar
        $messages = [
            'name.required' => 'Ingresar nombre para el producto.',
            'name.min' => 'El nombre del producto debe tener mínimo 3 caracteres.',
            'description.required' => 'Ingresa una descripción para el producto.',
            'price.required' => 'Ingresa un precio para el producto.',
        ];
        $rules = [
            'name' => 'required|min:3',
            'description' => 'required|max:200',
            'price' => 'required|numeric|min:0'
        ];
        $this->validate($request, $rules, $messages);

        //Registrar el nuevo producto en la BD
        // dd($request->all());

        $product = new Product();
        $product->name = $request->input('name');
        $product->description = $request->input('description');
        $product->price = $request->input('price');
        $product->long_description = $request->input('long_description');
        $product->save(); //INSERT PRODUCTS

        return redirect('/admin/products');
    }

    public function edit($id){ //Editar el Registro
        $product = Product::find($id);
        return view('admin.products.edit')->with(compact('product')); 
    }

    public function update(Request $request, $id){
        //Validar
        $messages = [
            'name.required' => 'Ingresar nombre para el producto.',
            'name.min' => 'El nombre del producto debe tener mínimo 3 caracteres.',
            'description.required' => 'Ingresa una descripción para el producto.',
            'price.required' => 'Ingresa un precio para el producto.',
        ];
        $rules = [
            'name' => 'required|min:3',
            'description' => 'required|max:200',
            'price' => 'required|numeric|min:0'
        ];
        $this->validate($request, $rules, $messages);

        //Actualizar productos en la BD
        
        $product = Product::find($id);
        $product->name = $request->input('name');
        $product->description = $request->input('description');
        $product->price = $request->input('price');
        $product->long_description = $request->input('long_description');
        $product->save(); //UPDATE PRODUCTS

        return redirect('/admin/products');
    }

    public function destroy($id){
        //Eliminar productos en la BD

        $product = Product::find($id);
        $product->delete(); //DELETE PRODUCTS

        return back();
    }
}
