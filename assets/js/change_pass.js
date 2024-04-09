window.onload = function() {
    const modal = document.querySelector('.modal_change_pass_success'); // Use querySelector for class selection
    const modal_forgot = document.querySelector('.modal_forgot_pass');
    const errorMessage = document.getElementById('error_title_change_pass').innerText;
    console.log(errorMessage);
    if (errorMessage == "") {
        modal.style.display = 'flex';
        modal_forgot.style.display = 'none';
    }
};