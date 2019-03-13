$(function() {

	$(".header ul li.nav-item a.search").click(function() {
		$(".header ul li.nav-item a.search").css("color","#bd1212");
		$(".header form").fadeIn(500);
	});

	$("body").click(function(e) {
		var tagName = e.target.tagName;
		if(tagName !== "I" && tagName !== "INPUT" && tagName !== "FORM"){
			$(".header ul li.nav-item a.search").css("color","#fff");
			$(".header form").fadeOut(500);
		}
	});

});