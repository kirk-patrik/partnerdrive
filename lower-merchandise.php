<?php require('app/functions.php');
includeWithVariables('includes/header.php', ['pageTitle' => 'partner drive', 'headCSS' => ['page/lower.css']]) ?>
<section class="sp-modal-content">
    <div class="l-wrap">
        <p class="title">商材管理</p>
        <img src=" <?= resource('img', 'raw/sp-merchandise.png'); ?>" alt="">
        <div class="steps">
            <div class="stepsItem">
                <p class="num">1</p>
                <div class="txt">
                    <p class="highlight">サービス(商材)検索機能</p>
                    <p>商材ごとにデフォルトの販売条件を設定。セールスパートナーごとに調整もできる。</p>
                </div>
            </div>
            <div class="stepsItem">
                <p class="num">2</p>
                <div class="txt">
                    <p class="highlight">研究動画・資料ダウンロード機能</p>
                </div>
            </div>
            <div class="stepsItem">
                <p class="num">3</p>
                <div class="txt">
                    <p>商材の登録時にマニュアルを登録しておくことで、契約締結次第すぐに共有開始。</p>
                </div>
            </div>
            <div class="stepsItem">
                <p class="num">4</p>
                <div class="txt">
                    <p>気になる商材が見つかったらコンタクト。担当者と直接チャットでやり取りが可能。</p>
                </div>
            </div>
        </div>
    </div>
</section>
<?php
includeWithVariables('includes/footer.php', ['footerJS' => ['all.js']]) ?>