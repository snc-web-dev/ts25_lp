<?php
// ブラウザの言語を取得
$lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);

// 対応言語に応じてリダイレクト
switch ($lang) {
    case 'en':
        header("Location: /en/");
        exit;
    case 'zh':
        header("Location: /zh/");
        exit;
    case 'ko':
        header("Location: /ko/");
        exit;
    default:
        // 日本語（デフォルト）を表示
        break;
}
?>
<!-- キャッシュクリア(画像は非対応) -->
<?php
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Pragma: no-cache");
header("Expires: Wed, 11 Jan 1984 05:00:00 GMT");
?>
<!doctype html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>七夕スカイランタン祭り2025 | 今年で7回目！日本最大の七夕祭り</title>
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <meta name="description" content="今年で7回目となる『七夕スカイランタン祭り』。夏の夜空に願いを込めたスカイランタンを一斉に浮かべる感動のひとときを、新しい夏の風物詩に。2025年もよりパワーアップした内容で皆さんをお待ちしています！">

    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-7GL9HGS717"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-7GL9HGS717');
        gtag('config', 'AW-674714280');
    </script>
    <!-- Google Tag Manager -->
    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-5BRFWMRC');
    </script>
    <!-- End Google Tag Manager -->

    <!-- OGP -->
    <meta property="og:type" content="website">
    <meta property="og:title" content="七夕スカイランタン祭り2025 | 今年で7回目！日本最大の七夕祭り">
    <meta property="og:site_name" content="七夕スカイランタン祭り2025 | 今年で7回目！日本最大の七夕祭り">
    <meta property="og:url" content="https://snc-ts.com/snc-lp"><!-- サイトURL -->
    <meta property="og:image" content="https://snc-ts.com/img/ogp.webp"><!-- 1200x630推奨 -->
    <meta property="og:description" content="年で7回目となる『七夕スカイランタン祭り』。夏の夜空に願いを込めたスカイランタンを一斉に浮かべる感動のひとときを、新しい夏の風物詩に。2025年もよりパワーアップした内容で皆さんをお待ちしています！">

    <!-- X (Twitter) -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="@skylanternJP">
    <meta name="twitter:title" content="七夕スカイランタン祭り2025 | 今年で7回目！日本最大の七夕祭り">
    <meta name="twitter:description" content="今年で7回目となる『七夕スカイランタン祭り』。夏の夜空に願いを込めたスカイランタンを一斉に浮かべる感動のひとときを、新しい夏の風物詩に。2025年もよりパワーアップした内容で皆さんをお待ちしています！">
    <meta name="twitter:image" content="https://snc-ts.com/img/ogp.webp">

    <meta name="robots" content="noindex, follow">

    <!-- favicon -->
    <link rel="icon" type="image/png" href="img/favicon/favicon-96x96.png" sizes="96x96">
    <link rel="icon" type="image/svg+xml" href="img/favicon/favicon.svg">
    <link rel="shortcut icon" href="img/favicon/favicon.ico">
    <link rel="apple-touch-icon" sizes="180x180" href="img/favicon/apple-touch-icon.png">
    <meta name="apple-mobile-web-app-title" content="MyWebSite">
    <link rel="manifest" href="img/favicon/site.webmanifest">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;1,100;1,200&display=swap" rel="stylesheet">

    <!-- css -->
    <link rel="stylesheet" href="css/default.css">
    <link rel="stylesheet" href="css/style.css?<?php print date('Ymdhis', filemtime('css/style.css')); ?>">
    <link rel="stylesheet" href="css/animation.css">

    <!-- js -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="js/response.min.js"></script>
    <script src="js/over.js"></script>
    <script src="js/jquery.mousewheel.js"></script><!-- マウスホイール用 -->
    <script src="js/jquery.jscrollpane.min.js"></script>
    <!-- スクロールマジック -->
    <!-- <script src="cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/ScrollMagic.min.js"></script>
    <script src="cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/plugins/debug.addIndicators.min.js"></script> -->

    <!-- GSAP(最新バージョン) -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>

    <!-- スクロールバー設定 -->
    <script>
        $(function() {
            $('.scroll-pane').jScrollPane({
                showArrows: true
            });
        });
    </script>
