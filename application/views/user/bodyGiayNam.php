<section class="main-menu">
        <div class="container">
            <div class="col-md-9 tab-content">
                <div class="list-product">
                    <div role="tabpanel" class="tab-pane fade in active" id="vo">
                        <ul class="list-img">
                            <?php 
                            for($i = 0; $i < count($productArray); $i++) {
                                echo "<div class='col-md-3'>"
                                        . "<div class='row'>"
                                            . "<li>"
                                                . "<a href='chitiet.html'>"
                                                    . "<div class='img-content'><img src='". base_url()."user/".$productArray[$i]["hinhanh"]."' alt=''>"
                                                        . "<p>".$productArray[$i]["ten_sp"]."</p>"
                                                    . "</div>"
                                                    . "<div class='info-cost'>"
                                                        . "<p>Đen</p><span>".number_format($productArray[$i]["gia_sp"] , 0, ',', '.')."</span><span class='vndong'>đ</span>"
                                                    . "</div>"
                                                    . "<main class='cd-main container margin-top-xxl' id='main-btn'>"
                                                        . "<div class='text-component text-center' id='text-cart'>"
                                                            . "<div class='btn-cart'>"
                                                                . "<p class='flex flex-wrap flex-center flex-gap-xxs'>"
                                                                    . "<a href='#0' class='cd-add-to-cart js-cd-add-to-cart' data-price='25.99'>Add To Cart</a>"
                                                                . "</p>"
                                                            . "</div>"
                                                        . "</div>"
                                                    . "</main>"
                                                . "</a>"
                                            . "</li>"
                                        . "</div>"
                                    . "</div>";
                            }
                        ?>
                        </ul>
                        <ul class="list-img">
                            <div class="col-md-3">
                                <div class="row">
                                    <li>
                                        <a href="file:///C:/Users/thien/OneDrive/Desktop/mvc_online_js/chitiet.html">
                                            <div class="img-content"><img src="<?php echo base_url();?>user/img/giayNam/mwc (6).jpg" alt="">
                                                <p>Dép nữ MWC NUDE- 3323</p>
                                            </div>
                                            <div class="info-cost">
                                                <p>Đen</p><span>99.000</span><span class="vndong">đ</span>
                                            </div>
                                            <main class="cd-main container margin-top-xxl" id="main-btn">
                                                <div class="text-component text-center" id="text-cart">
                                                    <div class="btn-cart">
                                                        <p class="flex flex-wrap flex-center flex-gap-xxs">
                                                            <a href="#0" class="cd-add-to-cart js-cd-add-to-cart" data-price="25.99">Add To Cart</a>
                                                        </p>
                                                    </div>
                                                </div>
                                            </main>
                                        </a>
                                    </li>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="row">
                                    <li>
                                        <a href="file:///C:/Users/thien/OneDrive/Desktop/mvc_online_js/chitiet.html">
                                            <div class="img-content">
                                                <img src="<?php echo base_url();?>user/img/giayNam/mwc (8).jpg" alt="">
                                                <p>Dép nữ MWC NUDE- 3323</p>
                                            </div>
                                            <div class="info-cost">
                                                <p>Kem</p><span>99.000</span><span class="vndong">đ</span>
                                            </div>
                                            <main class="cd-main container margin-top-xxl" id="main-btn">
                                                <div class="text-component text-center" id="text-cart">
                                                    <div class="btn-cart">
                                                        <p class="flex flex-wrap flex-center flex-gap-xxs">
                                                            <a href="#0" class="cd-add-to-cart js-cd-add-to-cart" data-price="25.99">Add To Cart</a>
                                                        </p>
                                                    </div>
                                                </div>
                                            </main>
                                        </a>
                                    </li>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="row">
                                    <li>
                                        <a href="#">
                                            <div class="img-content"><img src="<?php echo base_url();?>user/img/giayNam/mwc (9).jpg" alt="">
                                                <p>Dép nữ MWC NUDE- 3323</p>
                                            </div>
                                            <div class="info-cost">
                                                <p>Xanh</p><span>99.000</span><span class="vndong">đ</span>
                                            </div>
                                            <main class="cd-main container margin-top-xxl" id="main-btn">
                                                <div class="text-component text-center" id="text-cart">
                                                    <div class="btn-cart">
                                                        <p class="flex flex-wrap flex-center flex-gap-xxs">
                                                            <a href="#0" class="cd-add-to-cart js-cd-add-to-cart" data-price="25.99">Add To Cart</a>
                                                        </p>
                                                    </div>
                                                </div>
                                            </main>
                                        </a>
                                    </li>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="row">
                                    <li>
                                        <a href="#">
                                            <div class="img-content"><img src="<?php echo base_url();?>user/img/AnhGiayNam/giay4.jpg" alt="">
                                                <p>Dép nữ MWC NUDE- 3323</p>
                                            </div>
                                            <div class="info-cost">
                                                <p>Đỏ</p><span>99.000</span><span class="vndong">đ</span>
                                            </div>
                                            <main class="cd-main container margin-top-xxl" id="main-btn">
                                                <div class="text-component text-center" id="text-cart">
                                                    <div class="btn-cart">
                                                        <p class="flex flex-wrap flex-center flex-gap-xxs">
                                                            <a href="#0" class="cd-add-to-cart js-cd-add-to-cart" data-price="25.99">Add To Cart</a>
                                                        </p>
                                                    </div>
                                                </div>
                                            </main>
                                        </a>
                                    </li>
                                </div>
                            </div>
                        </ul>
                        <ul class="list-img">
                            <div class="col-md-3">
                                <div class="row">
                                    <li>
                                        <a href="file:///C:/Users/thien/OneDrive/Desktop/mvc_online_js/chitiet.html">
                                            <div class="img-content"><img src="<?php echo base_url();?>user/img/giayNam/giay1.jpg" alt="">
                                                <p>Dép nữ MWC NUDE- 3323</p>
                                            </div>
                                            <div class="info-cost">
                                                <p>Đen</p><span>99.000</span><span class="vndong">đ</span>
                                            </div>
                                            <main class="cd-main container margin-top-xxl" id="main-btn">
                                                <div class="text-component text-center" id="text-cart">
                                                    <div class="btn-cart">
                                                        <p class="flex flex-wrap flex-center flex-gap-xxs">
                                                            <a href="#0" class="cd-add-to-cart js-cd-add-to-cart" data-price="25.99">Add To Cart</a>
                                                        </p>
                                                    </div>
                                                </div>
                                            </main>
                                        </a>
                                    </li>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="row">
                                    <li>
                                        <a href="file:///C:/Users/thien/OneDrive/Desktop/mvc_online_js/chitiet.html">
                                            <div class="img-content">
                                                <img src="<?php echo base_url();?>user/img/giayNam/giay2.jpg" alt="">
                                                <p>Dép nữ MWC NUDE- 3323</p>
                                            </div>
                                            <div class="info-cost">
                                                <p>Kem</p><span>99.000</span><span class="vndong">đ</span>
                                            </div>
                                            <main class="cd-main container margin-top-xxl" id="main-btn">
                                                <div class="text-component text-center" id="text-cart">
                                                    <div class="btn-cart">
                                                        <p class="flex flex-wrap flex-center flex-gap-xxs">
                                                            <a href="#0" class="cd-add-to-cart js-cd-add-to-cart" data-price="25.99">Add To Cart</a>
                                                        </p>
                                                    </div>
                                                </div>
                                            </main>
                                        </a>
                                    </li>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="row">
                                    <li>
                                        <a href="#">
                                            <div class="img-content"><img src="<?php echo base_url();?>user/img/giayNam/giay3.jpg" alt="">
                                                <p>Dép nữ MWC NUDE- 3323</p>
                                            </div>
                                            <div class="info-cost">
                                                <p>Xanh</p><span>99.000</span><span class="vndong">đ</span>
                                            </div>
                                            <main class="cd-main container margin-top-xxl" id="main-btn">
                                                <div class="text-component text-center" id="text-cart">
                                                    <div class="btn-cart">
                                                        <p class="flex flex-wrap flex-center flex-gap-xxs">
                                                            <a href="#0" class="cd-add-to-cart js-cd-add-to-cart" data-price="25.99">Add To Cart</a>
                                                        </p>
                                                    </div>
                                                </div>
                                            </main>
                                        </a>
                                    </li>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="row">
                                    <li>
                                        <a href="#">
                                            <div class="img-content"><img src="<?php echo base_url();?>user/img/AnhGiayNam/giay4.jpg" alt="">
                                                <p>Dép nữ MWC NUDE- 3323</p>
                                            </div>
                                            <div class="info-cost">
                                                <p>Đỏ</p><span>99.000</span><span class="vndong">đ</span>
                                            </div>
                                            <main class="cd-main container margin-top-xxl" id="main-btn">
                                                <div class="text-component text-center" id="text-cart">
                                                    <div class="btn-cart">
                                                        <p class="flex flex-wrap flex-center flex-gap-xxs">
                                                            <a href="#0" class="cd-add-to-cart js-cd-add-to-cart" data-price="25.99">Add To Cart</a>
                                                        </p>
                                                    </div>
                                                </div>
                                            </main>
                                        </a>
                                    </li>
                                </div>
                            </div>
                        </ul>
                    </div>
                    <!-- <div role="tabpanel" class="tab-pane fade" id="s9501">
                        <ul class="list-img">
                            <div class="col-md-3">
                                <div class="row">
                                    <li>
                                        <a href="#">
                                            <div class="img-content"><img src="<?php echo base_url();?>user/img/mwc (6).jpg" alt="">
                                                <p>Dép nữ MWC NUDE- 3323</p>
                                            </div>
                                            <div class="info-cost">
                                                <p>Đen</p><span>99.000</span><span class="vndong">đ</span>
                                            </div>
                                        </a>
                                    </li>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="row">
                                    <li>
                                        <a href="#">
                                            <div class="img-content"><img src="<?php echo base_url();?>user/img/mwc (7).jpg" alt="">
                                                <p>Dép nữ MWC NUDE- 3323</p>
                                            </div>
                                            <div class="info-cost">
                                                <p>Bạc</p><span>250.000</span><span class="vndong">đ</span>
                                            </div>
                                        </a>
                                    </li>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="row">
                                    <li>
                                        <a href="#">
                                            <div class="img-content"><img src="<?php echo base_url();?>user/img/mwc (8).jpg" alt="">
                                                <p>Dép nữ MWC NUDE- 3323</p>
                                            </div>
                                            <div class="info-cost">
                                                <p>Đen</p><span>250.000</span><span class="vndong">đ</span>
                                            </div>
                                        </a>
                                    </li>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="row">
                                    <li>
                                        <a href="#">
                                            <div class="img-content"><img src="<?php echo base_url();?>user/img/mwc (9).jpg" alt="">
                                                <p>Dép nữ MWC NUDE- 3323</p>
                                            </div>
                                            <div class="info-cost">
                                                <p>Đen</p><span>195.000</span><span class="vndong">đ</span>
                                            </div>
                                        </a>
                                    </li>
                                </div>
                            </div>
                        </ul>
                    </div> -->
                    <div class="col-md-3">

                    </div>
                    <div class="col-md-3">

                    </div>


                    <!-- <ul class="list-img">
                        <li>
                            <a href="#">
                                <div class="img-content"><img src="<?php echo base_url();?>user/img/mwc (11).jpg" alt="">
                                    <p>Dép nữ MWC NUDE- 3323</p>
                                </div>
                                <div class="info-cost">
                                    <p>Đen</p><span>195.000</span><span class="vndong">đ</span>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <div class="img-content"><img src="<?php echo base_url();?>user/img/mwc (12).jpg" alt="">
                                    <p>Dép nữ MWC NUDE- 3323</p>
                                </div>
                                <div class="info-cost">
                                    <p>Đen</p><span>99.000</span><span class="vndong">đ</span>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <div class="img-content"><img src="<?php echo base_url();?>user/img/mwc (13).jpg" alt="">
                                    <p>Dép nữ MWC NUDE- 3323</p>
                                </div>
                                <div class="info-cost">
                                    <p>Đen</p><span>99.000</span><span class="vndong">đ</span>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <div class="img-content"><img src="<?php echo base_url();?>user/img/mwc (14).jpg" alt="">
                                    <p>Dép nữ MWC NUDE- 3323</p>
                                </div>
                                <div class="info-cost">
                                    <p>Đen</p><span>99.000</span><span class="vndong">đ</span>
                                </div>
                            </a>
                        </li>
                    </ul>
                    <ul class="list-img">
                        <li>
                            <a href="#">
                                <div class="img-content"><img src="<?php echo base_url();?>user/img/mwc(16).jpg" alt="">
                                    <p>Dép nữ MWC NUDE- 3323</p>
                                </div>
                                <div class="info-cost">
                                    <p>Đen</p><span>99.000</span><span class="vndong">đ</span>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <div class="img-content"><img src="<?php echo base_url();?>user/img/mwc (17).jpg" alt="">
                                    <p>Dép nữ MWC NUDE- 3323</p>
                                </div>
                                <div class="info-cost">
                                    <p>Đen</p><span>99.000</span><span class="vndong">đ</span>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <div class="img-content"><img src="<?php echo base_url();?>user/img/mwc (18).jpg" alt="">
                                    <p>Dép nữ MWC NUDE- 3323</p>
                                </div>
                                <div class="info-cost">
                                    <p>Đen</p><span>99.000</span><span class="vndong">đ</span>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <div class="img-content"><img src="<?php echo base_url();?>user/img/mwc (19).jpg" alt="">
                                    <p>Dép nữ MWC NUDE- 3323</p>
                                </div>
                                <div class="info-cost">
                                    <p>Đen</p><span>99.000</span><span class="vndong">đ</span>
                                </div>
                            </a>
                        </li>
                    </ul>
                    <ul class="list-img">
                        <li>
                            <a href="#">
                                <div class="img-content"><img src="<?php echo base_url();?>user/img/mwc(20).jpg" alt="">
                                    <p>Dép nữ MWC NUDE- 3323</p>
                                </div>
                                <div class="info-cost">
                                    <p>Đen</p><span>99.000</span><span class="vndong">đ</span>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <div class="img-content"><img src="<?php echo base_url();?>user/img/mwc (21).jpg" alt="">
                                    <p>Dép nữ MWC NUDE- 3323</p>
                                </div>
                                <div class="info-cost">
                                    <p>Đen</p><span>99.000</span><span class="vndong">đ</span>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <div class="img-content"><img src="<?php echo base_url();?>user/img/mwc (22).jpg" alt="">
                                    <p>Dép nữ MWC NUDE- 3323</p>
                                </div>
                                <div class="info-cost">
                                    <p>Đen</p><span>99.000</span><span class="vndong">đ</span>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <div class="img-content"><img src="<?php echo base_url();?>user/img/mwc (24).jpg" alt="">
                                    <p>Dép nữ MWC NUDE- 3323</p>
                                </div>
                                <div class="info-cost">
                                    <p>Đen</p><span>99.000</span><span class="vndong">đ</span>
                                </div>
                            </a>
                        </li>
                    </ul> -->
                </div>
            </div>
            <div class="col-md-3" id="reponsive-label">
                <div class="main-menu-right">
                    <div class="label-first">
                        <label for="#">Lọc sản phẩm</label>
                        <i class="fas fa-angle-down" id="icon-menu-right"></i>
                    </div>
                    <div class="list-right-main-menu" id="list-info-menu-rigth">
                        <ul class="ul-list-menu-right">
                            <div class="label-ls-sub">
                                <label for="#" class="label-second">Thương hiệu</label>
                                <div class="label-ls-sun-sub">
                                    <i class="fas fa-angle-down icon-sub-next" id="icon-sub-menu-right"></i>
                                </div>
                            </div>
                            <ul id="list-info-sub-menu-rigth" class="list-info-rigth" role="tablist">
                                <li role="presentation" class="active"><label for="#" class="label-sub-menu"><input
                                            type="checkbox" name="" id=""><a href="#vo" aria-controls="vo" role="tab"
                                            data-toggle="tab">vớ</a></label>
                                </li>
                                <li role="presentation"><label for="#" class="label-sub-menu"><input type="checkbox"
                                            name="" id=""><a href="#s9501" aria-controls="s9501" role="tab"
                                            data-toggle="tab">9501</a></label></li>
                                <li role="presentation"><label for="#" class="label-sub-menu"><input type="checkbox"
                                            name="" id=""><a href="#s9503" aria-controls="s9503" role="tab"
                                            data-toggle="tab">9503</a></label></li>
                                <li role="presentation"><label for="#" class="label-sub-menu"><input type="checkbox"
                                            name="" id=""><a href="#day" aria-controls="day" role="tab"
                                            data-toggle="tab">Dây</a></label>
                                </li>
                                <li role="presentation"><label for="#" class="label-sub-menu"><input type="checkbox"
                                            name="" id=""><a href="#depnam" aria-controls="depnam" role="tab"
                                            data-toggle="tab">Dép
                                            nam</a></label></li>
                                <li role="presentation"><label for="#" class="label-sub-menu"><input type="checkbox"
                                            name="" id=""><a href="#depnu" aria-controls="depnu" role="tab"
                                            data-toggle="tab">Dép
                                            nữ</a></label></li>
                                <li role="presentation"><label for="#" class="label-sub-menu"><input type="checkbox"
                                            name="" id=""><a href="#giaybootnam" aria-controls="giaybootnam" role="tab"
                                            data-toggle="tab">Giày Boot
                                            Nam</a></label></li>
                                <li role="presentation"><label for="#" class="label-sub-menu"><input type="checkbox"
                                            name="" id=""><a href="#giaybootnu" aria-controls="giaybootnu" role="tab"
                                            data-toggle="tab">Giày Boot
                                            Nữ</a></label></li>
                                <li role="presentation"><label for="#" class="label-sub-menu"><input type="checkbox"
                                            name="" id=""><a href="#giaybupbe" aria-controls="giaybupbe" role="tab"
                                            data-toggle="tab">Giày búp
                                            bê</a></label></li>
                                <li role="presentation"><label for="#" class="label-sub-menu"><input type="checkbox"
                                            name="" id=""><a href="#giaycaogot" aria-controls="giaycaogot" role="tab"
                                            data-toggle="tab">Giày Cao
                                            Gót</a></label></li>
                                <li role="presentation"><label for="#" class="label-sub-menu"><input type="checkbox"
                                            name="" id=""><a href="#giaymoinam" aria-controls="giaymoinam" role="tab"
                                            data-toggle="tab">Giày Mọi
                                            Nam</a></label></li>
                                <li role="presentation"><label for="#" class="label-sub-menu"><input type="checkbox"
                                            name="" id=""><a href="#giaymoinu" aria-controls="giaymoinu" role="tab"
                                            data-toggle="tab">Giày Mọi
                                            Nữ</a></label></li>
                                <li role="presentation"><label for="#" class="label-sub-menu"><input type="checkbox"
                                            name="" id=""><a href="#giayoxford" aria-controls="giayoxford" role="tab"
                                            data-toggle="tab">Giày
                                            Oxford</a></label></li>
                                <li role="presentation"><label for="#" class="label-sub-menu"><input type="checkbox"
                                            name="" id=""><a href="#giaysandalnam" aria-controls="giaysandalnam"
                                            role="tab" data-toggle="tab">Giày
                                            Sandal Nam</a></label></li>
                                <li role="presentation"><label for="#" class="label-sub-menu"><input type="checkbox"
                                            name="" id=""><a href="#giaysandalnu" aria-controls="giaysandalnu"
                                            role="tab" data-toggle="tab">Giày
                                            Sandal Nữ</a></label></li>
                                <li role="presentation"><label for="#" class="label-sub-menu"><input type="checkbox"
                                            name="" id=""><a href="#giaysliponnam" aria-controls="giaysliponnam"
                                            role="tab" data-toggle="tab">Giày
                                            Slipon Nam</a></label></li>
                                <li role="presentation"><label for="#" class="label-sub-menu"><input type="checkbox"
                                            name="" id=""><a href="#giaysliponnu" aria-controls="giaysliponnu"
                                            role="tab" data-toggle="tab">Giày
                                            Slipon Nữ</a></label></li>
                                <li role="presentation"><label for="#" class="label-sub-menu"><input type="checkbox"
                                            name="" id=""><a href="#giaythanhlich" aria-controls="giaythanhlich"
                                            role="tab" data-toggle="tab">Giày
                                            Thanh Lịch</a></label></li>
                                <li role="presentation"><label for="#" class="label-sub-menu"><input type="checkbox"
                                            name="" id=""><a href="#giaythethaonam" aria-controls="giaythethaonam"
                                            role="tab" data-toggle="tab">Giày Thể
                                            Thao Nam</a></label></li>
                                <li role="presentation"><label for="#" class="label-sub-menu"><input type="checkbox"
                                            name="" id=""><a href="#giaythethaonu" aria-controls="giaythethaonu"
                                            role="tab" data-toggle="tab">Giày Thể
                                            Thao Nữ</a></label></li>
                                <li role="presentation"><label for="#" class="label-sub-menu"><input type="checkbox"
                                            name="" id=""><a href="#khac" aria-controls="khac" role="tab"
                                            data-toggle="tab">Khác</a></label></li>
                                <li role="presentation"><label for="#" class="label-sub-menu"><input type="checkbox"
                                            name="" id=""><a href="#aobra" aria-controls="aobra" role="tab"
                                            data-toggle="tab">Aó
                                            Bra</a></label></li>
                                <li role="presentation"><label for="#" class="label-sub-menu"><input type="checkbox"
                                            name="" id=""><a href="#aocroptop" aria-controls="aocroptop" role="tab"
                                            data-toggle="tab">Aó
                                            Croptop</a></label></li>
                                <li role="presentation"><label for="#" class="label-sub-menu"><input type="checkbox"
                                            name="" id=""><a href="#aokhoaccap" aria-controls="aokhoaccap" role="tab"
                                            data-toggle="tab">Aó Khoác
                                            Cặp</a></label></li>
                                <li role="presentation"><label for="#" class="label-sub-menu"><input type="checkbox"
                                            name="" id=""><a href="#aohoodie" aria-controls="aohoodie" role="tab"
                                            data-toggle="tab">Aó
                                            Hoodie</a></label></li>
                                <li role="presentation"><label for="#" class="label-sub-menu"><input type="checkbox"
                                            name="" id=""><a href="#aothuntayngan" aria-controls="aothuntayngan"
                                            role="tab" data-toggle="tab">Aó Thun
                                            Tay Ngắn</a></label></li>
                                <li role="presentation"><label for="#" class="label-sub-menu"><input type="checkbox"
                                            name="" id=""><a href="#balo" aria-controls="balo" role="tab"
                                            data-toggle="tab">Balo</a></label></li>
                                <li role="presentation"><label for="#" class="label-sub-menu"><input type="checkbox"
                                            name="" id=""><a href="#quandai" aria-controls="quandai" role="tab"
                                            data-toggle="tab">Quần
                                            Dài</a></label></li>
                                <li role="presentation"><label for="#" class="label-sub-menu"><input type="checkbox"
                                            name="" id=""><a href="#quanjogger" aria-controls="quanjogger" role="tab"
                                            data-toggle="tab">Quần
                                            Jogger</a></label></li>
                                <li role="presentation"><label for="#" class="label-sub-menu"><input type="checkbox"
                                            name="" id=""><a href="#quanlung" aria-controls="quanlung" role="tab"
                                            data-toggle="tab">Quần
                                            Lửng</a></label></li>
                                <li role="presentation"><label for="#" class="label-sub-menu"><input type="checkbox"
                                            name="" id=""><a href="#quanshort" aria-controls="quanshort" role="tab"
                                            data-toggle="tab">Quần
                                            Short</a></label></li>
                                <li role="presentation"><label for="#" class="label-sub-menu"><input type="checkbox"
                                            name="" id=""><a href="#setbo" aria-controls="setbo" role="tab"
                                            data-toggle="tab">Set
                                            Bộ</a></label></li>
                                <li role="presentation"><label for="#" class="label-sub-menu"><input type="checkbox"
                                            name="" id=""><a href="#tuideocheo" aria-controls="tuideocheo" role="tab"
                                            data-toggle="tab">Túi Đeo
                                            Chéo</a></label></li>
                            </ul>
                        </ul>
                        <ul class="ul-list-menu-right">
                            <div class="label-ls-sub">
                                <label for="#" class="label-second">Màu sắc</label>
                                <i class="fas fa-angle-down icon-sub-next" id="icon-sub-menu-right"></i>
                            </div>
                            <ul id="list-info-sub-menu-rigth" class="list-info-rigth">
                                <li><label for="#" class="label-sub-sub"><input type="checkbox" name=""
                                            id="">trắng</label></li>
                                <li><label for="#" class="label-sub-sub"><input type="checkbox" name=""
                                            id="">đen</label></li>
                                <li><label for="#" class="label-sub-sub"><input type="checkbox" name=""
                                            id="">vàng</label></li>
                                <li><label for="#" class="label-sub-sub"><input type="checkbox" name=""
                                            id="">cam</label></li>
                                <li><label for="#" class="label-sub-sub"><input type="checkbox" name="" id="">đỏ</label>
                                </li>
                                <li><label for="#" class="label-sub-sub"><input type="checkbox" name="" id="">xanh
                                        lá</label></li>
                                <li><label for="#" class="label-sub-sub"><input type="checkbox" name="" id="">xanh
                                        dương</label></li>
                                <li><label for="#" class="label-sub-sub"><input type="checkbox" name=""
                                            id="">tím</label></li>
                                <li><label for="#" class="label-sub-sub"><input type="checkbox" name=""
                                            id="">xám</label></li>
                            </ul>
                        </ul>
                        <ul class="ul-list-menu-right" id="ul-ls-right">
                            <div class="label-ls-sub">
                                <label for="#" class="label-second">Giá</label>
                                <i class="fas fa-angle-down icon-sub-next" id="icon-sub-menu-right"></i>
                            </div>
                            <ul id="list-info-sub-menu-rigth" class="list-info-rigth">
                                <li><label for="#" class="label-sub-sub ls-label-sub"><input type="checkbox" name=""
                                            id="">Dưới
                                        100.000<span class="vndong-2">đ</span></label></li>
                                <li><label for="#" class="label-sub-sub"><input type="checkbox" name=""
                                            id="">100.000<span class="vndong-2">đ</span><span
                                            class="sup">-</span>300.000<span class="vndong-2">đ</span></label></li>
                                <li><label for="#" class="label-sub-sub"><input type="checkbox" name=""
                                            id="">300.000<span class="vndong-2">đ</span><span
                                            class="sup">-</span>500.000<span class="vndong-2">đ</span></label></li>
                                <li><label for="#" class="label-sub-sub"><input type="checkbox" name=""
                                            id="">500.000<span class="vndong">đ</span><span
                                            class="sup">-</span>1.000.000<span class="vndong-2">đ</span></label>
                                </li>
                                <li><label for="#" class="label-sub-sub ls-label-sub"><input type="checkbox" name=""
                                            id="">Trên
                                        1.000.000<span class="vndong-2">đ</span></label>
                                </li>
                            </ul>
                        </ul>
                    </div>
                </div>
                <div class="ls-product-right">
                    <div class="name-ls-product">
                        <h1>Danh mục sản phẩm</h1>
                    </div>
                    <div class="list-product">
                        <ul class="product">
                            <li>
                                <img src="<?php echo base_url();?>user/img/widget-link.png" alt="">
                                <a href="#">giày nữ</a>
                                <div class="icon-down">
                                    <i class="fas fa-angle-down" id="icon-menu-sup-right"></i>
                                </div>
                                <div class="ls-item-product">
                                    <ul class="list-product" id="ls-prod">
                                        <li>
                                            <a href="#"><img src="<?php echo base_url();?>user/img/widget-link.png" alt="">giày thể thao</a>
                                        </li>
                                        <li>
                                            <a href="#"><img src="<?php echo base_url();?>user/img/widget-link.png" alt="">giày cao gót</a>
                                        </li>
                                        <li>
                                            <a href="#"><img src="<?php echo base_url();?>user/img/widget-link.png" alt="">sandal nữ</a>
                                        </li>
                                        <li>
                                            <a href="#"><img src="<?php echo base_url();?>user/img/widget-link.png" alt="">giày lười</a>
                                        </li>
                                        <li>
                                            <a href="#"><img src="<?php echo base_url();?>user/img/widget-link.png" alt="">giày búp bê & mọi</a>
                                        </li>
                                        <li>
                                            <a href="#"><img src="<?php echo base_url();?>user/img/widget-link.png" alt="">dép sụt</a>
                                        </li>
                                        <li>
                                            <a href="#"><img src="<?php echo base_url();?>user/img/widget-link.png" alt="">dép lười</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li>
                                <img src="<?php echo base_url();?>user/img/widget-link.png" alt="">
                                <a href="#">giày nam</a>
                                <div class="icon-down">
                                    <i class="fas fa-angle-down" id="icon-menu-sup-right"></i>
                                </div>
                                <div class="ls-item-product">
                                    <ul class="list-product" id="ls-prod">
                                        <li>
                                            <a href="#"><img src="<?php echo base_url();?>user/img/widget-link.png" alt="">giày thể thao nam</a>
                                        </li>
                                        <li>
                                            <a href="#"><img src="<?php echo base_url();?>user/img/widget-link.png" alt="">mọi & slip on</a>
                                        </li>
                                        <li>
                                            <a href="#"><img src="<?php echo base_url();?>user/img/widget-link.png" alt="">sandal & dép</a>
                                        </li>
                                        <li>
                                            <a href="#"><img src="<?php echo base_url();?>user/img/widget-link.png" alt="">boot</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li>
                                <img src="<?php echo base_url();?>user/img/widget-link.png" alt="">
                                <a href="#">sale 79k</a>
                            </li>
                            <li>
                                <img src="<?php echo base_url();?>user/img/widget-link.png" alt="">
                                <a href="#">sale 150k</a>
                            </li>
                            <li>
                                <img src="<?php echo base_url();?>user/img/widget-link.png" alt="">
                                <a href="#">sale 110k</a>
                            </li>
                            <li>
                                <img src="<?php echo base_url();?>user/img/widget-link.png" alt="">
                                <a href="#">phụ kiện</a>
                                <div class="icon-down">
                                    <i class="fas fa-angle-down" id="icon-menu-sup-right"></i>
                                </div>
                                <div class="ls-item-product">
                                    <ul class="list-product" id="ls-prod">
                                        <li>
                                            <a href="#"><img src="<?php echo base_url();?>user/img/widget-link.png" alt="">vớ</a>
                                        </li>
                                        <li>
                                            <a href="#"><img src="<?php echo base_url();?>user/img/widget-link.png" alt="">chai vệ sinh giày</a>
                                        </li>
                                        <li>
                                            <a href="#"><img src="<?php echo base_url();?>user/img/widget-link.png" alt="">dây giày</a>
                                        </li>
                                        <li>
                                            <a href="#"><img src="<?php echo base_url();?>user/img/widget-link.png" alt="">đế lót</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li>
                                <img src="<?php echo base_url();?>user/img/widget-link.png" alt="">
                                <a href="#">balo-túi</a>
                                <div class="icon-down">
                                    <i class="fas fa-angle-down" id="icon-menu-sup-right"></i>
                                </div>
                                <div class="ls-item-product">
                                    <ul class="list-product" id="ls-prod">
                                        <li>
                                            <a href="#"><img src="<?php echo base_url();?>user/img/widget-link.png" alt="">túi đeo chéo</a>
                                        </li>
                                        <li>
                                            <a href="#"><img src="<?php echo base_url();?>user/img/widget-link.png" alt="">balo laptop,du lịch thời trang
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li>
                                <img src="<?php echo base_url();?>user/img/widget-link.png" alt="">
                                <a href="#">đồ tập gym,yoga</a>
                                <div class="icon-down">
                                    <i class="fas fa-angle-down" id="icon-menu-sup-right"></i>
                                </div>
                                <div class="ls-item-product">
                                    <ul class="list-product" id="ls-prod">
                                        <li>
                                            <a href="#"><img src="<?php echo base_url();?>user/img/widget-link.png" alt="">áo bra</a>
                                        </li>
                                        <li>
                                            <a href="#"><img src="<?php echo base_url();?>user/img/widget-link.png" alt="">áo croptop</a>
                                        </li>
                                        <li>
                                            <a href="#"><img src="<?php echo base_url();?>user/img/widget-link.png" alt="">áo tanktop</a>
                                        </li>
                                        <li>
                                            <a href="#"><img src="<?php echo base_url();?>user/img/widget-link.png" alt="">áo thun tay ngắn</a>
                                        </li>
                                        <li>
                                            <a href="#"><img src="<?php echo base_url();?>user/img/widget-link.png" alt="">quần lửng</a>
                                        </li>
                                        <li>
                                            <a href="#"><img src="<?php echo base_url();?>user/img/widget-link.png" alt="">quần dài</a>
                                        </li>
                                        <li>
                                            <a href="#"><img src="<?php echo base_url();?>user/img/widget-link.png" alt="">quần short</a>
                                        </li>
                                        <li>
                                            <a href="#"><img src="<?php echo base_url();?>user/img/widget-link.png" alt="">quần jogger</a>
                                        </li>
                                        <li>
                                            <a href="#"><img src="<?php echo base_url();?>user/img/widget-link.png" alt="">set bộ</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li>
                                <img src="<?php echo base_url();?>user/img/widget-link.png" alt="">
                                <a href="#">áo khoác</a>
                                <div class="icon-down">
                                    <i class="fas fa-angle-down" id="icon-menu-sup-right"></i>
                                </div>
                                <div class="ls-item-product">
                                    <ul class="list-product" id="ls-prod">
                                        <li>
                                            <a href="#"><img src="<?php echo base_url();?>user/img/widget-link.png" alt="">áo khoác nữ</a>
                                        </li>
                                        <li>
                                            <a href="#"><img src="<?php echo base_url();?>user/img/widget-link.png" alt="">áo khoác cặp</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="block-in-reponsive">
        <div class="col-md-9">
            <div class="main-menu-right">
                <div class="label-first">
                    <label for="#">Lọc sản phẩm</label>
                    <i class="fas fa-angle-down" id="icon-menu-right"></i>
                </div>
                <div class="list-right-main-menu" id="list-info-menu-rigth">
                    <ul class="ul-list-menu-right">
                        <div class="label-ls-sub">
                            <label for="#" class="label-second">Thương hiệu</label>
                            <div class="label-ls-sun-sub">
                                <i class="fas fa-angle-down icon-sub-next" id="icon-sub-menu-right"></i>
                            </div>
                        </div>
                        <ul id="list-info-sub-menu-rigth" class="list-info-rigth" role="tablist">
                            <li role="presentation" class="active"><label for="#" class="label-sub-menu"><input
                                    type="checkbox" name="" id=""><a href="#vo" aria-controls="vo" role="tab"
                                    data-toggle="tab">vớ</a></label>
                            </li>
                            <li role="presentation"><label for="#" class="label-sub-menu"><input type="checkbox"
                                    name="" id=""><a href="#s9501" aria-controls="s9501" role="tab"
                                    data-toggle="tab">9501</a></label></li>
                            <li role="presentation"><label for="#" class="label-sub-menu"><input type="checkbox"
                                    name="" id=""><a href="#s9503" aria-controls="s9503" role="tab"
                                    data-toggle="tab">9503</a></label></li>
                            <li role="presentation"><label for="#" class="label-sub-menu"><input type="checkbox"
                                    name="" id=""><a href="#day" aria-controls="day" role="tab"
                                    data-toggle="tab">Dây</a></label>
                            </li>
                            <li role="presentation"><label for="#" class="label-sub-menu"><input type="checkbox"
                                    name="" id=""><a href="#depnam" aria-controls="depnam" role="tab"
                                    data-toggle="tab">Dép
                                    nam</a></label></li>
                            <li role="presentation"><label for="#" class="label-sub-menu"><input type="checkbox"
                                    name="" id=""><a href="#depnu" aria-controls="depnu" role="tab"
                                    data-toggle="tab">Dép
                                    nữ</a></label></li>
                            <li role="presentation"><label for="#" class="label-sub-menu"><input type="checkbox"
                                    name="" id=""><a href="#giaybootnam" aria-controls="giaybootnam" role="tab"
                                    data-toggle="tab">Giày Boot
                                    Nam</a></label></li>
                            <li role="presentation"><label for="#" class="label-sub-menu"><input type="checkbox"
                                    name="" id=""><a href="#giaybootnu" aria-controls="giaybootnu" role="tab"
                                    data-toggle="tab">Giày Boot
                                    Nữ</a></label></li>
                            <li role="presentation"><label for="#" class="label-sub-menu"><input type="checkbox"
                                    name="" id=""><a href="#giaybupbe" aria-controls="giaybupbe" role="tab"
                                    data-toggle="tab">Giày búp
                                    bê</a></label></li>
                            <li role="presentation"><label for="#" class="label-sub-menu"><input type="checkbox"
                                    name="" id=""><a href="#giaycaogot" aria-controls="giaycaogot" role="tab"
                                    data-toggle="tab">Giày Cao
                                    Gót</a></label></li>
                            <li role="presentation"><label for="#" class="label-sub-menu"><input type="checkbox"
                                    name="" id=""><a href="#giaymoinam" aria-controls="giaymoinam" role="tab"
                                    data-toggle="tab">Giày Mọi
                                    Nam</a></label></li>
                            <li role="presentation"><label for="#" class="label-sub-menu"><input type="checkbox"
                                    name="" id=""><a href="#giaymoinu" aria-controls="giaymoinu" role="tab"
                                    data-toggle="tab">Giày Mọi
                                    Nữ</a></label></li>
                            <li role="presentation"><label for="#" class="label-sub-menu"><input type="checkbox"
                                    name="" id=""><a href="#giayoxford" aria-controls="giayoxford" role="tab"
                                    data-toggle="tab">Giày
                                    Oxford</a></label></li>
                            <li role="presentation"><label for="#" class="label-sub-menu"><input type="checkbox"
                                    name="" id=""><a href="#giaysandalnam" aria-controls="giaysandalnam"
                                    role="tab" data-toggle="tab">Giày
                                    Sandal Nam</a></label></li>
                            <li role="presentation"><label for="#" class="label-sub-menu"><input type="checkbox"
                                    name="" id=""><a href="#giaysandalnu" aria-controls="giaysandalnu"
                                    role="tab" data-toggle="tab">Giày
                                    Sandal Nữ</a></label></li>
                            <li role="presentation"><label for="#" class="label-sub-menu"><input type="checkbox"
                                    name="" id=""><a href="#giaysliponnam" aria-controls="giaysliponnam"
                                    role="tab" data-toggle="tab">Giày
                                    Slipon Nam</a></label></li>
                            <li role="presentation"><label for="#" class="label-sub-menu"><input type="checkbox"
                                    name="" id=""><a href="#giaysliponnu" aria-controls="giaysliponnu"
                                    role="tab" data-toggle="tab">Giày
                                    Slipon Nữ</a></label></li>
                            <li role="presentation"><label for="#" class="label-sub-menu"><input type="checkbox"
                                    name="" id=""><a href="#giaythanhlich" aria-controls="giaythanhlich"
                                    role="tab" data-toggle="tab">Giày
                                    Thanh Lịch</a></label></li>
                            <li role="presentation"><label for="#" class="label-sub-menu"><input type="checkbox"
                                    name="" id=""><a href="#giaythethaonam" aria-controls="giaythethaonam"
                                    role="tab" data-toggle="tab">Giày Thể
                                    Thao Nam</a></label></li>
                            <li role="presentation"><label for="#" class="label-sub-menu"><input type="checkbox"
                                    name="" id=""><a href="#giaythethaonu" aria-controls="giaythethaonu"
                                    role="tab" data-toggle="tab">Giày Thể
                                    Thao Nữ</a></label></li>
                            <li role="presentation"><label for="#" class="label-sub-menu"><input type="checkbox"
                                    name="" id=""><a href="#khac" aria-controls="khac" role="tab"
                                    data-toggle="tab">Khác</a></label></li>
                            <li role="presentation"><label for="#" class="label-sub-menu"><input type="checkbox"
                                    name="" id=""><a href="#aobra" aria-controls="aobra" role="tab"
                                    data-toggle="tab">Aó
                                    Bra</a></label></li>
                            <li role="presentation"><label for="#" class="label-sub-menu"><input type="checkbox"
                                    name="" id=""><a href="#aocroptop" aria-controls="aocroptop" role="tab"
                                    data-toggle="tab">Aó
                                    Croptop</a></label></li>
                            <li role="presentation"><label for="#" class="label-sub-menu"><input type="checkbox"
                                    name="" id=""><a href="#aokhoaccap" aria-controls="aokhoaccap" role="tab"
                                    data-toggle="tab">Aó Khoác
                                    Cặp</a></label></li>
                            <li role="presentation"><label for="#" class="label-sub-menu"><input type="checkbox"
                                    name="" id=""><a href="#aohoodie" aria-controls="aohoodie" role="tab"
                                    data-toggle="tab">Aó
                                    Hoodie</a></label></li>
                            <li role="presentation"><label for="#" class="label-sub-menu"><input type="checkbox"
                                    name="" id=""><a href="#aothuntayngan" aria-controls="aothuntayngan"
                                    role="tab" data-toggle="tab">Aó Thun
                                    Tay Ngắn</a></label></li>
                            <li role="presentation"><label for="#" class="label-sub-menu"><input type="checkbox"
                                    name="" id=""><a href="#balo" aria-controls="balo" role="tab"
                                    data-toggle="tab">Balo</a></label></li>
                            <li role="presentation"><label for="#" class="label-sub-menu"><input type="checkbox"
                                    name="" id=""><a href="#quandai" aria-controls="quandai" role="tab"
                                    data-toggle="tab">Quần
                                    Dài</a></label></li>
                            <li role="presentation"><label for="#" class="label-sub-menu"><input type="checkbox"
                                    name="" id=""><a href="#quanjogger" aria-controls="quanjogger" role="tab"
                                    data-toggle="tab">Quần
                                    Jogger</a></label></li>
                            <li role="presentation"><label for="#" class="label-sub-menu"><input type="checkbox"
                                    name="" id=""><a href="#quanlung" aria-controls="quanlung" role="tab"
                                    data-toggle="tab">Quần
                                    Lửng</a></label></li>
                            <li role="presentation"><label for="#" class="label-sub-menu"><input type="checkbox"
                                    name="" id=""><a href="#quanshort" aria-controls="quanshort" role="tab"
                                    data-toggle="tab">Quần
                                    Short</a></label></li>
                            <li role="presentation"><label for="#" class="label-sub-menu"><input type="checkbox"
                                    name="" id=""><a href="#setbo" aria-controls="setbo" role="tab"
                                    data-toggle="tab">Set
                                    Bộ</a></label></li>
                            <li role="presentation"><label for="#" class="label-sub-menu"><input type="checkbox"
                                    name="" id=""><a href="#tuideocheo" aria-controls="tuideocheo" role="tab"
                                    data-toggle="tab">Túi Đeo
                                    Chéo</a></label></li>
                        </ul>
                    </ul>
                    <ul class="ul-list-menu-right">
                        <div class="label-ls-sub">
                            <label for="#" class="label-second">Màu sắc</label>
                            <i class="fas fa-angle-down icon-sub-next" id="icon-sub-menu-right"></i>
                        </div>
                        <ul id="list-info-sub-menu-rigth" class="list-info-rigth">
                            <li><label for="#" class="label-sub-sub"><input type="checkbox" name=""
                                    id="">trắng</label></li>
                            <li><label for="#" class="label-sub-sub"><input type="checkbox" name=""
                                    id="">đen</label></li>
                            <li><label for="#" class="label-sub-sub"><input type="checkbox" name=""
                                    id="">vàng</label></li>
                            <li><label for="#" class="label-sub-sub"><input type="checkbox" name=""
                                    id="">cam</label></li>
                            <li><label for="#" class="label-sub-sub"><input type="checkbox" name="" id="">đỏ</label>
                            </li>
                            <li><label for="#" class="label-sub-sub"><input type="checkbox" name="" id="">xanh
                                lá</label></li>
                            <li><label for="#" class="label-sub-sub"><input type="checkbox" name="" id="">xanh
                                dương</label></li>
                            <li><label for="#" class="label-sub-sub"><input type="checkbox" name=""
                                    id="">tím</label></li>
                            <li><label for="#" class="label-sub-sub"><input type="checkbox" name=""
                                    id="">xám</label></li>
                        </ul>
                    </ul>
                    <ul class="ul-list-menu-right" id="ul-ls-right">
                        <div class="label-ls-sub">
                            <label for="#" class="label-second">Giá</label>
                            <i class="fas fa-angle-down icon-sub-next" id="icon-sub-menu-right"></i>
                        </div>
                        <ul id="list-info-sub-menu-rigth" class="list-info-rigth">
                            <li><label for="#" class="label-sub-sub ls-label-sub"><input type="checkbox" name=""
                                    id="">Dưới
                                100.000<span class="vndong-2">đ</span></label></li>
                            <li><label for="#" class="label-sub-sub"><input type="checkbox" name=""
                                    id="">100.000<span class="vndong-2">đ</span><span
                                    class="sup">-</span>300.000<span class="vndong-2">đ</span></label></li>
                            <li><label for="#" class="label-sub-sub"><input type="checkbox" name=""
                                    id="">300.000<span class="vndong-2">đ</span><span
                                    class="sup">-</span>500.000<span class="vndong-2">đ</span></label></li>
                            <li><label for="#" class="label-sub-sub"><input type="checkbox" name=""
                                    id="">500.000<span class="vndong">đ</span><span
                                    class="sup">-</span>1.000.000<span class="vndong-2">đ</span></label>
                            </li>
                            <li><label for="#" class="label-sub-sub ls-label-sub"><input type="checkbox" name=""
                                    id="">Trên
                                1.000.000<span class="vndong-2">đ</span></label>
                            </li>
                        </ul>
                    </ul>
                </div>
            </div>
            <div class="ls-product-right">
                <div class="name-ls-product">
                    <h1>Danh mục sản phẩm</h1>
                </div>
                <div class="list-product">
                    <ul class="product">
                        <li>
                            <img src="<?php echo base_url();?>user/img/widget-link.png" alt="">
                            <a href="#">giày nữ</a>
                            <div class="icon-down">
                                <i class="fas fa-angle-down" id="icon-menu-sup-right"></i>
                            </div>
                            <div class="ls-item-product">
                                <ul class="list-product" id="ls-prod">
                                    <li>
                                        <a href="#"><img src="<?php echo base_url();?>user/img/widget-link.png" alt="">giày thể thao</a>
                                    </li>
                                    <li>
                                        <a href="#"><img src="<?php echo base_url();?>user/img/widget-link.png" alt="">giày cao gót</a>
                                    </li>
                                    <li>
                                        <a href="#"><img src="<?php echo base_url();?>user/img/widget-link.png" alt="">sandal nữ</a>
                                    </li>
                                    <li>
                                        <a href="#"><img src="<?php echo base_url();?>user/img/widget-link.png" alt="">giày lười</a>
                                    </li>
                                    <li>
                                        <a href="#"><img src="<?php echo base_url();?>user/img/widget-link.png" alt="">giày búp bê & mọi</a>
                                    </li>
                                    <li>
                                        <a href="#"><img src="<?php echo base_url();?>user/img/widget-link.png" alt="">dép sụt</a>
                                    </li>
                                    <li>
                                        <a href="#"><img src="<?php echo base_url();?>user/img/widget-link.png" alt="">dép lười</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li>
                            <img src="<?php echo base_url();?>user/img/widget-link.png" alt="">
                            <a href="#">giày nam</a>
                            <div class="icon-down">
                                <i class="fas fa-angle-down" id="icon-menu-sup-right"></i>
                            </div>
                            <div class="ls-item-product">
                                <ul class="list-product" id="ls-prod">
                                    <li>
                                        <a href="#"><img src="<?php echo base_url();?>user/img/widget-link.png" alt="">giày thể thao nam</a>
                                    </li>
                                    <li>
                                        <a href="#"><img src="<?php echo base_url();?>user/img/widget-link.png" alt="">mọi & slip on</a>
                                    </li>
                                    <li>
                                        <a href="#"><img src="<?php echo base_url();?>user/img/widget-link.png" alt="">sandal & dép</a>
                                    </li>
                                    <li>
                                        <a href="#"><img src="<?php echo base_url();?>user/img/widget-link.png" alt="">boot</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li>
                            <img src="<?php echo base_url();?>user/img/widget-link.png" alt="">
                            <a href="#">sale 79k</a>
                        </li>
                        <li>
                            <img src="<?php echo base_url();?>user/img/widget-link.png" alt="">
                            <a href="#">sale 150k</a>
                        </li>
                        <li>
                            <img src="<?php echo base_url();?>user/img/widget-link.png" alt="">
                            <a href="#">sale 110k</a>
                        </li>
                        <li>
                            <img src="<?php echo base_url();?>user/img/widget-link.png" alt="">
                            <a href="#">phụ kiện</a>
                            <div class="icon-down">
                                <i class="fas fa-angle-down" id="icon-menu-sup-right"></i>
                            </div>
                            <div class="ls-item-product">
                                <ul class="list-product" id="ls-prod">
                                    <li>
                                        <a href="#"><img src="<?php echo base_url();?>user/img/widget-link.png" alt="">vớ</a>
                                    </li>
                                    <li>
                                        <a href="#"><img src="<?php echo base_url();?>user/img/widget-link.png" alt="">chai vệ sinh giày</a>
                                    </li>
                                    <li>
                                        <a href="#"><img src="<?php echo base_url();?>user/img/widget-link.png" alt="">dây giày</a>
                                    </li>
                                    <li>
                                        <a href="#"><img src="<?php echo base_url();?>user/img/widget-link.png" alt="">đế lót</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li>
                            <img src="<?php echo base_url();?>user/img/widget-link.png" alt="">
                            <a href="#">balo-túi</a>
                            <div class="icon-down">
                                <i class="fas fa-angle-down" id="icon-menu-sup-right"></i>
                            </div>
                            <div class="ls-item-product">
                                <ul class="list-product" id="ls-prod">
                                    <li>
                                        <a href="#"><img src="<?php echo base_url();?>user/img/widget-link.png" alt="">túi đeo chéo</a>
                                    </li>
                                    <li>
                                        <a href="#"><img src="<?php echo base_url();?>user/img/widget-link.png" alt="">balo laptop,du lịch thời trang
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li>
                            <img src="<?php echo base_url();?>user/img/widget-link.png" alt="">
                            <a href="#">đồ tập gym,yoga</a>
                            <div class="icon-down">
                                <i class="fas fa-angle-down" id="icon-menu-sup-right"></i>
                            </div>
                            <div class="ls-item-product">
                                <ul class="list-product" id="ls-prod">
                                    <li>
                                        <a href="#"><img src="<?php echo base_url();?>user/img/widget-link.png" alt="">áo bra</a>
                                    </li>
                                    <li>
                                        <a href="#"><img src="<?php echo base_url();?>user/img/widget-link.png" alt="">áo croptop</a>
                                    </li>
                                    <li>
                                        <a href="#"><img src="<?php echo base_url();?>user/img/widget-link.png" alt="">áo tanktop</a>
                                    </li>
                                    <li>
                                        <a href="#"><img src="<?php echo base_url();?>user/img/widget-link.png" alt="">áo thun tay ngắn</a>
                                    </li>
                                    <li>
                                        <a href="#"><img src="<?php echo base_url();?>user/img/widget-link.png" alt="">quần lửng</a>
                                    </li>
                                    <li>
                                        <a href="#"><img src="<?php echo base_url();?>user/img/widget-link.png" alt="">quần dài</a>
                                    </li>
                                    <li>
                                        <a href="#"><img src="<?php echo base_url();?>user/img/widget-link.png" alt="">quần short</a>
                                    </li>
                                    <li>
                                        <a href="#"><img src="<?php echo base_url();?>user/img/widget-link.png" alt="">quần jogger</a>
                                    </li>
                                    <li>
                                        <a href="#"><img src="<?php echo base_url();?>user/img/widget-link.png" alt="">set bộ</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li>
                            <img src="<?php echo base_url();?>user/img/widget-link.png" alt="">
                            <a href="#">áo khoác</a>
                            <div class="icon-down">
                                <i class="fas fa-angle-down" id="icon-menu-sup-right"></i>
                            </div>
                            <div class="ls-item-product">
                                <ul class="list-product" id="ls-prod">
                                    <li>
                                        <a href="#"><img src="<?php echo base_url();?>user/img/widget-link.png" alt="">áo khoác nữ</a>
                                    </li>
                                    <li>
                                        <a href="#"><img src="<?php echo base_url();?>user/img/widget-link.png" alt="">áo khoác cặp</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        </div>
    </section>
    <section class="page">
        <div class="container">
            <ul class="pagination">
                <li class="active"><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li class="page-item">
                    <a class="page-link" href="#" aria-label="Next">
                        <span aria-hidden="true">&raquo;</span>
                        <span class="sr-only">Next</span>
                    </a>
                </li>
            </ul>
        </div>
    </section>