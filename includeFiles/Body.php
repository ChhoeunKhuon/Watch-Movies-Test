<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/watchmovies.css">
    <script src="js/watchmovies.js" defer></script>
    <title>Body</title>
</head>
<body>
<div class="containera">
<div class="container">
        <div class="slider">
            <div class="wrapper-holder">
                <div id="slider-img-1"></div>
                <div id="slider-img-2"></div>
                <div id="slider-img-3"></div>
                <div id="slider-img-4"></div>
            </div>
        </div>
        <div class="button-holder">
            <a href="#slider-img-1" class="button"></a>
            <a href="#slider-img-2" class="button"></a>
            <a href="#slider-img-3" class="button"></a>
            <a href="#slider-img-4" class="button"></a>
        </div>
    </div>
    <div class="popular">
        <h1 class="popularmoviestxt">Trending Movies</h1>
        <hr class="hr">
    </div>
    <div class="vdoslider">
        <button id="prev-slide" class="slide-button"><i class="fa fa-chevron-left"></i></button>
        <div class="video-container" onclick="myFunction()">
            <div class="video"><video src="videos/video2.mp4" muted></video></div>
            <div class="video"><video src="videos/video2.mp4" muted></video></div>
            <div class="video"><video src="videos/video1.mp4" muted></video></div>
            <div class="video"><video src="videos/video1.mp4" muted></video></div>
            <div class="video"><video src="videos/video3.mp4" muted></video></div>
            <div class="video"><video src="videos/video4.mp4" muted></video></div>
            <div class="video"><video src="videos/video3.mp4" muted></video></div>
            <div class="video"><video src="videos/video4.mp4" muted></video></div>
            <div class="video"><video src="videos/video2.mp4" muted></video></div>
            <div class="video"><video src="videos/video2.mp4" muted></video></div>
            <div class="video"><video src="videos/video2.mp4" muted></video></div>
            <div class="video"><video src="videos/video2.mp4" muted></video></div>
            <div class="video"><video src="videos/video2.mp4" muted></video></div>
            <div class="video"><video src="videos/video2.mp4" muted></video></div>
            <div class="video"><video src="videos/video2.mp4" muted></video></div>
            <div class="video"><video src="videos/video2.mp4" muted></video></div>
            <div class="video"><video src="videos/video2.mp4" muted></video></div>
            <div class="video"><video src="videos/video2.mp4" muted></video></div>
            <div class="video"><video src="videos/video2.mp4" muted></video></div>
        </div>
        <button id="next-slide" class="slide-button"><i class="fa fa-chevron-right"></i></button>
        <script>
        const initSlider = () =>{
            const videoContainer = document.querySelector(".vdoslider .video-container");
            const slideButtons = document.querySelectorAll(".vdoslider .slide-button");
            slideButtons.forEach(button => {
                button.addEventListener("click", () => {
        const direction = button.id === "prev-slide" ? -1 : 1;
        const scrollAmount = videoContainer.clientWidth * direction;
        videoContainer.scrollBy({
            left: scrollAmount,
            behavior: "smooth"
        });
    });
});
        }
                </script>
    </div>
        <div class="popup-video">
            <span>&times;</span>
            <video src="videos/video0mp4.mp4" muted autoplay controls></video>
        </div>
    </div>
    <hr class="hr">
    <div class="ctn">
        <div class="video-container" onclick="video()">
            <div class="videoa"><video src="videos/video4.mp4" muted></video></div>
            <div class="videoa"><video src="videos/video4.mp4" muted></video></div>
            <div class="videoa"><video src="videos/video4.mp4" muted></video></div>
            <div class="videoa"><video src="videos/video4.mp4" muted></video></div>
            <div class="videoa"><video src="videos/video4.mp4" muted></video></div>
            <div class="videoa"><video src="videos/video4.mp4" muted></video></div>
            <div class="videoa"><video src="videos/video4.mp4" muted></video></div>
            <div class="videoa"><video src="videos/video4.mp4" muted></video></div>
            <div class="videoa"><video src="videos/video4.mp4" muted></video></div>
            <div class="videoa"><video src="videos/video4.mp4" muted></video></div>
            <div class="videoa"><video src="videos/video4.mp4" muted></video></div>
            <div class="videoa"><video src="videos/video4.mp4" muted></video></div>
            <div class="videoa"><video src="videos/video4.mp4" muted></video></div>
            <div class="videoa"><video src="videos/video4.mp4" muted></video></div>
            <div class="videoa"><video src="videos/video4.mp4" muted></video></div>
            <div class="videoa"><video src="videos/video4.mp4" muted></video></div>
            <div class="videoa"><video src="videos/video4.mp4" muted></video></div>
            <div class="videoa"><video src="videos/video4.mp4" muted></video></div>
            <div class="videoa"><video src="videos/video4.mp4" muted></video></div>
            <div class="videoa"><video src="videos/video4.mp4" muted></video></div>
            <div class="videoa"><video src="videos/video4.mp4" muted></video></div>
            <div class="videoa"><video src="videos/video4.mp4" muted></video></div>
            <div class="videoa"><video src="videos/video4.mp4" muted></video></div>
            <div class="videoa"><video src="videos/video4.mp4" muted></video></div>
            <div class="videoa"><video src="videos/video4.mp4" muted></video></div>
        </div>
        <p class="show-more"><a href="" class="fa fa-chevron-down"> Show More</a></p>
    </div>
    <div class="fourkctn">
        <h1 class="txtfourkh">Subcribe Now To Watch High quality Videos (4K)</h1>
        <p class="txtfourk">You need to watch TV and movies in 4K to get the ultimate experience, right? Or is it 8K now? What about UHD? Seriously, what a headache.</p>
        <p class="txtfourk">With media companies racing to offer the best in online video, finding the highest quality picture is like aiming at a constantly moving target.</p>
        <div>
            <img src="Images/vdologo.png" alt="" class="imgbottom">
        </div>
        <div>
            <button class="btnSub"><i class="fa fa-diamond"> Subcribe</i></button>
            <button class="btnSub"><i class="fa fa-mail-forward"> Learn More</i></button>
        </div>
    </div>
</body>
</html>