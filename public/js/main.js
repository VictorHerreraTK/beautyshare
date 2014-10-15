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
  setInterval(function(){changeBackground()},12000);
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
  setTimeout(function(){$(".image-1").fadeOut(2000)},4000);
  //6 seg
  setTimeout(function(){$(".image-2").fadeIn(2000)},4000);
  //6 seg
  setTimeout(function(){$(".image-2").fadeOut(2000)},10000);
  //12seg
  setTimeout(function(){$(".image-1").fadeIn(2000)},10000);
  //12seg
}

