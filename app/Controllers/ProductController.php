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
        $id = $_POST['id'];
        $data = [
            'ProdName' => $this->request->getVar('ProdName'),
            'ProdDescription' => $this->request->getVar('ProdDescription'),
            'ProdCategory' => $this->request->getVar('ProdCategory'),
            'ProdQuantity' => $this->request->getVar('ProdQuantity'),
            'ProdPrice' => $this->request->getVar('ProdPrice'),
        ];
        if($id!= null){
            $this->product->set($data)->where('id', $id)->update();
        }else{
            $this->product->save($data);
        }
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
