function addLocation(){
    alert("okk");  
}

function n(id){
//    alert(id);
    
    var r = new XMLHttpRequest();

    r.onreadystatechange = function() {
        if (r.readyState == 4 && r.status == 200) {
            alert(r.responseText);
//            var loc = document.getElementById("sublocation").innerHTML = r.responseText;

        }
    };


    r.open("GET", "add_location_info.php?loc=" + id, true);
    r.send();
    
}