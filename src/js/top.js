
import Splide from "@splidejs/splide";
import { AutoScroll } from "@splidejs/splide-extension-auto-scroll";


window.addEventListener('load', () => {

    /* 企業ロゴスライダー
    ------------------------*/
    //1段目
    const firstSlide = document.getElementById('splide-first');
    if (firstSlide) {
        new Splide(firstSlide, {
            type: 'loop',
            arrows: false,
            pagination: false,
            drag: false,
            gap: "2em",
            autoWidth: true,
            autoScroll: {
                speed: .6,
                pauseOnHover: false,
            },
            extensions: { AutoScroll },
        }).mount({ AutoScroll });
    }

    //2段目
    const secondSlide = document.getElementById('splide-second');
    if (secondSlide) {
        new Splide(secondSlide, {
            type: 'loop',
            arrows: false,
            pagination: false,
            drag: false,
            gap: "2em",
            autoWidth: true,
            autoScroll: {
                speed: .7,
                pauseOnHover: false,
            },
            extensions: { AutoScroll },
        }).mount({ AutoScroll });
    }

    //3段目
    const thirdSlide = document.getElementById('splide-third');
    if (thirdSlide) {
        new Splide(thirdSlide, {
            type: 'loop',
            arrows: false,
            pagination: false,
            autoWidth: true,
            drag: false,
            gap: "2em",
            autoScroll: {
                speed: .8,
                pauseOnHover: false,
            },
            extensions: { AutoScroll },
        }).mount({ AutoScroll });
    }


    //チーム
    const teamSlide = document.getElementById('splide-team');
    if (teamSlide) {
        new Splide(teamSlide, {
            type: 'loop',
            arrows: false,
            pagination: false,
            autoWidth: true,
            drag: false,
            gap: "2em",
            clones:10,
            autoScroll: {
                speed: .8,
                pauseOnHover: false,
            },
            extensions: { AutoScroll },
        }).mount({ AutoScroll });
    }


    /*----------------
    過去
    -----------------*/
    const webinarSection = document.querySelector('.bl_topWebinarSec_listContainer');
    const webinarLists = webinarSection ? webinarSection.querySelectorAll('.bl_topWebinarList') : []; // webinarSection が null の場合の対策
    const moreButton = document.querySelector('.el_topWebinarSec_moreBtn');

    if (moreButton) {
        // 最初のul以外を非表示にする
        for (let i = 1; i < webinarLists.length; i++) {
            webinarLists[i].style.display = 'none';
            webinarLists[i].style.opacity = 0;
            webinarLists[i].style.transform = 'translateY(-20px)'; // 上に配置
            webinarLists[i].style.transition = 'opacity 0.5s ease-out, transform 0.5s ease-out';
        }

        // 表示されているulの数を追跡する変数
        let visibleListIndex = 0;

        // 「もっと見る」ボタンのクリックイベント
        moreButton.addEventListener('click', () => {
            visibleListIndex++;

            // 次のulを表示する
            if (webinarLists[visibleListIndex]) {
                webinarLists[visibleListIndex].style.display = 'flex';
                setTimeout(() => {
                    webinarLists[visibleListIndex].style.opacity = 1;
                    webinarLists[visibleListIndex].style.transform = 'translateY(0)'; // 下にスライド
                }, 10);

                // すべてのulが表示されたらボタンを非表示にする
                if (visibleListIndex === webinarLists.length - 1) {
                    moreButton.style.display = 'none';
                }
            }
        });
    }

    /*---------------------
    お役立ち情報
    ----------------------*/
    const howtoListContainer = document.querySelector('.bl_howtoPostContainer_listWrapper .bl_howtoPostList');
    const howtoListItems = howtoListContainer ? howtoListContainer.querySelectorAll('.bl_howtoPostList_item') : []; // howtoListContainer が null の場合の対策
    const loadMoreButton = document.querySelector('.el_howtoPostContainer_moreBtn');
    const initialVisibleCount = 3;
    const animationDuration = 200; // アニメーションの基本duration（ms）
    const itemDelay = 30; // 各アイテムの表示の遅延（ms）

    if (loadMoreButton) { //loadMoreButton がnull　の場合の対策
        // 初期表示で最初の3つ以外のリストアイテムを非表示にする
        for (let i = initialVisibleCount; i < howtoListItems.length; i++) {
            howtoListItems[i].style.display = 'none';
        }

        // 「もっと見る」ボタンのイベントリスナー
        loadMoreButton.addEventListener('click', function () {
            // アイテムを展開するアニメーション
            for (let i = initialVisibleCount; i < howtoListItems.length; i++) {
                howtoListItems[i].style.display = 'block';
                howtoListItems[i].style.opacity = 0;
                setTimeout(() => {
                    howtoListItems[i].style.transition = `opacity ${animationDuration}ms ease-in-out`;
                    howtoListItems[i].style.opacity = 1;
                }, i * itemDelay);
            }

            // ボタンを非表示にする
            loadMoreButton.style.display = 'none';
        });
    }

});
