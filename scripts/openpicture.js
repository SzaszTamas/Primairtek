$(function() {
	
	function nagyit( holkeres ){
		$(holkeres).children('img').click(function(){
			var link = $(this).attr('src');
			
			link = link.replace("-lowres", "");
			//link  = "http://localhost/primairv2/" + link; console.log(link) //this way is clickable from console
			
			window.open( link ,'_blank');
		})
	}
	
	nagyit(".picturebox1 .airpictures");
	nagyit(".picturebox2 .airpictures");
	nagyit(".picturebox3 .airpictures");
	nagyit(".picturebox4 .airpictures");
  
});