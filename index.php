<?php
require('app/functions.php');
includeWithVariables('includes/header.php', ['pageTitle' => 'partner drive', 'headCSS' => ['page/top.css']]) ?>
<section class="sect_2" id="sect_2">
    <div class="l-wrap">
        <div class="sect_2__heading">
            <img class="exclamation" src="<?= resource('img', 'icon/icon_exclamation.svg'); ?>" alt="">
            <h2 class="c-heading02__sub">商材を販売したいパートナー様、<br class="u-d-n-laptop">こんな課題はございませんか？</h2>
        </div>
        <?php

        $loopContent01 = [
            [
                "href" => "issue01",
                "frame" => "sect_2-img01.png",
                "title" => "商材調達",
                "list" => [
                    "商材がなかなか見つからない",
                    "条件交渉が思うようにまとまらない",
                    "稼働開始までに時間がかかる"
                ]
            ],
            [
                "href" => "issue02",
                "frame" => "sect_2-img02.png",
                "title" => "営業活動",
                "list" => [
                    "営業員への研修・落とし込みが大変",
                    "営業員ごとの成果を把握しづらい",
                ]
            ],
            [
                "href" => "issue03",
                "frame" => "sect_2-img03.png",
                "title" => "案件管理",
                "list" => [
                    "獲得案件の進捗管理が煩雑",
                    "報酬対象案件の集計が煩雑"
                ]
            ],
        ];

        ?>
        <div class="p-row03 u-natural__width">
            <?php foreach ($loopContent01 as $loop01) : ?>
                <a href="#<?= $loop01['href'] ?>" class="p-row03__col c-card01 c-card01--arrowdown issue__link">
                    <div class="c-card01__frame">
                        <img src="<?= resource('img', 'raw/') . $loop01['frame'] ?>" alt="">
                    </div>
                    <p class="c-card01__title">
                        <?= $loop01['title'] ?>
                    </p>
                    <ul class="c-card01__list">
                        <?php foreach ($loop01['list'] as $item) : ?>
                            <li class="c-card01__list_item">
                                <p>
                                    <span></span> <?= $item; ?>
                                </p>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </a>
            <?php endforeach; ?>
        </div>
    </div>
</section>
<section class="sect_3" id="sect_3">
    <div class="l-wrap">
        <?php
        $loopContent02 = [
            [
                "id" => "issue01",
                "ttl" => "<span>商材調達</span>の課題も",
                "frame" => "sect_3-img01.png",
                "content" => [
                    "txt01" => " 掲載されている豊富な商材の中から、<span>セールスパートナー様の特徴に合った商材</span>を柔軟に検索することが可能。",
                    "txt02" => " 商材取り扱い打診後、<span>システム上のメッセージ機能で円滑に交渉・取り扱い開始まで</span>サポート。",
                    "txt03" => " 研修や契約など稼働開始までに必要なリードタイムを<span>システムで一元サポートする</span>ことで短縮。",
                ],
            ],
            [
                "id" => "issue02",
                "ttl" => "<span>商材調達</span>の課題も",
                "frame" => "sect_3-img02.png",
                "content" => [
                    "txt01" => "<span>商材ごとに販売に必要な研修資料が動画が掲載</span>されているため、取り扱い後すぐに商材知識やレギュレーション、売り方の落とし込みが可能。",
                    "txt02" => "<span>営業員ごとに獲得成果を管理</span>することで営業員別の実績をシステム上で管理可能。",
                ],
            ],
            [
                "id" => "issue03",
                "ttl" => "<span>商材調達</span>の課題も",
                "frame" => "sect_3-img03.png",
                "content" => [
                    "txt01" => "獲得後、報酬発生までのステータス追いは販売代理店にとって非常に重要な業務となりますが、<span>システム上で案件管理ができるためステータス状況が簡単に把握</span>できます。",
                    "txt02" => "獲得案件の報酬がいつ、いくら入っているかは非常に重要な情報となりますが、<span>システム上で期間ごとに集計されるため入金見込みが容易</span>に把握できます。",
                ],
            ],
        ];
        ?>

        <div class="p-content01 u-natural__width">
            <div class="p-content01__main">
                <?php foreach ($loopContent02 as $loop02) : ?>
                    <div class="p-content01__row" id="<?= $loop02['id']; ?>">
                        <div class="p-content01__col">
                            <p class="p-content01__ttl"><?= $loop02['ttl']; ?></p>
                            <p class="p-content01__sub"><span>pertner drive</span>で解決！</p>
                            <img src="<?= resource('img', 'raw/') . $loop02['frame']; ?>" alt="">
                        </div>
                        <div class="p-content01__col">
                            <?php foreach ($loop02['content'] as $cont) : ?>
                                <div class="p-content01__cont">
                                    <p>
                                        <?= $cont; ?>
                                    </p>
                                    <a href="#" class="c-button c-button--s">機能を見る</a>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>
