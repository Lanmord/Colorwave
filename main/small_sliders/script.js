// amount of images and size of one image (for resize tape with slides)
let imageSize = 480;
let imageAmount = document.getElementsByClassName('slide').length;

console.log(imageAmount);
let shiftAmount = 0;
// resizie tape
document.getElementById('row').style.width = (imageSize * imageAmount) + 'px';
// function for shift slides to right
function shiftRight () {
	let row = document.getElementById('row');
	if(shiftAmount == -(imageSize*4)) {
		shiftAmount = 0;
	} else {
		shiftAmount -= imageSize;
	}
	row.style.left = shiftAmount + 'px';
}
// function for shift slides to left
function shiftLeft () {
	let row = document.getElementById('row');
	if(shiftAmount == 0) {
		shiftAmount = -imageSize*4;
	} else {
		shiftAmount += imageSize;
	}
	row.style.left = shiftAmount + 'px';
}

// create event listener for buttons 
document.getElementById('button-right').addEventListener('click', shiftRight);
document.getElementById('button-left').addEventListener('click', shiftLeft);