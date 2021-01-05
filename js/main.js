jQuery(document).ready(function($) {

  // Initiate the wowjs animation library
  new WOW().init();


$(".vote-btn").on("click" ,function () {
	$(this).removeClass("fa-heart-o");
	$(this).addClass("fa-heart");
});

$("#editName").on("click" , function () {
	$(".inputName").removeAttr("disabled");
	$(this).css("display" , "none");
});

$("#accountModal img").on("click" , function () {
	$("#accountModal .inputPicture").click();
});

});
