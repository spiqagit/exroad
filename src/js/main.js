import { gsap } from "gsap";
import "@splidejs/splide/dist/css/splide.min.css";
import { ScrollTrigger } from "gsap/ScrollTrigger";

document.addEventListener('DOMContentLoaded', () => {
    const spNavBtn = document.getElementById('sp_nav_btn');
    const naviBg = document.querySelector(".bl_header_upper_leftSide_sp_nav_bg");
    const nav = document.querySelector(".bl_header_upper_leftSide_sp_nav");

    // 初期状態
    gsap.set(nav, { display: 'block', x: '130%' });

    const openTl = gsap.timeline({ paused: true });
    openTl
        .set(naviBg, { display: 'block' }) // ← ここでdisplay: blockを先にセット
        .to(naviBg, {
            opacity: 1,
            duration: 0.1,
            ease: 'power2.inOut'
        }, 0)
        .to(nav, {
            x: 0,
            duration: 0.3,
            ease: 'power1.inOut'
        }, 0);


    const closeTl = gsap.timeline({ paused: true });
    closeTl.to(nav, {
        x: '120%',
        duration: 0.3,
        ease: 'power1.inOut'
    })
        .to(naviBg, {
            opacity: 0,
            duration: 0.1,
            ease: 'power1.inOut',
            onComplete: () => {
                console.log('opacity transition completed');
                setTimeout(() => {
                    gsap.set(naviBg, { display: 'none' });
                }, 200);
            }
        }, 0);

    let isOpen = false;

    spNavBtn.addEventListener('click', () => {
        if (!isOpen) {
            gsap.set(naviBg, { display: 'block' });
            openTl.restart();
            isOpen = true;
        } else {
            closeTl.restart();
            isOpen = false;
        }
    });


    //フェードイン
    gsap.registerPlugin(ScrollTrigger);


    const serviceListItem = [...document.querySelectorAll(".bl_topServicesSec_list_item")];

    serviceListItem.forEach((item) => {
        gsap.from(item, {
            opacity: 0,
            y: 50,
            duration: 1,
            scrollTrigger: {
                trigger: item,
                start: 'top 90%',
                toggleActions: 'play none none none',
            }
        });
    });




});
