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
    <link rel="stylesheet" href="assets/css/product_item.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@100&family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans">
    <link rel="icon" href="assets/img/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="assets/css/shop.css">
    <link rel="stylesheet" type="text/css" href="assets/css/contact.css">
    <script type="text/javascript" src="assets/js/main.js"></script>
    <script type="text/javascript" src="test.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
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
                            <li><a href="">Hỗ trợ</a></li>
                            <div class="space space_tab"></div>
                            <li><a href="index.php">Đăng xuất</a></li>
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
    </div>
    <div class="container">
        <div class="product_page">
            <div class="menu">
                <div>   
                    <p>Green Clay</p>
                </div>
                <div>
                    <i class="fa-solid fa-chevron-left"></i>
                    <a href="">Prev</a>
                    <span>|</span>
                    <a href="">Next</a>
                    <i class="fa-solid fa-chevron-right"></i>
                </div>
            </div>
            <div class="product_item">
                <div class="product_item_left">
                    <img src="assets\img\green_clay.webp" alt="">
                    <span class="product_item_left_span">
                    I'm a product description. This is a great place 
                    to "sell" your product and grab buyers' attention. 
                    Describe your product clearly and concisely. Use 
                    unique keywords. Write your own description instead 
                    of using manufacturers' copy.
                    </span>
                </div>
                <div class="product_item_right">
                    <h2 class="product_name">Green Clay</h2>
                    <span class="product_msp">SKU: 001</span>
                    <p class="product_price">%85.000</p>
                    <span class="product_title_quantity">Quantity</span>
                    <div class="product_quantity">
                        <input type="text" id="pearl_powder_quantity" id="input_quantity_product" spanValues="1">
                        <div class="product_quantity_up_down">
                            <i class="fa-solid fa-chevron-up"></i>
                            <i class="fa-solid fa-chevron-down"></i>
                        </div>
                    </div>
                    <button class="add_to_cart_product">Add to Cart</button><br>
                    <button class="buy_product">Buy Now</button>
                    <div class="product_inf">
                        <h2 class="product_title_click product_inf_title">PRODUCT INFO <i class="fa-solid fa-plus"></i> </h2>
                        <span class="product_span_click product_info_span">
                            I'm a product detail. I'm a great place to add more 
                            information about your product such as sizing, material,
                            care and cleaning instructions. This is also a great 
                            space to write what makes this product special and how your 
                            customers can benefit from this item. Buyers like to know what
                            they’re getting before they purchase, so give them as much
                            information as possible so they can buy with confidence and 
                            certainty.
                        </span>
                    </div>
                    <div class="space_product"></div>
                    <div class="return_refund">
                        <h2 class="product_title_click return_refund_title">RETURN & REFUND POLICY <i class="fa-solid fa-plus"></i> </h2>
                        <span class="product_span_click return_refund_span">
                        I’m a Return and Refund policy. I’m a great 
                        place to let your customers know what to do 
                        in case they are dissatisfied with their 
                        purchase. Having a straightforward refund or 
                        exchange policy is a great way to build trust 
                        and reassure your customers that they can buy 
                        with confidence.
                        </span>
                    </div>
                    <div class="space_product"></div>
                    <div class="shipping">
                        <h2 class="product_title_click shipping_title">SHIPPING INFO <i class="fa-solid fa-plus"></i> </h2>
                        <span class="product_span_click shipping_span">
                        I'm a shipping policy. I'm a great place to 
                        add more information about your shipping 
                        methods, packaging and cost. Providing 
                        straightforward information about your 
                        shipping policy is a great way to build trust 
                        and reassure your customers that they can buy 
                        from you with confidence.
                        </span>
                    </div>
                    <div class="product_contact">
                        <i class="fa-brands fa-whatsapp"></i>
                        <i class="fa-brands fa-facebook"></i>
                        <i class="fa-brands fa-twitter"></i>
                        <i class="fa-brands fa-pinterest-p"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="also_like">
            <h1 class="also_like_title">You Might Also Like</h1>
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
        <div class="footer">
            <div class="footer_child footer_logo">
                <a href="">FRAIS</a>
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
                    <a href="" class="footer_child_title">SHOP</a>
                    <ul>
                        <li><a href="">CANDLES</a></li>
                        <li><a href=""></a>SOAPAS</li>
                        <li><a href=""></a>SALE</li>
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
                        <li><a href="">OUR STORY</a></li>
                        <li><a href="">CONTACT US</a></li>
                        <li><a href="">FAQ</a></li>
                    </ul>
                </div>
                <div class="footer_child_title_bottom">
                    <a href="" class="footer_child_title">CONTACT US</a>
                    <ul>
                        <li><a href="">012 345 6789</a></li>
                        <li><a href="">INFO@DAYKHONGPHAIWEB.COM</a></li>
                    </ul>
                    <div class="contact_social">
                        <i class="fa-brands fa-facebook-f"></i>
                        <i class="fa-brands fa-instagram"></i>
                        <i class="fa-brands fa-pinterest-p"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- hien thong tin cart -->
    <!-- <script>
        document.addEventListener('DOMContentLoaded', function() {
            const closeForm = document.querySelector('.header_right_icon_bag');
            const modal = document.querySelector('.modal_cart');
            closeForm.addEventListener('click', function() {
                modal.style.display = 'flex';
            });
        });
    </script> -->
    <!-- dong cart -->
    <!-- <script>
        document.addEventListener('DOMContentLoaded', function() {
            const closeForm = document.querySelector('.modal__overlay_cart');
            const modal = document.querySelector('.modal_cart');
            closeForm.addEventListener('click', function() {
                modal.style.display = 'none';
            });
        });
    </script> -->
    <!-- dong form login -->
    <!-- <script>
        document.addEventListener('DOMContentLoaded', function() {
            const closeForm = document.querySelector('.close_form');
            const modal = document.querySelector('.modal');

            closeForm.addEventListener('click', function() {
                modal.style.display = 'none';
            });
        });
    </script> -->

    <!-- dong thong tin cart qua icon > -->
    <!-- <script>
        document.addEventListener('DOMContentLoaded', function() {
            const closeForm = document.querySelector('.close_inf_cart');
            const modal = document.querySelector('.modal_cart');

            closeForm.addEventListener('click', function() {
                modal.style.display = 'none';
            });
        });
    </script> -->

    <!-- <script>
        // Lấy nội dung văn bản bên trong thẻ span sử dụng innerText
        const spanElements = document.getElementsByClassName('title');
    
        // Khai báo mảng để lưu giá trị của các thẻ span
        const spanValues = [];
    
        // Dùng vòng lặp để lấy giá trị của từng thẻ span và đẩy vào mảng
        for (let i = 0; i < spanElements.length; i++) {
            const spanValue = spanElements[i].textContent;
            spanValues.push(spanValue);
        }
    
        console.log(spanValues);
        
        document.getElementById('searchInput').addEventListener('input', function() {
            const searchTerm = this.value;
            let check = false;
            spanValues.forEach((value, index) => {
                const box = document.getElementById(`item${index + 1}`);
                console.log(`item${index + 1}`);
                const comparisonResult = value.localeCompare(searchTerm, 'en', { sensitivity: 'base' });
                console.log(comparisonResult);
                if (searchTerm === '') {
                    // Nếu searchTerm rỗng, hiển thị tất cả     
                    box.style.display = 'block';
                } else if (comparisonResult === 0) {
                    // Nếu có kết quả và không phải là 'lavander' hoặc 'coco', hiển thị
                    box.style.display = 'block';
                    check = true;
                } else {
                    // Ngược lại, ẩn đi
                    box.style.display = 'none';
                }
            });
            const box = document.getElementById("no_item");
            if(!check){
                box.style.display = 'block';
            }
            else{
                box.style.display = 'none';
            }
        });
    </script> -->


    
</body>
</html>

<?php
}