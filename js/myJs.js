/**
 * Created by 徐涛焘 on 2017/8/6.
 */
(function(){
    pos = 0;
    ticking = false;
    var header = document.querySelector(".navbar-inverse");
    window.addEventListener("scroll", function(e){
        pos = window.scrollY;
        if(pos > 100&&!ticking){
            header.classList.add("scrolledDown");
            ticking = true;
        }
        if(pos < 100 && ticking){
            header.classList.remove("scrolledDown");
            ticking = false;
        }
    });
})();
$