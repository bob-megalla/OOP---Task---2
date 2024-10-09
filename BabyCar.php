<?php 
class BabyCar extends Product{
    public $age;
    public $weight;
    private $materials ;
    private $specialTax = 11;

    public function setMaterial(){
        $array = ["IRON","PLASTIC","PAPER","WATERPROOF"]; 
        $this->materials = $array;
        // var_dump($this->materials);
        // die;
    }
    public function displayMaterials(){
        $this->setMaterial();
       return $this->materials;
    }

    public function chooseMaterial(){

        $result = array_rand($this->displayMaterials());
        // echo "<pre>";
        // var_dump($this->materials[$result]);
        // echo"</pre>";
        // // var_dump($result);
        // die;
        return $this->materials[$result];
    }
    public function getFinalPrice(){
        $price = $this->calcPrice();
        $taxPerc = ($price - $this->specialTax)  / 100;
        return $price + $taxPerc;
    }
}