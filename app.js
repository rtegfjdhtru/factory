
$(function() {
    //veges

    $('#top').vegas({
        slides: [
            { src: 'images/iiiuyuy.jpg' },
            { src: 'images/gearsssssss.jpg' },
            { src: 'images/sssasasasadd.jpg' }
        ],
        animation: 'kenburns',
        timer: false
    });

//文字数カウント
var $textform = $('.js-form-text'),
    $textcount = $('.js-count-container');

$textform.on('keyup',function(e){
$textcount.html($(this).val().length);
});

//ハンバーガー
$('.js-toggle-sp-menu').on('click',function () {
    $(this).toggleClass('active');
$('.js-toggle-sp-menu-target').toggleClass('active');
});

$('.c-menu__item--link').on('click',function () {
    $('nav').removeClass('active');
});


// バリデーションエラー

     const MSG_TEST_AREA_MAX ='500文字以内で入力してください';

$('.js-form-text').on('keyup',function () {

    var form_g = $(this).closest('.p-form-group');
    var textarea_g = $(this).closest('.js-form-text');

    if($(this).val().length>500){
        form_g.removeClass('has-success').addClass('has-error');
        textarea_g.removeClass('has-success').addClass('has-error');
        form_g.find('.p-form-group__block').text(MSG_TEST_AREA_MAX);
    }else{
        form_g.removeClass('has-error').addClass('has-success');
        textarea_g.removeClass('has-error').addClass('has-success');
        form_g.find('.p-form-group__block').text('');
    }

});


     //メール送信　
  // $('form').on('submit',function (e) {
  //     e.preventDefault();
  //
  // });





    var  $jsShowMessage = $('#js-show-msg');
    var  msg = $jsShowMessage.text();
    if(msg.replace(/^[\s　]+|[\s　]+$/g,"").length){
        $jsShowMessage.slideToggle('slow');
        setTimeout(function () { $jsShowMessage.slideToggle('slow'); },3000);

    };

});