<?php
/**
 * Created by PhpStorm.
 * User: kunotota
 * Date: 2019-02-08
 * Time: 01:48
 */?>

<?php
$title_name= 'content';
require ('head.php'); ?>


<?php require ('header.php'); ?>
<!--フォーム-->
<form method="post" action="" class="p-section-contact u-section-padding" id="contact">
    <hi class="p-container-title">CONTACT</hi>
    <div class="form-container">
        <div class="p-form-group">
            <label>
                <div class="p-form-group__label--title">※お名前</div>
                <span class="p-form-group__block"></span>
                <input type="text" name="name" class="p-form-group__valid--input js-valid--name">
            </label>
        </div>

        <div class="p-form-group">
            <label>
                <div class="p-form-group__label--title">※メールアドレス</div>
                <span class="p-form-group__block"></span>
                <input type="text" name="email" class="p-form-group__valid--input js-valid--email" placeholder="email">
            </label>
        </div>

        <div class="p-form-group">
            <label>
                <div class="p-form-group__label--title">本文</div>
                <span class="p-form-group__block"></span>
                <textarea cols="40" rows="10" name="comment" class="p-form-group__text js-form-text"></textarea>
            </label>
            <div><span class="js-count-container">0</span>/500</div>
        </div>

        <input type="submit" value="送信" class="c-submit--btn">
    </div>
</form>







<!--フッダー-->
<?php require ('footer.php'); ?>