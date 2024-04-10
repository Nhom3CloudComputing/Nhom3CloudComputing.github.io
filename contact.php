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
    <link rel="stylesheet" type="text/css" href="assets/css/contact.css">
    <link rel="stylesheet" type="text/css" href="assets/css/shop.css">
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
    <div class=" body_contact">
        <div class ="img1">
            <img class ="image1" src="https://ik.imagekit.io/141023q/img1.webp?updatedAt=1712673002018" alt="">
        </div>
        <div class="text_img1">
            <div class = "title_no1">
                <span> GET IN TOUCH </span>
            </div>
            <div class = "inf_no1">
                <div class = "left_no1">
                    <h2>Opening Hours</h2>
                    <span> Mon - Fri: 8am - 8pm </span>       
                    <span> ​​Saturday: 9am - 7pm </span>
                    <span> ​​Sunday: 9am - 8pm </span>
                </div>

                <div class = "right_no1">
                    <h2>Opening Hours</h2>
                    <span> 500 Terry Francine Street </span>       
                    <span> ​San Francisco, CA 94158 </span>
                    <span> ​123-456-7890 </span>
                </div>
            </div>
            <div class = "mail1">
                <span>info@mysite.com</span>
            </div>
        </div>
    </div>

    <div class ="body_conect">
        <div class = "inf_cnt">
            <div class = "title_no2">
                <span>LET'S STAY </span>
                <span>CONNECTED</span>
            </div>
            <div class = "inf_no2">
                <span>
                    If you have questions or special inquiries,you're welcome to contact me or fill out this form</span>
            </div>
            <div class = "formm">
                <!-- <div class = "infor_cnt">
                    <div class = "left_cnt">
                        <span>First Name*</span><br>
                        <input type="text" name="fname" style="background-color: #D7D7CB; height: 35px;" >
                    </div>
                    <div class = "right_cnt">
                        <span>Last Name*</span><br>
                        <input type="text" name="fname" style="background-color: #D7D7CB; height: 35px;" >
                    </div>
                </div>
                <div class = "infor_cnt">
                    <div class = "left_cnt">
                        <span>First Name*</span><br>
                        <input type="text" name="fname" style="background-color: #D7D7CB; height: 35px;" >
                    </div>
                    <div class = "right_cnt">
                        <span>Last Name*</span><br>
                        <input type="text" name="fname" style="background-color: #D7D7CB; height: 35px;" >
                    </div>
                </div>
                <div class = "mail_cnt">
                        <span>Leave me a message...</span><br>
                        <input type="text" name="fname" style="background-color: #D7D7CB; height: 100px; width: 400px;">
                </div>
                <div class = "submitt">
                    <input type="submit" style="font-family: sans-serif; color: white; background-color: #5E5E4A; height: 40px; width: 90px;">
                </div>    -->
                <iframe aria-label='Điền thông tin liên hệ' class="form_contact" frameborder="0" style=""
                 src='https://forms.zohopublic.com/vietthanh2003pe/form/Linh/formperma/cO1uOIM5bSTmXNcCc3rEPVdCixcSModmAYgCX3vOw20'></iframe>
            </div>
         </div>    

         <div class = "img_cnt">
            <img src="">
         </div>
    </div>

    <div class = "back_video">
        <div class="video_back">
            <video autoplay muted loop class="myVideo">
                <source src="https://ik.imagekit.io/141023q/file.mp4?updatedAt=1712673004599" type="video/mp4">
              </video>
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
                <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAFqyiPh8kFZbDUHCPzmkADnyBCVPE1dRE&callback=initMap"></script>
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
