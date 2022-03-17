<?php require('app/functions.php');
includeWithVariables('includes/header.php', ['pageTitle' => 'partner drive', 'headCSS' => ['page/lower.css']]) ?>
<section class="sp-modal-content">
    <div class="l-wrap">
        <p class="title">案件管理</p>
        <img src=" <?= resource('img', 'raw/sp-project.png'); ?>" alt="">
        <div class="steps">
            <div class="stepsItem">
                <p class="num">1</p>
                <div class="txt">
                    <p class="highlight">見込み報酬金額確認機能</p>
                    <p>サプライ側が更新する案件の進捗や、入金タイミングをリアルタイムで把握可能。</p>
                </div>
            </div>
            <div class="stepsItem">
                <p class="num">2</p>
                <div class="txt">
                    <p>セールス側は獲得した案件をシステムへ登録。</p>
                </div>
            </div>
            <div class="stepsItem">
                <p class="num">3</p>
                <div class="txt">
                    <p>営業員を登録することで社内の成績管理も。</p>
                </div>
            </div>
        </div>
    </div>
</section>
<?php
includeWithVariables('includes/footer.php', ['footerJS' => ['all.js']]) ?>