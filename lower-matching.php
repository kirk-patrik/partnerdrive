<?php require('app/functions.php');
includeWithVariables('includes/header.php', ['pageTitle' => 'partner drive', 'headCSS' => ['page/lower.css']]) ?>
<section class="sp-modal-content">
    <div class="l-wrap">
        <p class="title">マッチング管理</p>
        <img src=" <?= resource('img', 'raw/sp-matching.png'); ?>" alt="">
        <div class="steps">
            <div class="stepsItem">
                <p class="num">1</p>
                <div class="txt">
                    <p class="highlight">メッセージ機能(チャット)</p>
                    <p>コンタクトは商材ごと、セールスパートナーとサプライパートナーの1対１のチャットルームが生成されるトナーごとに調整もできる。</p>
                </div>
            </div>
            <div class="stepsItem">
                <p class="num">2</p>
                <div class="txt">
                    <p class="highlight">経済条件更改機能</p>
                    <p>取扱のための代理店契約や、条件更改などの調整ができる。起案されたものは双方の同意が必要。</p>
                </div>
            </div>
            <div class="stepsItem">
                <p class="num">3</p>
                <div class="txt">
                    <p>商材の登録時にマニュアルを登録しておくことで、契約締結次第すぐに共有開始。</p>
                </div>
            </div>
        </div>
    </div>
</section>
<?php
includeWithVariables('includes/footer.php', ['footerJS' => ['all.js']]) ?>