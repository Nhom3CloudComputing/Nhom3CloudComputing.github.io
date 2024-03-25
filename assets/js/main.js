//hien thong tin cart qua click icon cart
document.addEventListener('DOMContentLoaded', function() {
    const closeForm = document.querySelector('.header_right_icon_bag');
    const modal = document.querySelector('.modal_cart');
    closeForm.addEventListener('click', function() {
        modal.style.display = 'flex';
    });
});

//dong cart qua modal
document.addEventListener('DOMContentLoaded', function() {
    const closeForm = document.querySelector('.modal__overlay_cart');
    const modal = document.querySelector('.modal_cart');
    closeForm.addEventListener('click', function() {
        modal.style.display = 'none';
    });
});

//dong thong tin cart qua icon
document.addEventListener('DOMContentLoaded', function() {
    const closeForm = document.querySelector('.close_inf_cart');
    const modal = document.querySelector('.modal_cart');

    closeForm.addEventListener('click', function() {
        modal.style.display = 'none';
    });
});

//dong form login 
document.addEventListener('DOMContentLoaded', function() {
    const closeForm = document.querySelector('.close_form');
    const modal = document.querySelector('.modal');

    closeForm.addEventListener('click', function() {
        modal.style.display = 'none';
    });
});

//tim kiem san pham qua ten san pham

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

//dong form login

document.addEventListener('DOMContentLoaded', function() {
    const closeForm = document.querySelector('.close_form');
    const modal = document.querySelector('.modal_login');

    closeForm.addEventListener('click', function() {
        modal.style.display = 'none';
    });
});


//product 

//gan gia tri cho the so luong trong thong tin san pham

document.getElementById("input_quantity_product").value = "1";

//

document.addEventListener('DOMContentLoaded', function(){
    var select = this.documentElement.querySelectorAll('.product_title_click');
    select.forEach(function(select){
        select.addEventListener('click', function(){
            select.forEach(function(element){
                if(element!==select){
                    element.classList.add('hidden');
                }
            });
            select.classList.select('hidden');
        });
    });
});