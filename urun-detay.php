<?php
require_once 'header.php';



                          
                    $urunler=$baglan->prepare("SELECT * FROM urunler where urun_id=:urun_id order by urun_sira ASC");
                    $urunler->execute(array(
                      'urun_id'=>@$_GET['urun_id'],
                    

                    ));
                $urunlercek=$urunler -> fetch(PDO :: FETCH_ASSOC)  


 ?>
            <!-- Header Area End Here -->
            <!-- Begin Li's Breadcrumb Area -->
            <div class="breadcrumb-area">
                <div class="container">
                   
                </div>
            </div>
            <!-- Li's Breadcrumb Area End Here -->
            <!-- content-wraper start -->
            <div class="content-wraper">
                <div class="container">
                    <div class="row single-product-area">
                        <div class="col-lg-5 col-md-6">
                           <!-- Product Details Left -->
                            <div class="product-details-left">
                                <div class="product-details-images slider-navigation-1">

                                      <?php 
                    $cokluresim=$baglan->prepare("SELECT * FROM cokluresim where urun_id=:urun_id order by id ASC");
                    $cokluresim->execute(array (

                      'urun_id'=>@$_GET['urun_id']

                    ));
                   while($cokluresimcek=$cokluresim -> fetch(PDO :: FETCH_ASSOC)) { ?>
                
                                    <div class="lg-image">
                                        <img style="height: 350px !important;" src="adminpanel/resimler/cokluresim/<?php echo $urunlercek['resim'] ?>" alt="product image">
                                    </div>
                                    
                                </div>
                                <div class="product-details-thumbs slider-thumbs-1">
                                    <div class="sm-image"><img style="height: 70px;" src="adminpanel/resimler/cokluresim/<?php echo $urunlercek['resim'] ?>" alt="product image thumb"></div>
                                    
                                </div>
                            </div>
                            <!--// Product Details Left -->
                        </div>
                    <?php } ?>

                        <div class="col-lg-7 col-md-6">
                            <div class="product-details-view-content sp-normal-content pt-60">
                                <div class="product-info">
                                    <h2><?php echo @$urunlercek['urun_baslik'] ?></h2>
                                   
                                    <div class="price-box pt-20">
                                        <span class="new-price new-price-2"><?php echo @$urunlercek['urun_fiyat'] ?></span>
                                    </div>
                                    <div class="product-desc">
                                        <p>
                                            <span><?php echo @$urunlercek['urun_aciklama'] ?>
                                            </span>
                                        </p>
                                    </div>
                                    <div class="single-add-to-cart">
                                        <form action="islem" method="post" class="cart-quantity">
                                            <div class="quantity">
                                                <label>Adet</label>
                                                <div class="cart-plus-minus">
                                                    <input class="cart-plus-minus-box" value="1" type="text">
                                                    <div class="dec qtybutton"><i class="fa fa-angle-down"></i></div>
                                                    <div class="inc qtybutton"><i class="fa fa-angle-up"></i></div>
                                                </div>
                                            </div>
                                            <input type="hidden" name="urun_id" value="<?php echo $urunlercek['urun_id'] ?>">
                                            <button name="sepeteekle" class="add-to-cart" type="submit">Sepete Ekle</button>
                                        </form>
                                    </div>
                                    <div class="product-additional-info">
                                        <div class="product-social-sharing">
                                            <ul>
                                                <li class="facebook"><a href="#"><i class="fa fa-facebook"></i>Facebook</a></li>
                                                <li class="twitter"><a href="#"><i class="fa fa-twitter"></i>Twitter</a></li>
                                                <li class="google-plus"><a href="#"><i class="fa fa-google-plus"></i>Google +</a></li>
                                                <li class="instagram"><a href="#"><i class="fa fa-instagram"></i>Instagram</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> 
                    </div>
                </div>
            </div>
            <!-- content-wraper end -->
            <!-- Begin Product Area -->
            <div class="product-area pt-40">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="li-product-tab">
                                <ul class="nav li-product-menu">
                                   <li><a class="active" data-toggle="tab" href="#description"><span>Açıklama</span></a></li>
                                   
                                   <li><a data-toggle="tab" href="#reviews"><span>Yorumlar</span></a></li>
                                </ul>               
                            </div>
                            <!-- Begin Li's Tab Menu Content Area -->
                        </div>
                    </div>
                    <div class="tab-content">
                        <div id="description" class="tab-pane active show" role="tabpanel">
                            <div class="product-description">
                                <span><?php echo @$urunlercek['urun_aciklama'] ?></span>
                            </div>
                        </div>
                      
                                    <!-- Quick View | Modal Area End Here -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Product Area End Here -->
            <!-- Begin Li's Laptop Product Area -->
            <section class="product-area li-laptop-product pt-30 pb-50">
                <div class="container">
                    <div class="row">
                        <!-- Begin Li's Section Area -->
                        <div class="col-lg-12">
                            <div class="li-section-title">
                                <h2>
                                    <span>5 Benzer ürünler:</span>
                                </h2>
                            </div>


                             <?php 
                    $urunler=$baglan->prepare("SELECT * FROM urunler where kategori_id=:kategori_id and urun_durum=:urun_durum order by urun_sira ASC");
                    $urunler->execute(array(
                      'kategori_id'=>@$_GET['kategori_id'],
                      'urun_durum'=>1

                    ));
                   while($urunlercek=$urunler -> fetch(PDO :: FETCH_ASSOC)) { ?>
                
                            <div class="row">
                                <div class="product-active owl-carousel">
                                    <div class="col-lg-12">
                                        <!-- single-product-wrap start -->
                                        <div class="single-product-wrap">
                                            <div class="product-image">
                                                <a href="urun-detay-<?=seolink($kategoricek['urun_baslik']).'-'.$kategoricek['urun_id'] ?>">
                                                    <img src="adminpanel/resimler/urunler/<?php echo $urunlercek['urun_resim'] ?>" alt="Li's Product Image">
                                                </a>
                                                <span class="sticker">Benzer</span>
                                            </div>
                                            <div class="product_desc">
                                                <div class="product_desc_info">
                                                   
                                                    <h4><a class="product_name" href="urun-detay-<?=seolink($kategoricek['urun_baslik']).'-'.$kategoricek['urun_id'] ?>"><?php echo $urunlercek['urun_baslik'] ?></a></h4>
                                                    <div class="price-box">
                                                        <span class="new-price"><?php echo $urunlercek['urun_fiyat'] ?></span>
                                                    </div>
                                                </div>
                                                <div class="add-actions">
                                                    <ul class="add-actions-link">
                                                        <li class="add-cart active"><a href="#">Detaya GİT</a></li>
                                                        <li><a href="#" title="quick view" class="quick-view-btn" data-toggle="modal" data-target="#exampleModalCenter"><i class="fa fa-eye"></i></a></li>
                                                        <li><a class="links-details" href="wishlist.html"><i class="fa fa-heart-o"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- single-product-wrap end -->
                                    </div>
                                   
                                 <?php } ?>
                                </div>
                            </div>
                        </div>
                        <!-- Li's Section Area End Here -->
                    </div>
                </div>
            </section>
           <?php require_once 'footer.php';?>