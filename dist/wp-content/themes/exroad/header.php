<header class="ly_header">
    <div class="bl_header_upper">
        <div class="bl_header_upper_inner">
            <?php if (is_home() || is_front_page()) : ?>

                <h1 class="bl_header_inner_logo">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/logo_exroad.png" alt="exroad">
                </h1>

            <?php else: ?>

                <a class="bl_header_inner_logo bl_header_inner_logoBtn" href="<?php echo get_home_url(); ?>">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/logo_exroad.png" alt="exroad">
                </a>

            <?php endif; ?>

            <div class="bl_header_upper_leftSide_pc">
                <a href="https://app.exroad.jp/ja/auth/login/" class="el_header_upper_leftSide_login">ログイン</a>
                <ul class="bl_header_upper_leftSide_list">
                    <li class="bl_header_upper_leftSide_list_item">
                        <div class="bl_header_upper_leftSide_ctaContainer">
                            <a href="#" class="el_header_upper_leftSide_ctaContainer_btn el_header_upper_leftSide_ctaContainer_btn_border">調査・分析レポート販売</a>
                        </div>
                    </li>
                    <li class="bl_header_upper_leftSide_list_item">
                        <div class="bl_header_upper_leftSide_ctaContainer">
                            <a href="#" class="el_header_upper_leftSide_ctaContainer_btn el_header_upper_leftSide_ctaContainer_btn_border">無料お役立ち資料</a>
                        </div>
                    </li>
                    <li class="bl_header_upper_leftSide_list_item">
                        <div class="bl_header_upper_leftSide_ctaContainer">
                            <a href="#" class="el_header_upper_leftSide_ctaContainer_btn el_header_upper_leftSide_ctaContainer_btn_border">無料トライアル</a>
                        </div>
                    </li>
                    <li class="bl_header_upper_leftSide_list_item">
                        <div class="bl_header_upper_leftSide_ctaContainer">
                            <p class="el_header_upper_leftSide_ctaContainer_subTxt">＼ 料金プランはこちらから ／</p>
                            <a href="#" class="el_header_upper_leftSide_ctaContainer_btn el_header_upper_leftSide_ctaContainer_btn_bg">お問い合わせ</a>
                        </div>
                    </li>
                </ul>
            </div>

            <div class="bl_header_upper_leftSide_sp">
                <div class="bl_header_upper_leftSide_spContainer">
                    <a href="#" class="el_header_upper_leftSide_login">ログイン</a>
                    <button class="bl_header_upper_leftSide_spContainer_btn " id="sp_nav_btn" type="button">
                        <span class="bl_header_upper_leftSide_spContainer_btn_inner">
                            <span></span>
                            <span></span>
                            <span></span>
                        </span>
                    </button>
                </div>
                <div class="bl_header_upper_leftSide_sp_nav_bg"></div>
                <nav class="bl_header_upper_leftSide_sp_nav">
                    <div class="bl_header_upper_leftSide_sp_nav_inner">
                        <ul class="bl_headerSpNaviList">
                            <?php if (have_rows('headerNaviList', 'option')) : ?>
                                <?php while (have_rows('headerNaviList', 'option')) : the_row(); ?>
                                    <li>
                                        <?php echo get_sub_field('headerNaviList_code', false, false); ?>
                                    </li>
                                <?php endwhile; ?>
                            <?php endif; ?>
                        </ul>
                        <ul class="bl_header_upper_leftSide_list">
                            <li class="bl_header_upper_leftSide_list_item">
                                <div class="bl_header_upper_leftSide_ctaContainer">
                                    <a href="#" class="el_header_upper_leftSide_ctaContainer_btn el_header_upper_leftSide_ctaContainer_btn_border">調査・分析レポート販売</a>
                                </div>
                            </li>
                            <li class="bl_header_upper_leftSide_list_item">
                                <div class="bl_header_upper_leftSide_ctaContainer">
                                    <a href="#" class="el_header_upper_leftSide_ctaContainer_btn el_header_upper_leftSide_ctaContainer_btn_border">無料お役立ち資料</a>
                                </div>
                            </li>
                            <li class="bl_header_upper_leftSide_list_item">
                                <div class="bl_header_upper_leftSide_ctaContainer">
                                    <a href="#" class="el_header_upper_leftSide_ctaContainer_btn el_header_upper_leftSide_ctaContainer_btn_border">無料トライアル</a>
                                </div>
                            </li>
                            <li class="bl_header_upper_leftSide_list_item">
                                <div class="bl_header_upper_leftSide_ctaContainer">
                                    <p class="el_header_upper_leftSide_ctaContainer_subTxt">＼ 料金プランはこちらから ／</p>
                                    <a href="#" class="el_header_upper_leftSide_ctaContainer_btn el_header_upper_leftSide_ctaContainer_btn_bg">お問い合わせ</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </div>

    <div class="bl_header_lower bl_header_lower_pc">
        <nav class="bl_header_lower_navi">
            <ul class="bl_header_naviList">
                <?php if (have_rows('headerNaviList', 'option')) : ?>
                    <?php while (have_rows('headerNaviList', 'option')) : the_row(); ?>
                        <li class="bl_header_naviList_item">
                            <?php echo get_sub_field('headerNaviList_code', false, false); ?>
                        </li>
                    <?php endwhile; ?>
                <?php endif; ?>
            </ul>
        </nav>
    </div>
</header>