<?php
require('app/functions.php');
includeWithVariables('includes/header.php', ['pageTitle' => 'partner drive', 'headCSS' => ['page/top.css']]) ?>
<section class="p-mv">
    <img class="bg__monitor u-d-n-responsive" src="<?= resource('img', 'raw/mv-monitor.png'); ?>" alt="" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="2000">
    <img class="bg__monitor-sp u-d-n-laptop" src="<?= resource('img', 'raw/mv-monitor-sp.png'); ?>" alt="" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="2000">
    <div class="l-wrap p-mv__container">
        <div class="p-mv__content">
            <!-- add classes for animation -->
            <div class="row appear-animation animated">
                <div class="col">
                    <div class="welcome">
                        <p class="c-heading01__main c-heading01__main--left c-heading01__main--big">次に売る商材が、<span>sales partner</span></p>
                        <p class="p-mv__txt01"><span>速攻</span><span>で見つかる。</span></p>
                        <p class="p-mv__txt02">
                            <span>partner drive</span>は<br>
                            売りたい人(サプライ・パートナー)と<br>
                            売れる人(セールス・パートナー)をつなげ、<br>
                            <span class="accent">最適化するクラウドサービス</span>です。
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="p-mv__scroll">
            <span></span>
            <p>scroll</p>
        </div>
    </div>
</section>
<section class="sect_1" id="sect_1">
    <div class="l-wrap">
        <!-- add data-aos -->
        <p class="sect_1__heading" data-aos="fade-up" data-aos-duration="1000">
            供給と需要を<span>自動的</span>かつ<span><br class="u-d-n-laptop">リアルタイム</span>に最適に<br class="u-d-n-laptop">マッチさせることで、<br>
            パートナー販売チャネルの<br class="u-d-n-laptop"><span>売上を最大化</span>します。
        </p>
        <!-- add data-aos -->
        <div class="sect_1__content" data-aos="fade-up" data-aos-duration="1000">
            <img src="<?= resource('img', 'raw/sect_1-img01.png'); ?>" alt="sect1 image01" class="sect_1-img01 u-d-n-responsive">
            <img src="<?= resource('img', 'raw/sect_1-img01-sp.png'); ?>" alt="sect1 image01" class="sect_1-img01 u-d-n-laptop">
            <img src="<?= resource('img', 'raw/sect_1-img02-sp.png'); ?>" alt="sect1 image02" class="sect_1-img02 u-d-n-laptop">
            <div class="sect_1__content--features u-d-n-responsive">
                <p>教育</p>
                <p>
                    債権<br>
                    管理
                </p>
                <p>分析<br>
                    レポート</p>
                <p>案件<br>
                    管理</p>
                <p>チャット</p>
                <p>報酬<br>
                    管理</p>
                <p>条件<br>
                    交渉</p>
            </div>
        </div>
    </div>
