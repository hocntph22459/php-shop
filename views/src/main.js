var images = [];
for (var i = 1; i < 3; i++) {
    images[i] = new Image();
    images[i].src = "image/banner/slide" + i + ".jpg";
}
var index = 0;
function next() {
    index++;
    if (index >= images.length) {
        index = 1;
    }
    var slide = document.getElementById("slide");
    slide.src = images[index].src;
}

setInterval(() => {
    next()
}, 2000);