<?php 
class Book extends Product{
    private $publisher = [
        "1"=>"دار النشر",
        "2"=>"دار الكتب",
        "3"=>"NFC",
        "4"=>"الاهرام للنشر",
        "5"=>"صوت مصر الحرة"
    ];
    private $writer = [
        "1"=>"عبدالحميد كشك",
        "2"=>"احمد شوقى",
        "3"=>"حافظ ابراهيم",
        "4"=>"مصطفى لطفى المنفلوطى",
        "5"=>"سلامه موسى"
    ];
    private $color = [
        "1"=>"White",
        "2"=>"Black",
        "3"=>"Blue",
        "4"=>"Green",
        "5"=>"Yellow"
    ];
    private $supplier = [
        "1"=>"دار النشر",
        "2"=>"دار الكتب",
        "3"=>"NFC",
        "4"=>"الاهرام للنشر",
        "5"=>"صوت مصر الحرة"
    ];

    private $bookNames = [
        "1"=>"الف ليلة و ليلة",
        "2"=>"رواية 1919",
        "3"=>"رواية ساق البامبو",
        "4"=>"أرض زيكولا",
        "5"=>"تراب الماس"
    ];

    public function chooseBookName(){
        $result = array_rand($this->bookNames);
        return $this->bookNames[$result];
    }

    public function choosePublisher(){
        $result = array_rand($this->publisher);
        return $this->publisher[$result];
    }

    public function chooseWriter(){
        $result = array_rand($this->writer);
        return  $this->writer[$result];
    }

    public function chooseColor(){
        $result = array_rand($this->color);
        return $this->color[$result];
    }
    public function chooseSupplier(){
        $result = array_rand($this->supplier);
        // return $this->supplier = $this->supplier[$result];
        return $this->supplier[$result];
    }
    public function setPublisher($publisher){
        $this->publisher[] = $publisher;
    }

    public function showAllPublisher(){
        return $this->publisher;
    }
}