</section>
<section class="sect_2" id="sect_2">
    <div class="l-wrap">
        <div class="sect_2__heading" data-aos="fade-up" data-aos-duration="1000">
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
        <div class="p-row03 u-natural__width" data-aos="fade-up" data-aos-duration="1000">
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
                    "txt01" => [" 掲載されている豊富な商材の中から、<span>セールスパートナー様の特徴に合った商材</span>を柔軟に検索することが可能。", "case2"],
                    "txt02" => [" 商材取り扱い打診後、<span>システム上のメッセージ機能で円滑に交渉・取り扱い開始まで</span>サポート。", "case3"],
                    "txt03" => [" 研修や契約など稼働開始までに必要なリードタイムを<span>システムで一元サポートする</span>ことで短縮。", "case2"],
                ],
            ],
            [
                "id" => "issue02",
                "ttl" => "<span>商材調達</span>の課題も",
                "frame" => "sect_3-img02.png",
                "content" => [
                    "txt01" => ["<span>商材ごとに販売に必要な研修資料が動画が掲載</span>されているため、取り扱い後すぐに商材知識やレギュレーション、売り方の落とし込みが可能。", "case2"],
                    "txt02" => ["<span>営業員ごとに獲得成果を管理</span>することで営業員別の実績をシステム上で管理可能。", "case1"],
                ],
            ],
            [
                "id" => "issue03",
                "ttl" => "<span>商材調達</span>の課題も",
                "frame" => "sect_3-img03.png",
                "content" => [
                    "txt01" => ["獲得後、報酬発生までのステータス追いは販売代理店にとって非常に重要な業務となりますが、<span>システム上で案件管理ができるためステータス状況が簡単に把握</span>できます。", "case04"],
                    "txt02" => ["獲得案件の報酬がいつ、いくら入っているかは非常に重要な情報となりますが、<span>システム上で期間ごとに集計されるため入金見込みが容易</span>に把握できます。", "case04"],
                ],
            ],
        ];
        ?>

        <div class="p-content01 u-natural__width">
            <div class="p-content01__main">
                <?php foreach ($loopContent02 as $loop02) : ?>
                    <!-- add data-aos -->
                    <div class="sect_3--content" id="<?= $loop02['id']; ?>" data-aos="fade-up" data-aos-duration="1000">
                        <div class="p-content01__row">
                            <div class="p-content01__col">
                                <p class="p-content01__ttl"><?= $loop02['ttl']; ?></p>
                                <p class="p-content01__sub"><span>pertner drive</span>で解決！</p>
                                <img src="<?= resource('img', 'raw/') . $loop02['frame']; ?>" alt="">
                            </div>
                            <div class="p-content01__col">
                                <?php foreach ($loop02['content'] as $cont) : ?>
                                    <div class="p-content01__cont">
                                        <p>
                                            <?= $cont[0]; ?>
                                        </p>
                                        <a href="#" class="c-button c-button--s modal-btn" data-modal="<?= $cont[1]; ?>">機能を見る</a>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>

                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>
