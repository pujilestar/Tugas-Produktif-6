<?php
class sepatu{
  public $kodeBarang,
         $merk,
         $size;
         protected $diskon;
         private $harga;

  public function getCetak(){
    return "(Rp $this->harga)";
  }
  public function __construct($kodeBarang="kodeBarang",$merk="merk", $size="size",$harga=0){
    $this->kodeBarang = $kodeBarang;
    $this->merk=$merk;
    $this->size=$size;
    $this->harga=$harga;
  }

    public function cetakInfo(){
        $str="{$this->kodeBarang}, {$this->getCetak()}";
        return $str;
    }
    public function setDiskon($diskon){
      $this ->diskon=$diskon;
    }
    public function getHarga(){
       return $this->harga = ($this->harga*$this->diskon/100 ); 
    }

}

class polosan extends sepatu{
  public $warna, $customPatch;

  public function __construct ($kodeBarang="kode barang",$merk="merk" ,$size="size",$harga=0, $warna="warna", $customPatch="custom patch"){
    parent::__construct($kodeBarang,$merk,$size,$harga);
    $this->warna = $warna;
    $this->customPatch = $customPatch;
  }

    public function cetakInfo(){
        $str="polosan: " .parent::getCetak(). " | warna : {$this->warna}   | custom patch : {$this->customPatch}";
        return $str;
    }
}

class painthing extends sepatu{
  public $gambar, $warnaDasar;

  public function __construct ($kodeBarang="kode barang",$merk="merk" ,$size="size",$harga=0, $gambar="gambar", $warnaDasar="warna dasar"){
    parent::__construct($kodeBarang,$merk,$size,$harga);
    $this->gambar = $gambar;
    $this->warnaDasar= $warnaDasar;
  }

    public function cetakInfo(){
        $str="painthing : " .parent::getCetak(). " | gambar : {$this->gambar} | warnaDasar : {$this->warnaDasar}";
        return $str;
    }
}

$sepatu1 = new polosan("05S","Jordan","size-38",1000000,"putih", "bordir");
$sepatu2 = new painthing("10T","Converse","size-40",500000 , "doraemon" , "biru");


echo $sepatu1->cetakInfo();
echo "<br>";
echo $sepatu2->cetakInfo();
echo "<br>";
echo "<hr>";
$sepatu1->setDiskon(15);
echo $sepatu1->getHarga();
?>