function del(pet_id){
    
    var conform = confirm("Are you sure delete this ADD");
    
    if(conform == true){
        
        var request = new XMLHttpRequest();
        
        request.onreadystatechange = function (){
            
            if(request.readyState==4 && request.status==200){
                alert(request.responseText);
                location.replace("profile.php");
            }
            
        };
        
        request.open("GET","delete_add.php?pet_id="+pet_id,true);
        request.send();
        
    }
    
}