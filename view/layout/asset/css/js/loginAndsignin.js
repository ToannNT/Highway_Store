function signup(e) {
    event.preventDefault();
    var username = document.getElementById("username").value;
    var email = document.getElementById("email").value;
    var password = document.getElementById("password").value;
    var againpassword = document.getElementById("confirm_password").value;
    var user = {
        username: username,
        email: email,
        password: password,
    };
    var json = JSON.stringify(user);
    localStorage.setItem(username, json);

    if (username == "") {
        alert("Please enter your username !!")
    }
    else if (email == "") {
        alert("Please enter your email !!")
    }
    else if (password == "") {
        alert("Please enter your password !!")
    }
    else if (password == "") {
        alert("Please enter your confirm password !!")
    }
    else if (password != againpassword) {
        alert("Passwords are not the same !!")
    }
    else {
        alert("Sign up successfully.")
        window.location.href = "../page/User.html";

    }

}


function login(e) {
    event.preventDefault();
    var username = document.getElementById("username").value;
    var email = document.getElementById("email").value;
    var password = document.getElementById("password").value;
    var user = localStorage.getItem(username);
    // var checkEmail = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    var data = JSON.parse(user);



    if (username == "") {
        alert("Please enter your username !!")
    }
    else if (email == "") {
        alert("Please enter your email !!")
    }
    else if (password == "") {
        alert("Please enter your password !!")
    }
    else if (username == data.username && email == data.email && password == data.password) {
        alert("Successfully sign in.");
        window.location.href = "../index.html";

    }
    else {
        alert("Login failed !!!!!!!!!");
    }



}