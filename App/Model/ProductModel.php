<?php

namespace App\Model;

class ProductModel extends BaseModel
{
    public $table="products";

    public function createProduct($product){
        $sql="insert into $this->table(name,sectors,price,amount,datecreated,description) values (?,?,?,?,?,?)";
        $stmt=$this->connect->prepare($sql);
        $stmt->bindParam(1,$product["name"]);
        $stmt->bindParam(2,$product["sectors"]);
        $stmt->bindParam(3,$product["price"]);
        $stmt->bindParam(4,$product["amount"]);
        $stmt->bindParam(5,$product["datecreated"]);
        $stmt->bindParam(6,$product["description"]);
        $stmt->execute();
    }

    public function updateProduct($product,$id){
        $sql="update  $this->table set name=?,sectors=?,price=?,amount=?,datecreated=?,description=? where id=?";
        $stmt=$this->connect->prepare($sql);
        $stmt->bindParam(1,$product["name"]);
        $stmt->bindParam(2,$product["sectors"]);
        $stmt->bindParam(3,$product["price"]);
        $stmt->bindParam(4,$product["amount"]);
        $stmt->bindParam(5,$product["datecreated"]);
        $stmt->bindParam(6,$product["description"]);
        $stmt->bindParam(7,$id);
        $stmt->execute();
    }
}