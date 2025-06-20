const { src, dest, watch, series, parallel } = require("gulp");
const gulp = require("gulp");
// Sass
const sass = require("gulp-sass")(require("sass"));
const plumber = require("gulp-plumber"); // エラーが発生しても強制終了させない
const notify = require("gulp-notify"); // エラー発生時のアラート出力
const postcss = require("gulp-postcss"); // PostCSS利用
const cssnext = require("postcss-cssnext"); // CSSNext利用
const cleanCSS = require("gulp-clean-css"); // 圧縮
const rename = require("gulp-rename"); // ファイル名変更
const sourcemaps = require("gulp-sourcemaps"); // ソースマップ作成
const mqpacker = require("css-mqpacker"); //メディアクエリをまとめる
const tailwindcss = require("tailwindcss");
const tailwindConfig = require("./tailwind.config.js");
//js babel
const babel = require("gulp-babel");
const uglify = require("gulp-uglify");
// Html
const htmlmin = require("gulp-htmlmin");
const CleanCSS = require("clean-css");
//ブラウザリロード
const browserSync = require("browser-sync");
// php対応
const connectPhp = require("gulp-connect-php");

const browsers = [
  "last 2 versions",
  "> 5%",
  "ie = 11",
  "not ie <= 10",
  "ios >= 8",
  "and_chr >= 5",
  "Android >= 5",
];

//参照元パス
const srcPath = {
  css: "src/sass/**/**.scss",
  js: "src/js/**/**.js",
  img: "src/img/**/*",
  video: "src/videos/**/*",
  index: "./src/**.php",
  php: "src/php/**/**.php",
};

//出力先パス
const destPath = {
  css: "./dist/css/",
  js: "./dist/js/",
  img: "./dist/img/",
  video: "./dist/videos/",
  index: "./dist/",
  php: "./dist/php/",
};

// postcss
// const postcssPlugins = [tailwindcss, mqpacker(), cssnext(browsers)];

// sassコンパイル
const SassCompile = () => {
  return (
    src(srcPath.css)
      .pipe(sourcemaps.init())
      .pipe(
        plumber(
          //エラーが出ても処理を止めない
          {
            errorHandler: notify.onError("Error:<%= error.message %>"),
            //エラー出力設定
          }
        )
      )
      .pipe(sass({ outputStyle: "expanded" }))
      // .pipe(postcss([tailwindcss(tailwindConfig), mqpacker(), cssnext(browsers)])) // メディアクエリを圧縮
      .pipe(sourcemaps.write("/maps")) //ソースマップの出力
      .pipe(dest(destPath.css))
      .pipe(cleanCSS())
      .pipe(rename({ extname: ".min.css" }))
      .pipe(dest(destPath.css))
  );
};

// jsコンパイル
const JsCompile = () => {
  return src(srcPath.js)
    .pipe(
      plumber({
        errorHandler: notify.onError("Error: <%= error.message %>"),
      })
    )
    .pipe(
      babel({
        presets: ["@babel/preset-env"],
      })
    )
    .pipe(dest(destPath.js))
    .pipe(uglify())
    .pipe(rename({ extname: ".min.js" }))
    .pipe(dest(destPath.js));
};

// html最適化
const HtmlMinify = (done) => {
  return gulp
    .src(srcPath.index)
    .pipe(
      htmlmin({
        collapseWhitespace: true, // スペースを削除
      })
    )
    .pipe(gulp.dest(destPath.index));
};

// php最適化
const PhpMinify = (done) => {
  return gulp
    .src(srcPath.php)
    .pipe(
      htmlmin({
        collapseWhitespace: true, // スペースを削除
      })
    )
    .pipe(gulp.dest(destPath.php));
};

// 画像をコピー
const copyImages = () => {
  return src(srcPath.img).pipe(dest(destPath.img));
};

// PDFをコピー
const copyPdfs = () => {
  return src(srcPath.pdf, { encoding: false }).pipe(dest(destPath.pdf));
};

//ローカルサーバー立ち上げ、ファイル監視と自動リロード
const browserSyncFunc = () => {
  connectPhp.server(
    { base: "./dist", port: 8010, keepalive: true },
    function () {
      browserSync.init({
        proxy: "127.0.0.1:8010", // connect-phpのポートに合わせる
        port: 8080,
        open: true,
        notify: false,
      });
    }
  );
};

//リロード
const browserSyncReload = (done) => {
  browserSync.reload();
  done();
};

// PHPファイルの監視
const watchPhp = () => {
  gulp.watch(srcPath.php, series(PhpMinify, browserSyncReload));
};

// タスク化
exports.SassCompile = SassCompile;
exports.HtmlMinify = HtmlMinify;
exports.PhpMinify = PhpMinify;

// 監視ファイル
const watchFiles = () => {
  gulp.watch(srcPath.css, series(SassCompile, browserSyncReload));
  gulp.watch(srcPath.js, series(JsCompile, browserSyncReload));
  gulp.watch(srcPath.index, series(HtmlMinify, browserSyncReload));
  gulp.watch(srcPath.img, series(browserSyncReload));
  gulp.watch(srcPath.img, series(copyImages, browserSyncReload));
  gulp.watch(srcPath.php, series(watchPhp));
};

// タスク実行
exports.default = gulp.series(
  gulp.series(SassCompile, JsCompile, HtmlMinify, PhpMinify, copyImages),
  gulp.parallel(watchFiles, browserSyncFunc)
);
