function validateLogin() {
    
//    validate password
    var pass,
        pass = document.getElementById("password").value;
    if(pass.length < 8){
        alert("password should be 8 characters or more");
        event.preventDefault();
    }
//    validate email
    var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
    if (reg.test(document.getElementById("email").value) == false){
            alert('Invalid Email Address');
        event.preventDefault();
        }
}

