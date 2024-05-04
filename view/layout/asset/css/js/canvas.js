// var canvas = document.getElementById("field");
// canvas.width = window.innerWidth;
// canvas.height = window.innerHeight;

// var ctx = canvas.getContext('2d');


// function Snow() {
//     this.x = Math.round(Math.random() * canvas.width);
//     this.y = Math.round(Math.random() * canvas.height);
//     this.r = Math.round(Math.random()) * 6  + 2 + 1;

// }


// Snow.prototype.update = function () {
//     ctx.beginPath();
//     ctx.fillStyle = '#ffffff';
//     ctx.arc(this.x, this.y, this.r, 0, Math.PI * 2, false);
//     ctx.fill();
//     ctx.closePath();

//     this.y += 3;
//     if (this.y > canvas.height) {
//         this.y = 0;
//     }

// }


// var totalSnows = 100;
// var Snows = [];

// function fallingSnows() {
//     ctx.clearRect(0, 0, canvas.width, canvas.height);
//     for (var i = 0; i < totalSnows; i++) {
//         Snows[i].update();
//     }
// }

// window.onload = function () {
//     for (var i = 0; i < totalSnows; i++) {
//         Snows.push(new Snow());
//     }
//     setInterval(fallingSnows, 35);
// }