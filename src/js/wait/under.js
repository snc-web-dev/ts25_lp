// tab
// タブの切り替えアクション
document.addEventListener("DOMContentLoaded", function () {
  // タブにクリックイベントリスナーを設定
  var tabs = document.querySelectorAll(".tab");
  tabs.forEach(function (tab, index) {
    tab.addEventListener("click", function () {
      // 全てのタブとパネルから'active'クラスを削除
      document.querySelectorAll(".tab, .panel").forEach(function (el) {
        el.classList.remove("active");
      });

      // クリックされたタブに'active'クラスを追加
      this.classList.add("active");

      // 対応するパネルに'active'クラスを追加
      var panels = document.querySelectorAll(".panel");
      if (panels[index]) {
        panels[index].classList.add("active");
      }
    });
  });
});

// アコーディオンをクリックした時の動作
document.querySelectorAll(".acctitle").forEach(function (elem) {
  elem.addEventListener("click", function () {
    console.log("obj=");
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

// ページが読み込まれた際にopenクラスをつけ、openがついていたら開く動作
window.addEventListener("load", function () {
  var firstSection = document.querySelector(
    ".accordion-area li:first-of-type section"
  );
  if (firstSection) {
    firstSection.classList.add("open"); // accordion-areaのはじめのliにあるsectionにopenクラスを追加
    document.querySelectorAll(".open").forEach(function (element) {
      var Title = element.querySelector(".acctitle");
      var Box = element.querySelector(".accbox");
      if (Title) {
        Title.classList.add("close");
      }
      if (Box) {
        Box.style.display = "block"; // アコーディオンを開く
      }
    });
  }
});

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
