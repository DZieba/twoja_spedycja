


 document.getElementById("myCheck").addEventListener("click", function(){
 letsCheck(this);
 });



 function letsCheck(obj) {
  if($(obj).is(":checked")){
    $(header).css("height", "400px");
    $('.navbar').css("display", "block");
   
  }else{
    
    $(header).css("height", "130px");
    $('.navbar').css("display", "none");
  }
  
}

window.onresize=function(){
if ($(window).width() > 960) {
  $(header).css("height", "100px");
  $('.navbar').css("display", "flex");
}
else{
  
  $(header).css("height", "130px");
  $('.navbar').css("display", "none");
}

}



 
 window.onload = function(){
  
/*
  var toggleThings=function(){
    if( $('.navbar').hasClass('visible')){
      $('.navbar').removeClass('visible');
    }
    else{
      $('.navbar').addClass('visible');
     
    }
    }
 
 var toggleMe=function(event){
    
     if(event.target.id='ham'){
   
       toggleThings();
     };
    
   }
*/












function initMap() {
  
 var uluru = {lat: 50.3058200, lng: 18.9742000};
 var map = new google.maps.Map(document.getElementById('map'), {
   zoom: 14,
   center: uluru
 });
 var marker = new google.maps.Marker({
   position: uluru,
   map: map
 });
}
initMap();





var slidecount=0;
function slider(){
 var current=$('#clients-list li.active');
 if(current.length==0){
   $('#clients-list li:first-child').addClass('active');
 }
 else{
   var next=current.removeClass('active').next();
   if(next.length==0){
    $('#clients-list li:first-child').addClass('active');
   }
   else{
     next.addClass('active');
   }
 }


    }
    slider();
 setInterval(slider,3500);

    /*
  var current=$('#clients-list li.active');
  if(current.length==0){
   current= $('#clients-list li:first-child');
   current.addClass('active');
    
  }
  else{
    var next=current.removeClass('active').next();
    next.addClass('active');
    
  }

}*/














 }



 function formValidation() {
  var name = document.myForm.name.value;
  var email = document.myForm.email.value;
  var message = document.myForm.message.value;
  
  if (name == null || name == "") {
      
      alert("Imię nie może być puste");
      return false;
  }
  else if (!/^[a-zA-Z]{3,20}$/.test(name)) {
      alert("Imię musi zawierać litery alfabetu");
      document.myForm.name.style.border="2px solid red";
      return false;
  }
  else{
    document.myForm.name.style.border="none";
  }
  if (!/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(email)) {
      alert("Wprowadziłeś niepoprawny adres email")
      document.myForm.email.style.border="2px solid red";
      return false;
  }
  else{
    document.myForm.email.style.border="none";
  }
 
  return true;
} 