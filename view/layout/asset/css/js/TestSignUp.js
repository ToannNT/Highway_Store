function signup(e) {
    event.preventDefault();
    var username = document.getElementById("username").value;
    var email = document.getElementById("email").value;
    var password = document.getElementById("password").value;
    var user = {
        username: username,
        email: email,
        password: password,
    };
    var json = JSON.stringify(user);
    localStorage.setItem(username, json);

    if (username == "" || email == "" || password == "") {
        alert("Đăng nhập không thành công");
    }
    else {
        alert("Đăng nhâp thành công ")
    }

}

function login(e) {
    event.preventDefault();
    var username = document.getElementById("username").value;
    var email = document.getElementById("email").value;
    var password = document.getElementById("password").value;
    var user = localStorage.getItem(username);
    var data = JSON.parse(user);


    if (username == "") {
        alert("Vui lòng nhập username va password");
    } else if (username == data.username && email == data.email && password == data.password) {
        alert("Đăng nhập thành công");
        // window.location.href = "";
    } else {
        alert("Đăng nhập thất bại");
    }


}