<?php
namespace App\Controller;
use App\Model\ProductModel;

class ProductController
{
    public $productModel;

    public function __construct()
    {
        $this->productModel = new ProductModel();
    }
    public function getAll(){
       $products= $this->productModel->getAll();
       include "App/View/product/list.php";
    }
    public function delete($id){
        $this->productModel->delete($id);
        header("location:index.php?page=product-list");
    }
    public function getDetail($id){
         $this->productModel->detail($id);

    }
    public function  create(){
        if ($_SERVER["REQUEST_METHOD"]=="GET"){
            include"App/View/product/create.php";
        }
        else{
            $data=[
                "name"=>$_REQUEST["name"],
                "sectors"=>$_REQUEST["sectors"],
                "price"=>$_REQUEST["price"],
                "amount"=>$_REQUEST["amount"],
                "datecreated"=>$_REQUEST["datecreated"],
                "description"=>$_REQUEST["description"]
            ];
            $this->productModel->createProduct($data);
            header("location:index.php?page=product-list");
        }

    }

    public function  update(){
        if ($_SERVER["REQUEST_METHOD"]=="GET"){
            $product= $this->productModel->detail($_REQUEST["id"]);
            include"App/View/product/update.php";
        }
        else{
            $data=[
                "name"=>$_REQUEST["name"],
                "sectors"=>$_REQUEST["sectors"],
                "price"=>$_REQUEST["price"],
                "amount"=>$_REQUEST["amount"],
                "datecreated"=>$_REQUEST["datecreated"],
                "description"=>$_REQUEST["description"]
            ];
            $this->productModel->updateProduct($data,$_REQUEST["id"]);
            header("location:index.php?page=product-list");
        }

    }

}