<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FRAIS</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/base.css">
    <link rel="stylesheet" type="text/css" href="assets/css/main.css">
    <link rel="stylesheet" type="text/css" href="assets/css/shop.css">
    <link rel="stylesheet" type="text/css" href="assets/css/test.css">
    <link rel="stylesheet" type="text/css" href="assets/css/test.css">
    <link rel="stylesheet" type="text/css" href="assets/css/contact.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@100&family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="icon" href="https://ik.imagekit.io/141023q/favicon.png?updatedAt=1712672996495" type="image/x-icon">
    <script type="text/javascript" src="assets/js/login.js"></script>
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
                                            <a href=""><img src="https://ik.imagekit.io/141023q/coco_sandelwoo.webp?updatedAt=1712672996806" alt=""></a>
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
                                            <a href=""><img src="https://ik.imagekit.io/141023q/coco_sandelwoo.webp?updatedAt=1712672996806" alt=""></a>
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
                                            <a href=""><img src="https://ik.imagekit.io/141023q/coco_sandelwoo.webp?updatedAt=1712672996806" alt=""></a>
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
                                            <a href=""><img src="https://ik.imagekit.io/141023q/coco_sandelwoo.webp?updatedAt=1712672996806" alt=""></a>
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
                                            <a href=""><img src="https://ik.imagekit.io/141023q/coco_sandelwoo.webp?updatedAt=1712672996806" alt=""></a>
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
                                            <a href=""><img src="https://ik.imagekit.io/141023q/coco_sandelwoo.webp?updatedAt=1712672996806" alt=""></a>
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
                                            <a href=""><img src="https://ik.imagekit.io/141023q/coco_sandelwoo.webp?updatedAt=1712672996806" alt=""></a>
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
                <img src="https://ik.imagekit.io/141023q/background.webp?updatedAt=1712672997090" alt="">
                <div>
                    <span>HANDCRAFTED ORGANIC SOAPS & CANDLES</span><br>
                    <h1>JUST LIKE NATURE INTENDED</h1>
                    <a href="">Shop Now</a>
                </div>
            </div>
            <h1 class="contain_title_fav">SHOP OUR FAVORITES</h1>
            <div class="form_gg">
                <iframe class="form_gg_css" src="https://docs.google.com/forms/d/e/1FAIpQLSfx8KWGrNIdZJocxB5AUOvSFZF9XH1PpWFynx2j_jKpT-UnOw/viewform?embedded=true"
                frameborder="0" marginheight="0" marginwidth="0">Đang tải…</iframe>
            </div>

            <div class="footer footer_home">
                <div class="footer_child footer_logo">
                    <a href="home.php">FRAIS</a>
                    <a href="api_map.php" id="map_api_id">
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
                    </a>
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
                            <li><a href="form_gg.php">Service and products survey</a></li>
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


    <!-- hien thong tin cart -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const closeForm = document.querySelector('.header_right_icon_bag');
            const modal = document.querySelector('.modal_cart');
            closeForm.addEventListener('click', function() {
                modal.style.display = 'flex';
            });
        });
    </script>
    <!-- dong cart -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const closeForm = document.querySelector('.modal__overlay_cart');
            const modal = document.querySelector('.modal_cart');
            closeForm.addEventListener('click', function() {
                modal.style.display = 'none';
            });
        });
    </script>
    <!-- hien form login -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const closeForm = document.querySelector('.login');
            const modal = document.querySelector('.modal_login');

            closeForm.addEventListener('click', function() {
                modal.style.display = 'flex';
            });
        });
    </script>
    <!-- dong form login -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const closeForm = document.querySelector('.close_form');
            const modal = document.querySelector('.modal_login');

            closeForm.addEventListener('click', function() {
                modal.style.display = 'none';
            });
        });
    </script>

    <script type="text/javascript" id="zsiqchat">var $zoho=$zoho || {};$zoho.salesiq = $zoho.salesiq || {widgetcode: "siq8e74f0d7d5406c6ae126f305f27dded5", values:{},ready:function(){}};var d=document;s=d.createElement("script");s.type="text/javascript";s.id="zsiqscript";s.defer=true;s.src="https://salesiq.zohopublic.com/widget";t=d.getElementsByTagName("script")[0];t.parentNode.insertBefore(s,t);</script> 
    <script> window.embeddedChatbotConfig = {chatbotId: "F9t4AjTIu5cY0xpznFJNL", domain: "www.chatbase.co"} </script>
    <script src="https://www.chatbase.co/embed.min.js"chatbotId="F9t4AjTIu5cY0xpznFJNL"domain="www.chatbase.co"defer> </script>
</body>
</html>

<?php 