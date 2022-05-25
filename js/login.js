function login() {
//    alert("ok");

    var email = document.getElementById("email").value;
    var password = document.getElementById("password").value;

    var request = new XMLHttpRequest();
    
    request.onreadystatechange = function (){
        if(request.readyState == 4 && request.status == 200){
            alert(request.responseText);
            alert(request.responseText=="success");
        }
    };
    
    request.open("POST","login_check.php",true);
    request.setRequestHeader("Content-type","application/x-www-form-urlencoded");
    request.send("email="+email+"&password="+password);



}