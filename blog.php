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
    <link rel="stylesheet" type="text/css" href="assets/css/base.css">
    <link rel="stylesheet" type="text/css" href="assets/css/blog.css">
    <link rel="stylesheet" type="text/css" href="assets/css/shop.css">
    <link rel="stylesheet" type="text/css" href="assets/css/contact.css">
    <link rel="stylesheet" type="text/css" href="assets/css/main.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@100&family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="icon" href="https://ik.imagekit.io/141023q/favicon.png?updatedAt=1712672996495" type="image/x-icon">
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
    </div>

    <div class = "body_blog">
        <div class ="main_body">
            <div class = "header_blog">
                <div class = "title_blog">
                    <span>BLOG</span>
                </div>
                <div class = "text_down_title">
                    <span>I'm a paragraph. Click here to add your own text and edit me.</span>
                </div>
            </div>
            <div class = "all_post">
                <div class ="space_box">
                    <span> All Post</span>
                </div>
                <div class="main_post">
                    <div class = "postt">
                        <div class = "image_post">
                            <img class ="image_for_post" src="https://ik.imagekit.io/141023q/image_blog_1.jpg?updatedAt=1712673000804" alt="" style="height: 100%; width: 100%;">
                        </div>
                        <div class = "box_post">
                            <div class = "infor_user">
                                <div class = "image_user">
                                    <i class="fa-regular fa-user" style="color: back;"></i>
                                    </div>
                                <div class = "name_date">
                                    <div class = "name_user">
                                        <span>Admin<i class="fa-solid fa-crown"></i></span>
                                    </div>
                                    <div class = "date">
                                        <span>May 31, 2023 ㅤ• 1 min </span>
                                    </div>
                                </div>
                                <div class = "dots">
                                    <i class="fa-solid fa-ellipsis-vertical"></i>
                                </div>
                            </div>
                            <div class = "text_of_post">
                                <h5>Re-Using Candles</h5>
                                <div class = "text_post_downt">
                                    <span>Create a blog post subtitle that summarizes your post in a few short, punchy sentences and entices your audience to continue reading....</span>
                                </div>  
                            </div>
                            <hr  width="90%" align="center" color="#CCCCCC" size="1px"/>
                            <div class = "feel_post">
                                <div class ="active">
                                    <div class = "spann">
                                        <span>23 views ㅤ0 comments</span>
                                    </div>
                                </div>
                                <div class = "heart">
                                    <i class="fa-regular fa-heart" style="color: #e84a43;"></i>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class = "postt">
                        <div class = "image_post">
                            <img class ="image_for_post" src="https://ik.imagekit.io/141023q/image_blog_2.jpg?updatedAt=1712673000754" alt="" style="height: 100%; width: 100%;">
                        </div>
                        <div class = "box_post">
                            <div class = "infor_user">
                                <div class = "image_user">
                                    <i class="fa-regular fa-user" style="color: back;"></i>
                                    </div>
                                <div class = "name_date">
                                    <div class = "name_user">
                                        <span>Admin<i class="fa-solid fa-crown"></i></span>
                                    </div>
                                    <div class = "date">
                                        <span>May 31, 2023 ㅤ• 1 min </span>
                                    </div>
                                </div>
                                <div class = "dots">
                                    <i class="fa-solid fa-ellipsis-vertical"></i>
                                </div>
                            </div>
                            <div class = "text_of_post">
                                <h5>How to Pick the Right Scent </h5>
                                <div class = "text_post_downt">
                                    <span>Create a blog post subtitle that summarizes your post in a few short, punchy sentences and entices your audience to continue reading....</span>
                                </div>  
                            </div>
                            <hr  width="90%" align="center" color="#CCCCCC" size="1px"/>
                            <div class = "feel_post">
                                <div class ="active">
                                    <div class = "spann">
                                        <span>23 views ㅤ0 comments</span>
                                    </div>
                                </div>
                                <div class = "heart">
                                    <i class="fa-regular fa-heart" style="color: #e84a43;"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="main_post">
                    <div class = "postt">
                        <div class = "image_post">
                            <img class ="image_for_post" src="https://ik.imagekit.io/141023q/image_blog_3.jpg?updatedAt=1712673000788" alt="" style="height: 100%; width: 100%;">
                        </div>
                        <div class = "box_post">
                            <div class = "infor_user">
                                <div class = "image_user">
                                    <i class="fa-regular fa-user" style="color: back;"></i>
                                    </div>
                                <div class = "name_date">
                                    <div class = "name_user">
                                        <span>Admin<i class="fa-solid fa-crown"></i></span>
                                    </div>
                                    <div class = "date">
                                        <span>May 31, 2023 ㅤ• 1 min </span>
                                    </div>
                                </div>
                                <div class = "dots">
                                    <i class="fa-solid fa-ellipsis-vertical"></i>
                                </div>
                            </div>
                            <div class = "text_of_post">
                                <h5>5 Ways to Take Care of Your Candles</h5>
                                <div class = "text_post_downt">
                                    <span>Create a blog post subtitle that summarizes your post in a few short, punchy sentences and entices your audience to continue reading....</span>
                                </div>  
                            </div>
                            <hr  width="90%" align="center" color="#CCCCCC" size="1px"/>
                            <div class = "feel_post">
                                <div class ="active">
                                    <div class = "spann">
                                        <span>23 views ㅤ0 comments</span>
                                    </div>
                                </div>
                                <div class = "heart">
                                    <i class="fa-regular fa-heart" style="color: #e84a43;"></i>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class = "postt">
                        <div class = "image_post">
                            <img class ="image_for_post" src="https://ik.imagekit.io/141023q/image_blog_4.jpg?updatedAt=1712673001149" alt="" style="height: 100%; width: 100%;">
                        </div>
                        <div class = "box_post">
                            <div class = "infor_user">
                                <div class = "image_user">
                                    <i class="fa-regular fa-user" style="color: back;"></i>
                                    </div>
                                <div class = "name_date">
                                    <div class = "name_user">
                                        <span>Admin<i class="fa-solid fa-crown"></i></span>
                                    </div>
                                    <div class = "date">
                                        <span>May 31, 2023 ㅤ• 1 min </span>
                                    </div>
                                </div>
                                <div class = "dots">
                                    <i class="fa-solid fa-ellipsis-vertical"></i>
                                </div>
                            </div>
                            <div class = "text_of_post">
                                <h5>How to Hand Make Your Own Soap?</h5>
                                <div class = "text_post_downt">
                                    <span>Create a blog post subtitle that summarizes your post in a few short, punchy sentences and entices your audience to continue reading....</span>
                                </div>  
                            </div>
                            <hr  width="90%" align="center" color="#CCCCCC" size="1px"/>
                            <div class = "feel_post">
                                <div class ="active">
                                    <div class = "spann">
                                        <span>23 views ㅤ0 comments</span>
                                    </div>
                                </div>
                                <div class = "heart">
                                    <i class="fa-regular fa-heart" style="color: #e84a43;"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>    

                <div class="main_post">
                    <div class = "postt">
                        <div class = "image_post">
                            <img class ="image_for_post" src="https://ik.imagekit.io/141023q/image_blog_5.jpg?updatedAt=1712673000969" alt="" style="height: 100%; width: 100%;">
                        </div>
                        <div class = "box_post">
                            <div class = "infor_user">
                                <div class = "image_user">
                                    <i class="fa-regular fa-user" style="color: back;"></i>
                                    </div>
                                <div class = "name_date">
                                    <div class = "name_user">
                                        <span>Admin<i class="fa-solid fa-crown"></i></span>
                                    </div>
                                    <div class = "date">
                                        <span>May 31, 2023 ㅤ• 1 min </span>
                                    </div>
                                </div>
                                <div class = "dots">
                                    <i class="fa-solid fa-ellipsis-vertical"></i>
                                </div>
                            </div>
                            <div class = "text_of_post">
                                <h5>Put Together the Perfect Holiday Gift </h5>
                                <div class = "text_post_downt">
                                    <span>Create a blog post subtitle that summarizes your post in a few short, punchy sentences and entices your audience to continue reading....</span>
                                </div>  
                            </div>
                            <hr  width="90%" align="center" color="#CCCCCC" size="1px"/>
                            <div class = "feel_post">
                                <div class ="active">
                                    <div class = "spann">
                                        <span>23 views ㅤ0 comments</span>
                                    </div>
                                </div>
                                <div class = "heart">
                                    <i class="fa-regular fa-heart" style="color: #e84a43;"></i>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class = "postt">
                        <div class = "image_post">
                            <img class ="image_for_post" src="https://ik.imagekit.io/141023q/image_blog_6.jpg?updatedAt=1712673001002" alt="" style="height: 100%; width: 100%;">
                        </div>
                        <div class = "box_post">
                            <div class = "infor_user">
                                <div class = "image_user">
                                    <i class="fa-regular fa-user" style="color: back;"></i>
                                    </div>
                                <div class = "name_date">
                                    <div class = "name_user">
                                        <span>Admin<i class="fa-solid fa-crown"></i></span>
                                    </div>
                                    <div class = "date">
                                        <span>May 31, 2023 ㅤ• 1 min </span>
                                    </div>
                                </div>
                                <div class = "dots">
                                    <i class="fa-solid fa-ellipsis-vertical"></i>
                                </div>
                            </div>
                            <div class = "text_of_post">
                                <h5> The Remedies That Made Us</h5>
                                <div class = "text_post_downt">
                                    <span>Create a blog post subtitle that summarizes your post in a few short, punchy sentences and entices your audience to continue reading....</span>
                                </div>  
                            </div>
                            <hr  width="90%" align="center" color="#CCCCCC" size="1px"/>
                            <div class = "feel_post">
                                <div class ="active">
                                    <div class = "spann">
                                        <span>23 views ㅤ0 comments</span>
                                    </div>
                                </div>
                                <div class = "heart">
                                    <i class="fa-regular fa-heart" style="color: #e84a43;"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    
    <div class = "body_contact_us">
        <div class = "back_colum_1">
            <div class ="back_logo">
                <span> FRAIS</span>
            </div>
            <div id="map" class="map_api">
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

        <div class = "back_colum">
            <div class = "back_top">
                <span class = "title_back">SHOP</span>
                <span> CANDLES</span>
                <span> SOAPS</span>
                <span> SALE</span>
                <span> GIFT CARD</span>
            </div>
            <div class = "back_top">
                <span class = "title_back">HELP</span>
                <span> TERMS & CONDITIONS</span>
                <span> PRIVACY POLICY </span>
                <span> SHIPPING & RETURNS</span>
            </div>
        </div>

        <div class="back_colum">
            <div class = "back_top">
                <span class = "title_back">FRAIS</span>
                <span> OUR STORY</span>
                <span> CONTACT US</span>
                <span> FAQ</span>
            </div>
            <div class = "back_top">
                <span class = "title_back">CONTACT US</span>
                <span> 123-456-7890 </span>
                <span> INFO@MYSITE.COM</span>

                <div class = "icon_back">

                </div>
            </div>
        </div>
        
    </div>
    
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

    
     <script type="text/javascript" id="zsiqchat">var $zoho=$zoho || {};$zoho.salesiq = $zoho.salesiq || {widgetcode: "siq8e74f0d7d5406c6ae126f305f27dded5", values:{},ready:function(){}};var d=document;s=d.createElement("script");s.type="text/javascript";s.id="zsiqscript";s.defer=true;s.src="https://salesiq.zohopublic.com/widget";t=d.getElementsByTagName("script")[0];t.parentNode.insertBefore(s,t);</script> 
     <script> window.embeddedChatbotConfig = {chatbotId: "F9t4AjTIu5cY0xpznFJNL", domain: "www.chatbase.co"} </script>
     <script src="https://www.chatbase.co/embed.min.js"chatbotId="F9t4AjTIu5cY0xpznFJNL"domain="www.chatbase.co"defer> </script> 
</body>
</html>

<?php
}
