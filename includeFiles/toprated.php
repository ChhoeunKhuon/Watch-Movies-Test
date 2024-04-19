<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/movies.css">
    <title>List</title>
</head>
<body>
<div class="subcribe-content">
<div>
            <img src="Images/vdologo.png" alt="" class="imgbottom">
        </div>
    <div class="txtsubc">
        <h1 class="txtsubcribes">Subcribe Now To Watch High quality Videos (4K)</h1>
        <p class="txtsubcribe">You need to watch TV and movies in 4K to get the ultimate experience, right? Or is it 8K now? What about UHD? Seriously, what a headache.</p>
        <p class="txtsubcribe">With media companies racing to offer the best in online video, finding the highest quality picture is like aiming at a constantly moving target.</p>
        <div class="btns">
        <button class="sub-btn"><i class="fa fa-diamond"> Subcribe</i></button></div>
        </div>
</div>
<hr class="hr">
<div>
<?php include('midnarbar.php'); ?>
</div>
<hr class="hr">
<div class="ctn">
        <div class="video-container" onclick="video()">
            <div class="videoa"><video src="videos/video1.mp4" muted></video></div>
            <div class="videoa"><video src="videos/video1.mp4" muted></video></div>
            <div class="videoa"><video src="videos/video1.mp4" muted></video></div>
            <div class="videoa"><video src="videos/video1.mp4" muted></video></div>
            <div class="videoa"><video src="videos/video1.mp4" muted></video></div>
            <div class="videoa"><video src="videos/video1.mp4" muted></video></div>
            <div class="videoa"><video src="videos/video1.mp4" muted></video></div>
            <div class="videoa"><video src="videos/video1.mp4" muted></video></div>
            <div class="videoa"><video src="videos/video1.mp4" muted></video></div>
            <div class="videoa"><video src="videos/video1.mp4" muted></video></div>
            <div class="videoa"><video src="videos/video1.mp4" muted></video></div>
            <div class="videoa"><video src="videos/video1.mp4" muted></video></div>
            <div class="videoa"><video src="videos/video1.mp4" muted></video></div>
            <div class="videoa"><video src="videos/video1.mp4" muted></video></div>
            <div class="videoa"><video src="videos/video1.mp4" muted></video></div>
            <div class="videoa"><video src="videos/video1.mp4" muted></video></div>
            <div class="videoa"><video src="videos/video1.mp4" muted></video></div>
            <div class="videoa"><video src="videos/video1.mp4" muted></video></div>
            <div class="videoa"><video src="videos/video1.mp4" muted></video></div>
            <div class="videoa"><video src="videos/video1.mp4" muted></video></div>
            <div class="videoa"><video src="videos/video1.mp4" muted></video></div>
            <div class="videoa"><video src="videos/video1.mp4" muted></video></div>
            <div class="videoa"><video src="videos/video1.mp4" muted></video></div>
            <div class="videoa"><video src="videos/video1.mp4" muted></video></div>
            <div class="videoa"><video src="videos/video1.mp4" muted></video></div>
        </div>
        <p class="show-more"><a href="" class="fa fa-chevron-down"> Show More</a></p>
        <div class="popup-video">
            <span>&times;</span>
            <video src="videos/video0mp4.mp4" muted autoplay controls></video>
        </div>
    </div>
    <script>
        document.querySelectorAll('.video-container video').forEach(vid => {
        vid.onclick = () =>{
            document.querySelector('.popup-video').style.display ='block';
            document.querySelector('.popup-video video').src = vid.getAttribute('src');
        }
    });
    document.querySelector('.popup-video span').onclick = () =>{
        document.querySelector('.popup-video').style.display ='none';
    }
window.addEventListener("load",initSlider);
    </script>
</body>
</html>