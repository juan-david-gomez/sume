$(function  () {
	$(document).foundation();
	$(".toggle-menu").click(function  () {
			
			if ($(".menu-movil").hasClass("hide-for-small-only")){
				$(".menu-movil").removeClass("hide-for-small-only");
			}else{
				$(".menu-movil").addClass("hide-for-small-only");
			}

	})
})
