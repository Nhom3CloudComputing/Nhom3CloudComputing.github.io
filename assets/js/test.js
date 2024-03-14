// const values = ['Pearl Powder', 'Lavender', 'Pearl Powder'];

// // Hiển thị giá trị trong từng box
// document.getElementById('title0').textContent = values[0];
// document.getElementById('title1').textContent = values[1];
// document.getElementById('title2').textContent = values[2];

// // Xử lý sự kiện tìm kiếm
// document.getElementById('searchInput').addEventListener('input', function() {
//     const searchTerm = this.value.toLowerCase();
    
//     values.forEach((value, index) => {
//         const box = document.getElementById(`item${index + 1}`);
        
//         if (value.toLowerCase().includes(searchTerm)) {
//             item.style.display = 'inline-block';
//         } else {
//             item.style.display = 'none';
//         }
//     });
// });

document.getElementById("myLink").addEventListener("focus", function() {
    this.innerText = "Nhấn vào đây"; // Thay đổi nội dung của phần tử khi được focus
});

document.getElementById("myLink").addEventListener("blur", function() {
    this.innerText = "Click here"; // Khôi phục lại nội dung ban đầu khi mất focus
});
