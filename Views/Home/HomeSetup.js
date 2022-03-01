function slideshowCreator(lastPic, folder, id1, id2, interval, delay) {
    //Must have at least three pictures
    var img0 = document.getElementById(id1);
    var img1 = document.getElementById(id2);
    var counter = 0;
    var currentPic = 3;
    setInterval(function () {
        if (counter == 0) {
            $(img0).animate({ opacity: 0 }, delay);
            setTimeout(function () {
                img0.src = folder + "/" + currentPic + ".jpg";
            }, delay);
            $(img1).animate({ opacity: 1 }, delay);
            counter = 1;
        } else {
            $(img1).animate({ opacity: 0 }, delay);
            setTimeout(function () {
                img1.src = folder + "/" + currentPic + ".jpg";
            }, delay);
            $(img0).animate({ opacity: 1 }, delay);
            counter = 0;
        }
        currentPic++;
        if (currentPic > lastPic) {
            currentPic = 1;
        }
    }, interval);
}

slideshowCreator(15, "Frame1", "img11", "img12", 2500, 500);
slideshowCreator(15, "Frame2", "img21", "img22", 3500, 500);
slideshowCreator(12, "Frame3", "img31", "img32", 4500, 500);
slideshowCreator(15, "Frame4", "img41", "img42", 5500, 500);
