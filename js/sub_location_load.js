function load(){
    

var loc = document.getElementById("location").value;

    alert(loc);

var r = new XMLHttpRequest();
    
    r.onreadystatechange = function (){
        if(r.readyState==4 && r.status==200){
            alert(r.responseText);
           document.getElementById("sublocation").innerHTML=r.responseText;
//           document.getElementById("selct").innerHTML=r.responseText;
//            document.getElementById("s").innerHTML=r.responseText;
        }
    };
    

    r.open("GET","show_sub_locations.php?loc="+loc, true);
    r.send();

}