<section class="sect_4" id="sect_4">
    <div class="p-content02">
        <div class="p-content02__row">
            <!-- add data-aos -->
            <div class="p-content02__col" data-aos="fade-up" data-aos-duration="1000">
                <p class="heading">
                    さっそく</span>partner drive<span>を<br>
                        使ってみましょう
                </p>
                <a class="c-button c-button--xxl c-button--accent--d c-button--return" href="#"><span>partner drive</span>をはじめる</a>
            </div>
            <!-- add data-aos -->
            <div class="p-content02__col" data-aos="fade-up" data-aos-duration="1000">
                <p class="heading">取り扱い商材も様々</p>
                <ul class="sect_4__slider">
                    <?php
                    $productHandled = [
                        [
                            'frame' => 'sect_4-img01.png',
                            'txt01' => '経理ソリューション',
                            'txt02' => '株式会社ミシシッピソリューション',
                        ],
                        [
                            'frame' => 'sect_4-img02.png',
                            'txt01' => '運輸テクノロジー',
                            'txt02' => '株式会社ラプラタテクノロジー',
                        ],
                        [
                            'frame' => 'sect_4-img03.png',
                            'txt01' => '在庫管理システム',
                            'txt02' => '株式会社ニジェールロジスティクス',
                        ],
                        [
                            'frame' => 'sect_4-img04.png',
                            'txt01' => '太陽光パネル',
                            'txt02' => '株式会社リカオレネクキャスト',
                        ],
                        [
                            'frame' => 'sect_4-img05.png',
                            'txt01' => '蓄電池',
                            'txt02' => '株式会社ザンベジドライブ',
                        ],
                        [
                            'frame' => 'sect_4-img06.png',
                            'txt01' => '決済システム',
                            'txt02' => '株式会社ニジェールデザイン',
                        ],
                        [
                            'frame' => 'sect_4-img07.png',
                            'txt01' => '健康保険',
                            'txt02' => '株式会社ガンジスライフ',
                        ],
                        [
                            'frame' => 'sect_4-img08.png',
                            'txt01' => 'サイネージ',
                            'txt02' => '株式会社エニセイサービス',
                        ],
                    ];
                    ?>
                    <?php foreach ($productHandled as $val) : ?>
                        <li>
                            <img src="<?= resource('img', 'raw/') . $val['frame']; ?>" alt="sect_4-img01">
                            <p><?= $val['txt01']; ?></p>
                            <p><?= $val['txt02']; ?></p>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>
    </div>
    <div class="features u-natural__width">
        <div class="l-wrap">
            <!-- add appear animation container -->
            <div class="appear-container appear-animation">
                <p class="c-heading01__main c-heading01__main--left">partner driveの機能<span>features</span></p>
            </div>
            <!-- add data-aos -->
            <div class="features__content" data-aos="fade-up" data-aos-duration="1000">
                <div class="row">
                    <div class="col">
                        <div class="left">
                            <p>調達</p>
                            <p>導入</p>
                            <p>運用<br class="u-d-n-laptop">管理</p>
                        </div>
                        <div class="right">
                            <a href="#" class="modal-btn" data-modal="case4">ユーザー登録</a>
                            <a href="#" class="disabled">サービス(商材)登録機能</a>
                            <a href="#" class="modal-btn" data-modal="case2">サービス(商材)検索機能</a>
                            <a href="#" class="disabled">セールスパートナースカウト機能</a>
                            <a href="#" class="modal-btn" data-modal="case4">メッセージ機能(チャット)</a>
                            <a href="#" class="modal-btn" data-modal="case2">研究動画・資料ダウンロード機能</a>
                            <a href="#" class="modal-btn" data-modal="case1">獲得案件登録・ステータス管理機能</a>
                            <a href="#" class="modal-btn" data-modal="case4">見込み報酬金額確認機能</a>
                            <a href="#" class="modal-btn" data-modal="case3">経済条件更改機能</a>
                        </div>
                    </div>
                    <div class="col">
                        <div class="sales isActive">
                            <p class="heading">
                                セールス向け
                            </p>
                            <p class="circ"><span></span></p>
                            <p class="line"><span></span></p>
                            <p class="circ"><span></span></p>
                            <p class="line"><span></span></p>
                            <p class="circ"><span></span></p>
                            <p class="circ"><span></span></p>
                            <p class="circ"><span></span></p>
                            <p class="circ"><span></span></p>
                            <p class="circ"><span></span></p>
                        </div>
                        <div class="supply">
                            <p class="heading">
                                サプライ向け
                            </p>
                            <p class="circ"><span></span></p>
                            <p class="circ"><span></span></p>
                            <p class="line"><span></span></p>
                            <p class="circ"><span></span></p>
                            <p class="line"><span></span></p>
                            <p class="circ"><span></span></p>
                            <p class="circ"><span></span></p>
                            <p class="circ"><span></span></p>
                            <p class="circ"><span></span></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- add data-aos -->
    <div class="takealook u-natural__width" data-aos="fade-up" data-aos-duration="1000">
        <div class="l-wrap">
            <p class="heading">各機能を見てみる</p>
            <div class="content">
                <div class="row">
                    <a href="#" class="col modal-btn" data-modal="case1">
                        <img src="<?= resource('img', 'raw/function-img01.png'); ?>" alt="">
                        <p class="txt">ホーム</p>
                    </a>
                    <a href="#" class="col modal-btn" data-modal="case2">
                        <img src="<?= resource('img', 'raw/function-img02.png'); ?>" alt="">
                        <p class="txt">商材管理</p>
                    </a>
                    <a href="#" class="col modal-btn" data-modal="case3">
                        <img src="<?= resource('img', 'raw/function-img03.png'); ?>" alt="">
                        <p class="txt">マッチング管理</p>
                    </a>
                    <a href="#" class="col modal-btn" data-modal="case4">
                        <img src="<?= resource('img', 'raw/function-img04.png'); ?>" alt="">
                        <p class="txt">案件管理</p>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="sect_5" id="sect_5">
    <div class="l-wrap">
        <!-- add appear animation container -->
        <div class="appear-container appear-container--center appear-animation">
            <p class="u-f-ta-c c-heading01__main">ご利用までの流れ<span>Step</span></p>
        </div>
        <div class="sect_5__content">
            <?php
            $loopContent03 = [
                [
                    "num" => "1",
                    "frame" => "sect_5-img01.png",
                    "txt01" => "新規会員登録",
                    "txt02" => "登録フォームから必要事項を入力して登録をしてください。<br>
                    審査を通過いただく前にも一部の機能は利用可能です。",
                ],
                [
                    "num" => "2",
                    "frame" => "sect_5-img02.png",
                    "txt01" => "審査",
                    "txt02" => "入力いただいた内容をもとに審査を行います。<br>
                    審査通過をもって全機能を利用可能になります。",
                ],
                [
                    "num" => "3",
                    "frame" => "sect_5-img03.png",
                    "txt01" => "設定",
                    "txt02" => "サプライパートナーのみなさまは商材の登録を、セールスパートナーの皆様は自社の情報登録を行なってください。",
                ],
                [
                    "num" => "4",
                    "frame" => "sect_5-img04.png",
                    "txt01" => "ご利用開始",
                    "txt02" => "ご利用開始です。<br>
                    検索から最高の商材、セールスパートナーを見つけてください。",
                ],
            ];
            ?>
            <!-- add data-aos -->
            <div class="row" data-aos="fade-up" data-aos-duration="1000">
                <?php foreach ($loopContent03 as $loop) : ?>
                    <div class="col">
                        <div class="left">
                            <p><?= $loop['num']; ?></p>
                            <img src="<?= resource('img', 'raw/') . $loop['frame']; ?>" alt="sect_5-img01">
                        </div>
                        <div class="right">
                            <p><?= $loop['txt01']; ?></p>
                            <p><?= $loop['txt02']; ?></p>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>
