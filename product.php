<?php

class Product
{
    public $name;
    public $price;
    public $discount;

    function getName()
    {
        return $this->name;
    }

    function setName($name)
    {
        $this->name = $name;
    }

    function getPrice()
    {
        return $this->price;
    }

    function setPrice($price)
    {
        $this->price = $price;
    }

    function getDiscount()
    {
        return $this->discount;
    }

    function setDiscount($discount)
    {
        $this->discount = $discount;
    }

}

class CDMusic extends Product
{
    public $artist;
    public $genre;

    function __construct($name="nama", $price="harga", $dicount="diskon")
    {

    }
    function getArtist()
    {
        return $this->artist;
    }

    function setArtist($artist)
    {
        $this->artist = $artist;
    }

    function getGenre()
    {
        return $this->genre;
    }

    function setGenre($genre)
    {
        $this->genre = $genre;
    }

    function getPrice()
    {
        $harga = $this->price;
        $ppn = ((10/100) * $this->price);
        $discount = ((5/100) * $this->price);
        return ($harga + $ppn) - $discount;
    }

    function setPrice($price)
    {
        $this->price = $price;
    }

    function setDiscount($discount){
        $this->discount = $discount;
    }
}

class CDRack extends Product
{
    public $capacity;
    public $model;

    function getCapacity()
    {
        return $this->capacity;
    }

    function setCapacity($capacity)
    {
        $this->capacity = $capacity;
    }

    function getModel()
    {
        return $this->model;
    }

    function setModel($model)
    {
        $this->model = $model;
    }
    
    function getPrice()
    {
        $harga = $this->price;
        $tambahan = ((15/100) * $this->price);
        return $harga + $tambahan;
    }

    function setPrice($price)
    {
        $this->price = $price;
    }

}

$beli = new Product();
$harga_cdm = new Product();
$harga_cdr = new Product();
$beli_cdm = new CDMusic();
$beli_cdr = new CDRack();

// set CDMusic
$harga_cdm->setPrice("250000");
$beli->setName("CD music");
$beli_cdm->setArtist("Rebelion Rose");
$beli_cdm->setGenre("Pop");
$beli_cdm->setDiscount("5%");
$beli_cdm->setPrice(250000);

echo "---PRODUCT---<br/><br/><hr/>";
echo "---CDMUSIC--- <br/>";
echo "Nama Product : " . $beli->getName() . "<br/>";
echo "Artis : " . $beli_cdm->getArtist() . "<br/>";
echo "Genre : " . $beli_cdm->getGenre() . "<br/>";
echo "Harga : Rp. " . $harga_cdm->getPrice() . "<br/>";
echo "Diskon : " . $beli_cdm->getDiscount() ."<br/><br/>";
echo "Total Harga : Rp." . $beli_cdm->getPrice() . ",-<br/>Harga sudah termasuk PPN sebesar 10% dan Discount 5%<br/><br/><hr/>";

// set CDRack
$harga_cdr->setPrice("200000");
$beli->setName("CDRack");
$beli_cdr->setCapacity("300mb");
$beli_cdr->setModel("Full album terbaru");
$beli_cdr->setDiscount("0%");
$beli_cdr->setPrice(200000);

echo "---CDRACK--- <br/>";
echo "Nama Product : " . $beli->getName(). "<br/>";
echo "Kapasitas : " . $beli_cdr->getCapacity() . "<br/>";
echo "Model : " . $beli_cdr->getModel() . "<br/>";
echo "Harga : Rp. " . $harga_cdr->getPrice() . "<br/>";
echo "Diskon : " . $beli_cdr->getDiscount() ."<br/><br/>";
echo "Total Harga : Rp." . $beli_cdr->getPrice() . ",-<br/>Harga sudah termasuk PPN sebesar 15% dan tidak mendapatkan discount";

?>
