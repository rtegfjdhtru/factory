<?php

require ('function.php');


if(!empty($_POST)){

    $name = $_POST['name'];
    $email = $_POST['email'];
    $comment = $_POST['comment'];

    //バリデーション
    validRequired($name,'name');
    validRequired($email,'email');
    validRequired($comment,'text');

    if(empty($err_msg)) {

        validemail($email, 'email');

        validMaxtext($comment, 'text');

        if (empty($err_msg)) {
            debug('バリデーションOK');

            if (!empty($name) && !empty($email) && !empty($comment)) {

                mb_language("Japanese");
                mb_internal_encoding("UTF-8");

                //自分のところにメールがくるようにする
                $to = 'tamura6830@gmail.com';

                $result = mb_send_mail($to, $name, $comment,"From:".$email);

                if ($result) {
                    $_SESSION['msg_success']= SUG01;
                    debug('メールの送信に成功しました');
             header("Location:index.php");

                } else {
                    debug('メールの送信に失敗しました');
                }
            }
        }

    }

}

 ?>


<?php
$title_name= 'content';
require('head.php'); ?>


<?php require('header.php'); ?>


<!--フォーム-->
<form method="post" action="" class="p-section-contact u-section-padding" id="contact">
    <hi class="p-container-title">CONTACT</hi>
    <div class="form-container">
        <div class="p-form-group">
            <label>
                <div class="p-form-group__label--title">※お名前</div>
                <div class="p-form-group__block"><?php if(!empty($err_msg)) echo $err_msg['name']; ?></div>
                <span class="p-form-group__block"></span>
                <input type="text" name="name" class="p-form-group__valid--input js-valid--name
                <?php  if(!empty($err_msg['name'])) echo 'has-error';  ?>"
                value="<?php  if(!empty($name)) echo $name; ?>">
            </label>
        </div>

        <div class="p-form-group">
            <label>
                <div class="p-form-group__label--title">※メールアドレス</div>
                <div class="p-form-group__block"><?php if(!empty($err_msg)) echo $err_msg['email']; ?></div>
                <span class="p-form-group__block"></span>
                <input type="text" name="email" class="p-form-group__valid--input js-valid--email
                    <?php  if(!empty($err_msg['email'])) echo 'has-error';  ?>" placeholder="email"
                    value="<?php if(!empty($email)) echo $email; ?>">
            </label>
        </div>

        <div class="p-form-group">
            <label>
                <div class="p-form-group__label--title">本文</div>
                <span class="p-form-group__block"></span>
                <textarea cols="40" rows="10" name="comment" class="p-form-group__text js-form-text"><?php if(!empty($comment)) echo $comment; ?></textarea>
            </label>
            <div><span class="js-count-container">0</span>/500</div>
        </div>

        <input type="submit" value="送信" class="c-submit--btn">
    </div>
</form>







<!--フッダー-->
<?php require('footer.php'); ?>