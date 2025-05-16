<?php
/*
Template Name: 特定商取引法
*/
?>
<?php get_header('meta'); ?>
<?php wp_head(); ?>
</head>


<body>
    <?php get_header(); ?>
    <main class="bl_commonPageMain">
        <div class="bl_lowPage_ttlContainer">
            <hgroup class="bl_commonPageMain_ttl">
                <?php if (get_field("page_en")): ?>
                    <p class="el_commonPageMain_ttl_en"><?php echo get_field("page_en"); ?></p>
                <?php endif; ?>
                <h1><?php the_title(); ?></h1>
            </hgroup>
            <img class="el_lowPage_ttlContainer_img" src="<?php echo get_template_directory_uri(); ?>/assets/img/law-page/pageLaw-ttl.png" alt="">
        </div>
        <div class="bl_commonPageContents">
            <div class="bl_commonPageContents_inner">
                <?php the_content(); ?>
            </div>
        </div>
    </main>
    <?php get_footer(); ?>
</body>

</html>