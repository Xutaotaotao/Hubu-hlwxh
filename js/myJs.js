/**
 * Created by 徐涛焘 on 2017/8/6.
 */
// *****************************首页***********************//
// 导航栏变色
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
// ****************************资源下载页***********************//
//下载页添加roolIn动效
$("#source-download .col-lg-3").addClass("wow rollIn");
$("#organization .col-md-4").addClass("wow zoomIn");
$("#front-content .col-md-3").addClass("wow bounceInUp");