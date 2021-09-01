<?php
include 'baglan.php';
include '../production/fonksiyon.php';

if (isset($_POST['admingiris'])) {

  $kullanici_mail= $_POST['kullanici_mail'];
  $kullanici_password= $_POST['kullanici_password'];

  $ayarsor=$db->prepare("SELECT * from  kullanici where kullanici_mail=:mail and kullanici_password=:password and kullanici_yetki=:yetki");
  
  $ayarsor->execute(array(
    'mail'=>$kullanici_mail,
    'password'=>$kullanici_password,
    'yetki'=> 1
  ));

echo $say=$ayarsor->rowCount();

if($say==1){

  $_SESSION['kullanici_mail']=$kullanici_mail;

  header("Location:../production/index.php");
  exit;

}
else{
  header("Location:../production/login.php?durum=no");
  exit;
}
}
 

if (isset($_POST['genelayarkaydet'])) {
  // tablo güncelleme kodları
$ayarkaydet=$db->prepare("UPDATE ayar SET
ayar_title=:ayar_title,
ayar_description=:ayar_description,
ayar_keywords=:ayar_keywords,
ayar_author=:ayar_author
WHERE ayar_id=0
");
$update=$ayarkaydet->execute(array(
  'ayar_title'=>$_POST['ayar_title'],
  'ayar_description'=>$_POST['ayar_description'],
  'ayar_keywords'=>$_POST['ayar_keywords'],
  'ayar_author'=>$_POST['ayar_author']
));

if ($update) {
  header("Location:../production/genelayar.php?durum=ok");
  // code...

}
else{
  header("Location:../production/genelayar.php?durum=no");
}
}


if (isset($_POST['iletişimayarkaydet'])) {
  // tablo güncelleme kodları
$ayarkaydet=$db->prepare("UPDATE ayar SET
ayar_tel=:ayar_tel,
ayar_gsm=:ayar_gsm,
ayar_fax=:ayar_fax,
ayar_mail=:ayar_mail,
ayar_ilce=:ayar_ilce,
ayar_il=:ayar_il,
ayar_adres=:ayar_adres,
ayar_mesai=:ayar_mesai
WHERE ayar_id=0
");
$update=$ayarkaydet->execute(array(
  'ayar_tel'=>$_POST['ayar_tel'],
  'ayar_gsm'=>$_POST['ayar_gsm'],
  'ayar_fax'=>$_POST['ayar_fax'],
  'ayar_mail'=>$_POST['ayar_mail'],
  'ayar_ilce'=>$_POST['ayar_ilce'],
  'ayar_il'=>$_POST['ayar_il'],
  'ayar_adres'=>$_POST['ayar_adres'],
  'ayar_mesai'=>$_POST['ayar_mesai']
));

if ($update) {
  header("Location:../production/iletisimayar.php?durum=ok");
  // code...

}
else{
  header("Location:../production/iletisimayar.php?durum=no");
}
}


if (isset($_POST['apiayarkaydet'])) {
  // tablo güncelleme kodları
$ayarkaydet=$db->prepare("UPDATE ayar SET
ayar_analytics=:ayar_analytics,
ayar_maps=:ayar_maps,
ayar_zopim=:ayar_zopim
WHERE ayar_id=0
");
$update=$ayarkaydet->execute(array(
  'ayar_analytics'=>$_POST['ayar_analytics'],
  'ayar_maps'=>$_POST['ayar_maps'],
  'ayar_zopim'=>$_POST['ayar_zopim']
));

if ($update) {
  header("Location:../production/apiayar.php?durum=ok");
  // code...

}
else{
  header("Location:../production/apiayar.php?durum=no");
}
}

if (isset($_POST['sosyalayarkaydet'])) {
  // tablo güncelleme kodları
$ayarkaydet=$db->prepare("UPDATE ayar SET
ayar_facebook=:ayar_facebook,
ayar_twitter=:ayar_twitter,
ayar_google=:ayar_google,
ayar_youtube=:ayar_youtube
WHERE ayar_id=0
");
$update=$ayarkaydet->execute(array(
  'ayar_facebook'=>$_POST['ayar_facebook'],
  'ayar_twitter'=>$_POST['ayar_twitter'],
  'ayar_google'=>$_POST['ayar_google'],
  'ayar_youtube'=>$_POST['ayar_youtube']
));

if ($update) {
  header("Location:../production/sosyalayar.php?durum=ok");
  // code...

}
else{
  header("Location:../production/sosyalayar.php?durum=no");
}
}

if (isset($_POST['mailayarkaydet'])) {
  // tablo güncelleme kodları
$ayarkaydet=$db->prepare("UPDATE ayar SET
ayar_smtphost=:ayar_smtphost,
ayar_smtpuser=:ayar_smtpuser,
ayar_smtppassword=:ayar_smtppassword,
ayar_smtpport=:ayar_smtpport
WHERE ayar_id=0
");
$update=$ayarkaydet->execute(array(
  'ayar_smtphost'=>$_POST['ayar_smtphost'],
  'ayar_smtpuser'=>$_POST['ayar_smtpuser'],
  'ayar_smtppassword'=>$_POST['ayar_smtppassword'],
  'ayar_smtpport'=>$_POST['ayar_smtpport']
));

if ($update) {
  header("Location:../production/mailayar.php?durum=ok");
  // code...

}
else{
  header("Location:../production/mailayar.php?durum=no");
}
}

if (isset($_POST['hakkimizdaayarkaydet'])) {
  // tablo güncelleme kodları
$ayarkaydet=$db->prepare("UPDATE hakkımızda SET
hakkimizda_baslik=:hakkimizda_baslik,
hakkimizda_icerik=:hakkimizda_icerik,
hakkimizda_video=:hakkimizda_video,
hakkimizda_vizyon=:hakkimizda_vizyon,
hakkimizda_misyon=:hakkimizda_misyon
WHERE hakkimizda_id=0
");
$update=$ayarkaydet->execute(array(
  'hakkimizda_baslik'=>$_POST['hakkimizda_baslik'],
  'hakkimizda_icerik'=>$_POST['hakkimizda_icerik'],
  'hakkimizda_video'=>$_POST['hakkimizda_video'],
  'hakkimizda_vizyon'=>$_POST['hakkimizda_vizyon'],
  'hakkimizda_misyon'=>$_POST['hakkimizda_misyon']
));

if ($update) {
  header("Location:../production/hakkimizda.php?durum=ok");
  // code...

}
else{
  header("Location:../production/hakkimizda.php?durum=no");
}
}


if(isset($_POST['kullaniciduzenle']))
{
  $kullanici_id=$_POST['kullanici_id'];
  
  $kullanicikaydet=$db->prepare("UPDATE kullanici SET
  kullanici_tc=:kullanici_tc,
  kullanici_adsoyad=:kullanici_adsoyad,
  kullanici_durum=:kullanici_durum
  WHERE kullanici_id=$kullanici_id");

  $update=$kullanicikaydet->execute(array(
    'kullanici_tc'=> $_POST['kullanici_tc'],
    'kullanici_adsoyad'=> $_POST['kullanici_adsoyad'],
    'kullanici_durum'=> $_POST['kullanici_durum']

  ));
  if ($update) 
  {
    header("Location:../production/kullaniciduzenle.php?kullanici_id=$kullanici_id&durum=ok");
    // code...
  
  }
  else
  {
    header("Location:../production/kullaniciduzenle.php?kullanici_id=$kullanici_id&durum=no");
  }
  
}


if(isset($_POST['menuduzenle']))
{
  $menu_id=$_POST['menu_id'];
  
  $menukaydet=$db->prepare("UPDATE menu SET
  menu_ad=:menu_ad,
  menu_detay=:menu_detay,
  menu_durum=:menu_durum,
  menu_url=:menu_url,
  menu_sira=:menu_sira
  WHERE menu_id=$menu_id");

  $update=$menukaydet->execute(array(
    'menu_ad'=> $_POST['menu_ad'],
    'menu_detay'=> $_POST['menu_detay'],
    'menu_durum'=> $_POST['menu_durum'],
    'menu_url'=> $_POST['menu_url'],
    'menu_sira'=> $_POST['menu_sira']

  ));
  if ($update) 
  {
    header("Location:../production/menuduzenle.php?menu_id=$menu_id&durum=ok");
    // code...
  
  }
  else
  {
    header("Location:../production/menuduzenle.php?menu_id=$menu_id&durum=no");
  }
  
}


if(isset($_GET['kullanicisil'])){

  if($_GET['kullanicisil']=='ok'){
    $sil=$db->prepare("DELETE from kullanici where kullanici_id=:id");
  
    $kontrol=$sil->execute(array(
      'id'=>$_GET['kullanici_id']
    ));
  
    if($kontrol){
      header("Location:../production/kullanicilar.php?sil=ok");
    }
    else{
      header("Location:../production/kullanicilar.php?sil=no");
    }
  }
  
}



 ?>