</head>

<body id="pTop" class="website" data-responsejs='{"create":[{"prop":"width","prefix":"src","lazy":true,"breakpoints":[0,592,1001]}]}'>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5BRFWMRC" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

    <!-- header -->
    <?php include('./php/common/header_lp.php'); ?>
    <main>
        <div class="first_view fade">
            <img src="img/fv.webp?v=3" alt="今年で7回目！日本最大の七夕祭り">
        </div>
        <div class="obi_con">
            <p class="come">※最新情報は<a href="https://x.com/SoraAkari_snc" target="_blank">@SoraAkari_snc</a>にて随時更新中</p>
        </div>
        <div class="lp_con">
            <div class="link_area fade content01">
                <img src="img/con01.webp?v=2" alt="『七夕スカイランタン祭り2025』京都会場は2025年8月8日(土)〜11日(月)、15日(土)、16日(日)開催！">
                <!-- <div class="btn_area"> -->
                <!-- <a href="https://www.snc-jp.com/booking-calendar" class="btn_con jump_to_ticket" target="_blank"><img src="img/btn.webp" alt="チケットのご予約はこちら"></a> -->
                <!-- <p class="attention-p">※ご盛況につき、3月8日〜3月31日までの<span class="i-text">当日券はございません。</span></p> -->
                <!-- </div> -->
            </div>
            <div class="fade con02">
                <div class="btn_area">
                    <!-- <img src="img/btn_deco.webp" alt="早トク！最大2000円割引！" class="btn_deco"> -->
                    <a href="https://snc-ts.com/ticket.php" class="btn jump_to_ticket btn_con" target="_blank"><p>チケットのご予約はこちら</p>
                        <img src="img/btn_bg.webp" alt="チケットのご予約はこちら">
                    </a>
                    <!-- <p class="come attention-p">※当日券については随時お知らせ<br><a href="https://x.com/NandemoCompany" target="_blank">@SoraAkari_snc</a>をご確認ください</span></p> -->
                    <!-- <p class="come attention-p">※会場にて当日券発売中！<br><span class="i-text">※当日券情報は<a href="https://x.com/NandemoCompany" target="_blank">@SoraAkari_snc</a>にてご確認ください</span></p> -->
                </div>
            </div>
            <img src="img/con02.webp" alt="日本最大のランタン祭り こころに触れる、幻想空間" class="fade">
            <!-- <section class="howtoplay" id="howtoplay">
                <h2><img src="img/con03.webp" alt="格付けチェックの遊び方"></h2>
                <div class="link_area">
                    <img src="img/con03_01.webp" alt="01.チケットを購入する">
                    <div class="btn_area">
                        <a href="https://www.snc-jp.com/booking-calendar" class="btn_con jump_to_ticket" target="_blank"><img src="img/btn.webp" alt="チケットのご予約はこちら"></a>
                        <p class="come attention-p">※会場にて当日券発売中！<br><span class="i-text">※当日券情報は<a href="https://x.com/NandemoCompany" target="_blank">@NandemoCompany</a>にてご確認ください</span></p>
                    </div>
                </div>
                <div class="link_area">
                    <img src="img/con03_02.webp" alt="02.格付けチャレンジに行く">
                    <div class="btn_area acc">
                        <p class="accLink"><img src="img/con03_02_btn.webp" alt="詳しくはこちら"></p>
                    </div>
                    <a href="https://maps.app.goo.gl/hvzKSBARjXXHSsUFA" class="area" target="_blank" aria-label="googlemapを表示する"></a>
                </div>
                <img src="img/con03_03.webp" alt="03.受付に行く">
                <img src="img/con03_04.webp" alt="04.ゲームスタート">
                <div class="attention_rule content_wrap">
                    <h3 class="subtit"><img src="img/subt_game.webp" alt="ゲームの注意事項"></h3>
                    <ul class="ruleList">
                        <li>・会場はビルの2階にあり、エレベーターはございません。 階段のみのアクセスとなりますのでご注意ください。</li>
                        <li>・待合スペースはございません。10分以上前のご来場はご遠慮ください。</li>
                        <li>・一部のチェックでは飲食を伴うものがございます。 アレルギーをお持ちの方は、事前にスタッフまでお知らせください。</li>
                        <li>・本イベントでは酒類の提供はございません。</li>
                        <li>・ゲームの特性上、目隠しをする場面がございます。 不安な方は当日、スタッフまでご相談ください。</li>
                        <li>・回答部屋は若干狭くなっております。 閉所が苦手な方は、当日スタッフまでご相談ください。</li>
                        <li>・途中入退場は原則不可となります。 体調が優れないなど、やむを得ない場合はスタッフにお申し付けください。</li>
                        <li>・開演後の途中参加はできません。</li>
                        <li>・他のお客様のご迷惑となる行為や、イベントの進行を妨げる行為があった場合、スタッフの判断によりご退場いただくことがございます。皆様が楽しく参加できるよう、ご協力をお願いいたします。</li>
                        <li>・1公演の参加人数は最大8名までで、他のグループと合同での参加となる場合がございます。</li>
                        <li>・お忘れ物をされた場合、当日は受付にて対応いたします。スタッフまでお声がけください。(翌日以降のお問い合わせは、<a href="https://tayori.com/form/7394ed8f96a2db0ad5590c8017dc265f8baa135b" target="_blank">STARRY NIGHT COMPANY</a>までお願いいたします。)</li>
                    </ul>
                </div>
            </section> -->
        </div>
        <section class="main-content" id="content">
            <div class="fade">
                <h2 class="mainTit"><img src="img/con03_tit.webp" alt="イベントについて"></h2>
                <img src="img/con03.webp" alt="七夕スカイランタン祭りの遊び方">
            </div>
        </section>
        <section class="moviearea fade" id="moviearea">
            <!-- <video controls playsinline poster="videos/slide/Thumb1.webp" alt="七夕祭り2021" class="routingByBreakpoint">
                <source src="videos/slide/TS21(sakamoto).mp4">
            </video> -->
            <img src="img/con04.webp" alt="ひとときの感動は、永遠の記憶に">
            <iframe src="https://www.youtube.com/embed/P4ktomfZ-x8"
                frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                allowfullscreen>
            </iframe>
        </section>
        
        <?php include('./php/voice_section.php'); ?>

        <section class="schedule base-con" id="schedule">
            <div class="fade">
                <h2 class="mainTit"><img src="img/con06_tit.webp" alt="開催日時"></h2>
                <div class="pimg"><img src="img/con06_sche.webp" alt="ランタンリリースは20:30開始"></div>
            </div>
            <div class="daywrap fade">
                <img src="img/con06_2025.webp" alt="2025年" class="yearimg">
                <ul class="dayList">
                    <li><img src="img/con06_0808.webp" alt="8月8日(金)"></li>
                    <!-- <li class="done"><img src="img/con06_0817.webp" alt="8月17日(日)"></li> -->
                    <li><img src="img/con06_0809.webp" alt="8月9日(土)"></li>
                    <li><img src="img/con06_0810.webp" alt="8月10日(日)"></li>
                    <li><img src="img/con06_0811.webp" alt="8月11日(月)"></li>
                    <li><img src="img/con06_0816.webp" alt="8月16日(土)"></li>
                    <li><img src="img/con06_0817.webp" alt="8月17日(日)"></li>
                </ul>
            </div>
        </section>
        <section class="ticketarea base-con" id="ticket">
            <h2 class="mainTit">
                <img src="img/con08_tit.webp" alt="チケット料金" class="fade">
            </h2>
            <!-- <table>
                <tr class="mar">
                    <th>前売り券</th>
                    <td>
                        <div>3,500yen<span>(当日券:4,000yen)</span></div>
                    </td>
                </tr>
            </table>
            <div class="attention_rule content_wrap">
                <h3 class="subtit"><img src="img/subt_ticket.webp" alt="チケットの注意事項"></h3>
                <ul class="ruleList">
                    <li>
                        <div class="ticketrule_area"><a href="pdf/ticket_rule.pdf" target="_blank">
                                <p>チケット規約はこちら</p>
                            </a></div>
                        <p class="come">※クリックで別窓が開きます。</p>
                    </li>
                    <li>・ご参加には必ず予約完了メール（チケット）が必要です。参加される人数分のチケットをご購入いただき、当日受付にて受付完了メール画面（チケット）をご提示ください。</li>
                    <li>・1公演につき最低2名以上の参加者が必要です。最低人数に達しなかった場合は、事前に告知のうえ公演を中止し、チケットの払い戻しについてご案内いたします。<span>（前日までに開催判断のメールが送られます）</span></li>
                    <li>・ご予約後のキャンセル、日付変更や別公演への振り替えはできません。チケット購入の際は、スケジュールを十分にご確認のうえ、お申し込みください。</li>
                    <li>・前売券は参加日前日の夕方頃まで購入可能です。（手動で日付更新を行っておりますので、なるべくお早めにご購入ください）</li>
                    <li>・チケットは事前予約制ですが、定員に空きがある場合のみ当日券を販売いたします。当日券の有無については、受付にてご確認ください。<span>※3月8日〜3月31日までの当日券はございません</span></li>
                    <li>・当イベントは中学生以上のお客様が対象となるイベントです。小学生以下の方はご入場いただけませんのでご了承ください。（待機スペース等のご用意もございません）</li>
                    <li class="red">・チケット販売画面で表示されている数が残りの参加枠になります。お連れ様がいらっしゃる場合は、必ず2枚以上のチケットが確保できることを確認してからご購入ください。</li>
                </ul>
            </div> -->
            <div class="btn_area">
                <!-- <img src="img/btn_deco.webp" alt="早トク！最大2000円割引！" class="btn_deco"> -->
                <a href="https://snc-ts.com/ticket.php" class="btn jump_to_ticket btn_con" target="_blank"><p>チケットのご予約はこちら</p>
                    <img src="img/btn_bg.webp" alt="チケットのご予約はこちら">
                </a>
                <!-- <p class="come attention-p">※最新情報は随時お知らせ<br><a href="https://x.com/SoraAkari_snc" target="_blank">@SoraAkari_snc</a>をご確認ください</span></p> -->
                <!-- <p class="come attention-p">※会場にて当日券発売中！<br><span class="i-text">※当日券情報は<a href="https://x.com/NandemoCompany" target="_blank">@SoraAkari_snc</a>にてご確認ください</span></p> -->
            </div>
        </section>
        <!-- <section class="attention top-con" id="attention">
            <h2 class="mainTit">
                <img src="img/tit_faq.webp" alt="注意事項など">
            </h2>
            <ul class="accordion-area">
                <li class="accarea-item">
                    <div class="acctitle">
                        <p class="txt">会場に駐車場はありますか？</p>
                    </div>
                    <div class="accbox">
                        <ul class="ticketList">
                            <li class="list-item">
                                <p>会場専用の駐車場はございません。 お車でお越しの際は、近隣のコインパーキング等をご利用ください。</p>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="accarea-item">
                    <div class="acctitle">
                        <p class="txt">手荷物を預かってもらえますか？</p>
                    </div>
                    <div class="accbox">
                        <ul class="ticketList">
                            <li class="list-item">
                                <p>お荷物のお預かりは可能ですが、貴重品の管理はお客様ご自身でお願いいたします。 紛失・盗難についての責任は負いかねますので、ご了承ください。</p>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="accarea-item">
                    <div class="acctitle">
                        <p class="txt">参加に年齢制限はありますか？</p>
                    </div>
                    <div class="accbox">
                        <ul class="ticketList">
                            <li class="list-item">
                                <p>当イベントは中学生以上のお客様が対象となるイベントです。小学生以下の方はご入場いただけませんのでご了承ください。（待機スペース等のご用意もございません）</p>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="accarea-item">
                    <div class="acctitle">
                        <p class="txt">チェックする項目の内容を教えてもらえますか？</p>
                    </div>
                    <div class="accbox">
                        <ul class="ticketList">
                            <li class="list-item">
                                <p>チェック内容は当日のお楽しみとなっております。事前に詳細をお伝えすることはできません。<br><span class="come">※酒類の提供はございませんので、未成年の方でもお楽しみいただけます。</span></p>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="accarea-item">
                    <div class="acctitle">
                        <p class="txt">ゴミは捨てられますか？</p>
                    </div>
                    <div class="accbox">
                        <ul class="ticketList">
                            <li class="list-item">
                                <p>原則として、お持ち帰りをお願いしています。</p>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="accarea-item">
                    <div class="acctitle">
                        <p class="txt">体調が悪くなったのでキャンセルしたいのですが、返金できますか？</p>
                    </div>
                    <div class="accbox">
                        <ul class="ticketList">
                            <li class="list-item">
                                <p>お客様都合によるキャンセルの払い戻しは対応いたしかねます。 あらかじめご了承のうえ、お申し込みください。</p>
                            </li>
                        </ul>
                    </div>
                </li>
            </ul>
        </section> -->
        <section class="access top-con" id="access">
            <div class="inner">
                <h2 class="mainTit fade">
                    <img src="img/con09_tit.webp" alt="開催場所">
                </h2>
                <div class="accwrap fade">
                    <img src="img/con09_txt.webp" alt="京都城陽五里五里の丘" class="accname">

                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3274.4451997625524!2d135.79524647575087!3d34.845039272868796!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x600116d08e3a772d%3A0xd6fa5507ca948412!2z5Z-O6Zm95LqU6YeM5LqU6YeM44Gu5LiYICjkuqzpg73lupznq4vmnKjmtKXlt53pgYvli5XlhazlnJIp!5e0!3m2!1sja!2sjp!4v1749708452268!5m2!1sja!2sjp" width="100%" height="250" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    <p class="come">※屋外開催となります。会場の設備には限りがございますため、レジャーシートや雨具、暑さ対策など十分にご配慮の上、お越しください。</p>
                </div>
                <div class="news_kanagawa">
                    <div class="fade">
                        <img src="img/news_deco.webp" alt="神奈川でも開催！">
                        <img src="img/event_logo_yoko.webp" alt="七夕スカイランタン祭り2025" class="news_logo">
                        <img src="img/news_txt.webp" alt="神奈川でも開催！" class="news_txt">
                        <a href="https://snc-ts.com/" class="btn2" target="_blank">
                            <p>公式サイトはこちら</p>
                        </a>
                        <img src="img/news_deco.webp" alt="神奈川でも開催！">
                    </div>
                </div>
            </div>
        </section>
        <!-- <table>
            <tr>
                <th>開催日時</th>
                <td>
                    【京都】<br>2024年7月13日(土)〜15日(月)
                </td>
            </tr>
            <tr>
                <th>会場</th>
                <td>
                    【京都】<br>城陽五里五里の丘
                </td>
            </tr>
            <tr>
                <th>主催/企画/制作</th>
                <td>
                    株式会社スターリーナイトカンパニー
                </td>
            </tr>
        </table> -->

        <p id="pageTop"><a href="#pTop"><img src="img/common/arrow_w.svg" alt="ページトップへ"></a></p>
    </main>
    <!-- Footer -->
    <?php include('./php/common/footer.php'); ?>
    <!-- Include JavaScript -->
    <script src="js/data-img.js"></script>
    <script src="js/script.js"></script>
</body>

</html>