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
            'pr' => $this->product->where('id', $id)->first(),
        ];
        return view('products', $data);
    }

    public function save()
    {
        $id = $_POST['id'];
        $data = [
            'Name' => $this->request->getVar('Name'),
            'Description' => $this->request->getVar('Description'),
            'Category' => $this->request->getVar('Category'),
            'Quantity' => $this->request->getVar('Quantity'),
            'Price' => $this->request->getVar('Price'),
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
