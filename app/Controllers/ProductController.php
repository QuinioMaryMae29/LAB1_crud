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

    public function save()
    {
        $data = [
            'name' => $this->request->getVar('name'),
            'description' => $this->request->getVar('description'),
            'category' => $this->request->getVar('category'),
            'quantity' => $this->request->getVar('quantity'),
            'price' => $this->request->getVar('price'),
        ];
        $this->product->save($data);
        return redirect()->to('/product');
    }
    
    public function product($product)
    {
        echo $product;
    }

    public function test()
    {
        $data['product'] = $this->product->findAll();
        return view('products', $data);
    }

    public function index()
    {
        //
    }
}
