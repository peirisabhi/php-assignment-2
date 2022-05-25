function m(l) {
    
    alert(l);

    locationId = l;

//    alert(c);
    var r = new XMLHttpRequest();

    r.onreadystatechange = function() {
        if (r.readyState == 4 && r.status == 200) {
            alert(r.responseText);
            var loc = document.getElementById("sublocation").innerHTML = r.responseText;

        }
    };


    r.open("GET", "show_sub_locations.php?loc=" + l, true);
    r.send();

}