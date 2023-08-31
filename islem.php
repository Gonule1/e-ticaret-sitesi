<?php 
require_once 'adminpanel/islem/baglan.php'; 

if (isset($_POST['login'])) {

	$kadi= htmlspecialchars($_POST['kadi']); 
	$sifre=htmlspecialchars($_POST['sifre']);
	$sifreguclu=md5($sifre);


$kullanicisor=$baglan->prepare("SELECT * from kullanici where kullanici_adi=:kullanici_adi and kullanici_sifre=:kullanici_sifre and kullanici_yetki=:kullanici_yetki");

$kullanicisor->execute(array(
'kullanici_adi' => $kadi,
'kullanici_sifre' => $sifreguclu,
'kullanici_yetki'=> 1
) );
$var=$kullanicisor->rowCount();
if ($var > 0) {
 $_SESSION['normalgiris']=$kadi;
 Header("Location: index?durum=hosgeldi");

}
else{
	Header("Location: giris?durum=hata");

}


}
if (isset($_POST['register'])) {


$kadi=htmlspecialchars($_POST['kadi']);
$sifre=htmlspecialchars($_POST['sifre']);
$sifreiki=htmlspecialchars($_POST['sifretekrar']);
$email=htmlspecialchars($_POST['email']);
$adsoyad=htmlspecialchars($_POST['adsoyad']);	

$kullanicisor=$baglan->prepare("SELECT * from kullanici where kullanici_adi=:kullanici_adi and kullanici_yetki=:kullanici_yetki");
$kullanicisor->execute(array(
'kullanici_adi' => $kadi,
'kullanici_yetki'=>1
));
$var=$kullanicisor->rowCount();


if ($var> 0) {
	Header("Location:giris?durum=kullanicivar");
} else{
	
	if ($sifre== $sifreiki) {
		if (strlen($sifre)>=8) {
			
	$kullanicikaydet = $baglan-> prepare("INSERT into kullanici SET

kullanici_adi =:kullanici_adi,
kullanici_sifre =:kullanici_sifre,
kullanici_adsoyad =:kullanici_adsoyad,
kullanici_yetki =:kullanici_yetki,
kullanici_mail=:kullanici_mail

	");
$insert=$kullanicikaydet->execute(array(

'kullanici_adi'=>$kadi,
'kullanici_sifre'=>$sifre,
'kullanici_adsoyad'=>$adsoyad,
'kullanici_yetki'=>1,
'kullanici_mail'=>$email


));
if ($insert) {

	header("Location:giris.php?durum=basarili");
}
else{
header("Location:giris.php?durum=basarisiz");
}
	}	
		else{
            Header("Location:giris?durum=sifreeksik");
		}
	}
	
	else{
         Header("Location:giris?durum=sifrehata");
	}

}

}





?>