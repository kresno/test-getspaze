<?php
class Lingkaran {
    public function luaslingkaran($r){
        $luas = 3.14 * $r * $r;
        return $luas;
    }

    public function klllingkaran($r){
        $keliling = 2 * 3.14 * $r;
        return $keliling;
    }
}

class Bola {
    public function volbola($r){
        $volume = 3.14 * $r * $r * $r;
        return $volume;
    }
}

$a  = new Lingkaran();
$hasilluas = $a->luaslingkaran(10);
$hasilkll = $a->klllingkaran(20);

$b = new Bola();
$hasilvol = $b->volbola(12);

echo "luas Lingkaran :".$hasilluas."<br>Keliling Lingkaran:".$hasilkll;
echo "<br>";
echo "Volume Bola :".$hasilvol;
?>
