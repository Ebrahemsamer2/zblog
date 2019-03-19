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



	//  Comments Validation
	$(".add-comment form").submit(function() {
		var username, email, comment;

		username = $(".add-comment form input[name='username']").val(); 
		email = $(".add-comment form input[name='email']").val();
		comment = $(".add-comment form textarea").val();

		if(username.length < 8 || username.length > 20) {
			$(".add-comment form p.username-error").fadeIn(500);
			return false;
		}else {
			$(".add-comment form p.username-error").fadeOut(500);
		}

		if(email.length <= 20 || email.length > 100) {
			$(".add-comment form p.email-error").fadeIn(500);
			return false;
		}else {
			$(".add-comment form p.email-error").fadeOut(500);
		}
		if(comment.length < 20 || email.length > 200) {
			$(".add-comment form p.comment-error").fadeIn(500);
			return false;
		}else {
			$(".add-comment form p.comment-error").fadeOut(500);
		}

		return true;
	});

});