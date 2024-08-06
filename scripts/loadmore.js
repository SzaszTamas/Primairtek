$(document).ready(function(){
    $('.pictureborder1 p').click(function(){
		
		if ($(this).text()=="Mai multe..."){
			$('.picturebox1').addClass("open1");
			$(this).text("Mai Puțin...");
		} else {
			$('.picturebox1').removeClass("open1");
			$(this).text("Mai multe...");
		}
			
    });
	
	 $('.pictureborder2 p').click(function(){
		
		if ($(this).text()=="Mai multe..."){
			$('.picturebox2').addClass("open2");
			$(this).text("Mai Puțin...");
		} else {
			$('.picturebox2').removeClass("open2");
			$(this).text("Mai multe...");
		}
			
    });
	
	$('.pictureborder3 p').click(function(){
		
		if ($(this).text()=="Mai multe..."){
			$('.picturebox3').addClass("open3");
			$(this).text("Mai Puțin...");
		} else {
			$('.picturebox3').removeClass("open3");
			$(this).text("Mai multe...");
		}
			
    });
	
	$('.pictureborder4 p').click(function(){
		
		if ($(this).text()=="Mai multe..."){
			$('.picturebox4').addClass("open4");
			$(this).text("Mai Puțin...");
		} else {
			$('.picturebox4').removeClass("open4");
			$(this).text("Mai multe...");
		}
			
    });
});