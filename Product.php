<?php 

class Product{
    public $name;
    protected $price;
    public $description;
    protected $image;
   
    public function uploadImage($urlImage){
        return $this->image = $urlImage;
    }

    public function calcPrice(){
       return $this->price = rand(1,7500);
    }
    
 

}

