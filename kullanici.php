<?php require_once 'header.php'; 
require_once 'adminpanel/islem/baglan.php';

?>


            <div class="page-section mb-60">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 col-md-12 col-xs-12 col-lg-6 mb-30">
                            <!-- Login Form s-->
                            <form action="adminpanel/islem/islem.php" method="post" >
                                <div class="login-form">
                                    <h4 class="login-title"> Kullanıcı Bilgileri <?php if (@$_GET['yuklenme']=="basarisiz") { ?>
                                        <i style="color:red"> hata bulundu
  
                                     <?php } ?> </i></h4>
                                    <input type="hidden"  name="kulaniciid" value="
                                    <?php echo @$kullanicicek['kullanici_id'] ?>">
                                    <div class="row">
                                        <div class="col-md-12 col-12 mb-20">
                                            <label>Kullanıcı ad soyad</label>
                                            <input value="<?php echo @$kullanicicek['kullanici_adsoyad'] ?>" name="kullanici_adsoyad" required="" class="mb-0" type="text" placeholder="Ad soyad giriniz">
                                        </div>
                                        <div class="col-12 mb-20">
                                            <label>email</label>
                                            <input <?php echo @$kullanicicek['kullanici_mail'] ?>name="kullanici_mail" required="" class="mb-0" type="email" placeholder="Mail adresi giriniz">
                                        </div>
                                        <div class="col-12 mb-20">
                                            <label>adres</label>
                                            <input <?php echo @$kullanicicek['kullanici_adres'] ?> name="kullanici_adres" required="" class="mb-0" type="text" placeholder="Adres giriniz">
                                        </div>
                                        <div class="col-12 mb-20">
                                            <label>il </label>
                                            <input <?php echo @$kullanicicek['kullanici_il'] ?> name="kullanici_il" required="" class="mb-0" type="text" placeholder="İl giriniz">
                                        </div>
                                        <div class="col-12 mb-20">
                                            <label>ilçe</label>
                                            <input <?php echo @$kullanicicek['kullanici_ilce'] ?> name="kullanici_ilce" required="" class="mb-0" type="text" placeholder="İlçe giriniz">
                                        </div>
                                        <div class="col-12 mb-20">
                                            <label>telefon</label>
                                            <input <?php echo @$kullanicicek['kullanici_tel'] ?> name="kullanici_tel" required="" class="mb-0" type="text" placeholder="Telefon numarası giriniz">
                                        </div>




                                       
                                        <div class="col-md-12">
                                            <button name="kullaniciduzenle" class="register-button mt-0">Kaydet</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="col-sm-12 col-md-12 col-lg-6 col-xs-12">
                            <form action="islem.php" method="post">
                                <div class="login-form">
                                    <h4 class="login-title">Kayıt
                                        <?php if (@$_GET['durum']=="kullanicivar") { ?>
                                            <i style="color:red;"> Bu kullanıcı sistemde kayıtlı</i>
                                      <?php  } elseif (@$_GET['durum']=="sifrehata") { ?>
                                         <i style="color:red;"> Şifreler uyuşmuyor lütfen iki şifreyi de aynı girin </i>
                                     <?php } elseif (@$_GET['durum']=="sifreeksik") { ?>
                                        <i style="color:red;"> Lütfen minimum 8 karakter olacak şekilde şifrenizi girin</i>
                                 <?php } elseif (@$_GET['durum']=="basarisiz") { ?>                                
                                    <i style="color:red;"> İşlem başarısız </i>
                               <?php  } ?>




                                    </h4>
                                    <div class="row">
                                        <div class="col-md-6 col-12 mb-20">
                                            <label>Kullanıcı adı</label>
                                            <input name="kadi" required="" class="mb-0" type="text" placeholder="Kullanıcı adınızı giriniz">
                                        </div>
                                        <div class="col-md-6 col-12 mb-20">
                                            <label>Ad soyad</label>
                                            <input name="adsoyad" required="" class="mb-0" type="text" placeholder=" Ad soyad giriniz">
                                        </div>
                                        <div class="col-md-12 mb-20">
                                            <label>Mail adresi*</label>
                                            <input name="email" required="" class="mb-0" type="email" placeholder="Mail adresinizi giriniz">
                                        </div>
                                        <div class="col-md-6 mb-20">
                                            <label>Şifre</label>
                                            <input name="sifre" required="" class="mb-0" type="password" placeholder="Şifrenizi giriniz">
                                        </div>
                                        <div class="col-md-6 mb-20">
                                            <label>Tekrar şifre</label>
                                            <input name="sifretekrar" required="" class="mb-0" type="password" placeholder="Şifrenizi tekrar giriniz">
                                        </div>
                                        <div class="col-12">
                                            <button name="register" class="register-button mt-0">Kayıt ol</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <?php require_once 'footer.php'; ?>