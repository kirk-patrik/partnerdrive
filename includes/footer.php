    <!-- content end here -->
    </main>
    <footer class="l-footer page__footer <?= isset($addClassFooter) ?  $addClassFooter : ''; ?>">
        <!-- footer start here -->

        <a href="#" class="scrollToTop" id="scrollTop">top</a>

        <div class="l-footer__row">
            <div class="l-footer__col">
                <div class="l-footer__branding">
                    <img class="u-d-n-responsive" src="<?= resource('img', 'raw/partnerdrive_logo_white.svg'); ?>" alt="">
                    <img class="u-d-n-laptop" src="<?= resource('img', 'raw/partnerdrive_logo_white-sp.png'); ?>" alt="">
                </div>
                <p class="copyright u-d-n-responsive">© GlobalCast Co.,Ltd.</p>
            </div>
            <div class="l-footer__col">
                <ul class="l-footer__menu01">
                    <li><a href="#">partner drive<span>の機能</span></a></li>
                    <li><a href="#"><span>お問い合わせ</span></a></li>
                </ul>
                <ul class="l-footer__menu02">
                    <li><a href="#">利用規約</a></li>
                    <li><a href="#">プライバシーポリシー<img src="<?= resource('img', 'icon/icon_box-arrow.svg'); ?>" alt=""></a></li>
                </ul>
                <p class="copyright u-d-n-laptop">© GlobalCast Co.,Ltd.</p>
            </div>
        </div>
        <!-- footer end here -->
    </footer>
    </body>
    <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
    <!-- script here for global -->
    <?= resources('js', isset($footerJS) ? $footerJS : '', true) ?>

    </html>