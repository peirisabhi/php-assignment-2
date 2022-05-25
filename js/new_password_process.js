function reset() {
//    alert("kk");

    var con_new = document.getElementById("con_new").value;
    var new_pw = document.getElementById("new").value;

    if (con_new == new_pw) {
        
        var request = new XMLHttpRequest();
        
        request.onreadystatechange = function (){
        if(request.readyState == 4 && request.status == 200){
//            alert(request.responseText);
            location.replace("login.php");
        }
    };
        
        request.open("POST","new_password_process.php",true);
        request.setRequestHeader("Content-type","application/x-www-form-urlencoded");
        request.send("pw="+new_pw);
        
    } else {
        alert("password does not match")
    }

}