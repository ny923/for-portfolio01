// 共通設定
const defaultScroll = (trigger) => ({
    trigger,
    start: 'top center',
    // markers: true,
});

// 初期状態
gsap.set(
    [
        '.fadeUp01',
        '.fadeUp02',
        '.fadeUp03',
        '.fadeDown',
        '.about-fU01',
        '.about-fU02',
        '.fadeIn01',
        '.fadeIn02',
        '.featuresFU01',
        '.featuresFU02',
    ],
    { autoAlpha: 0 }
);

// fadeUp 汎用関数
const fadeUp = (targets, trigger, extra = {}) => {
    gsap.to(targets, {
        autoAlpha: 1,
        y: -40,
        duration: 0.5,
        scrollTrigger: defaultScroll(trigger),
        stagger: { amount: 0.7 },
        ...extra,
    });
};

// fadeDown 汎用関数
const fadeDown = (targets, trigger, extra = {}) => {
    gsap.to(targets, {
        autoAlpha: 1,
        y: 40,
        duration: 0.5,
        scrollTrigger: defaultScroll(trigger),
        ...extra,
    });
};

// fadeIn 汎用関数
const fadeIn = (targets, trigger, extra = {}) => {
    gsap.to(targets, {
        autoAlpha: 1,
        duration: 0.5,
        scrollTrigger: defaultScroll(trigger),
        stagger: { amount: 0.7 },
        ...extra,
    });
};

// ==========================
// 実際の呼び出し
// ==========================
fadeUp(['.fadeUp01', '.fadeUp02', '.fadeUp03'], '.section-hero');
fadeDown('.fadeDown', '.section-hero', { delay: 0.5 });

fadeUp(['.about-fU01', '.about-fU02'], '.about');

gsap.to('.about-SI', {
    x: '100%',
    delay: 0.5,
    duration: 0.5,
    scrollTrigger: defaultScroll('.about'),
});

gsap.to('.toSmall', {
    scale: 0.9,
    delay: 0.5,
    duration: 0.5,
    scrollTrigger: defaultScroll('.about'),
});

gsap.to('.services-SI', {
    x: '100%',
    delay: 0.5,
    duration: 0.5,
    scrollTrigger: defaultScroll('.section-services .headline__title'),
});

fadeIn(['.fadeIn01', '.fadeIn02'], '.services');

fadeUp(['.featuresFU01', '.featuresFU02'], '.section-features');
