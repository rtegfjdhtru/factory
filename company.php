<?php
/**
 * Created by PhpStorm.
 * User: kunotota
 * Date: 2019-02-12
 * Time: 21:27
 */
$title_name = '会社情報';
 require ('head.php');

 require ('header.php');
?>

<div class="p-company-container u-section-padding">
    <h1 class="p-container-title">COMPANY</h1>
    <table class="p-table">
        <tr class="p-table__frame">
            <th class="p-table__left--body">社名</th>
            <td class="p-table__right--body">株式会社サンプルテキスト</td>
        </tr>
        <tr>
            <th class="p-table__left--body">社長</th>
            <td class="p-table__right--body">代表取締役社長 <br/>ジョン・スミス</td>
        </tr>
        <tr class="p-table__frame">
            <th class="p-table__left--body">設立</th>
            <td class="p-table__right--body">2019年１月１日</td>
        </tr>
        <tr>
            <th class="p-table__left--body">資本金</th>
            <td class="p-table__right--body">5000兆円</td>
        </tr>
        <tr class="p-table__frame">
            <th class="p-table__left--body">従業員</th>
            <td class="p-table__right--body">2000人</td>
        </tr>
        <tr>
            <th class="p-table__left--body">決算日</th>
            <td class="p-table__right--body">12月1日</td>
        </tr>
        <tr class="p-table__frame">
            <th class="p-table__left--body">事業内容</th>
            <td class="p-table__right--body">鉄の製造、鉄の販売、鉄の輸出、半導体、ガス、火力発電、サンプルテキ<br/>
                テキストサンプルテキストサンプルテキストサトサンプルテキスト<br/>
                サンプルテキストサンプルテキストサンプルテキストサンストサンプルテキト<br/>
                サンプルテキストサンプルテキストサンプルテキストサンスト<br/>
            </td>
        </tr>
    </table>


    <h1 class="p-container-title">ACCESS</h1>
    <div class="u-google-map--container">
        <iframe class="u-google-map--container--map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14171.112576141597!2d139.76261378684273!3d35.679381012907186!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60188bfbd89f700b%3A0x277c49ba34ed38!2z5p2x5Lqs6aeF!5e0!3m2!1sja!2sjp!4v1549193423119"  frameborder="0" style="border:0" allowfullscreen></iframe>
        <dl class="u-google-map--container--info">
            <dt>株式会社サンプルテキスト</dt>
            <dd>〒000-00000　東京都東京区東京町 1-1-1</dd>
            <dd>TEL 000-000-0000</dd>
        </dl>
    </div>

</div>







<?php require ('footer.php'); ?>
