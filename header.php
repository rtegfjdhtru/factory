<?php
/**
 * Created by PhpStorm.
 * User: kunotota
 * Date: 2019-02-08
 * Time: 01:50
 */



?>
<body>
<div class="u-back">
    <header id="header">
        <!--ロゴ-->
        <a href="index.php"><img src="./images/header.png" alt="" class="u-margin"></a>
        <!--ハンバーガー-->

        <div class="menu-trigger js-toggle-sp-menu" href="#">
            <span></span>
            <span></span>
            <span></span>
        </div>
<!--        トップページならリンクはそのまま-->
<?php  if($title_name === 'トップページ'){ ?>
        <nav class="nav-menu js-toggle-sp-menu-target">
            <ul class="c-menu">
                <li class="c-menu__item"><a href="#about" class="c-menu__item--link">ABOUT</a></li>
                <li class="c-menu__item"><a href="#products" class="c-menu__item--link">PRODUCTS</a>
                <li class="c-menu__item"><a href="#news" class="c-menu__item--link">NEWS</a></li>
                <li class="c-menu__item"><a href="contact.php" class="c-menu__item--link">CONTACT</a></li>
                <li class="c-menu__item"><a href="company.php" class="c-menu__item--link">COMPANY</a></li>

            </ul>
        </nav>
        <?php }else{ ?>
    <nav class="nav-menu js-toggle-sp-menu-target">
        <ul class="c-menu">
            <li class="c-menu__item"><a href="index.php" class="c-menu__item--link">ABOUT</a></li>
            <li class="c-menu__item"><a href="index.php" class="c-menu__item--link">PRODUCTS</a>
            <li class="c-menu__item"><a href="index.php" class="c-menu__item--link">NEWS</a></li>
            <li class="c-menu__item"><a href="contact.php" class="c-menu__item--link">CONTACT</a></li>
            <li class="c-menu__item"><a href="company.php" class="c-menu__item--link">COMPANY</a></li>

        </ul>
    </nav>

      <?php  }  ?>
     </header>
</div>


