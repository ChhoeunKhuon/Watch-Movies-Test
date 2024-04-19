function myFunction(){
    document.querySelectorAll('.video-container video').forEach(vid => {
        vid.onclick = () =>{
            document.querySelector('.popup-video').style.display ='block';
            document.querySelector('.popup-video video').src = vid.getAttribute('src');
        }
    });
    document.querySelector('.popup-video span').onclick = () =>{
        document.querySelector('.popup-video').style.display ='none';
    }
}
window.addEventListener("load",initSlider);
function video(){
    var video = document.querySelectorAll('videoa')
        video.forEach(play =>play.addEventListener('click', ()=>{
            play.classList.toggle('active');
            if(play.paused){
                play.play();
            }else{
                play.pause();
                play.currentTime = 0;
            }
        }))
}