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
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@100&family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans">
    <link rel="icon" href="https://ik.imagekit.io/141023q/favicon.png?updatedAt=1712672996495" type="image/x-icon">
    <link rel="stylesheet" href="assets/css/shop.css">
    <link rel="stylesheet" type="text/css" href="assets/css/contact.css">
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
        <div class="container">
            <div class="place">
                <a href="home.php">Home</a>
                <i class="fa-solid fa-angle-right"></i>
                <span>All Products</span>
            </div>
            <div class="content">
                <div class="left">
                    <h1>Browse by</h1>
                    <div class="space_shop"></div>
                    <ul class="list_left">
                        <li><a href="shop.php" class="list_item_left list_item_left_active">All Products</a></li>
                        <li><a href="candles.php" class="list_item_left">CANDLES</a></li>
                        <li><a href="most_popular.php" class="list_item_left">MOST POPULAR</a></li>
                        <li><a href="sale.php" class="list_item_left">SALE</a></li>
                        <li><a href="soaps.php" class="list_item_left">SOAPS</a></li>
                    </ul>
                </div>
                <div class="right">
                    <h1>All Products</h1>
                    <span class="note">This is your category description. It’s a great place to tell customers what this category is about, connect with your audience and draw attention to your products.</span>
                    <div class="list_item_right">
                        <div class="right_sorf">
                            <span>4 item</span>
                        </div>
                        <div class="list_item">
                            <div class="row_item">
                                <div id="item1" class="item">
                                    <a href="pearl_powder.php">
                                        <img src="https://ik.imagekit.io/141023q/pearl_powder.webp?updatedAt=1712673005657" alt="">
                                    </a>
                                    <span id="title1" class="title">Pearl Powder</span>
                                    <span class="price">$85.00</span><br>
                                    <button class="add_item_to_card">Add to Card</button>
                                </div>
                                <div class="item" id="item2">
                                    <a href="lavender.php">
                                        <img src="https://ik.imagekit.io/141023q/lavender.webp?updatedAt=1712673004654" alt="">
                                    </a>
                                    <span id="title2" class="title">Lavender</span>
                                    <span class="price_sale">$85.00</span>
                                    <span class="price">$80.75</span><br>
                                    <button class="add_item_to_card">Add to Card</button>
                                    <div class="item_sale">
                                        <span>SALE</span>
                                    </div>
                                </div>
                                <div class="item" id="item3">
                                    <a href="coco_sandelwoo.php">
                                        <img src="https://ik.imagekit.io/141023q/coco_sandelwoo.webp?updatedAt=1712672996806" alt="">
                                    </a>
                                    <span id="title3" class="title">Coco & Sandelwoo</span>
                                    <span class="price_sale">$15.00</span>
                                    <span class="price">$85.00</span><br>
                                    <button class="add_item_to_card">Add to Card</button>
                                    <div class="item_sale">
                                        <span>SALE</span>
                                    </div>
                                </div>
                            </div>
                            <div class="row_item">
                                <div id="item4" class="item">
                                    <a href="green_clay.php">
                                        <img src="https://ik.imagekit.io/141023q/green_clay.webp?updatedAt=1712672996887" alt="">
                                    </a>
                                    <span id="title1" class="title">Green Clay</span>
                                    <span class="price">$85.00</span><br>
                                    <button class="add_item_to_card">Add to Card</button>
                                </div>
                            </div>
                            <!-- <div id="no_item">
                                <h1>No Item !!!!</h1>
                                <img src="assets/img/img_shop/no_item.jpg" alt="">
                            </div> -->
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
                    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBjeVV1IA_yMx5W8p9RY9B03Sx6UE7I2FE&callback=initMap"></script>
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

    <!-- <div class="modal">
        <div class="modal__overlay"></div>
        <div class="modal__body">
            <div class="auth_form">
                <div class="auth_form_left">
                    <h1>Welcome!</h1>
                    <span>Login</span>
                    <form action="" class="login_form">
                        <label for="email" class="label_input" >Email</label>
                        <input type="email" name="email" id="email"><br>
                        <label for="password" class="label_input">Password</label>
                        <input type="password" name="password" id="password">
                        <div class="forgot_and_submit">
                            <a href="">Forgot your password?</a>
                            <button type="submit">Login</button>
                        </div>
                        <div class="sign_up">
                            <span>Don't have an account?</span>
                            <a href="">Sign up now</a>
                        </div>
                    </form>
                </div>
                <div class="auth_form_right">
                    <img src="/web3/assets/img/login_img.avif" alt="">
                    <div class="close_form">
                        <i class="fa-solid fa-xmark"></i>
                    </div>
                </div>
            </div>
        </div>
    </div> -->

    <script>
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
    </script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const closeForm = document.querySelector('.close_form');
            const modal = document.querySelector('.modal');

            closeForm.addEventListener('click', function() {
                modal.style.display = 'none';
            });
        });
    </script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const closeForm = document.querySelector('.close_inf_cart');
            const modal = document.querySelector('.modal_cart');

            closeForm.addEventListener('click', function() {
                modal.style.display = 'flex';
            });
        });
    </script>

    <script>
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
    </script>

    <script type="text/javascript" src="test.js"></script>
    <script type="text/javascript" id="zsiqchat">var $zoho=$zoho || {};$zoho.salesiq = $zoho.salesiq || {widgetcode: "siq8e74f0d7d5406c6ae126f305f27dded5", values:{},ready:function(){}};var d=document;s=d.createElement("script");s.type="text/javascript";s.id="zsiqscript";s.defer=true;s.src="https://salesiq.zohopublic.com/widget";t=d.getElementsByTagName("script")[0];t.parentNode.insertBefore(s,t);</script> 
    <script> window.embeddedChatbotConfig = {chatbotId: "F9t4AjTIu5cY0xpznFJNL", domain: "www.chatbase.co"} </script>
    <script src="https://www.chatbase.co/embed.min.js"chatbotId="F9t4AjTIu5cY0xpznFJNL"domain="www.chatbase.co"defer> </script>
</body>
</html>

<?php
}
