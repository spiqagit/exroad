<?php get_header('meta'); ?>
<?php wp_head(); ?>
</head>

<body>
    <?php get_header(); ?>
    <main class="ly_main">
        <!-- FV -->
        <div class="ly_fvSec">
            <div class="bl_fvSec_inner">
                <div class="bl_fvSec_leftSide">
                    <div class="bl_leftSide_copyContainer">
                        <p class="el_leftSide_copyContainer_main">カーボンクレジット・排出量取引制度<br>オールインワン情報サービス</p>
                        <p class="el_leftSide_copyContainer_sub">国内外動向・ルール・価格の情報収集を効率化</p>
                    </div>
                    <div class="bl_leftSide_ctaWrapper">
                        <div class="bl_leftSide_ctaWrapper_ctaBtnContainer">
                            <p class="el_ctaBtnContainer_subTxt">
                                <span></span>
                                ご好評いただいています<br>無料で配信中
                                <span></span>
                            </p>
                            <a href="https://app.exroad.jp/ja/newsletter/subscribe/" target="_blank" class="bl_commonCtaBtnContainer_btn">ニュースレターに登録する</a>
                        </div>
                        <?php if (get_field("fv_txt", "option") || get_field("fv_link", "option")): ?>
                            <div class="bl_fvSec_leftSide_appealSec">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/new-pop.svg" alt="">
                                <div class="bl_fvSec_leftSide_appealSec_txt">
                                    <?php if (get_field("fv_txt", "option")): ?>
                                        <p class="el_fvSec_leftSide_appealSec_txt_main"><?php echo get_field("fv_txt", "option"); ?></p>
                                    <?php endif; ?>
                                    <?php if (get_field("fv_link", "option")): ?>
                                        <a href="<?php echo get_field("fv_link", "option"); ?>" target="_blank" class="el_fvSec_leftSide_appealSec_txt_btn">詳しくはこちら</a>
                                    <?php endif; ?>
                                </div>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="bl_fvSec_rightSide">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/mock.png" alt="モックアップ">
                    <div class="bl_fvSec_rightSide_logoSec">
                        <img class="el_fvSec_rightSide_logoSec_logo" src="<?php echo get_template_directory_uri(); ?>/assets/img/common/logo_exroad.png" alt="exroad">
                        <p class="el_fvSec_rightSide_logoSec_txt">エクスロード</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Slider -->
        <section class="ly_logoSlideSec">
            <div class="bl_logoSlideSec_ttl">
                <h2 class="el_logoSlideSec_ttl_main">ご利用いただいているお客様</h2>
                <p class="el_logoSlideSec_ttl_sub">※許諾をいただいた企業様のみ掲載しています（順不同）</p>
            </div>
            <!-- 一段目 -->
            <?php if (have_rows('corpLogo_firstSlide', 'option')): ?>
                <div id="splide-first" class="splide bl_logoSlideSec_slider">
                    <div class="splide__track">
                        <ul class="splide__list">
                            <?php while (have_rows('corpLogo_firstSlide', 'option')): the_row(); ?>
                                <?php
                                $firstItem = get_sub_field('corpLogo_firstSlide_img');
                                ?>
                                <li class="splide__slide">
                                    <img class="el_logoSlideSec_slider_img" src="<?php echo $firstItem["url"]; ?>" alt="<?php echo $firstItem["alt"]; ?>" />
                                </li>
                            <?php endwhile; ?>
                        </ul>
                    </div>
                </div>
            <?php endif; ?>

            <!-- 2段目 -->
            <?php if (have_rows('corpLogo_secondSlide', 'option')): ?>
                <div id="splide-second" class="splide bl_logoSlideSec_slider">
                    <div class="splide__track">
                        <ul class="splide__list">
                            <?php while (have_rows('corpLogo_secondSlide', 'option')): the_row(); ?>
                                <?php
                                $secondItem = get_sub_field('corpLogo_secondSlide_img');
                                ?>
                                <li class="splide__slide">
                                    <img class="el_logoSlideSec_slider_img" src="<?php echo $secondItem["url"]; ?>" alt="<?php echo $secondItem["alt"]; ?>" />
                                </li>
                            <?php endwhile; ?>
                        </ul>
                    </div>
                </div>
            <?php endif; ?>

            <!-- 3段目 -->
            <?php if (have_rows('corpLogo_thirdSlide', 'option')): ?>
                <div id="splide-third" class="splide bl_logoSlideSec_slider">
                    <div class="splide__track">
                        <ul class="splide__list">
                            <?php while (have_rows('corpLogo_thirdSlide', 'option')): the_row(); ?>
                                <?php
                                $thirdItem = get_sub_field('corpLogo_thirdSlide_img');
                                ?>
                                <li class="splide__slide">
                                    <img class="el_logoSlideSec_slider_img" src="<?php echo $thirdItem["url"]; ?>" alt="<?php echo $thirdItem["alt"]; ?>" />
                                </li>
                            <?php endwhile; ?>
                        </ul>
                    </div>
                </div>
            <?php endif; ?>
        </section>

        <!-- エクスロードでできること -->
        <section class="ly_commonTopContents ly_topServicesSec">
            <div class="bl_commonTopContents_inner">
                <div class="bl_commonTopContents_ttl">
                    <h2 class="el_commonTopContents_ttl_main">エクスロードでできること</h2>
                </div>
                <div class="bl_topServicesSec_listContainer">
                    <div class="el_topServicesSec_listContainer_line"></div>
                    <ol class="bl_topServicesSec_list">
                        <li class="bl_topServicesSec_list_item">
                            <div class="bl_topServicesList_copy">
                                <p class="el_topServicesList_copy_main el_topServicesList_copy_point01">国内外の動向把握</p>
                                <p class="el_topServicesList_copy_txt">情報の流れが早いクレジット業界における日々のニュースやレポート、GX-ETSなどのルール、ガイドライン、国際イニシアチブの動向などを漏れなくキャッチアップ。週単位および月単位でのサマリーニュースレターも。</p>
                            </div>
                            <p>
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/point-01.svg" alt="1">
                            </p>
                            <div class="bl_topServicesList_img">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/point01-illust.jpg" alt="">
                            </div>
                        </li>
                        <li class="bl_topServicesSec_list_item">
                            <div class="bl_topServicesList_copy">
                                <p class="el_topServicesList_copy_main el_topServicesList_copy_point02">分析・戦略策定</p>
                                <p class="el_topServicesList_copy_txt">クレジット価格や発行量・無効化量、その他関連する定量データもラインナップ。炭素価格戦略策定、創出事業の企画・推進などのシーンでご活用いただけます。-ETSなどのルール、ガイドライン、国際イニシアチブの動向などを漏れなくキャッチアップ。週単位および月単位でのサマリーニュースレターも。</p>
                            </div>
                            <p>
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/point-02.svg" alt="1">
                            </p>
                            <div class="bl_topServicesList_img">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/point02-illust.jpg" alt="">
                            </div>
                        </li>
                        <li class="bl_topServicesSec_list_item">
                            <div class="bl_topServicesList_copy">
                                <p class="el_topServicesList_copy_main el_topServicesList_copy_point03">業務効率化</p>
                                <p class="el_topServicesList_copy_txt">クレジットや排出量取引制度に関連する図表・グラフなどがプリセットされているため分析・資料作成の時間短縮に。パリ協定第6条・CORSIA・CCPs認証取得クレジットもフィルタできる海外レジストリ横断検索機能も（<a href="#" class="el_commonTxtLink">詳しくはこちら</a>）</p>
                            </div>
                            <p>
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/point-03.svg" alt="1">
                            </p>
                            <div class="bl_topServicesList_img">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/point03-illust.jpg" alt="">
                            </div>
                        </li>
                    </ol>
                </div>

                <div class="bl_commonTagListContainer">
                    <ul class="bl_commonTagListContainer_list">
                        <li class="el_commonTagListContainer_list_item">
                            #Jクレジット
                        </li>
                        <li class="el_commonTagListContainer_list_item">
                            #海外ボランタリークレジット
                        </li>
                        <li class="el_commonTagListContainer_list_item">
                            #JCM
                        </li>
                        <li class="el_commonTagListContainer_list_item">
                            #パリ協定第6条
                        </li>
                        <li class="el_commonTagListContainer_list_item">
                            #CORSIA
                        </li>
                        <li class="el_commonTagListContainer_list_item">
                            #EU-ETS
                        </li>
                        <li class="el_commonTagListContainer_list_item">
                            #CORSIA
                        </li>
                        <li class="el_commonTagListContainer_list_item">
                            #GXリーグ
                        </li>
                        <li class="el_commonTagListContainer_list_item">
                            #温対法
                        </li>
                        <li class="el_commonTagListContainer_list_item">
                            #ICVCM
                        </li>
                        <li class="el_commonTagListContainer_list_item">
                            #VCMI
                        </li>
                        <li class="el_commonTagListContainer_list_item">
                            ##SBTi
                        </li>
                        <li class="el_commonTagListContainer_list_item">
                            #生物多様性
                        </li>
                        <li class="el_commonTagListContainer_list_item">
                            #炭素価格
                        </li>
                        <li class="el_commonTagListContainer_list_item">
                            #社内炭素税
                        </li>
                        <li class="el_commonTagListContainer_list_item">
                            #他社情報・事例
                        </li>
                        <li class="el_commonTagListContainer_list_item">
                            #CCUS
                        </li>
                        <li class="el_commonTagListContainer_list_item">
                            #バイオ炭
                        </li>
                        <li class="el_commonTagListContainer_list_item">
                            #森林
                        </li>
                        <li class="el_commonTagListContainer_list_item">
                            #用語集
                        </li>
                        <li class="el_commonTagListContainer_list_item">
                            #グリーンウォッシュ
                        </li>
                        <li class="el_commonTagListContainer_list_moreTxt">
                            and more...
                        </li>
                    </ul>
                </div>
            </div>
        </section>


        <!-- エクスロードでできること -->
        <section class="ly_commonTopContents ly_topFeatuerSec">
            <div class="bl_commonTopContents_inner">
                <div class="bl_commonTopContents_ttl">
                    <h2 class="el_commonTopContents_ttl_main">エクスロードの特徴</h2>
                </div>

                <div class="bl_topFeatuerContainer">
                    <div class="bl_topFeatuerContainer_item bl_topFeatuerContainer_ui-ux">
                        <div class="bl_topFeatuerContainer_item_inner">
                            <img class="el_topFeatuerContainer_item_icon" src="<?php echo get_template_directory_uri(); ?>/assets/img/top/icon-ui-ux.jpg" alt="優れたUI/UX">
                            <p class="el_topFeatuerContainer_item_copy">優れたUI/UX</p>
                            <div class="bl_topFeatuerContainer_item_txtWrapper">
                                <p class="el_topFeatuerContainer_item_txtWrapper_txt">直感的に操作できるシンプルなUI、検索性も◎。マイニュース機能で関心あるトピックスを漏らさずキャッチアップ</p>
                            </div>
                        </div>
                    </div>
                    <div class="bl_topFeatuerContainer_item bl_topFeatuerContainer_ai">
                        <div class="bl_topFeatuerContainer_item_inner">
                            <img class="el_topFeatuerContainer_item_icon" src="<?php echo get_template_directory_uri(); ?>/assets/img/top/icon-ai.svg" alt="AIアシスタント">
                            <p class="el_topFeatuerContainer_item_copy">AIアシスタント</p>
                            <div class="bl_topFeatuerContainer_item_txtWrapper">
                                <p class="el_topFeatuerContainer_item_txtWrapper_txt">エクスロードに蓄積された豊富なデータを学習させた対話型AIを実装。壁打ちや調べものに。</p>
                                <a class="el_topFeatuerContainer_item_txtWrapper_link" href="#">詳しくはこちら</a>
                            </div>
                        </div>
                    </div>

                    <div class="bl_topFeatuerContainer_item bl_topFeatuerContainer_ja">
                        <div class="bl_topFeatuerContainer_item_inner">
                            <img class="el_topFeatuerContainer_item_icon" src="<?php echo get_template_directory_uri(); ?>/assets/img/top/icon-ja.jpg" alt="日本語での情報提供">
                            <p class="el_topFeatuerContainer_item_copy">日本語での情報提供</p>
                            <div class="bl_topFeatuerContainer_item_txtWrapper">
                                <p class="el_topFeatuerContainer_item_txtWrapper_txt">英語の一次情報も日本語に対応。日本企業にアジャストした情報量・粒度・精度でデータをご提供</p>
                            </div>
                        </div>
                    </div>

                    <div class="bl_topFeatuerContainer_item bl_topFeatuerContainer_flat">
                        <div class="bl_topFeatuerContainer_item_inner">
                            <img class="el_topFeatuerContainer_item_icon" src="<?php echo get_template_directory_uri(); ?>/assets/img/top/icon-flat.svg" alt="中立性">
                            <p class="el_topFeatuerContainer_item_copy">中立性</p>
                            <div class="bl_topFeatuerContainer_item_txtWrapper">
                                <p class="el_topFeatuerContainer_item_txtWrapper_txt">クレジットの創出側・購入側どちらでもないため、第三者の視点でフラットな立場から情報収集・発信を行っています</p>
                            </div>
                        </div>
                    </div>
                    <div class="bl_topFeatuerContainer_mockup">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/mock-featuer.png" alt="exroad">
                    </div>
                </div>
                <p class="bl_topFeatuerSec_copyTxt">エクスロードは、カーボンクレジット・排出量取引制度に関するデータが網羅的に整理された<br><span class="el_topFeatuerSec_copyTxt_main">オールインワン情報サービス</span>です</p>
                <div class="bl_commonTagListContainer">
                    <p class="el_commonTagListContainer_txt">本業界に携わるすべての方の業務効率化・生産性向上を目指しています</p>
                    <ul class="bl_commonTagListContainer_list">
                        <li class="el_commonTagListContainer_list_item">
                            #事業開発部
                        </li>
                        <li class="el_commonTagListContainer_list_item">
                            #各事業部
                        </li>
                        <li class="el_commonTagListContainer_list_item">
                            #営業企画部
                        </li>
                        <li class="el_commonTagListContainer_list_item">
                            #営業部
                        </li>
                        <li class="el_commonTagListContainer_list_item">
                            #マーケティング部
                        </li>
                        <li class="el_commonTagListContainer_list_item">
                            #市場調査部
                        </li>
                        <li class="el_commonTagListContainer_list_item">
                            #経営企画部
                        </li>
                        <li class="el_commonTagListContainer_list_item">
                            #サステナビリティ推進部
                        </li>
                        <li class="el_commonTagListContainer_list_item">
                            #脱炭素推進部
                        </li>
                        <li class="el_commonTagListContainer_list_item">
                            #ナレッジマネジメント部
                        </li>
                        <li class="el_commonTagListContainer_list_item">
                            #コンサルティング企業
                        </li>
                        <li class="el_commonTagListContainer_list_item">
                            #大学・研究機関
                        </li>
                        <li class="el_commonTagListContainer_list_item">
                            #コンソーシアム
                        </li>
                        <li class="el_commonTagListContainer_list_moreTxt">
                            and more...
                        </li>
                    </ul>
                </div>
            </div>
        </section>

        <!-- ご利用者の声 -->
        <section class="ly_commonTopContents ly_topVoiceSec">
            <div class="bl_commonTopContents_inner">
                <div class="bl_commonTopContents_ttl">
                    <h2 class="el_commonTopContents_ttl_main">ご利用者様の声
                    </h2>
                </div>
                <div class="bl_topVoiceListContainer">
                    <div class="bl_topVoiceListContainer_img">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/voice-center.png" alt="">
                    </div>
                    <ul class="bl_topVoiceList">
                        <li class="bl_topVoiceList_item">
                            <div class="bl_topVoiceList_item_inner">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/voice1.svg" alt="">
                                <div class="bl_topVoiceList_txtWrapper">
                                    <p class="el_topVoiceList_txtWrapper_main">業務効率化を図ることができた</p>
                                    <p class="el_topVoiceList_txtWrapper_txt">これまで若手社員が残業して週報をまとめていたが、そもそもWeeklyやMonthlyといった単位で重要トピックスをサマライズしてくれているので業務効率化を図ることができている。（総合商社 事業開発担当）</p>
                                </div>
                            </div>
                        </li>
                        <li class="bl_topVoiceList_item">
                            <div class="bl_topVoiceList_item_inner">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/voice2.svg" alt="">
                                <div class="bl_topVoiceList_txtWrapper">
                                    <p class="el_topVoiceList_txtWrapper_main">“とりあえずここにアクセスすれば”<br>という安心感がある</p>
                                    <p class="el_topVoiceList_txtWrapper_txt">数十のサイトを定期回遊して情報収集していた。そうしないと重要なトピックスを見逃してしまうから。exroadではそれらがアグリゲートされているので、“とりあえずここにアクセスすれば”という安心感がある。（金融機関 サステナビリティ推進部）事業開発担当）</p>
                                </div>
                            </div>
                        </li>
                        <li class="bl_topVoiceList_item">
                            <div class="bl_topVoiceList_item_inner">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/voice3.svg" alt="">
                                <div class="bl_topVoiceList_txtWrapper">
                                    <p class="el_topVoiceList_txtWrapper_main">資料作成時間を大幅に圧縮できた</p>
                                    <p class="el_topVoiceList_txtWrapper_txt">PowerPointやExcelなどのファイル形式で関連資料がダウンロードできるのが便利。社内報告資料作成時間を大幅に圧縮できている。（メーカー 経営企画部）</p>
                                </div>
                            </div>
                        </li>
                        <li class="bl_topVoiceList_item">
                            <div class="bl_topVoiceList_item_inner">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/voice4.svg" alt="">
                                <div class="bl_topVoiceList_txtWrapper">
                                    <p class="el_topVoiceList_txtWrapper_main">意思疎通が早まった</p>
                                    <p class="el_topVoiceList_txtWrapper_txt">事業開発部・営業企画部・経営企画部・サステナ部の各部署にアカウントを発行してもらっている。同じ情報ソースを共有しているので意思疎通が早まった。（エネルギー会社 事業開発部）</p>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </section>


        <!-- ご利用者の声 -->
        <section class="ly_commonTopContents ly_topwebinarSec">
            <div class="bl_commonTopContents_inner">
                <div class="bl_topwebinarSec_subzTxtWrapper">
                    <p class="bl_topwebinarSec_subzTxtWrapper_txt">ウェビナー資料もサービス内でダウンロードできます</p>
                </div>
                <div class="bl_commonTopContents_ttl">
                    <h2 class="el_commonTopContents_ttl_main">過去実施ウェビナー</h2>
                </div>

                <?php
                $webinarList = get_field('old_WebinarList', 'option');
                ?>
                <?php if ($webinarList): ?>
                    <div class="bl_topWebinarSec_listContainer">

                        <?php
                        $chunkList = array_chunk($webinarList, 3);
                        ?>
                        <div class="bl_topWebinarListWrapper">
                            <?php foreach ($chunkList  as $chunk): ?>
                                <ul class="bl_topWebinarList">
                                    <?php foreach ($chunk as $item): ?>
                                        <li class="bl_topWebinarList_item">
                                            <a class="bl_topWebinarList_item_btn" href="<?php echo esc_html($item['old_webinarlist_link']); ?>">
                                                <?php if (!empty($item['old_WebinarList_img'])): ?>
                                                    <img src="<?php echo esc_html($item['old_WebinarList_img']); ?>" alt="<?php echo esc_html($item['old_WebinarList_ttl']); ?>">
                                                <?php endif; ?>
                                                <div class="bl_topWebinarList_item_txtWrapper">
                                                    <?php if (!empty($item['old_WebinarList_ttl'])): ?>
                                                        <p class="el_topWebinarList_item_txtWrapper_ttl"><?php echo esc_html($item['old_WebinarList_ttl']); ?></p>
                                                    <?php endif; ?>
                                                    <?php if (!empty($item['old_webinarlist_company'])): ?>
                                                        <p class="el_topWebinarList_item_txtWrapper_company"><?php echo esc_html($item['old_webinarlist_company']); ?></p>
                                                    <?php endif; ?>
                                                </div>
                                            </a>
                                        </li>
                                    <?php endforeach; ?>
                                </ul>
                            <?php endforeach; ?>
                        </div>

                        <?php if (1 < count($chunkList)): ?>
                            <button class="el_topWebinarSec_moreBtn el_commonMoreBtn" type="button">もっと見る</button>
                        <?php endif; ?>
                    </div>
                <?php endif; ?>
            </div>
        </section>

        <!-- コンテンツエリア -->
        <div class="ly_commonTopContents ly_topContentsContainer">
            <div class="bl_commonTopContents_inner">
                <ul class="bl_topContentsContainerlist">
                    <li class="bl_topContentsContainerlist_item">
                        <div class="bl_topContentsContainerlist_upper">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/contents-download.jpg" alt="資料をダウンロード">
                            <div class="bl_topContentsContainerlist_upper_txtWrapper">
                                <p class="el_topContentsContainerlist_upper_txtWrapper_main">資料をダウンロード</p>
                                <p class="el_topContentsContainerlist_upper_txtWrapper_txt">エクスロードの詳細がわかる資料をご用意しています。ご利用者様の声や導入メリットも記載。</p>
                            </div>
                        </div>
                        <a href="#" class="bl_topContentsContainerlist_btn">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/arrow.svg" alt="">
                            <p>今すぐ資料をダウンロード</p>
                        </a>
                    </li>
                    <li class="bl_topContentsContainerlist_item">
                        <div class="bl_topContentsContainerlist_upper">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/contents-trial.jpg" alt="無料トライアル">
                            <div class="bl_topContentsContainerlist_upper_txtWrapper">
                                <p class="el_topContentsContainerlist_upper_txtWrapper_main">無料トライアル</p>
                                <p class="el_topContentsContainerlist_upper_txtWrapper_txt">エクスロードの実際の機能やコンテンツを1週間無料でご利用いただけます。<br>※企業・法人様のみ</p>
                            </div>
                        </div>
                        <a href="#" class="bl_topContentsContainerlist_btn">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/arrow.svg" alt="">
                            <p>無料トライアルを申し込む</p>
                        </a>
                    </li>
                    <li class="bl_topContentsContainerlist_item">
                        <div class="bl_topContentsContainerlist_upper">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/contents-news.jpg" alt="ニュースレター登録">
                            <div class="bl_topContentsContainerlist_upper_txtWrapper">
                                <p class="el_topContentsContainerlist_upper_txtWrapper_main">ニュースレター登録</p>
                                <p class="el_topContentsContainerlist_upper_txtWrapper_txt">カーボンクレジット・排出量取引制度に関する国内外トピックスを毎週無料で配信しています。</p>
                            </div>
                        </div>
                        <a href="#" class="bl_topContentsContainerlist_btn">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/arrow.svg" alt="">
                            <p>ニュースレターを購読する</p>
                        </a>
                    </li>
                    <li class="bl_topContentsContainerlist_item">
                        <div class="bl_topContentsContainerlist_upper">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/contents-contact.jpg" alt="お問い合わせ">
                            <div class="bl_topContentsContainerlist_upper_txtWrapper">
                                <p class="el_topContentsContainerlist_upper_txtWrapper_main">お問い合わせ</p>
                                <p class="el_topContentsContainerlist_upper_txtWrapper_txt">面談のご依頼等はこちらから。<br>※料金プランは本ホームページには記載していません。お問い合わせいただいた後、ご案内いたします。</p>
                            </div>
                        </div>
                        <a href="#" class="bl_topContentsContainerlist_btn">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/arrow.svg" alt="">
                            <p>お問い合わせフォームへ</p>
                        </a>
                    </li>
                </ul>
            </div>
        </div>


        <!-- コンサルティング・業務支援サービス -->
        <section class="ly_commonTopContents ly_supportServiceSec">
            <div class="bl_commonTopContents_inner">
                <div class="bl_commonTopContents_ttl">
                    <h2 class="el_commonTopContents_ttl_main">コンサルティング・業務支援サービス</h2>
                </div>

                <ul class="bl_supportServiceSec_list">
                    <li class="bl_supportServiceSec_list_item">
                        <p class="el_supportServiceSec_list_item_main">カーボンクレジット調達戦略策定</p>
                        <p class="el_supportServiceSec_list_item_txt">国内外の規制や他社動向を踏まえクレジットの調達方針・計画、選定基準等の策定</p>
                    </li>
                    <li class="bl_supportServiceSec_list_item">
                        <p class="el_supportServiceSec_list_item_main">カーボンクレジット調達マニュアル策定</p>
                        <p class="el_supportServiceSec_list_item_txt">カーボンクレジットの調達に向けたオペレーションの文書化、実行組織の設計等</p>
                    </li>
                    <li class="bl_supportServiceSec_list_item">
                        <p class="el_supportServiceSec_list_item_main">カーボンクレジット・排出量取引制度関連調査・資料作成</p>
                        <p class="el_supportServiceSec_list_item_txt">国内外の制度・規制の調査レポート作成</p>
                    </li>
                    <li class="bl_supportServiceSec_list_item">
                        <p class="el_supportServiceSec_list_item_main">新規事業立案支援</p>
                        <p class="el_supportServiceSec_list_item_txt">事業開発に必要な市場情報等の提供、事業アイデア壁打ち、事業計画策定</p>
                    </li>
                    <li class="bl_supportServiceSec_list_item">
                        <p class="el_supportServiceSec_list_item_main">マーケティング戦略策定</p>
                        <p class="el_supportServiceSec_list_item_txt">クレジット活用に係るマーケティング企画立案・実施支援</p>
                    </li>
                    <li class="bl_supportServiceSec_list_item">
                        <p class="el_supportServiceSec_list_item_main">定期勉強会・研修</p>
                        <p class="el_supportServiceSec_list_item_txt">各社ニーズに合わせたカーボンクレジット・排出量取引勉強会の開催</p>
                    </li>
                </ul>
            </div>
        </section>


        <!-- コンサルティング・業務支援サービス -->
        <section class="ly_commonTopContents ly_newsLetterSec">
            <div class="bl_commonTopContents_inner">
                <div class="bl_commonTopContents_ttl">
                    <h2 class="el_commonTopContents_ttl_main">​ニュースレター</h2>
                </div>
                <p class="bl_newsLetterSec_txt">カーボンクレジット・排出量取引制度に関する国内外のトピックスを配信いたします。<br>是非ご登録ください。</p>
                <a href="#" class="bl_newsLetterSec_btn">登録はこちら</a>
            </div>
        </section>


        <!-- コンサルティング・業務支援サービス -->
        <section class="ly_commonTopContents">
            <div class="bl_commonTopContents_inner">
                <div class="bl_commonTopContents_ttl">
                    <h2 class="el_commonTopContents_ttl_main">お役立ち資料</h2>
                </div>

                <?php
                $howtoList = get_field('howtoList', 'option');
                ?>
                <?php if ($howtoList): ?>
                    <?php
                    $howtoChunkList = array_chunk($howtoList, 3);
                    ?>
                    <div class="bl_howtoPostContainer">
                        <div class="bl_howtoPostContainer_listWrapper">
                            <ul class="bl_howtoPostList">
                                <?php foreach ($howtoChunkList as $howtoChunkItem): ?>
                                    <?php foreach ($howtoChunkItem as $howtoItem): ?>
                                        <li class="bl_howtoPostList_item">
                                            <a href="<?php echo $howtoItem["howtoList_link"]; ?>" target="_blank" class="bl_howtoPostList_btn">
                                                <img class="el_howtoPostList_btn_img" src="<?php echo $howtoItem["howtoList_img"]; ?>" alt="<?php echo $howtoItem["howtoList_txt"]; ?>">
                                                <p><?php echo $howtoItem["howtoList_txt"]; ?></p>
                                            </a>
                                        </li>
                                    <?php endforeach; ?>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                        <?php if (1 < count($howtoChunkList)): ?>
                            <button class="el_howtoPostContainer_moreBtn el_commonMoreBtn" type="button">もっと見る</button>
                        <?php endif; ?>
                    </div>
                <?php endif; ?>
            </div>
        </section>

        <!-- パートナーシップ -->
        <section class="ly_commonTopContents ly_memberShipSec">
            <div class="bl_commonTopContents_inner">
                <div class="bl_commonTopContents_ttl">
                    <h2 class="el_commonTopContents_ttl_main">Membership & Partnership</h2>
                </div>

                <?php if (have_rows('memberShipList', 'option')): ?>
                    <ul class="bl_memberShipList">
                        <?php while (have_rows('memberShipList', 'option')): the_row(); ?>
                            <li class="bl_memberShipList_item">
                                <a class="bl_memberShipList_item_btn" href="<?php echo get_sub_field('memberShipList_link', 'option'); ?>">
                                    <?php
                                    $mamberShipImg =  get_sub_field('membershiplist_img', 'option');
                                    ?>
                                    <img class="bl_memberShipList_item_img" src="<?php echo  $mamberShipImg["url"]; ?>" alt="<?php echo  $mamberShipImg["alt"]; ?>">
                                </a>
                            </li>
                        <?php endwhile; ?>
                    </ul>
                <?php endif; ?>

            </div>
        </section>


        <div class="ly_radiusGrayBg">
            <img class="el_radiusGrayBg_img" src="<?php echo get_template_directory_uri(); ?>/assets/img/top/top-radius.svg" alt="">
            <div class="bl_radiusGrayBg_inner">

                <!-- コラム -->
                <section class="ly_commonTopContents ly_topColumnSec">
                    <div class="bl_commonTopContents_inner">
                        <div class="bl_commonTopContents_ttl">
                            <h2 class="el_commonTopContents_ttl_main">コラム</h2>
                        </div>
                        <?php
                        $args = array(
                            'post_type' => 'column', // 投稿タイプ
                            'posts_per_page' => 3, // 表示する投稿数
                            'orderby' => 'date', // 日付順に並び替え
                            'order' => 'DESC', // 新しい順
                        );
                        $column_query = new WP_Query($args);
                        ?>
                        <?php if ($column_query->have_posts()) : ?>
                            <ul class="bl_topColumnSec_list">
                                <?php while ($column_query->have_posts()) : $column_query->the_post(); ?>
                                    <li class="bl_topColumnSec_list_item">
                                        <div class="bl_topColumnPost_thumbnail">
                                            <?php if (has_post_thumbnail()) : ?>
                                                <img class="el_topColumnPost_thumbnail_img" src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
                                            <?php else: ?>
                                                <img class="el_topColumnPost_thumbnail_noimg" src="<?php echo get_template_directory_uri(); ?>/assets/img/common/logo_exroad.png" alt="<?php the_title(); ?>">
                                            <?php endif; ?>
                                        </div>
                                        <div class="bl_topColumnPost_txtWrapper">
                                            <div class="bl_topColumnPost_txtWrapper_txt">
                                                <p class="el_topColumnPost_txtWrapper_date"><?php the_date(); ?></p>
                                                <p class="el_topColumnPost_txtWrapper_ttl"><?php the_title(); ?></p>
                                            </div>
                                            <a href="<?php the_permalink(); ?>" class="bl_topColumnPost_txtWrapper_readBtn">
                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/post-arrow.svg" alt="">
                                                <p>Read More</p>
                                            </a>
                                        </div>
                                    </li>

                                <?php endwhile;
                                wp_reset_postdata(); ?>
                            </ul>
                            <a href="<?php echo home_url(); ?>/column/" class="el_commonAllViewBtn">コラム一覧へ</a>
                        <?php else: ?>
                            <p class="el_commonNopostTxt">まだニュースはありません。</p>
                        <?php endif; ?>

                    </div>
                </section>

                <!-- コラム -->
                <section class="ly_commonTopContents ly_topColumnSec">
                    <div class="bl_commonTopContents_inner">
                        <div class="bl_commonTopContents_ttl">
                            <h2 class="el_commonTopContents_ttl_main">トピックス</h2>
                        </div>
                        <?php
                        $args = array(
                            'post_type' => 'news', // 投稿タイプ
                            'posts_per_page' => 3, // 表示する投稿数
                            'orderby' => 'date', // 日付順に並び替え
                            'order' => 'DESC', // 新しい順
                        );
                        $column_query = new WP_Query($args);
                        ?>
                        <?php if ($column_query->have_posts()) : ?>
                            <ul class="bl_topColumnSec_list">

                                <?php while ($column_query->have_posts()) : $column_query->the_post(); ?>
                                    <li class="bl_topColumnSec_list_item">
                                        <div class="bl_topColumnPost_thumbnail">
                                            <?php if (has_post_thumbnail()) : ?>
                                                <img class="el_topColumnPost_thumbnail_img" src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
                                            <?php else: ?>
                                                <img class="el_topColumnPost_thumbnail_noimg" src="<?php echo get_template_directory_uri(); ?>/assets/img/common/logo_exroad.png" alt="<?php the_title(); ?>">
                                            <?php endif; ?>
                                        </div>
                                        <div class="bl_topColumnPost_txtWrapper">
                                            <div class="bl_topColumnPost_txtWrapper_txt">
                                                <p class="el_topColumnPost_txtWrapper_date"><?php the_date(); ?></p>
                                                <p class="el_topColumnPost_txtWrapper_ttl"><?php the_title(); ?></p>
                                            </div>
                                            <a href="<?php the_permalink(); ?>" class="bl_topColumnPost_txtWrapper_readBtn">
                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/post-arrow.svg" alt="">
                                                <p>Read More</p>
                                            </a>
                                        </div>
                                    </li>

                                <?php endwhile;
                                wp_reset_postdata(); ?>
                            </ul>
                            <a href="<?php echo home_url(); ?>/news/" class="el_commonAllViewBtn">トピックス一覧へ</a>
                        <?php else: ?>
                            <p class="el_commonNopostTxt">まだニュースはありません。</p>
                        <?php endif; ?>
                    </div>
                </section>

                <section class="ly_topInfoSec">
                    <div class="ly_topInfoSec_inner">
                        <div class="bl_infoContents">
                            <hgroup class="bl_infoContents_ttl">
                                <p class="el_infoContents_ttl_sub">Company</p>
                                <h2 class="el_infoContents_ttl_main">会社概要</h2>
                            </hgroup>
                            <dl class="bl_infoContents_list">
                                <div class="bl_infoContents_list_item">
                                    <dt class="el_infoContents_list_item_ttl">会社名</dt>
                                    <dd class="el_infoContents_list_item_txt">exroad</dd>
                                </div>
                                <div class="bl_infoContents_list_item">
                                    <dt class="el_infoContents_list_item_ttl">所在地</dt>
                                    <dd class="el_infoContents_list_item_txt">〒106‐6115<br>東京都港区六本木6丁目10ー1<br>六本木ヒルズ森タワー 15F</dd>
                                </div>
                                <div class="bl_infoContents_list_item">
                                    <dt class="el_infoContents_list_item_ttl">代表者</dt>
                                    <dd class="el_infoContents_list_item_txt">​木村 圭佑</dd>
                                </div>
                                <div class="bl_infoContents_list_item">
                                    <dt class="el_infoContents_list_item_ttl">設立日</dt>
                                    <dd class="el_infoContents_list_item_txt">2022年 3月</dd>
                                </div>
                                <div class="bl_infoContents_list_item">
                                    <dt class="el_infoContents_list_item_ttl">事業内容</dt>
                                    <dd class="el_infoContents_list_item_txt">カーボンプライシングに関連する情報プラットフォームサービスの提供・調査・コンサルティング・マーケティング</dd>
                                </div>
                                <div class="bl_infoContents_list_item">
                                    <dt class="el_infoContents_list_item_ttl">取引銀行</dt>
                                    <dd class="el_infoContents_list_item_txt">三菱UFJ銀行</dd>
                                </div>
                            </dl>
                        </div>
                    </div>
                </section>

                <!-- チーム -->
                <section class="ly_topTeamSec">
                    <div class="bl_topTeamSec_slidetxt">
                        <div id="splide-team" class="splide bl_logoSlideSec_slider">
                            <div class="splide__track">
                                <ul class="splide__list">
                                    <li class="splide__slide">
                                        <p class="el_topTeamSec_slidetxt_txt">exroad Co., LTD.</p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="ly_topTeamSec_inner">
                        <hgroup class="bl_infoContents_ttl">
                            <p class="el_infoContents_ttl_sub">Team</p>
                            <h2 class="el_infoContents_ttl_main">チーム</h2>
                        </hgroup>

                        <?php if (have_rows('teamList', 'option')): ?>
                            <ul class="bl_topTeamSec_list">
                                <?php while (have_rows('teamList', 'option')): the_row(); ?>
                                    <li class="bl_topTeamSec_list_item">
                                        <div class="bl_topTeamSec_list_item_nameWrapper">
                                            <?php if (get_sub_field('teamList_position', 'option')): ?>
                                                <p class="el_topTeamSec_list_item_nameWrapper_position"><?php the_sub_field('teamList_position', 'option'); ?></p>
                                            <?php endif; ?>
                                            <?php if (get_sub_field('teamList_name', 'option')): ?>
                                                <p class="el_topTeamSec_list_item_nameWrapper_name"><?php the_sub_field('teamList_name', 'option'); ?></p>
                                            <?php endif; ?>
                                        </div>
                                        <?php if (get_sub_field('teamList_txt', 'option')): ?>
                                            <p><?php the_sub_field('teamList_txt', 'option'); ?></p>
                                        <?php endif; ?>
                                    </li>
                                <?php endwhile; ?>
                            </ul>
                        <?php endif; ?>
                    </div>
                </section>
            </div>
        </div>

    </main>
    <?php get_footer(); ?>
</body>

</html>