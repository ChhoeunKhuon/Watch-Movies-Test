function videoList(){
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