<section class="sect_7" id="sect_7">
    <div class="l-wrap">
        <div class="news__row u-natural__width">
            <div class="news__col">
                <p class="c-heading01__main c-heading01__main--left">お知らせ<span>news</span></p>
                <a href="#" class="c-button c-button--accent c-button--l u-d-n-responsive">お知らせ一覧を見る</a>
            </div>
            <div class="news__col">
                <div class="news__list">
                    <div class="news__listItem">
                        <div class="heading">
                            <a href="#">2022.02.01</a><a href="#">お知らせ</a>
                        </div>
                        <a href="#" class="body">
                        お知らせが入りますお知らせが入りますお知らせが入りますお知らせが入りますお知らせが入りますお知らせが入りますお知らせが入ります。
                        </a>
                    </div>
                    <div class="news__listItem">
                        <div class="heading">
                            <a href="#">2022.02.01</a><a href="#">お知らせ</a>
                        </div>
                        <a href="#" class="body">
                        お知らせが入りますお知らせが入りますお知らせが入ります。
                        </a>
                    </div>
                    <div class="news__listItem">
                        <div class="heading">
                            <a href="#">2022.02.01</a><a href="#">お知らせ</a>
                        </div>
                        <a href="#" class="body">
                        お知らせが入りますお知らせが入りますお知らせが入ります。
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="faq" id="faq">
    <div class="l-wrap">
        <p class="u-f-ta-c c-heading01__main">よくある質問<span>Q&A</span></p>
        <?php
        $faqValue = [
            [
                'title' => 'どのような支払い方法がありますか？',
                'content' => 'お支払い方法にクレジットカードまたは後払いをご利用いただけます。<br>
            詳しくはこちらをご確認ください。'
            ],
            [
                'title' => '利用料金は表示料金×人数ですか？',
                'content' => 'お支払い方法にクレジットカードまたは後払いをご利用いただけます。<br>
            詳しくはこちらをご確認ください。'
            ],
            [
                'title' => '利用前に見学（ロケハン）できますか？',
                'content' => 'お支払い方法にクレジットカードまたは後払いをご利用いただけます。<br>
            詳しくはこちらをご確認ください。'
            ],
            [
                'title' => '利用時間の延長は可能ですか？',
                'content' => 'お支払い方法にクレジットカードまたは後払いをご利用いただけます。<br>
            詳しくはこちらをご確認ください。'
            ],
            [
                'title' => '法人利用・領収書・請求書発行を法人名義にできますか？',
                'content' => 'お支払い方法にクレジットカードまたは後払いをご利用いただけます。<br>
            詳しくはこちらをご確認ください。'
            ],
            [
                'title' => '予約した内容はどこで確認できますか？',
                'content' => 'お支払い方法にクレジットカードまたは後払いをご利用いただけます。<br>
            詳しくはこちらをご確認ください。'
            ],
        ];
        ?>
        <div class="p-accordion">
            <?php foreach ($faqValue as $i => $faq) : ?>
                <div class="p-accordion__item <?= $i == '0' ? 'isActive' : '' ?>">
                    <div class="p-accordion__header">
                        <p>Q</p>
                        <p><?= $faq['title']; ?></p>
                    </div>
                    <div class="p-accordion__body">
                        <p>A</p>
                        <p><?= $faq['content']; ?></p>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<?php
includeWithVariables('includes/footer.php', ['footerJS' => ['all.js']]) ?>