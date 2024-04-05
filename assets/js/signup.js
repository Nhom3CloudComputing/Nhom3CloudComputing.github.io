    //signup success

    window.onload = function() {
        const modal = document.querySelector('.modal_signup'); // Use querySelector for class selection
        const errorMessage = document.getElementById("error_title_signup").innerText;
        const successMessage = document.getElementById("success_title_signup").innerText;
        const suc_modal = document.querySelector('.modal_signup_success');
        console.log(errorMessage);
        if (successMessage !== "") {
            modal.style.display = 'none';
            suc_modal.style.display = 'flex';
        }
    };   