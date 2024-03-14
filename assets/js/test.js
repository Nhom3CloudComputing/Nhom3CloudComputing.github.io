const values = ['Pearl Powder', 'Lavender', 'Pearl Powder'];

// Hiển thị giá trị trong từng box
document.getElementById('title0').textContent = values[0];
document.getElementById('title1').textContent = values[1];
document.getElementById('title2').textContent = values[2];

// Xử lý sự kiện tìm kiếm
document.getElementById('searchInput').addEventListener('input', function() {
    const searchTerm = this.value.toLowerCase();
    
    values.forEach((value, index) => {
        const box = document.getElementById(`item${index + 1}`);
        
        if (value.toLowerCase().includes(searchTerm)) {
            item.style.display = 'inline-block';
        } else {
            item.style.display = 'none';
        }
    });
});