<section class="sect_6" id="sect_6">
    <div class="p-content02">
        <div class="p-content02__row u-d-f-s">
            <!-- add data-aos -->
            <div class="p-content02__col p-content02__col--right" data-aos="fade-up" data-aos-duration="1000">
                <p class="heading">
                    さっそく</span>partner drive<span>を<br>
                        使ってみましょう
                </p>
                <a class="c-button c-button--xxl c-button--accent--d c-button--return" href="#"><span>partner drive</span>をはじめる</a>
            </div>
            <!-- add data-aos -->
            <div class="p-content02__col p-content02__col--flex" data-aos="fade-up" data-aos-duration="1000">
                <img src="<?= resource('img', 'raw/sect_6-img01.png'); ?>" alt="sect_6-img01">
            </div>
        </div>
    </div>
    <div class="cases">
        <div class="l-wrap">
            <!-- add appear animation container -->
            <div class="appear-container appear-container--center appear-animation">
                <p class="u-f-ta-c c-heading01__main">導入事例<span>case</span></p>
            </div>
            <!-- add data-aos -->
            <div class="cases__content" data-aos="fade-up" data-aos-duration="1000">
                <?php
                $caseLoop = [
                    [
                        'frame' => 'case-img01.png',
                        'body' => 'Paraviが実践する最新の統合メディアプランニング事例 〜テレビ×デジタル×DOOHのトリプルメディア効果検証〜',
                    ],
                    [
                        'frame' => 'case-img02.png',
                        'body' => '来店者の属性、単価、頻度を多角的に可視化 松屋が店舗集客でDOOHを活用した理由',
                    ],
                    [
                        'frame' => 'case-img03.png',
                        'body' => '「IT事業者」「製造業」「小売り」「ヘルスケア」の4業種に携わる人々をキャンペーンターゲットとして設定',
                    ],
                    [
                        'frame' => 'case-img01.png',
                        'body' => 'Paraviが実践する最新の統合メディアプランニング事例 〜テレビ×デジタル×DOOHのトリプルメディア効果検証〜',
                    ],
                    [
                        'frame' => 'case-img02.png',
                        'body' => '来店者の属性、単価、頻度を多角的に可視化 松屋が店舗集客でDOOHを活用した理由',
                    ],
                    [
                        'frame' => 'case-img03.png',
                        'body' => '「IT事業者」「製造業」「小売り」「ヘルスケア」の4業種に携わる人々をキャンペーンターゲットとして設定',
                    ],
                ];
                ?>
                <ul class="cases__slider">
                    <?php foreach ($caseLoop as $case) : ?>
                        <li class="cases__sliderItem">
                            <div class="frame">
                                <img src="<?= resource('img', 'raw/') . $case['frame'] ?>" alt="">
                            </div>
                            <p class="body">
                                <?= $case['body']; ?>
                            </p>
                            <p class="footer">
                                株式会社 Global Cast
                            </p>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>
            <!-- add data-aos -->
            <a href="#" class="c-button c-button--accent c-button--l u-m-c" data-aos="fade-up" data-aos-duration="1000" data-aos-anchor=".cases__content">導入事例をもっと見る</a>
        </div>
    </div>
