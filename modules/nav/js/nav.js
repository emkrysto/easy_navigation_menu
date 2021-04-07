<script>
	$(document).ready(function() 
	{
		var topnav = $(".topnav");

		$( ".nav_icon" ).on( "click", function() {
			
			if (!topnav.hasClass("responsive")) {
				topnav.addClass("responsive");
			} else {
				topnav.removeClass("responsive");
			}
		})

		change_gradient();
	
		$( window ).resize(function() 
		{
			change_gradient();
		});

		function change_gradient() {
			if(topnav.height() <= 31) {
				topnav.addClass("nav-normal").removeClass("nav-repeat");	
			} else {
				topnav.addClass("nav-repeat").removeClass("nav-normal");	
			}
		}
	})
</script>