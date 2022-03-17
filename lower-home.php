<?php require('app/functions.php');
includeWithVariables('includes/header.php', ['pageTitle' => 'partner drive', 'headCSS' => ['page/lower.css']]) ?>
<section class="sp-modal-content">
    <div class="l-wrap">
        <p class="title">ホーム</p>
        <img src=" <?= resource('img', 'raw/sp-home.png'); ?>" alt="">
        <div class="steps">
            <div class="stepsItem">
                <p class="num">1</p>
                <div class="txt">
                    <p class="highlight">獲得案件登録・ステータス管理機能</p>
                    <p>入金見込み・支払い予定はトップ画面からも確認可能。</p>
                </div>
            </div>
            <div class="stepsItem">
                <p class="num">2</p>
                <div class="txt">
                    <p>案件の追加やステータスの変更など最新情報も一目瞭然。</p>
                </div>
            </div>
        </div>
    </div>
</section>
<?php
includeWithVariables('includes/footer.php', ['footerJS' => ['all.js']]) ?>