<?php
session_start();

if(isset($_SESSION['id']) && isset($_SESSION['name'])){

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">
    <link rel="stylesheet" href="assets/css/base.css">
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="/font/fontawesome-free-6.5.1-web/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@100&family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="icon" href="assets/img/no_item.jpg" type="image/x-icon">
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
                        <a href="">OUR STORY</a>
                    </li>
                    <li>
                        <a href="">BLOG</a>
                    </li>
                    <li>
                        <a href="">SALE</a>
                    </li>
                    <li>
                        <a href="">CONTACT</a>
                    </li>
                </ul>
            </div>
            <div class="header_logo">
                FRAIS
            </div>
            <div class="header_right">
                <div class="header_right_search">
                    <div>
                        <i class="fa-solid fa-magnifying-glass header_right_icon_search"></i>
                        <input type="text" class="header_right_inpput_search" placeholder="Search">
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
                    <a href=""><?php echo $_SESSION['name']; ?></a>
                    <div class="login_tab">
                        <ul>
                            <li><a href="">Thông tin tài khoản</a></li>
                            <li><a href="">Hỗ trợ</a></li>
                            <li><a href="">Đăng xuất</a></li>
                        </ul>
                    </div>
                </div>
                <i class="fa-solid fa-gift header_right_icon_gift"></i>
                <i class="fa-solid fa-bag-shopping header_right_icon_bag"></i>
            </div>
        </header>
        <div class="contain">
            <div class="contain_background">
                <img src="assets/img/background.webp" alt="">
                <div>
                    <span>HANDCRAFTED ORGANIC SOAPS & CANDLES</span><br>
                    <h1>JUST LIKE NATURE INTENDED</h1>
                    <button>Shop Now</button>
                </div>
            </div>
            <h1 class="contain_title_fav">SHOP OUR FAVORITES</h1>
            <div class="contain_fav">
                <div class="contain_fav_left">
                    <h1>NATURE’S ESSENCE SCENTED CANDLES</h1>
                    <span>I'm a paragraph. Click here to add your own text and edit me. It’s easy. Just click “Edit Text” or double click me to add your own content and make changes to the font. I’m a great place for you to tell a story and let your users know a little more about you.</span>
                    <a href="shop.php">Shop Candles</a>
                </div>
                <div class="contain_fav_right">
                    <img src="assets/img/img_fav.webp" alt="">
                </div>
            </div>
            <div class="contain_fav contain_fav2">
                <div class="contain_fav2_background"></div>
                <div class="contain_fav2_boder">
                    <div class="contain_fav2_left">
                        <img src="assets/img/contain_fav2_left.webp" alt="">
                    </div>
                    <div class="contain_fav2_right">
                        <h1>PROBIOTIC CLEANSING BARS</h1>
                        <span>I'm a paragraph. Click here to add your own text and edit me. It’s easy. Just click “Edit Text” or double click me to add your own content and make changes to the font. I’m a great place for you to tell a story and let your users know a little more about you.</span>
                        <a href="">Shop Soap</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>

<?php 
}else {
    header("Location: login.php");
    exit();
}
?>