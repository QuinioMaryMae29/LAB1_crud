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
        $data = [
            'product' => $this->product->findAll(),
            'pro' => $this->product->where('id', $id)->first(),
        ];
        return view('products', $data);
    }

    public function save()
    {
        $data = [
            'ProductName' => $this->request->getVar('ProdName'),
            'ProductDescription' => $this->request->getVar('ProdDescription'),
            'ProductCategory' => $this->request->getVar('ProdCategory'),
            'ProductQuantity' => $this->request->getVar('ProdQuantity'),
            'ProductPrice' => $this->request->getVar('ProdPrice'),
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
