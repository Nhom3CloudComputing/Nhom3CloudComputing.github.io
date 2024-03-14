
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/base.css">
    <link rel="stylesheet" type="text/css" href="assets/css/main.css">
    <link rel="stylesheet" type="text/css" href="assets/css/shop.css">
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
                        <a href="">SHOP</a>
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
                    <a href="">login</a>
                    <!-- <div class="login_tab">
                        <ul>
                            <li><a href="">Thông tin tài khoản</a></li>
                            <div class="space space_tab"></div>
                            <li><a href="">Hỗ trợ</a></li>
                            <div class="space space_tab"></div>
                            <li><a href="">Đăng xuất</a></li>
                        </ul>
                    </div> -->
                </div>
                <i class="fa-solid fa-gift header_right_icon_gift"></i>
                <i class="fa-solid fa-bag-shopping header_right_icon_bag"></i>
            </div>
        </header>
        <div class="container">
            <div class="place">
                <a href="">Home</a>
                <i class="fa-solid fa-angle-right"></i>
                <span>All Products</span>
            </div>
            <div class="content">
                <div class="left">
                    <h1>Browse by</h1>
                    <div class="space_shop"></div>
                    <ul class="list_left">
                        <li><a href="" class="list_item_left">All Products</a></li>
                        <li><a href="" class="list_item_left">CANDLES</a></li>
                        <li><a href="" class="list_item_left">MOST POPULAR</a></li>
                        <li><a href="" class="list_item_left">SALE</a></li>
                        <li><a href="" class="list_item_left">SOAPS</a></li>
                    </ul>
                </div>
                <div class="right">
                    <h1>All Products</h1>
                    <span class="note">This is your category description. It’s a great place to tell customers what this category is about, connect with your audience and draw attention to your products.</span>
                    <div class="list_item_right">
                        <div class="right_sorf">
                            <span>000item</span>
                        </div>
                        <div class="list_item">
                            <div class="row_item">
                                <div id="item1" class="item">
                                    <img src="assets/img/pearl_powder.webp" alt="">
                                    <span id="title1" class="title">Pearl Powder</span>
                                    <span class="price">$85.00</span><br>
                                    <button class="add_item_to_card">Add to Card</button>
                                </div>
                                <div class="item" id="item2">
                                    <img src="assets/img/img_shop/lavender.webp" alt="">
                                    <span id="title2" class="title">Lavender</span>
                                    <span class="price_sale">$85.00</span>
                                    <span class="price">$80.75</span><br>
                                    <button class="add_item_to_card">Add to Card</button>
                                    <div class="item_sale">
                                        <span>SALE</span>
                                    </div>
                                </div>
                                <div class="item" id="item3">
                                    <img src="assets/img/img_shop/coco_sandelwoo.webp" alt="">
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
                                    <img src="assets/img/img_shop/green_clay.webp" alt="">
                                    <span id="title1" class="title">Green Clay</span>
                                    <span class="price">$85.00</span><br>
                                    <button class="add_item_to_card">Add to Card</button>
                                </div>
                                <div class="item" id="item5">
                                    <img src="assets/img/img_shop/aromatic_blend.webp" alt="">
                                    <span id="title2" class="title">Aromatic Blend</span>
                                    <span class="price_sale">$10.00</span>
                                    <span class="price">$9.50</span><br>
                                    <button class="add_item_to_card">Add to Card</button>
                                    <div class="item_sale">
                                        <span>SALE</span>
                                    </div>
                                </div>
                                <div class="item" id="item6">
                                    <img src="assets/img/img_shop/coconut_milk.webp" alt="">
                                    <span id="title3" class="title">Coconut Milk</span>
                                    <span class="price_sale">$15.00</span>
                                    <span class="price">$85.00</span><br>
                                    <button class="add_item_to_card">Add to Card</button>
                                    <div class="item_sale">
                                        <span>SALE</span>
                                    </div>
                                </div>
                            </div>
                            <div id="no_item">
                                <h1>No Item !!!!</h1>
                                <img src="assets/img/img_shop/no_item.jpg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal">
        <div class="modal__overlay"></div>
        <div class="modal__body">
            <div class="auth_form">
                <div class="auth_form_left">
                    <h1>Welcome!</h1>
                    <span>Login</span>
                    <form action="test.php" class="login_form" method = "post">
                        <label for="email" class="label_input" >Email</label>
                        
                        <?php
                            if(isset($_GET['error'])){
                        ?>
                            <p class="error_title"><?php echo $_GET['error']; ?></p>
                        <?php
                            }
                        ?>
                        
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
                    <img src="assets/img/login_img.avif" alt="">
                    <div class="close_form">
                        <i class="fa-solid fa-xmark"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

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
    
</body>
</html>
