var myVar;

function contact_me(){
    // (A) GET FORM DATA
    var data = new FormData();

    data.append("name", document.getElementById("contact-name").value);
    data.append("email", document.getElementById("contact-email").value);
    data.append("fone", document.getElementById("contact-fone").value);
    data.append("message", document.getElementById("contact-message").value);


    // Display the values
    // for (var value of data.values()) {
    //     console.log(value);
    // }

    $('#loading_message').removeAttr("hidden");

    // (B) AJAX
    var xhr = new XMLHttpRequest();
    xhr.open("POST", "5ece4797eaf5e/dummy.php");

    // What to do when server responds
    xhr.onload = function(){
        if(this.response  == 'Message has been sent') {
            $('.circle-loader').toggleClass('load-complete');
            $('.checkmark').toggle();

            myVar = setInterval(hidden_loader, 3000);

            document.getElementById("contact-name").value = "";
            document.getElementById("contact-email").value = "";
            document.getElementById("contact-fone").value = "";
            document.getElementById("contact-message").value = "";

        } else {
            $('#loading_message').attr("hidden", "true");
            console.log(this.response);
        }
    };
    xhr.send(data);

    // (C) PREVENT HTML FORM SUBMIT
    return false;
}

function hidden_loader() {
    $('#loading_message').attr("hidden", "true");
    document.getElementsByClassName('circle-loader')[0].classList.remove('load-complete');
    $('.checkmark').toggle();
    clearInterval(myVar);
}
