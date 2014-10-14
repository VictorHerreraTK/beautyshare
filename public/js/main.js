$(document).ready(function(){
  var mySwiper = new Swiper('.swiper-container-3',{
      keyboardControl : true,
      paginationClickable: true,
      mode:'horizontal',
      loop: true
  });
	var mySwiper = new Swiper('.swiper-container',{
    	pagination: '.pagination',
    	paginationClickable: true,
    	mode:'horizontal',
    	loop: true
  });
  var mySwiper = new Swiper('.swiper-container-2',{
    	pagination: '.pagination',
    	paginationClickable: true,
    	mode:'horizontal',
    	loop: true
  });
  setInterval(function(){changeBackground()},30000);
  changeBackground();

  $(".inscription-submit-top").click(function(){
    var form = $(".form-horizontal-top");
    submitFunction(form);
  });
  $(".inscription-submit-bottom").click(function(){
    var form = $(".form-horizontal-bottom");
    submitFunction(form);
  });
  
});


function submitFunction(form){
  form.submit();
}

function changeBackground(){
  setTimeout(function(){$(".image-1").fadeOut(2000)},3000);
  //5 seg
  setTimeout(function(){$(".image-2").fadeIn(2000)},8000);
  //10 seg
  setTimeout(function(){$(".image-2").fadeOut(2000)},12000);
  //15seg
  setTimeout(function(){$(".image-3").fadeIn(2000)},18000);
  //20seg
   setTimeout(function(){$(".image-3").fadeOut(2000)},22000);
  //25seg
   setTimeout(function(){$(".image-1").fadeIn(2000)},28000); 
  //30seg
}