function m() {
    var loc = document.getElementById("location").value;
//    alert(loc);

    var r = new XMLHttpRequest();
    
    r.onreadystatechange = function (){
        if(r.readyState==4 && r.status==200){
            alert(r.responseText);
            var loc = document.getElementById("location").innerHTML=r.responseText;
        }
    };
    

    r.open("GET", "loc.php?l="+loc, true);
    r.send();

}

function n() {
    var subloc = document.getElementById("sublocation").value;
    var loc = document.getElementById("loc").value;
//    alert(subloc);
//    alert(loc);

var r = new XMLHttpRequest();
    
    r.onreadystatechange = function (){
        if(r.readyState==4 && r.status==200){
            alert(r.responseText);
//            var loc = document.getElementById("location").innerHTML=r.responseText;
        }
    };
    

    r.open("GET", "subLoc.php?l="+loc+"&sub="+subloc, true);
    r.send();

}

function x(){
//    alert("ppp");

var loc = document.getElementById("loc").value;


var r = new XMLHttpRequest();
    
    r.onreadystatechange = function (){
        if(r.readyState==4 && r.status==200){
            alert(r.responseText);
//            var loc = document.getElementById("select").innerHTML=r.responseText;
            var loc = document.getElementById("select").innerHTML="<option>olll</option>"
            
        }
    };
    

    r.open("GET","show_sub_locations.php?loc="+loc, true);
    r.send();

}

