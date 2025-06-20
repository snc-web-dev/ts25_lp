"use strict";

// ノーマルslider
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

// coverスライド(切り替わり)
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

//縦slider
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