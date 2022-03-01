window.onload = populateGallery(91);
function populateGallery(total) {
    var wall = document.getElementById("pictureHolder");
    for (var i = 1; i <= total; i++) {
        var currImg = document.createElement("img");
        currImg.src = "GalleryPics/" + i + ".jpg";
        currImg.style =
            "margin:5px;border:20px solid transparent;-webkit-border-image: url('Frame.jpg') 20 round;border-image: url('Frame.jpg') 20 round;";
        wall.appendChild(currImg);
    }
}
