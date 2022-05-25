function view(event){
//    var path = document.getElementById("imgPath").value;
    alert(event);
    
    var reader = new FileReader();
    var imageField = document.getElementById("imgField");
    
    reader.onload = function (){
        if(reader.readyState == 2){
            imageField.src = reader.result;
        }
    }
    
    reader.readAsDataURL(event.target.files[0]);
    
    
//    var request = new XMLHttpRequest();
//    
//    request.onreadystatechange = function (){
//        
//        if(request.readyState == 4 && request.status == 200){
//            alert(request.responseText);
//        }
//        
//    };
//    
//    
//    request.open("GET","img_view.php?path="+path,true);
//    request.send();
    
}