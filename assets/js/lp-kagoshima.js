/**
 * LP 鹿児島店
 */
(function () {
    'use strict';

    /**
     * ひなた工務店とは？：写真のループスライダー（Swiper 8）
     * PC（768px以上）… 2列の縦スライダー（.js-lpAboutSwiper）
     *   - data-direction="up"    … 下から上へ流れる
     *   - data-direction="down"  … 上から下へ流れる
     * SP（767px以下）… 2段の横スライダー（.js-lpAboutSwiperSp、CTAの下に配置）
     *   - data-direction="left"  … 右から左へ流れる
     *   - data-direction="right" … 左から右へ流れる
     * 画像ごとに大きさが違うため、1枚ごとに速度を計算して一定の速さで流す。
     * 非表示側のスライダーは動かさないよう、画面幅に応じて作成・破棄する。
     */
    var PX_PER_SECOND = 40; // 流れる速さ（px/秒）
    var SP_QUERY = '(max-width: 767px)';

    function createLoopSlider(el, vertical) {
        var reverse = el.dataset.direction === 'down' || el.dataset.direction === 'right';
        var slideCount = el.querySelectorAll('.swiper-slide').length;
        var reduceMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

        // 列（段）間の余白（CSSで画面幅に応じて変わる）をスライド間にも使う
        var getGap = function () {
            var style = getComputedStyle(el.parentElement);
            return parseFloat(vertical ? style.columnGap : style.rowGap) || 0;
        };

        // 次に動く1枚分の距離から、速度（ms）を決める
        var setSpeed = function (swiper) {
            var slide = swiper.slides[reverse ? swiper.activeIndex - 1 : swiper.activeIndex];
            if (!slide) return;
            var size = vertical ? slide.offsetHeight : slide.offsetWidth;
            swiper.params.speed = ((size + swiper.params.spaceBetween) / PX_PER_SECOND) * 1000;
        };

        return new Swiper(el, {
            direction: vertical ? 'vertical' : 'horizontal',
            slidesPerView: 'auto',
            spaceBetween: getGap(),
            loop: true,
            loopedSlides: slideCount,
            initialSlide: reverse ? 2 : 0,
            allowTouchMove: false,
            autoplay: reduceMotion ? false : {
                delay: 0,
                disableOnInteraction: false,
                reverseDirection: reverse,
            },
            on: {
                init: setSpeed,
                transitionEnd: setSpeed,
                beforeResize: function (swiper) {
                    swiper.params.spaceBetween = getGap();
                },
            },
        });
    }

    function initAboutSlider() {
        if (typeof Swiper === 'undefined') return;

        var pcEls = document.querySelectorAll('.js-lpAboutSwiper');
        var spEls = document.querySelectorAll('.js-lpAboutSwiperSp');
        var mq = window.matchMedia(SP_QUERY);
        var active = [];

        var setup = function () {
            active.forEach(function (swiper) { swiper.destroy(true, true); });
            active = [];
            var isSp = mq.matches;
            (isSp ? spEls : pcEls).forEach(function (el) {
                active.push(createLoopSlider(el, !isSp));
            });
        };

        setup();
        mq.addEventListener('change', setup);
    }

    /**
     * 共通フッターの「トップへ戻る」ボタン
     * ※ 通常ページは script.js で動かしているが、script.js はヘッダー（スマホメニュー）が
     *   ある前提でエラーになるため、LPではこの処理だけを同じ内容で用意する。
     */
    function initBackToTop() {
        var button = document.querySelector('.js-backToTopButton');
        if (!button) return;

        button.addEventListener('click', function (event) {
            event.preventDefault();
            window.scrollTo({ top: 0, left: 0, behavior: 'smooth' });

            var firstFocusable = document.querySelector('button, a, input, select, textarea, [tabindex]:not([tabindex="-1"])');
            if (firstFocusable) firstFocusable.focus({ preventScroll: true });
        });
    }

    document.addEventListener('DOMContentLoaded', function () {
        initAboutSlider();
        initBackToTop();
    });
})();
