<?php 

function seolink($s)
{
    $tr= array("ş", "Ş", "ı", "ü", "Ü", "ö", "Ö", "ç", "Ç", "ş", "Ş", "ı", "ğ", "Ğ", "İ", "ö", "Ö", "Ç", "ç", "ü", "Ü");
    $eng = array("s", "S", "i", "u", "U", "o", "O", "c", "C", "s", "S", "i", "g", "G", "I", "o", "O", "C", "c", "u", "U");
    $s = str_replace($tr, $eng, $s);
    $s = preg_replace("@[^a-z0-9\-_şıüğçİŞĞÜÇ]+@i", "-", $s);
    $s = strtolower($s);
    $s = preg_replace('/&.+?;/', '', $s);
    $s = preg_replace('|-+|', '-', $s);
    $s = preg_replace('/#/', '', $s);
    $s = str_replace('.', '', $s);
    $s = trim($s, '-');
    return $s;
}















?>