// .logo_text__img
jQuery(function () {
    // スクロールを開始したら
    $(window).on('scroll', function () {
        // ファーストビューの高さを取得
        mvHeight = $('.section-hero').height();
        if ($(window).scrollTop() > mvHeight) {
            // スクロールの位置がファーストビューより下の場合にclassを付与
            $('.logo_text__img').addClass('hide');
        } else {
            // スクロールの位置がファーストビューより上の場合にclassを外す
            $('.logo_text__img').removeClass('hide');
        }
    });
});

// ページのスクロール復元を無効化
if ('scrollRestoration' in history) {
    history.scrollRestoration = 'manual';
}

gsap.registerPlugin(ScrollTrigger);

// 以下gsap用 top hero
gsap.set(
    '.fadeUp01, .fadeUp02, .fadeUp03, .fadeDown, .about-fU01, .about-fU02, .fadeIn01, .fadeIn02, .featuresFU01, .featuresFU02, .aboutFI01, .aboutFI02, .aboutFI03, .contactFU01, .contactFU02',
    {
        autoAlpha: 0,
    },
    '.about-SI, .services-SI',
    {
        // autoAlpha: 1, // 目隠し用
    }
);

// , .about-fU01, .about-fU02
gsap.to('.fadeUp01, .fadeUp02, .fadeUp03', {
    autoAlpha: 1,
    y: -40,
    duration: 0.5,
    scrollTrigger: {
        trigger: '.section-hero', // トリガー
        start: 'top center',
        // markers: true, // 確認用
    },
    stagger: {
        amount: 0.7, // 遅延
    },
});

gsap.to('.fadeDown', {
    autoAlpha: 1,
    y: 40,
    duration: 0.5,
    delay: 0.5, // 〇秒後に開始
    scrollTrigger: {
        trigger: '.section-hero',
        start: 'top center',
        // markers: true,
    },
});

// about sp FV要素と共に出る
ScrollTrigger.matchMedia({
    '(max-width: 610px)': function () {
        gsap.to('.about-fU01, .about-fU02', {
            autoAlpha: 1,
            y: -40,
            duration: 0.5,
            delay: 1.0,
            scrollTrigger: {
                trigger: '.section-hero', // トリガー
                start: 'top center',
            },
            stagger: {
                amount: 0.7, // 遅延
            },
        });
    },
});

// about pad, pc
ScrollTrigger.matchMedia({
    '(min-width: 611px)': function () {
        gsap.to('.about-fU01, .about-fU02', {
            autoAlpha: 1,
            y: -40,
            duration: 0.5,
            scrollTrigger: {
                trigger: '.about',
                start: 'top center',
            },
            stagger: {
                amount: 0.7,
            },
        });
    },
});

// about logo 要素で隠して出す
gsap.to('.about-SI', {
    x: '100%',
    delay: 0.5,
    duration: 0.5,
    scrollTrigger: {
        trigger: '.about',
        start: 'top center',
        // markers: true,
    },
});

gsap.to('.toSmall', {
    scale: 0.9, // size
    duration: 0.5,
    delay: 0.5,
    scrollTrigger: {
        trigger: '.about',
        start: 'top center',
        // markers: true,
    },
});

// services
gsap.to('.services-SI', {
    x: '100%',
    delay: 0.5,
    duration: 0.5,
    // ease: "power2.out",
    scrollTrigger: {
        trigger: '.section-services .headline__title',
        start: 'top center',
        // markers: true,
    },
});

gsap.to('.fadeIn01, .fadeIn02', {
    autoAlpha: 1,
    duration: 0.5,
    scrollTrigger: {
        trigger: '.services',
        start: 'top center',
        // markers: true,
    },
    stagger: {
        amount: 0.7,
    },
});

// features
gsap.to('.featuresFU01, .featuresFU02', {
    autoAlpha: 1,
    y: -40,
    duration: 0.5,
    scrollTrigger: {
        trigger: '.section-features',
        start: 'top center',
        // markers: true,
    },
    stagger: {
        amount: 0.7,
    },
});

// company
gsap.to('.aboutFI01, .aboutFI02, .aboutFI03', {
    autoAlpha: 1,
    duration: 0.5,
    scrollTrigger: {
        trigger: '.about',
        start: 'top center',
        // markers: true,
    },
    stagger: {
        amount: 0.5,
    },
});

// contact
gsap.to('.contactFU01', {
    autoAlpha: 1,
    y: -40,
    duration: 0.5,
    scrollTrigger: {
        trigger: '.section-hero',
        start: 'top center',
        // markers: true,
    },
});
gsap.to('.contactFU02', {
    autoAlpha: 1,
    y: -40,
    duration: 0.5,
    scrollTrigger: {
        trigger: '.contact-form',
        start: 'top center',
        // markers: true,
    },
});

// footer
gsap.from('.footerFI', {
    scrollTrigger: {
        trigger: '.site-footer', // この要素が表示領域に入ったら
        start: 'top 80%', // 表示開始位置（viewportの80%に入ったら）
        toggleActions: 'play none none reverse',
        // (スクロール方向に応じたアクション)
    },
    opacity: 0,
    duration: 1,
    // markers: true,
});
