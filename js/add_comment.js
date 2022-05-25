function add(add_id) {

    var comment = document.getElementById("comment").value;

//    alert(comment);
//    alert(add_id);

    if (comment != "") {
        var request = new XMLHttpRequest();


        request.onreadystatechange = function() {
            if (request.readyState == 4 && request.status == 200) {
                alert(request.responseText);
                var comment = document.getElementById("comment").innerHTML = "";
            }
        };


        request.open("GET", "add_comment.php?add_id=" + add_id + "&comment=" + comment, true);
        request.send();
    } else {
        alert("please type your comment");
    }



}


function report(add_id) {

    var reason = document.getElementById("reason").value;
    var message = document.getElementById("message").value;


    var request = new XMLHttpRequest();

    request.onreadystatechange = function() {
        if (request.readyState == 4 && request.status == 200) {
            alert(request.responseText);
        }
    };

    request.open("GET", "report.php?reason=" + reason + "&message=" + message + "&add_id=" + add_id, true);
    request.send();

}

function sendMessage(add_id, user_id) {

    var msg = document.getElementById("sendMsg").value;


//    alert(add_id);
//    alert(user_id);
//    alert(msg);

    var request = new XMLHttpRequest();

    request.onreadystatechange = function() {
        if (request.readyState == 4 && request.status == 200) {
            alert(request.responseText);
        }
    };

    request.open("GET", "sendMessage.php?add_id=" + add_id + "&to=" + user_id + "&msg=" + msg, true);
    request.send();


}