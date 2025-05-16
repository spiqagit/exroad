<?php get_header('meta'); ?>
<?php wp_head(); ?>
</head>


<body>
    <?php get_header(); ?>
    <main class="ly_commonArchiveMain">
        <div class="ly_commonArchiveMain_inner">
            <h1 class="bl_commonArchiveMain_ttl">トピックス</h1>
            <ul class="bl_commonArchiveMain_list">
                <?php
                $args = array(
                    'post_type' => 'news',
                    'posts_per_page' => -1,
                    'orderby' => 'date',
                    'order' => 'DESC'
                );
                $query = new WP_Query($args);
                if ($query->have_posts()) :
                    while ($query->have_posts()) : $query->the_post();
                ?>
                        <li class="bl_commonArchiveMain_list_item">
                            <a href="<?php the_permalink(); ?>" class="bl_commonArchiveMain_list_card">
                                <div class="bl_commonArchiveMain_list_card_img">
                                    <?php if (get_the_post_thumbnail_url($post->ID)): ?>
                                        <img class="el_commonArchiveMain_list_card_img_img" src="<?php echo get_the_post_thumbnail_url($post->ID); ?>" alt="<?php echo get_the_title($post->ID); ?>">
                                    <?php else: ?>
                                        <img class="el_commonArchiveMain_list_card_img_noImg" src="<?php echo get_template_directory_uri(); ?>/assets/img/common/logo_exroad.png" alt="<?php echo get_the_title($post->ID); ?>">
                                    <?php endif; ?>
                                </div>
                                <div class="bl_commonArchiveMain_list_card_txt">
                                    <p class="el_commonArchiveMain_list_card_txt_date"><?php echo get_the_date(); ?></p>
                                    <div class="bl_commonArchiveMain_list_card_txt_ttl">
                                        <p class="el_commonArchiveMain_list_card_txt_ttl_main"><?php the_title(); ?></p>
                                        <p class="el_commonArchiveMain_list_card_txt_ttl_txt"><?php echo wp_trim_words(get_the_excerpt(), 40, '...'); ?></p>
                                    </div>
                                </div>
                            </a>
                        </li>
                <?php
                    endwhile;
                endif;
                wp_reset_postdata();
                ?>
            </ul>
        </div>
    </main>
    <?php get_footer(); ?>
</body>

</html>