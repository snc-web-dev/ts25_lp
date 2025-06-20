"use strict";

//modal
$(function () {
  $(".menu-trigger").on("click", function () {
    if ($(".menu-trigger").hasClass("active")) {
      $(".menu-trigger").removeClass("active");
    } else {
      $(".menu-trigger").addClass("active");
    }
  });
});
$(function () {
  $(".menu-trigger").on("click", function () {
    if ($(".gnav").hasClass("active")) {
      $(".gnav").removeClass("active");
    } else {
      $(".gnav").addClass("active");
    }
  });
});
$(function () {
  $(".menu-trigger").on("click", function () {
    if ($("body").hasClass("open")) {
      $("body").removeClass("open");
    } else {
      $("body").addClass("open");
    }
  });
});

//ページ内リンククリック時にメニューを閉じる
$(function () {
  $('.gnav a[href*="#"]').on("click", function () {
    $("body").removeClass("open");
    $(".gnav").removeClass("active");
    $(".menu-trigger").removeClass("active");
  });
});

// スクロールするとheader変更
$(function () {
  $(window).on("scroll", function () {
    var sliderHeight = 30;
    if (sliderHeight - 30 < $(this).scrollTop()) {
      $("header").addClass("headerScroll");
    } else {
      $("header").removeClass("headerScroll");
    }
  });
});

//LODINGここから--------------
window.onload = function () {
  var spinner = document.getElementById("loading");
  spinner.classList.add("loaded");
};

//PAGETOP
$(document).ready(function () {
  $("#pageTop").hide();
  $(window).on("scroll", function () {
    if ($(this).scrollTop() > 100) {
      $("#pageTop").fadeIn("fast");
    } else {
      $("#pageTop").fadeOut("fast");
    }
    var scrollHeight = $(document).height();
    var scrollPosition = $(window).height() + $(window).scrollTop();
    var footHeight = $("footer").innerHeight(); //footerの高さ（＝止めたい位置）
    if (scrollHeight - scrollPosition <= footHeight) {
      $("#pageTop").css({
        position: "absolute",
        bottom: footHeight + 20
      });
    }
    if (window.matchMedia("(max-width: 591px)").matches) {
      $("#pageTop").css({
        position: "fixed",
        bottom: "80px"
      });
    } else {
      $("#pageTop").css({
        position: "fixed",
        bottom: "220px"
      });
    }
  });
  $("#pageTop").click(function () {
    $("body,html").animate({
      scrollTop: 0
    }, 400);
    return false;
  });
});

// スムーズスクロール
var headerHeight = $("header").outerHeight();
$('a[href^="#"]').click(function () {
  var href = $(this).attr("href");
  var target = $(href);
  var position = target.offset().top - headerHeight;
  $("body,html").stop().animate({
    scrollTop: position
  }, 300);
  return false;
});

//   スクロールでclass付与
function scrollAddClass() {
  var scrollEffect = document.querySelectorAll(".js-scroll");
  var windowHeight = window.innerHeight;
  for (var i = 0; i < scrollEffect.length; i++) {
    target = scrollEffect[i].getBoundingClientRect().top;
    if (target < windowHeight) {
      scrollEffect[i].classList.add("active");
    }
  }
}
document.addEventListener("DOMContentLoaded", scrollAddClass);
document.addEventListener("scroll", scrollAddClass);

// tab
// $(".content07 dd").hide();
// $(".content07 dl").on("click", function(e){
//     $('dd',this).slideToggle('fast');
//     if($(this).hasClass('open')){
//         $(this).removeClass('open');
//     }else{
//         $(this).addClass('open');
//     }
// });

// $(function () {
//   class ScrollFadeIn {
//     constructor() {
//       let box = document.querySelectorAll(".anm:not(.active)");

//       if (box.length === null) {
//         return;
//       }
//       let controller = new ScrollMagic.Controller();
//       for (let i = 0; i < box.length; i++) {
//         let scene = new ScrollMagic.Scene({
//           triggerElement: box[i],
//           triggerHook: "onEnter",
//           reverse: false,
//           offset: 300,
//         }).addTo(controller);
//         scene.on("enter", () => {
//           box[i].classList.add("active");
//         });
//       }
//     }
//   }
//   new ScrollFadeIn();
// });

document.addEventListener("DOMContentLoaded", function () {
  gsap.registerPlugin(ScrollTrigger);
  var boxes = document.querySelectorAll(".fade:not(.active)");
  boxes.forEach(function (box) {
    gsap.fromTo(box, {
      opacity: 0,
      y: 30
    }, {
      opacity: 1,
      y: 0,
      duration: 0.6,
      ease: "power2.out",
      scrollTrigger: {
        trigger: box,
        start: "top 80%",
        // 画面の80%下あたりで発火
        toggleActions: "play none none none" // 一度だけ実行
      }
    });
  });
});

// アコーディオンをクリックした時の動作
document.querySelectorAll(".acctitle").forEach(function (elem) {
  elem.addEventListener("click", function () {
    // クラス名.boxがついたすべてのアコーディオンを閉じる
    document.querySelectorAll(".accbox").forEach(function (elm) {
      elm.style.display = "none";
    });
    var findElm = this.nextElementSibling; // タイトル直後のアコーディオンを行うエリアを取得

    if (this.classList.contains("close")) {
      // タイトル要素にクラス名closeがあれば
      this.classList.remove("close"); // クラス名を除去
    } else {
      // それ以外は
      document.querySelectorAll(".close").forEach(function (elm) {
        elm.classList.remove("close"); // クラス名closeを全て除去
      });

      this.classList.add("close"); // クリックしたタイトルにクラス名closeを付与し
      if (findElm) {
        findElm.style.display = "block"; // アコーディオンを開く
      }
    }
  });
});