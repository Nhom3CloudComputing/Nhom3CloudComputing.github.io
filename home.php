<?php
include("config.php");
include("firebase_connect.php");

if(!isset($_SESSION['user'])){
    header("location: index.php");
}

else{
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FRAIS</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">
    <link rel="stylesheet" href="assets/css/base.css">
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="assets/css/shop.css">
    <script type="text/javascript" src="assets/js/main.js"></script>
    <link rel="stylesheet" type="text/css" href="assets/css/contact.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@100&family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="icon" href="assets/img/favicon.png" type="image/x-icon">
</head>
<body>
    <div class="site">
        <header class="site_header">
            <div class="header_menu">
                <ul>
                    <li>
                        <a href="shop.php">SHOP</a>
                    </li>
                    <li>
                        <a href="outstory.php">OUR STORY</a>
                    </li>
                    <li>
                        <a href="blog.php">BLOG</a>
                    </li>
                    <li>
                        <a href="sale.php">SALE</a>
                    </li>
                    <li>
                        <a href="contact.php">CONTACT</a>
                    </li>
                </ul>
            </div>
            <a href="home.php">
                <div class="header_logo">
                    FRAIS
                </div>
            </a>
            <div class="header_right">
                <div class="header_right_search">
                    <div>
                        <i class="fa-solid fa-magnifying-glass header_right_icon_search"></i>
                        <input type="text" id="searchInput" class="header_right_inpput_search" placeholder="Search">
                        <div class="header_right_icon_micro">
                            <i class="fa-solid fa-microphone"></i>
                        </div>
                    </div>
                    <div class="space"></div>
                </div>
                <div class="login">
                    <div class="header_right_box_user">
                        <i class="fa-regular fa-user header_right_icon_user"></i>
                    </div>
                    <a href=""><?php echo $_SESSION['user']['name']; ?></a>
                    <div class="login_tab">
                        <ul>
                            <li><a href="">Thông tin tài khoản</a></li>
                            <div class="space space_tab"></div>
                            <li><a href="index.php">Đăng xuất</a></li>
                            <div class="space space_tab"></div>
                            <li><a href="">Hỗ trợ</a></li>
                        </ul>
                    </div>
                </div>
                <i class="fa-solid fa-gift header_right_icon_gift"></i>
                <div class="box_bag">
                    <i class="fa-solid fa-bag-shopping header_right_icon_bag"></i>
                    <div class="modal modal_cart">
                        <div class="modal__overlay modal__overlay_cart"></div>
                        <div class="modal__body">
                            <div class="inf_bag">
                                <div class="inf_bag_title">
                                    <i class="fa-solid fa-angle-right close_inf_cart"></i>
                                    <h1>Cart</h1>
                                </div>
                                <div class="overflow_cart">
                                    <div class="overflow_cart_content">
                                        <div class="cart_item">
                                            <a href=""><img src="assets/img/coco_sandelwoo.webp" alt=""></a>
                                            <div class="cart_item_inf">
                                                <p>Coco Sandelwoo</p>
                                                <p class="cart_item_price">$85.00</p>
                                                <div class="cart_item_inf_quantity">
                                                    <i class="fa-solid fa-minus"></i>
                                                    <p class="cart_item_inf_quantity_p">0</p>
                                                    <i class="fa-solid fa-plus"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="space_item"></div>
                                        <div class="cart_item">
                                            <a href=""><img src="assets/img/coco_sandelwoo.webp" alt=""></a>
                                            <div class="cart_item_inf">
                                                <p>Coco Sandelwoo</p>
                                                <p class="cart_item_price">$85.00</p>
                                                <div class="cart_item_inf_quantity">
                                                    <i class="fa-solid fa-minus"></i>
                                                    <p class="cart_item_inf_quantity_p">0</p>
                                                    <i class="fa-solid fa-plus"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="space_item"></div>
                                        <div class="cart_item">
                                            <a href=""><img src="assets/img/coco_sandelwoo.webp" alt=""></a>
                                            <div class="cart_item_inf">
                                                <p>Coco Sandelwoo</p>
                                                <p class="cart_item_price">$85.00</p>
                                                <div class="cart_item_inf_quantity">
                                                    <i class="fa-solid fa-minus"></i>
                                                    <p class="cart_item_inf_quantity_p">0</p>
                                                    <i class="fa-solid fa-plus"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="space_item"></div>
                                        <div class="cart_item">
                                            <a href=""><img src="assets/img/coco_sandelwoo.webp" alt=""></a>
                                            <div class="cart_item_inf">
                                                <p>Coco Sandelwoo</p>
                                                <p class="cart_item_price">$85.00</p>
                                                <div class="cart_item_inf_quantity">
                                                    <i class="fa-solid fa-minus"></i>
                                                    <p class="cart_item_inf_quantity_p">0</p>
                                                    <i class="fa-solid fa-plus"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="space_item"></div>
                                        <div class="cart_item">
                                            <a href=""><img src="assets/img/coco_sandelwoo.webp" alt=""></a>
                                            <div class="cart_item_inf">
                                                <p>Coco Sandelwoo</p>
                                                <p class="cart_item_price">$85.00</p>
                                                <div class="cart_item_inf_quantity">
                                                    <i class="fa-solid fa-minus"></i>
                                                    <p class="cart_item_inf_quantity_p">0</p>
                                                    <i class="fa-solid fa-plus"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="space_item"></div>
                                        <div class="cart_item">
                                            <a href=""><img src="assets/img/coco_sandelwoo.webp" alt=""></a>
                                            <div class="cart_item_inf">
                                                <p>Coco Sandelwoo</p>
                                                <p class="cart_item_price">$85.00</p>
                                                <div class="cart_item_inf_quantity">
                                                    <i class="fa-solid fa-minus"></i>
                                                    <p class="cart_item_inf_quantity_p">0</p>
                                                    <i class="fa-solid fa-plus"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="space_item"></div>
                                        <div class="cart_item">
                                            <a href=""><img src="assets/img/coco_sandelwoo.webp" alt=""></a>
                                            <div class="cart_item_inf">
                                                <p>Coco Sandelwoo</p>
                                                <p class="cart_item_price">$85.00</p>
                                                <div class="cart_item_inf_quantity">
                                                    <i class="fa-solid fa-minus"></i>
                                                    <p class="cart_item_inf_quantity_p">0</p>
                                                    <i class="fa-solid fa-plus"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="total_price">
                                        <p class="total_price_title">Subtotal</p>
                                        <p class="total_price_price">0</p>
                                        <div class="total_price_space"></div>
                                        <div class="view_cart">
                                            <a href="">View Cart</a>
                                        </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>

 
        <div class="contain">
            <div class="contain_background">
                <img src="assets/img/background.webp" alt="">
                <div>
                    <span>HANDCRAFTED ORGANIC SOAPS & CANDLES</span><br>
                    <h1>JUST LIKE NATURE INTENDED</h1>
                    <a href="shop.php">Shop Now</a>
                </div>
            </div>
            <h1 class="contain_title_fav">SHOP OUR FAVORITES</h1>
            <div class="contain_fav">
                <div class="contain_fav_left">
                    <h1>NATURE’S ESSENCE SCENTED CANDLES</h1>
                    <span>I'm a paragraph. Click here to add your own text and edit me. It’s easy. Just click “Edit Text” or double click me to add your own content and make changes to the font. I’m a great place for you to tell a story and let your users know a little more about you.</span>
                    <a href="candles.php">Shop Candles</a>
                </div>
                <div class="contain_fav_right">
                    <img src="assets/img/img_fav.webp" alt="">
                </div>
            </div>
            <div class="contain_fav2">
                <div class="contain_fav2_background"></div>
                <div class="contain_fav2_boder">
                    <div class="contain_fav2_left">
                        <img src="assets/img/contain_fav2_left.webp" alt="">
                    </div>
                    <div class="contain_fav2_right">
                        <h1>PROBIOTIC CLEANSING BARS</h1>
                        <span>I'm a paragraph. Click here to add your own text and edit me. It’s easy. Just click “Edit Text” or double click me to add your own content and make changes to the font. I’m a great place for you to tell a story and let your users know a little more about you.</span>
                        <a href="soaps.php">Shop Soap</a>
                    </div>
                </div>
            </div>
            <div class="contain_most_popular">
                <p class="most_popular_title">MOST POPULAR</p>
                <div class="most_popular_list">
                    <div class="most_popular_content">
                        <div class="item item_most_popular" id="item1">
                            <a href="pearl_powder.php">
                                <img src="assets/img/img_shop/pearl_powder.webp" alt="">
                            </a>
                            <span id="title2" class="title">Pearl Powder</span>
                            <span class="price_sale">$85.00</span>
                            <span class="price">$80.75</span><br>
                            <button class="add_item_to_card add_item_most_popular">Add to Card</button>
                            <div class="item_sale">
                                <span>SALE</span>
                            </div>
                        </div>
                        <div class="item item_most_popular" id="item2">
                            <a href="lavender.php">
                                <img src="assets/img/img_shop/lavender.webp" alt="">
                            </a>
                            <span id="title2" class="title">Lavender</span>
                            <span class="price_sale">$85.00</span>
                            <span class="price">$80.75</span><br>
                            <button class="add_item_to_card add_item_most_popular">Add to Card</button>
                            <div class="item_sale">
                                <span>SALE</span>
                            </div>
                        </div>
                        <div class="item item_most_popular" id="item3">
                            <a href="coco_sandelwoo.php">
                                <img src="assets/img/img_shop/coco_sandelwoo.webp" alt="">
                            </a>
                            <span id="title2" class="title">Coco & Sandelwoo</span>
                            <span class="price_sale">$85.00</span>
                            <span class="price">$80.75</span><br>
                            <button class="add_item_to_card add_item_most_popular">Add to Card</button>
                            <div class="item_sale">
                                <span>SALE</span>
                            </div>
                        </div>
                        <div class="item item_most_popular" id="item4">
                            <a href="green_clay.php">
                                <img src="assets/img/img_shop/green_clay.webp" alt="">
                            </a>
                            <span id="title2" class="title">Green Clay</span>
                            <span class="price_sale">$85.00</span>
                            <span class="price">$80.75</span><br>
                            <button class="add_item_to_card add_item_most_popular">Add to Card</button>
                            <div class="item_sale">
                                <span>SALE</span>
                            </div>
                        </div>
                    
                    </div>
                </div>
            </div>
            <div class="contain_naturally_simple">
                <h1>NATURALLY SIMPLE</h1>
                <span>I'm a paragraph. Click here to add your own text and edit me. It’s easy. Just click “Edit Text” or double click me to add your own content and make changes to the font. I’m a great place for you to tell a story and let your users know a little more about you.</span>
                <a href="outstory.php">Our Story</a>
                <div class="box_img_naturally">
                    <img src="assets/img/background_naturally.webp" class="naturally_background" alt="">
                    <img src="assets/img/naturally.webp" class="naturally_img" alt="">
                </div>
            </div>
            <div class="contain_frais_blog">
                <h1>THE FRAIS BLOG</h1>
                <div class="box_log">
                    <div class="blog_item">
                        <a href="">
                            <img src="assets/img/using_candles.webp" alt="">
                            <h2>Re-Using Candles</h2>
                            <span>
                                Create a blog post subtitle that summarizes your post in a few short, punchy sentences and entices your audience to continue reading...
                            </span>
                        </a>
                    </div>
                    <div class="blog_item">
                        <a href="">
                            <img src="assets/img/pick_the_Right.webp" alt="">
                            <h2>How to Pick the Right Scent</h2>
                            <span>
                            Create a blog post subtitle that summarizes your post in a few short, punchy sentences and entices your
                            </span>
                        </a>
                    </div>
                    <div class="blog_item">
                        <a href="">
                            <img src="assets/img/5_way_to_take.webp" alt="">
                            <h2>5 Ways to Take Care of Your Candles</h2>
                            <span>
                                Create a blog post subtitle that summarizes your post in a few short, punchy sentences and entices your audience to continue reading....
                            </span>
                        </a>
                    </div>
                </div>
                <a href="" class="learn_more_blog">Learn More</a>
            </div>
            <div class="footer">
                <div class="footer_child footer_logo">
                    <a href="home.php">FRAIS</a>
                    <div id="map">
                        <script>
                            function initMap() {
                                var location = { lat: 21.007, lng: 105.82576};
                                var map = new google.maps.Map(document.getElementById("map"), {
                                    zoom: 15,
                                    center: location
                                });
                                var marker = new google.maps.Marker({
                                    position: location,
                                    map: map
                                });
                            }
                        </script>
                        <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAFqyiPh8kFZbDUHCPzmkADnyBCVPE1dRE&callback=initMap"></script>
                    </div>
                </div>
                <div class="footer_child footer_mid">
                    <div>
                        <a href="shop.php" class="footer_child_title">SHOP</a>
                        <ul>
                            <li><a href="candles.php">CANDLES</a></li>
                            <li><a href="soaps.php"></a>SOAPAS</li>
                            <li><a href="sale.php"></a>SALE</li>
                            <li><a href=""></a>GIFT CARD</li>
                        </ul>
                    </div>
                    <div>
                        <a href="" class="footer_child_title">HELP</a>
                        <ul>
                            <li><a href="">TERMS & CONDITIONS</a></li>
                            <li><a href=""></a>PRIVACY POLICY</li>
                            <li><a href=""></a>SHIPPING & RETURNS</li>
                        </ul>
                    </div>
                </div>
                <div class="footer_child footer_right">
                    <div>
                        <a href="" class="footer_child_title">FRAIS</a>
                        <ul>
                            <li><a href="outstory.php">OUR STORY</a></li>
                            <li><a href="contact.php">CONTACT US</a></li>
                            <li><a href="">FAQ</a></li>
                        </ul>
                    </div>
                    <div class="footer_child_title_bottom">
                        <a href="contact.php" class="footer_child_title">CONTACT US</a>
                        <ul>
                            <li><a href="">012 345 6789</a></li>
                            <li><a href="">INFO@DAYKHONGPHAIWEB.COM</a></li>
                        </ul>
                        <div class="contact_social">
                            <a href="https://m.facebook.com/login/"><i class="fa-brands fa-facebook-f"></i></a>
                            <a href="https://www.instagram.com/accounts/login/"><i class="fa-brands fa-instagram"></i></a>
                            <a href="https://www.pinterest.com/login/"><i class="fa-brands fa-pinterest-p"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="social">
            <a href="https://m.facebook.com/login/"><i class="fa-brands fa-facebook-f"></i></a>
            <a href="https://www.instagram.com/accounts/login/"><i class="fa-brands fa-instagram"></i></a>
            <a href="https://www.pinterest.com/login/"><i class="fa-brands fa-pinterest-p"></i></a>
        </div>
    </div>

    <!-- <script>
        document.addEventListener('DOMContentLoaded', function() {
            const closeForm = document.querySelector('.header_right_icon_bag');
            const modal = document.querySelector('.modal_cart');
            closeForm.addEventListener('click', function() {
                modal.style.display = 'flex';
            });
        });
    </script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const closeForm = document.querySelector('.modal__overlay_cart');
            const modal = document.querySelector('.modal_cart');
            closeForm.addEventListener('click', function() {
                modal.style.display = 'none';
            });
        });
    </script> -->
     <script type="text/javascript" id="zsiqchat">var $zoho=$zoho || {};$zoho.salesiq = $zoho.salesiq || {widgetcode: "siq8e74f0d7d5406c6ae126f305f27dded5", values:{},ready:function(){}};var d=document;s=d.createElement("script");s.type="text/javascript";s.id="zsiqscript";s.defer=true;s.src="https://salesiq.zohopublic.com/widget";t=d.getElementsByTagName("script")[0];t.parentNode.insertBefore(s,t);</script> 
</body>
</html>

<?php
}
