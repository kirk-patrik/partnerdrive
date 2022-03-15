<?php
require('app/functions.php');
includeWithVariables('includes/header.php', ['pageTitle' => 'partner drive', 'headCSS' => ['page/top.css']]) ?>
<section class="p-mv">
    <img class="bg__monitor u-d-n-responsive" src="<?= resource('img', 'raw/mv-monitor.png'); ?>" alt="">
    <img class="bg__monitor-sp u-d-n-laptop" src="<?= resource('img', 'raw/mv-monitor-sp.png'); ?>" alt="">
    <div class="l-wrap p-mv__container">
        <div class="p-mv__content">
            <div class="row">
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
        <p class="sect_1__heading">
            供給と需要を<span>自動的</span>かつ<span><br class="u-d-n-laptop">リアルタイム</span>に最適に<br class="u-d-n-laptop">マッチさせることで、<br>
            パートナー販売チャネルの<br class="u-d-n-laptop"><span>売上を最大化</span>します。
        </p>
        <div class="sect_1__content">
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
                    <div class="sect_3--content" id="<?= $loop02['id']; ?>">
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
                                            <?= $cont; ?>
                                        </p>
                                        <a href="#" class="c-button c-button--s">機能を見る</a>
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
            <div class="p-content02__col">
                <p class="heading">
                    さっそく</span>partner drive<span>を<br>
                    使ってみましょう
                </p>
                <a class="c-button c-button--xxl c-button--accent--d c-button--return" href="#"><span>partner drive</span>をはじめる</a>
            </div>
            <div class="p-content02__col">
                <p class="heading">取り扱い商材も様々</p>
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
<section class="get__started" id="get__started">
    <div class="l-wrap">
        <p class="get__started_heading">さっそく<span>partner drive</span><br class="u-d-n-laptop">を使ってみましょう。</p>
        <div class="get__started_buttons">
            <a class="c-button c-button--xl c-button--accent--w c-button--return" href="#"><img src="<?= resource('img', 'icon/icon_download.svg'); ?>" alt=""> 資料ダウンロード</a>
            <a class="c-button c-button--xl c-button--accent c-button--return" href="#"><img src="<?= resource('img', 'icon/icon_user.svg'); ?>" alt=""> 新規登録・ログイン</a>
        </div>
    </div>
</section>
<section class="p-form">
    <div class="l-wrap">
        <p class="u-f-ta-c c-heading01__main">お問い合わせ<span>contact</span></p>
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

<?php
includeWithVariables('includes/footer.php', ['footerJS' => ['all.js']]) ?>