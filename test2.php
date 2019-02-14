<?php 

// $x = 3 +"15%" + "$25";
// echo $x;

// $id = $_GET['id'];
// var_dump($id);

class A{
    function __set($prop, $val) {
        $this->$prop = $val;
        }
}

$a = new A();
$a->__set($hasil, 5);
echo $hasil;
?>