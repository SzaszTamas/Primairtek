let slideIndexes = {
	main: 0,
	heat: 0,
	water: 0,
	vacum: 0,
};
  
let slideImages = {
	main: [
	  "images/mainslideshow/haz.jpg",
	  "images/mainslideshow/airexample.jpg",
	],
	heat: [
	  "images/heatslideshow/futes1.jpg",
	  "images/heatslideshow/futes2.jpg",
	],
	water: [
	  "images/waterslideshow/viz1.jpg",
	  "images/waterslideshow/viz2.jpg",
	  "images/waterslideshow/viz3.jpg",
	],
	vacum: [
	  "images/vacumslideshow/vacum1.jpg",
	  "images/vacumslideshow/vacum2.jpg",
	  "images/vacumslideshow/vacum3.jpg",
	],
};

function sleep(ms) {
    return new Promise(resolve => setTimeout(resolve, ms));
}

function change(ms, img, slides) {
    sleep(ms).then(() => {document.getElementById(slides).src=img;} );
}

function show(ms, img) {
	img.onload = function () {
		$(img).fadeTo(ms, 1);
	};
}

function fade(img, slides, fade_which) {
    $(fade_which).fadeTo(255, 0);
    change(255, img, slides);
    show(255, fade_which);
}

function slideit(direction, slides, fade_which) {
	slideIndexes[slides] += direction;
		if (slideIndexes[slides] > slideImages[slides].length - 1) slideIndexes[slides] = 0;
		if (slideIndexes[slides] < 0) slideIndexes[slides] = slideImages[slides].length - 1;
		fade(slideImages[slides][slideIndexes[slides]], slides, fade_which);
}

setInterval(() => {slideit(1, "main", main); }, 8000);