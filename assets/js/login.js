    // Check if there's an error message in the session and display the form accordingly
    //login false
    window.onload = function() {
        const closeForm = document.getElementById('btn_login'); // Use querySelector for class selection
        const modal = document.querySelector('.modal_login'); // Use querySelector for class selection
        const errorMessage = document.getElementById("error_title_login").innerText;
        console.log(errorMessage);
        if (errorMessage !== "") {
            modal.style.display = 'flex';
        }
    };    
    // //signup false
    // window.onload = function() {
    //     const closeForm = document.getElementById('btn_signup'); // Use querySelector for class selection
    //     const modal_signup = document.querySelector('.modal_signup'); // Use querySelector for class selection
    //     const errorMessage = document.getElementById("error_title_signup").innerText;
    //     if (errorMessage !== "") {
    //         modal_signup.style.display = 'flex';
    //     }
    // };

    // window.onload = function() {
    //     const closeForm = document.getElementById('btn_login'); // Use querySelector for class selection
    //     const modal = document.querySelector('.modal_login'); // Use querySelector for class selection
    //     const errorMessage = document.querySelector(".error_title").innerText;
    //     if (errorMessage !== "") {
    //         modal.style.display = 'flex';
    //     }
    // };

    