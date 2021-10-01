<?php

//define('NAMA', 'Nelli Marliana');

//echo NAMA;

//echo "<br>";

//const UMUR = 20;
//echo UMUR;

//class Coba {
//    const NAMA = 'Nelli';
//}

//echo Coba::NAMA;

//echo __LINE__;

//function Coba() {}
//    return __FUNCTION__;
//}

//echo Coba();

class Coba {
    public $kelas = __CLASS__;
}

$obj = new Coba;
echo $obj->kelas;
