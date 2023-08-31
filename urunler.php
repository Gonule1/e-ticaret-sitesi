<?php require_once 'header.php';
require_once 'adminpanel/islem/baglan.php';
 ?>
            <!-- Header Area End Here -->
            <!-- Begin Li's Breadcrumb Area -->
           
            <!-- Li's Breadcrumb Area End Here -->
            <!-- Begin Li's Content Wraper Area -->
            <div class="content-wraper pt-60 pb-60">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-9 order-1 order-lg-2">
                       
                            <!-- Li's Banner Area End Here -->
                            <!-- shop-top-bar start -->
                            <div class="shop-top-bar mt-30">
                                <div class="shop-bar-inner">
                               
                                    <div class="toolbar-amount">
                                        <span>Gösteriliyor 1 to 9 </span>
                                    </div>
                                </div>
                                <!-- product-select-box start -->
                                <div class="product-select-box">
                                    <div class="product-short">
                                        <p>Sırala:</p>
                                        <select class="nice-select">
                                            
                                            <option value="sales">İsime göre(A - Z)</option>
                                            <option value="sales">İsime göre (Z - A)</option>
                                            <option value="rating">Düşük fiyat </option>
                                            <option value="date">Yüksek fiyat</option>

                                        </select>
                                    </div>
                                </div>
                                <!-- product-select-box end -->
                            </div>


                             <?php 
                    $urunler=$baglan->prepare("SELECT * FROM urunler where kategori_id=:kategori_id and urun_durum=:urun_durum order by urun_sira ASC");
                    $urunler->execute(array(
                      'kategori_id'=>@$_GET['kategori_id'],
                      'urun_durum'=>1

                    ));
                   while($urunlercek=$urunler -> fetch(PDO :: FETCH_ASSOC)) { ?>
                
                            <!-- shop-top-bar end -->
                            <!-- shop-products-wrapper start -->
                            <div class="shop-products-wrapper">
                                <div class="tab-content">
                                    <div id="grid-view" class="tab-pane fade" role="tabpanel">
                                        <div class="product-area shop-product-area">
                                            <div class="row">
                                               
                                                <div class="col-lg-4 col-md-4 col-sm-6 mt-40">
                                                    <!-- single-product-wrap start -->
                                                    <div class="single-product-wrap">
                                                        <div class="product-image">
                                                            <a href="urun-detay-<?=seolink($kategoricek['urun_baslik']).'-'.$kategoricek['urun_id'] ?>">
                                                                <img src="adminpanel/resimler/urunler/<?php echo $urunlercek['urun_resim'] ?>" alt="Li's Product Image">
                                                            </a>
                                                            <span class="sticker">Yeni</span>
                                                        </div>
                                                        <div class="product_desc">
                                                            <div class="product_desc_info">
                                                               
                                                                <h4><a class="product_name" href="urun-detay-<?=seolink($kategoricek['urun_baslik']).'-'.$kategoricek['urun_id'] ?>"> <?php echo $urunlercek['urun_baslik'] ?></a></h4>
                                                                <div class="price-box">
                                                                    <span class="new-price"><?php echo $urunlercek['urun_fiyat'] ?></span>
                                                                </div>
                                                            </div>
                                                            <div class="add-actions">
                                                                <ul class="add-actions-link">
                                                                    <li class="add-cart active"><a href="urun-detay-<?=seolink($kategoricek['urun_baslik']).'-'.$kategoricek['urun_id'] ?>">DETAYA GİT</a></li>
                                                                   
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                <?php } ?>
                                                    <!-- single-product-wrap end -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div id="list-view" class="tab-pane fade product-list-view active show" role="tabpanel">
                                        <div class="row">
                                            <div class="col">
                                                <div class="row product-layout-list">
                                                   
                                              
                                   
                            <!-- shop-products-wrapper end -->
                        </div>
                       
                           
                              
                                
                              
                    </div>
                </div>
            </div>
            </div>

            </div>
            </div>
            <!-- Content Wraper Area End Here -->
        <?php require_once 'footer.php'; ?>