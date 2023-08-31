<?php require_once 'header.php'; ?>
            <!-- Header Area End Here -->
            <!-- Begin Li's Breadcrumb Area -->
            <div class="breadcrumb-area">
                <div class="container">
                    <div class="breadcrumb-content">
                      
                    </div>
                </div>
            </div>
            <!-- Li's Breadcrumb Area End Here -->
            <!--Shopping Cart Area Strat-->
            <div class="Shopping-cart-area pt-60 pb-60">
                <div class="container">
                    <div class="row">
                        <div class="col-12">

                            <?php if (@$_GET['durum']=="eklendi") { ?>
                             <h3> echo "ürününüz sepete eklendi </h3>
                       <?php     }  ?>
                            <form action="#">
                                <div class="table-content table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th class="li-product-remove"></th>
                                                <th class="li-product-thumbnail">resim</th>
                                                <th class="cart-product-name">başlık</th>
                                                <th class="li-product-price">ücret</th>
                                                <th class="li-product-quantity">adet</th>
                                                <th class="li-product-subtotal">toplam fiyat</th>
                                            </tr>
                                        </thead>
                                        <tbody>



                                            <?php 
                                            foreach (@$_COOKIE['sepet'] as $key => $value) {
                                                
       
                    $urunler=$baglan->prepare("SELECT * FROM urunler where urun_id=:urun_id order by urun_sira ASC");
                    $urunler->execute(array(
                      'urun_id'=>$key                    

                    ));
                $urunlercek=$urunler -> fetch(PDO :: FETCH_ASSOC);



                                            ?>
                                            <tr>
                                                <td class="li-product-remove"><a href="#"><i class="fa fa-times"></i></a></td>
                                                <td class="li-product-thumbnail"><a href="#"><img style="width:200px;" src="adminpanel/resimler/urunler/<?php echo $urunlercek['urun_resim'] ?>" alt="Li's Product Image"></a></td>
                                                <td class="li-product-name"><a href="#"><?php echo $urunlercek['urun_baslik'] ?></a></td>
                                                <td class="li-product-price"><span class="amount"><?php echo $urunlercek['urun_fiyat'] ?></span></td>
                                                <td class="quantity">
                                                    <label>adet</label>
                                                    <div class="cart-plus-minus">
                                                        <input value="<?php echo $value ?>" class="cart-plus-minus-box" value="1" type="text">
                                                        <div class="dec qtybutton"><i class="fa fa-angle-down"></i></div>
                                                        <div class="inc qtybutton"><i class="fa fa-angle-up"></i></div>
                                                    </div>
                                                </td>
                                                <td class="product-subtotal"><span class="amount"><?php echo $value* $urunlercek['urun_fiyat'] ?></span></td>
                                                                                 </tbody>
                                    </table>
                                </div>
                            <?php } ?>
                                <div class="row">
                                    <div class="col-12">
                                        <div class="coupon-all">
                                            <div class="coupon">
                                                <input id="coupon_code" class="input-text" name="kupon kodu" value="" placeholder="Coupon code" type="text">
                                                <input class="button" name="apply_coupon" value="Kuponu uygula" type="submit">
                                            </div>
                                            <div class="coupon2">
                                                <input class="button" name="update_cart" value="Onayla" type="submit">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-5 ml-auto">
                                        <div class="cart-page-total">
                                            <h2>Toplam fiyat</h2>
                                            <ul>
                                                <li>Toplam fiyat <span></span></li>
                                                <li>Kdv<span></span></li>
                                            </ul>
                                            <a href="#">Genel toplam</a>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
          <?php require_once 'footer.php'; ?>