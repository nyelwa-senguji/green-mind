$(document).ready(function () {
    
    $("#login").click(function (e) { 
        e.preventDefault();
        checkLogin();
    });

});

function checkLogin(){

        var username = $("#username").val();

        var password = $("#password").val();

        if( username != "" && password != ""){
            $.ajax({
                type: "POST",
                url: "repo/check_login.php",
                data: {
                    username: username,
                    password: password
                },
                success: function (response) {
                    if(response == "Success"){
                        window.location.href="dashboard.php";
                    }else{
                        alert("Invalid username/password");
                    }
                }
            });
        }else{
            alert("Please fill in the required data");
        }

}