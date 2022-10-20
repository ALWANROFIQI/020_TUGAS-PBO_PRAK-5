<?php
class Pegawai
{
       public  $nama;
       public $gaji;

       public function __construct($nama, $gaji)
       {
              $this->nama = $nama;
              $this->gaji = $gaji;
       }
       public function infoGaji()
       {
              return $this->gaji;
       }
}

class Manajer extends Pegawai
{
       private $tunjangan;

       public       function __construct($nama, $gaji, $tunjangan)
       {
              parent::__construct($nama, $gaji);
              $this->tunjangan = $tunjangan;
       }       
       public function infoGaji()
       {
              return $this->gaji;
       }
       public       function infoTunjangan()
       {
              return $this->tunjangan;
       }
}

class Programmer extends Pegawai
{
       private $bonus;
       public       function __construct($nama, $gaji, $bonus)
       {
              parent::__construct($nama, $gaji);
              $this->bonus = $bonus;
       }
       public       function infoGaji()
       {
              return $this->gaji;
       }
       public       function infoBonus()
       {
              return $this->bonus;
       }
}

class Bayaran
{
       public function hitungBayaran($peg)
       {
              $uang = $peg->infoGaji();

              return $uang;
       }
       public static function main($args)
       {
              
              echo "GAJI PEGAWAI";
              echo "<br> <br>";
              $man = new Manajer("Petir", 10000000, 5000000);
              $prog = new Programmer("Alex", 6000000, 400000);
              $hr = new Bayaran();
              echo "Gaji untuk Manajer Bernama " . $man->nama . " : Rp. " . strval($hr->hitungBayaran($man)), "\n";
              echo "<br>";
              echo "Gaji untuk Programmer Bernama " . $prog->nama . " : Rp. " . strval($hr->hitungBayaran($prog)), "\n";
       }
}
Bayaran::main(array());
?>