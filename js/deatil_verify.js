
var subLocationId;
var locationId;

function m(l) {

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

function insert() {

    if (subLocationId != null) {

        var street = document.getElementById("street").value;
        var address = document.getElementById("address").value;
        var gender = document.getElementById("gender").value;
        var dob = document.getElementById("dob").value;
        var contact = document.getElementById("contact").value;


//validation

        if (document.getElementById("street").value.length <=0) {
            alert("Insert Your Street");
        } else if (document.getElementById("address").value.length <=0) {
            alert("Insert Your Address");
        } else if (document.getElementById("gender").value.length <=0) {
            alert("Select Your Gender");
        } else if (document.getElementById("dob").value.length <=0) {
            alert("Insert Your Date Of Birth");
        } else if (document.getElementById("contact").value.length <=0) {
            alert("Insert Your Contact No");
        } else {

//        alert(address);
//        alert(street);
//        alert(subLocationId);
//        alert(locationId);
//        alert(gender);
//        alert(dob);
//        alert(contact);

            var r = new XMLHttpRequest();

            r.onreadystatechange = function() {
                if (r.readyState == 4 && r.status == 200) {
                    alert(r.responseText);
                    alert(r.responseText=="Success");
                }
            };


            r.open("GET", "user_address.php?locId=" + locationId + "&subLocId=" + subLocationId + "&street=" + street + "&address=" + address + "&gender=" + gender + "&dob=" + dob + "&contact=" + contact, true);
            r.send();
        }
    } else {
        alert("please select your location");
    }
}

function n(sl) {
    subLocationId = sl;
    alert(subLocationId);
}