</section>
<section class="sect_7" id="sect_7">
    <div class="l-wrap">
        <div class="news__row u-natural__width">
            <!-- add appear animation container 02 -->
            <div class="news__col appear-container02 appear-animation">
                <p class="c-heading01__main c-heading01__main--left">お知らせ<span>news</span></p>
                <a href="#" class="c-button c-button--accent c-button--l u-d-n-responsive">お知らせ一覧を見る</a>
            </div>
            <!-- add data-aos -->
            <div class="news__col" data-aos="fade-up" data-aos-duration="1000">
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
        <!-- add appear animation container -->
        <div class="appear-container appear-container--center appear-animation">
            <p class="u-f-ta-c c-heading01__main">よくある質問<span>Q&A</span></p>
        </div>
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
<section class="get__started" id="get__started">
    <!-- add data-aos -->
    <div class="l-wrap" data-aos="fade-up" data-aos-duration="1000">
        <p class="get__started_heading">さっそく<span>partner drive</span><br class="u-d-n-laptop">を使ってみましょう。</p>
        <div class="get__started_buttons">
            <a class="c-button c-button--xl c-button--accent--w c-button--return" href="#"><img src="<?= resource('img', 'icon/icon_download.svg'); ?>" alt=""> 資料ダウンロード</a>
            <a class="c-button c-button--xl c-button--accent c-button--return" href="#"><img src="<?= resource('img', 'icon/icon_user.svg'); ?>" alt=""> 新規登録・ログイン</a>
        </div>
    </div>
</section>
<section class="p-form">
    <div class="l-wrap">
        <!-- add appear animation container -->
        <div class="appear-container appear-container--center appear-animation">
            <p class="u-f-ta-c c-heading01__main">お問い合わせ<span>contact</span></p>
        </div>
        <p class="u-f-ta-c c-heading01__sub">以下フォームをご記入の上<br class="u-d-n-laptop">お問い合わせください。</p>

        <div class="p-form__inner u-natural__width">
            <div class="p-form__container">
                <label>お名前<span class="required">*</span></label>
                <div class="p-form__group">
                    <input type="text" class="p-form__control p-form__control--half" placeholder="姓">
                    <input type="text" class="p-form__control p-form__control--half" placeholder="名">
                </div>
            </div>
            <div class="p-form__container">
                <label>会社名<span class="required">*</span></label>
                <div class="p-form__group">
                    <input type="text" class="p-form__control" placeholder="会社名をご記入ください">
                </div>
            </div>
            <div class="p-form__container">
                <label>部署名<span class="required">*</span></label>
                <div class="p-form__group">
                    <input type="text" class="p-form__control" placeholder="部署名をご記入ください">
                </div>
            </div>
            <div class="p-form__container">
                <label>Eメール<span class="required">*</span></label>
                <div class="p-form__group">
                    <input type="email" class="p-form__control" placeholder="xxxx@partnerdrive.com">
                </div>
            </div>
            <div class="p-form__container">
                <label>電話番号<span class="required">*</span></label>
                <div class="p-form__group">
                    <input type="text" class="p-form__control" placeholder="080-0000-0000">
                </div>
            </div>
            <div class="p-form__container">
                <label>お問い合わせ内容<span class="required">*</span></label>
                <div class="p-form__group">
                    <select name="" id="">
                        <option selected value="">選択してください</option>
                        <option value="">sample 1</option>
                        <option value="">sample 2</option>
                    </select>
                </div>
            </div>
            <div class="p-form__container">
                <label>ご相談、要望などあればご記入ください</label>
                <div class="p-form__group">
                    <textarea name="message" id="message" cols="30" rows="10">ご自由にご記入ください</textarea>
                </div>
            </div>

            <p class="u-f-ta-c p-form__policy">お問い合わせには、<br class="u-d-n-laptop"><a href="#">プライバシーポリシー</a>への<br class="u-d-n-laptop">同意が必要です。</p>
            <a href="#" class="c-button c-button--accent c-button--l u-m-c">同意の上、送信する</a>
        </div>
    </div>
