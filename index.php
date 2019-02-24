<?php
/**
 * Created by PhpStorm.
 * User: kunotota
 * Date: 2019-02-11
 * Time: 22:21
 */
require ('function.php');
?>



<?php

require ('head.php');
$title_name='トップページ';
?>

<p id="js-show-msg" style="" class="u-msg-slide">
    <?php  echo msgmail('msg_success'); ?>
</p>


<?php
require ('header.php');
?>


<main>
    <section id="top" class="p-section-top u-section-images">

        <div><img src="./images/logo.png" class="p-section-top-logo"></div>

    </section>

    <!--メイン２-->
    <div class="u-border">
        <section id="about" class="p-section-about u-section-padding">
            <h2 class="p-container-title">ABOUT</h2>
            <div class="container-body u-margin-about">
                <h2 class="p-container-sub-body">私たちの暮らしは<br/>鉄で満ち溢れている</h2>
                <p class="p-body-text">自動車、道路、建築物、私たちの身の回りは鉄で欠かせない存在にあるのです。
                    生活のあらゆる基盤の一つでもあり、鉄が存在しなければ今の暮らしはなかってでしょう...　　　　　　　　　　　
            </div>
        </section>
    </div>
    <!--メイン３-->
    <div class="u-border">
        <section id="products" class="p-section-products u-section-padding">
            <h2 class="p-container-title">PRODUCTS</h2>


            <div class="panel-container u-margin-panel">
                <div class="c-panel">
                    <div class="c-panel-img"><img src="./images/screw-1924173_1280.jpg" alt=""></div>
                    <div class="p-container-body">
                        <h2 class="p-container-sub-body c-panel-title">鉄</h2>
                        <p class="c-panel-text">サンプルテキストサンプルテキストサンプルテキストサンプルテキストサンプルテキストサンプルテキスト
                            サンプルテキストサンプルテキストサンプルテキストサンプルテキストサンプルテキストサンプルテキスト
                        </p>
                    </div>
                </div>

                <div class="c-panel">
                    <div class="c-panel-img"><img src="./images/screw-1924173_1280.jpg" alt=""></div>
                    <div class="p-container-body">
                        <h2 class="p-container-sub-body c-panel-title">ステンレス</h2>
                        <p class="c-panel-text">サンプルテキストサンプルテキストサンプルテキストサンプルテキストサンプルテキストサンプルテキスト
                            サンプルテキストサンプルテキストサンプルテキストサンプルテキストサンプルテキストサンプルテキスト
                        </p>
                    </div>
                </div>

                <div class="c-panel">
                    <div class="c-panel-img"><img src="./images/screw-1924173_1280.jpg" alt=""></div>
                    <div class="p-container-body">
                        <h2 class="p-container-sub-body c-panel-title">黄銅</h2>
                        <p class="c-panel-text">サンプルテキストサンプルテキストサンプルテキストサンプルテキストサンプルテキストサンプルテキスト
                            サンプルテキストサンプルテキストサンプルテキストサンプルテキストサンプルテキストサンプルテキスト
                        </p>
                    </div>
                </div>
            </div>

        </section>
    </div>

    <!--メイン４-->
    <section id="news" class="p-section-news u-section-padding">
        <h2 class="p-container-title">NEWS</h2>
        <div class="p-container-body">
            <ul class="p-nav-news">
                <li class="p-nav-news__item">
                    <span class="p-nav-news__item--date">2019.1.1</span>
                    <span class="p-nav-news__item--text">サンプルテキストサンプルテキスト</span>
                </li>
                <li class="p-nav-news__item">
                    <span class="p-nav-news__item--date">2019.1.1</span>
                    <span class="p-nav-news__item--text">サンプルテキストサンプルテキスト</span>
                </li>
                <li class="p-nav-news__item">
                    <span class="p-nav-news__item--date">2019.1.1</span>
                    <span class="p-nav-news__item--text">サンプルテキストサンプルテキスト</span>
                </li>
                <li class="p-nav-news__item">
                    <span class="p-nav-news__item--date">2019.1.1</span>
                    <span class="p-nav-news__item--text">サンプルテキストサンプルテキスト</span>
                </li>
            </ul>
        </div>
    </section>
</main>




<?php


require ('footer.php');
?>
