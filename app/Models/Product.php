<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    // use HasFactory;
    /**
     * ALL THE PRODUCT ATTRIBUTES
     * $this->attributes['id'] - The unque product id
     * $this->attributes['name'] - The name of the Product
     * $this->attributes['price'] - The Price of the product
     * $this->attributes['description'] - The Description of the Product
     * $this->attributes['image'] - The Product image
     * $this->attributes['creat_at'] - Product Created Timestamp
     * $this->attributes['update_at'] - Product Updated Timestamp

     **/ 
    
     public function getId()
     {
        return $this->attributes['id'];
     }

     public function setId($id)
     {
        $this->attributes['id'] = $id;
     }

     public function getName()
     {
        return $this->attributes['name'];
     }

     public function setName($name)
     {
        $this->attributes['name'] = $name;
     }

     public function getPrice()
     {
        return $this->attributes['price'];
     }

     public function setPrice($price)
     {
        $this->attributes['price'] = $price;
     }

     public function getDescription()
     {
        return $this->attributes['description'];
     }

     public function setDescription($description)
     {
        $this->attributes['description']  = $description;
     }

     public function getImage()
     {
        return $this->attributes['image'];
     }

     public function setImage($image)
     {
        $this->attributes['image'] = $image;
     }

     public function getCreateAt()
     {
        return $this->attributes['create_at'];
     }

     public function setCreateAt($createAt)
     {
        $this->attributes['create_at'] = $createAt;
     }

     public function getUpdateAt()
     {
        return $this->attributes['update_at'];
     }

     public function setUpdateAt($updateAt)
     {
        $this->attributes['update_at'] = $updateAt;
     }
}