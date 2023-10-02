<?php

namespace App\Controllers;

use App\Controllers\BaseController;
//use App\Models\ProductModel;

class ProductController extends BaseController
{
    private $product;
    public function __construct()
    {
        $this->product = new \App\Models\ProductModel();
    }

    public function delete($id)
    {
        $this->product->delete($id);
        return redirect()->to('/product');
    }

    public function edit($id)
    {
        $data['product'] = $this->product->find($id);
        return view('/products', $data);
    }

    public function update($id)
    {
        $this->product->update($id, $_POST);
        return redirect()->to('/products');
    }

    public function create()
    {
        return view('create');
    }

    public function save()
    {
        $this->product->save($_POST);
        return redirect()->to('/product');
    }

    public function product($product)
    {
        echo $product;
    }

    public function index()
    {

    }

    public function test()
    {
        $data['product'] = $this->product->findAll();
        return view('products' , $data);
    }
}
