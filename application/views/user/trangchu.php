<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> <?php echo $title; ?> </title>
    <link href="<?php echo base_url();?>user/bootstrap-3.4.1-dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
    <link href="<?php echo base_url();?>user/assets/style.css" rel="stylesheet">
</head>

<body>
    <section class="logo">
        <img src="<?php echo base_url();?>user/img/logo.jpg" alt="">
        <div class="logo-right">
            <i class="fas fa-shopping-cart"></i><span class="lable-in-icon">0</span><i class="fas fa-ellipsis-v"></i>
        </div>
    </section>
    <section class="sub-logo">
        <div class="container">
            <div class="row">
                <div class="col-xs-6">
                    <ul class="list-label">
                        <li>
                            <a href="#">Góp ý mua hàng</a>
                        </li>
                        <li class="phone">
                            <a href="#"><i class="fas fa-phone item-1"></i><span>1900633349</span></a>
                        </li>
                    </ul>
                </div>
                <div class="col-xs-6">
                    <ul class="list-label-2">
                        <li>
                            <a href="#">Giao hàng toàn quốc</a>
                        </li>
                        <li>
                            <a href="#">Bảo hành 365 ngày</a>
                        </li>
                    </ul>
                </div>
                <div class="search-reponsive">
                    <form action="" class="seach-list"><input id="myInput" type="text" placeholder="Bạn muốn tìm gì..."><i class="fas fa-search"></i>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <section class="top-info-menu">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="menu-info-left">
                        <ul class="sub-menu-left">
                            <li><a href="#"><i class="fas fa-phone"></i>0906701757</a></li>
                            <li><a hre="#" style="border: none;"><i class="fas fa-envelope"></i>mvcshop@gmail.com</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="menu-info-right">
                        <ul class="sub-menu-right">
                            <li><a href="#">giới thiệu</a></li>
                            <li><a href="#">chính sách bảo hành trọn đời</a></li>
                            <li><a href="#">giao hàng toàn quốc</a></li>
                            <li><a href="#">than phiền góp ý</a></li>
                            <li style="border:none" class="icon-last" id="item"><a href="#"><i
                                        class="fas fa-chevron-circle-down"></i></a>
                                <ul class="item-list" id="target">
                                    <li><a href="#">danh sách cửa hàng</a></li>
                                    <li><a href="#">cách đo size</a></li>
                                    <li><a href="#">chính sách đổi trả</a></li>
                                    <li><a href="#">chính sách bảo mật thông tin</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="sub-menu-info">
        <div class="container">
            <div class="col-md-3">
                <div class="sub-row">
                    <a href="<?php echo site_url('main')?>"><img src="<?php echo base_url();?>user/img/logo.jpg" alt=""></a>
                </div>
            </div>
            <div class="col-md-9">
                <div id="reponsive" class="label-reponsive">
                    <div class="icon-label">
                        <i class="fas fa-align-justify"></i>
                    </div>
                    <label for="#">Sản phẩm</label>
                </div>
                <div class="sub-menu-label-list" id="label-list">
                    <div class="out-reponsive">
                        <label for="#">MVC</label>
                        <div class="icon-close" id="close-icon">
                            <i class="fas fa-times"></i>
                        </div>
                    </div>
                    <ul class="list-sub-menu-info">
                        <li class="woman-shose" id="woman-s"><img class="img-reponsive" src="<?php echo base_url();?>user/img/main-menut-icon-1-1fb5f7d8-af7e-4e50-809a-d3b1de092d53.png" alt=""><a href="/shop_manager/userGiayNu">giày
                                nữ</a>
                            <div class="icon-reponsive-sub-menu" id="icon-reponsive">
                                <i class="far fa-plus-square"></i>
                            </div>
                            <ul class="list-woman-shose" id="ls-woman-s">
                                <li><a href="#"><i class="fas fa-caret-right"></i>giày thể thao</a></li>
                                <li><a href="#"><i class="fas fa-caret-right"></i>giày cao gót</a></li>
                                <li><a href="#"><i class="fas fa-caret-right"></i>sandal nữ</a></li>
                                <li><a href="#"><i class="fas fa-caret-right"></i>giày lười</a></li>
                                <li><a href="#"><i class="fas fa-caret-right"></i>giày búp bê & mọi</a></li>
                                <li><a href="#"><i class="fas fa-caret-right"></i>dép sụt</a></li>
                                <li><a href="#"><i class="fas fa-caret-right"></i>dép lười</a></li>
                            </ul>
                        </li>
                        <li class="label-reponsive"><img class="img-reponsive" src="<?php echo base_url();?>user/img/main-menu-icon-nam.png" alt=""><a href="/shop_manager/userGiayNam">giày nam</a>
                            <div class="icon-reponsive-sub-menu" id="icon-reponsive">
                                <i class="far fa-plus-square"></i>
                            </div>
                            <ul class="list-woman-shose" id="ls-woman-s">
                                <li><a href="#"><i class="fas fa-caret-right"></i>giày thể thao nam</a></li>
                                <li><a href="#"><i class="fas fa-caret-right"></i>mọi & slip on</a></li>
                                <li><a href="#"><i class="fas fa-caret-right"></i>sandal & dép</a></li>
                                <li><a href="#"><i class="fas fa-caret-right"></i>boot</a></li>
                            </ul>
                        </li>
                        <li class="label-reponsive"><img class="img-reponsive" src="<?php echo base_url();?>user/img/main-menu-4.png" alt=""><a href="#">sale 79k</a></li>
                        <li><img class="img-reponsive" src="<?php echo base_url();?>user/img/img-sale-5-e58148bd-f8b8-49a1-8635-a0df5012587d.png" alt=""><a href="#">sale
                                100k</a></li>
                        <li class="label-reponsive"><img class="img-reponsive" src="<?php echo base_url();?>user/img/img-sale-5-e58148bd-f8b8-49a1-8635-a0df5012587d-9fbb6a0b-7570-4e31-87b6-0513fc3b5a0f.png" alt=""><a href="#">sale 150k</a></li>
                        <li class="label-reponsive"><img class="img-reponsive" src="<?php echo base_url();?>user/img/icon-05-150x150.png"><a href="/shop_manager/userAoKhoac">áo khoác</a>
                            <div class="icon-reponsive-sub-menu" id="icon-reponsive">
                                <i class="far fa-plus-square"></i>
                            </div>
                            <ul class="list-woman-shose" id="ls-woman-s">
                                <li><a href="#"><i class="fas fa-caret-right"></i>áo khoác nữ</a></li>
                                <li><a href="#"><i class="fas fa-caret-right"></i>áo khoác cặp</a></li>
                            </ul>
                        </li>
                        <li class="label-reponsive"><img class="img-reponsive" src="<?php echo base_url();?>user/img/ba-lo-quai-cheo.png" alt=""><a href="/shop_manager/userBalo">balo-túi</a>
                            <div class="icon-reponsive-sub-menu" id="icon-reponsive">
                                <i class="far fa-plus-square"></i>
                            </div>
                            <ul class="list-woman-shose computer-list" id="ls-woman-s">
                                <li><a href="#"><i class="fas fa-caret-right"></i>túi đeo chéo</a></li>
                                <li><a href="#"><i class="fas fa-caret-right"></i>balo laptop,du lịch thời trang</a>
                                </li>
                            </ul>
                        </li>
                        <li class="label-reponsive" id="sapramat"><img class="img-reponsive" src="<?php echo base_url();?>user/img/ao-tap-nam.png" alt=""><a href="#">đồ tập gym,
                                yoga</a>
                            <div class="icon-reponsive-sub-menu" id="icon-reponsive">
                                <i class="far fa-plus-square"></i>
                            </div>
                            <ul class="list-woman-shose" id="ls-woman-s">
                                <li><a href="#"><i class="fas fa-caret-right"></i>áo bra</a></li>
                                <li><a href="#"><i class="fas fa-caret-right"></i>áo croptop</a></li>
                                <li><a href="#"><i class="fas fa-caret-right"></i>áo tanktop</a></li>
                                <li><a href="#"><i class="fas fa-caret-right"></i>áo thun tay ngắn</a></li>
                                <li><a href="#"><i class="fas fa-caret-right"></i>quần lửng</a></li>
                                <li><a href="#"><i class="fas fa-caret-right"></i>quần dài</a></li>
                                <li><a href="#"><i class="fas fa-caret-right"></i>quần short</a></li>
                                <li><a href="#"><i class="fas fa-caret-right"></i>quần jogger</a></li>
                                <li><a href="#"><i class="fas fa-caret-right"></i>set bộ</a></li>
                            </ul>
                        </li>
                        <li class="label-reponsive"><img class="img-reponsive" src="<?php echo base_url();?>user/img/45434310-1970581836364173-1044894057681125376-n.jpg" alt=""><a href="/shop_manager/userPhuKien">phụ kiện</a>
                            <div class="icon-reponsive-sub-menu" id="icon-reponsive">
                                <i class="far fa-plus-square"></i>
                            </div>
                            <ul class="list-woman-shose" id="ls-woman-s">
                                <li><a href="#"><i class="fas fa-caret-right"></i>vớ</a></li>
                                <li><a href="#"><i class="fas fa-caret-right"></i>chai vệ sinh giày</a></li>
                                <li><a href="#"><i class="fas fa-caret-right"></i>dây giày</a></li>
                                <li><a href="#"><i class="fas fa-caret-right"></i>đế lót</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <div class="col-md-12">
                    <div class="search-list">
                        <form action="" class="seach-list">
                            <input id="myInput1" type="text" placeholder="Bạn muốn tìm gì..." onkeyup="search()">
                            <i class="fas fa-search"></i>
                        </form>
                        <ul id="myUL" class="myIn"></ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php $this->load->view($view_page)?>
    <section class="footer">
        <div class="container">
            <div class="label-footer">
                <img src="<?php echo base_url();?>user/img/logo-footer.png" alt="">
                <h3>mvc "lựa chọn hoàn hảo"</h3>
            </div>
            <div class="col-md-6">
                <div class="left-footer-list">
                    <ul class="list-info-footer">
                        <label for="#">Chất lượng</label>
                        <li>MVC đảm bảo chất lượng cho tất cả sản phẩm bán tại Store MVC bằng chính sách bảo hành vĩnh viễn.
                        </li>
                        <label for="#">Phục vụ</label>
                        <li>MVC cam kết chất lượng phục vụ tốt nhất,chuyên nghiệp nhất cho mọi khách hàng bằng chính sách hoàn tiền và tặng quà nếu nhân viên phục vụ quý khách không chu đáo.</li>
                        <label for="#">Hỗ trợ</label>
                        <li>Nếu bạn gặp rắc rối về sản phẩm hay chất lượng dịch vụ của MVC,hãy gọi ngay đến số 0967027393 hoặc inbox ở fanpage
                            <a href="https://www.facebook.com/www.mwc.vn">www.facebook.com/www.mwc.vn</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-3">
                <div class="mid-footer-list">
                    <ul class="list-mid">
                        <li>Đặt hàng và thu tiền tận nơi toàn quốc</li>
                        <span><i class="fas fa-phone-square"></i>1900633349</span>
                    </ul>
                    <ul class="list-mid-2">
                        <label for="#">Thông tin</label>
                        <li>
                            <a href="#"><i class="fas fa-angle-right"></i>Giới thiệu về MVC</a>
                        </li>
                        <li>
                            <a href="#"><i class="fas fa-angle-right"></i>Tuyển dụng</a>
                        </li>
                        <li>
                            <a href="#"><i class="fas fa-angle-right"></i>Quy chế hoạt động</a>
                        </li>
                        <li>
                            <a href="#"><i class="fas fa-angle-right"></i>Chính sách và hoạt động</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-3">
                <div class="right-footer-list">
                    <ul class="list-rigth">
                        <label>CSKH</label>
                        <li>
                            <a href="#">Than phiền/Chăm sóc khách hàng</a>
                        </li>
                    </ul>
                    <ul class="list-right-2">
                        <label for="#">FAQ</label>
                        <li>
                            <a href="#"><i class="fas fa-angle-right"></i>Vận chuyển</a>
                        </li>
                        <li>
                            <a href="#"><i class="fas fa-angle-right"></i>Chính sách đổi trả</a>
                        </li>
                        <li>
                            <a href="#"><i class="fas fa-angle-right"></i>Chính sách bảo hành</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <div class="cd-cart cd-cart--empty js-cd-cart" id="btn-cart">
        <a href="#0" class="cd-cart__trigger text-replace">
            <ul class="cd-cart__count">
                <!-- cart items count -->
                <li>0</li>
                <li>0</li>
            </ul>
            <!-- .cd-cart__count -->
            <i class="fas fa-shopping-cart" id="cart2"></i>
        </a>

        <div class="cd-cart__content">
            <div class="cd-cart__layout">
                <header class="cd-cart__header">
                    <h2>Cart</h2>
                    <span class="cd-cart__undo">Item removed.<i class="fas fa-undo"></i></span>
                </header>

                <div class="cd-cart__body">
                    <ul>
                        <!-- products added to the cart will be inserted here using JavaScript -->
                    </ul>
                </div>
                <footer class="cd-cart__footer">
                    <a href="#0" class="cd-cart__checkout">
                        <em>Checkout - $<span>0</span>
            <svg class="icon icon--sm" viewBox="0 0 24 24"><g fill="none" stroke="currentColor"><line stroke-width="2" stroke-linecap="round" stroke-linejoin="round" x1="3" y1="12" x2="21" y2="12"/><polyline stroke-width="2" stroke-linecap="round" stroke-linejoin="round" points="15,6 21,12 15,18 "/></g>
            </svg>
          </em>
                    </a>
                </footer>
            </div>
        </div>
        <!-- <div class="close-btn" id="btn-out">
            <i class="fas fa-times-circle"></i>
        </div> -->
        <!-- .cd-cart__content -->
    </div>
</body>
</html>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="<?php echo base_url();?>user/bootstrap-3.4.1-dist/js/bootstrap.min.js"></script>
<script src="<?php echo base_url();?>user/assets/main.js"></script>
<script src="<?php echo base_url();?>user/assets/util.js"></script>
<script src="<?php echo base_url();?>user/assets/jquery-3.5.1.min.js"></script>
<?php $this->load->view($script)?>
<script src="<?php echo base_url();?>user/assets/search.js"></script>