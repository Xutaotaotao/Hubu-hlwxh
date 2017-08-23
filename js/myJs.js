/**
 * Created by 徐涛焘 on 2017/8/6.
 */
// *****************************首页***********************//
// 导航栏变色
(function() {
    pos = 0;
    ticking = false;
    var header = document.querySelector(".navbar-inverse");
    window.addEventListener("scroll", function(e) {
        pos = window.scrollY;
        if (pos > 100 && !ticking) {
            header.classList.add("scrolledDown");
            ticking = true;
        }
        if (pos < 100 && ticking) {
            header.classList.remove("scrolledDown");
            ticking = false;
        }
    });
})();

//下载页添加roolIn动效
$("#source-download .col-lg-3").addClass("wow rollIn");
// 组织结构添加zoomIn动效
$("#organization .col-md-4").addClass("wow zoomIn");
// 前端导航体内容添加bounceInup动效
$("#front-content .col-md-3").addClass("wow bounceInUp");
$(".ngg-gallery-thumbnail-box ").addClass("wow rollIn");