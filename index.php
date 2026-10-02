<?php
class Car {
  private $num_telaio;
  public function __construct($num_telaio){
    $this->numero_Telaio = $num_telaio;
  }
  public function getInfo(){
    return $this->numero_Telaio;
  }
}

class Fiat extends Car {
  protected $license;
  protected $name;
  public function __construct($name,$license,$num_Telaio){
    $this->name = $name;
    $this->license = $license;
    parent:: __construct($num_Telaio);
  }
  public function infoDetails(){
    echo "La mia macchina  e' {$this->name}, con targa {$this->license} e numero di telaio {$this->getInfo()}\n";
  }
}
$auto = new Fiat("Opel", "ND 123 OJ", "1234");
$auto->infoDetails();
