<?php get_header('meta'); ?>
<?php wp_head(); ?>
</head>


<body>
    <?php get_header(); ?>
    <main class="ly_commonSingleMain">
        <div class="bl_commonSingleMain_inner">
            <a href="<?php echo home_url(); ?>/column/" class="bl_commonSingleMain_allbtn">All Posts</a>
            <article class="bl_commonSingleArticle">
                <div class="bl_commonSingleArticle_ttl">
                    <p class="el_commonSingleArticle_ttl_date"><?php echo esc_html(get_the_date()); ?></p>
                    <h1 class="el_commonSingleArticle_ttl_main"><?php esc_html(the_title()); ?></h1>
                </div>

                <?php if (has_post_thumbnail()) : ?>
                    <div class="bl_commonSingleArticle_img">
                        <?php the_post_thumbnail(); ?>
                    </div>
                <?php endif; ?>

                <div class="bl_commonSingleArticle_contents">
                    <?php the_content(); ?>
                </div>

                <!-- 共有 -->
                <ul class="bl_commonSingleShareList">
                    <li class="bl_commonSingleShareList_item">
                        <a class="el_commonSingleShareList_item_btn" href="https://www.facebook.com/sharer/sharer.php?u=<?php echo urlencode(get_permalink()); ?>" target="_blank" rel="noopener noreferrer">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/facebook.svg" alt="Facebook">
                        </a>
                    </li>
                    <li class="bl_commonSingleShareList_item">
                        <a class="el_commonSingleShareList_item_btn" href="https://twitter.com/share?url=<?php echo urlencode(get_permalink()); ?>&text=<?php echo urlencode(get_the_title()); ?>&hashtags=example" target="_blank" rel="noopener noreferrer">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/x.svg" alt="X">
                        </a>
                    </li>
                    <li class="bl_commonSingleShareList_item">
                        <a class="el_commonSingleShareList_item_btn" href="https://www.linkedin.com/sharing/share-offsite/?url=<?php echo urlencode(get_permalink()); ?>" target="_blank" rel="noopener noreferrer">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/in.svg" alt="LinkedIn">
                        </a>
                    </li>
                    <li class="bl_commonSingleShareList_item">
                        <button class="el_commonSingleShareList_item_btn" type="button" onclick="navigator.clipboard.writeText('<?php echo get_permalink(); ?>')">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/copy.svg" alt="リンクをコピー">
                        </button>
                    </li>
                </ul>

                <?php
                $terms = get_the_terms(get_the_ID(), 'column_author');
                if (!empty($terms) && !is_wp_error($terms)) {
                ?>
                    <div class="bl_commonSingleArticle_author">
                        <h2>著者・監修者情報</h2>
                        <ul class="bl_commonSingleArticle_author_list">
                            <?php foreach ($terms as $term) : ?>
                                <?php
                                $author_position = get_field('author_position', $term);
                                $author_txt = get_field('author_edit', $term);
                                ?>
                                <li class="bl_commonSingleArticle_author_list_item">
                                    <?php if (!empty($author_position)) : ?>
                                        <div class="bl_commonSingleArticle_author_name">
                                            <p><?php echo esc_html($author_position); ?></p>
                                            <p><?php echo esc_html($term->name); ?></p>
                                        </div>
                                        <div class="bl_commonSingleArticle_author_contents">
                                            <?php echo $author_txt; ?>
                                        </div>
                                    <?php endif; ?>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>

                <?php
                }
                ?>
            </article>
            <?php
            $related_posts = get_field('column_otherPost', get_the_ID());
            if ($related_posts) : ?>
                <div class="bl_commonSingleOtherPostListContainer">
                    <div class="bl_commonSingleOtherPostListContainer_ttl">
                        <h2 class="el_commonSingleOtherPostListContainer_ttl_main">関連記事</h2>
                        <a class="el_commonSingleOtherPostListContainer_ttl_allBtn" href="<?php echo home_url(); ?>/column/">全て表示</a>
                    </div>
                    <ul class="bl_commonSingleOtherPostListContainer_list">
                        <?php foreach ($related_posts as $post) : setup_postdata($post); ?>
                            <li class="bl_commonSingleOtherPostListContainer_list_item">
                                <a href="<?php the_permalink(); ?>" class="bl_commonSingleOtherPostListContainer_list_card">
                                    <?php if (get_the_post_thumbnail_url($post->ID)): ?>
                                        <div class="bl_commonSingleOtherPostListContainer_list_item_img">
                                            <img src="<?php echo get_the_post_thumbnail_url($post->ID); ?>" alt="<?php echo get_the_title($post->ID); ?>">
                                        </div>
                                    <?php else: ?>
                                        <div class="bl_commonSingleOtherPostListContainer_list_item_img bl_commonSingleOtherPostListContainer_list_item_noImg">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/logo_exroad.png" alt="<?php echo get_the_title($post->ID); ?>">
                                        </div>
                                    <?php endif; ?>
                                    <p class="el_commonSingleOtherPostListContainer_list_card_ttl"><?php esc_html(the_title()); ?></p>
                                </a>
                            </li>
                        <?php endforeach; ?>
                        <?php wp_reset_postdata(); ?>
                    </ul>
                </div>
            <?php endif; ?>
        </div>
    </main>
    <?php get_footer(); ?>
</body>

</html>