</section>
<div class="p-modal p-modal01 p-modal--close">
    <div class="p-modal__content">
        <ul class="toggler modalClose">
            <li class="togglerItem"></li>
            <li class="togglerItem"></li>
        </ul>
        <p class="p-modal__title">ホーム</p>
        <div class="p-modal__frame">
            <img src="<?= resource('img', 'raw/modal-img01.png'); ?>" alt="">
        </div>
        <div class="p-modal__buttons">
            <a href="#" class="c-button" id="modalPrev">前の機能を見る</a>
            <a href="#" class="c-button c-button--accent" id="modalNext">次の機能を見る</a>
        </div>
    </div>
</div>
<div class="p-modal p-modal02 p-modal--close">
    <div class="p-modal__content">
        <ul class="toggler modalClose">
            <li class="togglerItem"></li>
            <li class="togglerItem"></li>
        </ul>
        <p class="p-modal__title">案件管理</p>
        <div class="p-modal__frame">
            <img src="<?= resource('img', 'raw/modal-img02.png'); ?>" alt="">
        </div>
        <div class="p-modal__buttons">
            <a href="#" class="c-button" id="modalPrev">前の機能を見る</a>
            <a href="#" class="c-button c-button--accent" id="modalNext">次の機能を見る</a>
        </div>
    </div>
</div>
<div class="p-modal p-modal03 p-modal--close">
    <div class="p-modal__content">
        <ul class="toggler modalClose">
            <li class="togglerItem"></li>
            <li class="togglerItem"></li>
        </ul>
        <p class="p-modal__title">商材管理</p>
        <div class="p-modal__frame">
            <img src="<?= resource('img', 'raw/modal-img03.png'); ?>" alt="">
        </div>
        <div class="p-modal__buttons">
            <a href="#" class="c-button" id="modalPrev">前の機能を見る</a>
            <a href="#" class="c-button c-button--accent" id="modalNext">次の機能を見る</a>
        </div>
    </div>
</div>
<div class="p-modal p-modal04 p-modal--close">
    <div class="p-modal__content">
        <ul class="toggler modalClose">
            <li class="togglerItem"></li>
            <li class="togglerItem"></li>
        </ul>
        <p class="p-modal__title">マッチング管理</p>
        <div class="p-modal__frame">
            <img src="<?= resource('img', 'raw/modal-img04.png'); ?>" alt="">
        </div>
        <div class="p-modal__buttons">
            <a href="#" class="c-button" id="modalPrev">前の機能を見る</a>
            <a href="#" class="c-button c-button--accent" id="modalNext">次の機能を見る</a>
        </div>
    </div>
</div>
<?php
includeWithVariables('includes/footer.php', ['footerJS' => ['all.js']]) ?>