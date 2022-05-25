function signUp(){
//    alert("ok");
    
    document.getElementById("preLoader").className = "progress";

    var fname = document.getElementById("first_name").value;
    var lname = document.getElementById("last_name").value;
    var email = document.getElementById("email").value;
    var password = document.getElementById("password").value;
    var conform_password = document.getElementById("conform_password").value;
    
//    if(password != conform_password){
//        document.getElementById("password").className = "red-text";
//    }

    var request = new XMLHttpRequest();
    
    request.onreadystatechange = function (){
        if(request.readyState == 4 && request.status == 200){
            alert(request.responseText);
            location.replace("email_verify.php");
        }
    };
    
    request.open("POST","register.php",true);
    request.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    request.send("fname="+fname+"&lname="+lname+"&email="+email+"&password="+password);
    
    
}