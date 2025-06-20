"use strict";

//slider
$(".slider").slick({
  slidesToShow: 3.25,
  // slidesToScroll: 4,
  autoplay: true,
  autoplaySpeed: 0,
  speed: 5000,
  cssEase: "linear",
  swipe: false,
  arrows: false,
  // 矢印非表示
  pauseOnFocus: false,
  // スライダーをフォーカスした時にスライドを停止させるか
  pauseOnHover: false,
  // スライダーにマウスホバーした時にスライドを停止させるか
  centerMode: true,
  //追記
  centerPadding: "3%",
  //追記
  vertical: true,
  responsive: [{
    breakpoint: 768,
    settings: {
      slidesToShow: 3,
      vertical: false
    }
  }, {
    breakpoint: 591,
    settings: {
      slidesToShow: 2,
      vertical: false
    }
  }, {
    breakpoint: 414,
    settings: {
      slidesToShow: 2,
      centerMode: true,
      centerPadding: "1.5%",
      vertical: false
    }
  }]
});
$(".slider2").slick({
  slidesToShow: 3.25,
  // slidesToScroll: 4,
  autoplay: true,
  autoplaySpeed: 0,
  speed: 5000,
  cssEase: "linear",
  swipe: false,
  arrows: false,
  // 矢印非表示
  pauseOnFocus: false,
  // スライダーをフォーカスした時にスライドを停止させるか
  pauseOnHover: false,
  // スライダーにマウスホバーした時にスライドを停止させるか
  centerMode: true,
  //追記
  centerPadding: "3%",
  //追記

  responsive: [{
    breakpoint: 768,
    settings: {
      slidesToShow: 3
    }
  }, {
    breakpoint: 591,
    settings: {
      slidesToShow: 2
    }
  }, {
    breakpoint: 414,
    settings: {
      slidesToShow: 2,
      centerMode: true,
      centerPadding: "1.5%"
    }
  }]
});
var $slide = $(".cov-div");
$(".slider1").slick({
  autoplay: true,
  autoplaySpeed: 4000,
  arrows: false,
  dots: false,
  fade: true,
  pauseOnFocus: false,
  pauseOnHover: false,
  pauseOnDotsHover: false,
  speed: 2000
}).on({
  beforeChange: function beforeChange(event, slick, currentSlide, nextSlide) {
    $(".slick-slide", this).eq(currentSlide).addClass("remove-animation");
    $(".slick-slide", this).eq(nextSlide).addClass("add-animation");
  },
  afterChange: function afterChange() {
    $(".remove-animation", this).removeClass("remove-animation add-animation");
  }
});
$slide.find(".slick-slide").eq(0).addClass("add-animation");

// 日本語に切り替え
function langJa() {
  $(".w-jp").css("display", "block"); //日本語を表示
  $(".w-en").css("display", "none"); //英語を非表示
  $(".w-ch").css("display", "none"); //中国語を非表示
  $(".w-co").css("display", "none"); //韓国語を非表示
  if ($(".l-lang__jp").hasClass("active")) {
    $(".l-lang__jp").removeClass("active");
  } else {
    $(".l-lang__jp").addClass("active");
    $(".l-lang__en").removeClass("active");
    $(".l-lang__ch").removeClass("active");
    $(".l-lang__co").removeClass("active");
  }
}
// 英語に切り替え
function langEn() {
  $(".w-en").css("display", "block"); //英語を表示
  $(".w-jp").css("display", "none"); //日本語を非表示
  $(".w-ch").css("display", "none"); //中国語を非表示
  $(".w-co").css("display", "none"); //韓国語を非表示
  if ($(".l-lang__en").hasClass("active")) {
    $(".l-lang__en").removeClass("active");
  } else {
    $(".l-lang__en").addClass("active");
    $(".l-lang__jp").removeClass("active");
    $(".l-lang__ch").removeClass("active");
    $(".l-lang__co").removeClass("active");
  }
}
// 中国語に切り替え
function langCh() {
  $(".w-ch").css("display", "block"); //中国語を表示
  $(".w-jp").css("display", "none"); //日本語を非表示
  $(".w-en").css("display", "none"); //英語を非表示
  $(".w-co").css("display", "none"); //韓国語を非表示
  if ($(".l-lang__ch").hasClass("active")) {
    $(".l-lang__ch").removeClass("active");
  } else {
    $(".l-lang__ch").addClass("active");
    $(".l-lang__en").removeClass("active");
    $(".l-lang__jp").removeClass("active");
    $(".l-lang__co").removeClass("active");
  }
}
// 韓国語に切り替え
function langCo() {
  $(".w-co").css("display", "block"); //韓国語を表示
  $(".w-jp").css("display", "none"); //日本語を非表示
  $(".w-en").css("display", "none"); //英語を非表示
  $(".w-ch").css("display", "none"); //中国語を非表示
  if ($(".l-lang__co").hasClass("active")) {
    $(".l-lang__co").removeClass("active");
  } else {
    $(".l-lang__co").addClass("active");
    $(".l-lang__jp").removeClass("active");
    $(".l-lang__en").removeClass("active");
    $(".l-lang__ch").removeClass("active");
  }
}