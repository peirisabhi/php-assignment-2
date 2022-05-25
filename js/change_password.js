function change() {

    var conform = confirm("Are you change your password");

    if (conform == true) {

        var current_pw = document.getElementById("current_password").value;
        var new_pw = document.getElementById("new_password").value;



        var request = new XMLHttpRequest();

        request.onreadystatechange = function() {
            if (request.readyState == 4 && request.status == 200) {
                alert(request.responseText);
            }
        };


        request.open("POST", "user_change_password.php", true);
        request.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        request.send("current_password=" + current_pw + "&new_password=" + new_pw);

    }


}