<section class="banner-travel">
    <div class="container">
        <div class="col-md-12">
            <div class="banner">
                <div class="slideshow-container">
                    <?php
                        for($i = 0; $i < 3; $i++) {
                            echo '<div class="mySlides fade" id="load_data">'
                                    . '<img src="'. base_url() .'user/'.$productArray[$i*5]["hinhanh"].'" style="width:100%">'
                                    . '<div class="text">'.$typeArray[$productArray[$i*5]["ma_theloai"] - 1]["ten_theloai"].'</div>'
                                . '</div>';
                        }
                    ?>
                </div>
                <br>

                <div class="circle-but" style="text-align:center">
                    <span class="dot" onclick="currentSlide(0)"></span>
                    <span class="dot" onclick="currentSlide(1)"></span>
                    <span class="dot" onclick="currentSlide(2)"></span>
                </div>
                <div class="data_img" id="img-btn">

                </div>
            </div>
        </div>
    </div>
</section>
<section class="main-menu" id="menu-home">
    <div class="container">
        <div class="col-md-12 tab-content" id="home-product">
            <div class="list-product">
                <div role="tabpanel" class="tab-pane fade in active" id="vo">
                    <ul class="list-img" id="ul-home">
                        <?php 
                            for($i = 0; $i < 12; $i++) {
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
                </div>
                <div class="col-md-3">

                </div>
                <div class="col-md-3">

                </div>
            </div>
        </div>
    </div>
</section>