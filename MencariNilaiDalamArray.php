<?php

$name = ['Nimah','Magfiroh'];
function cari($array, $cari):bool {
    if(in_array($cari,$array)) {
        echo "TRUE".'</br>';
        return TRUE;
    }else {
        echo "FALSE".'</br>';

    return false;
    }
    }

    cari ($name, 'Nimah');
    cari ($name, 'Anik');
// lakukan pencarian
// jika ditemukan, return true
// jika tidak, return false
