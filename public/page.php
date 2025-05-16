<?php
/*
Template Name: デフォルト
*/
?>
<?php get_header('meta'); ?>
<?php wp_head(); ?>
</head>


<body>
    <?php get_header(); ?>
    <main class="bl_commonPageMain">
        <hgroup class="bl_commonPageMain_ttl">
            <?php if (get_field("page_en")): ?>
                <p class="el_commonPageMain_ttl_en"><?php echo get_field("page_en"); ?></p>
            <?php endif; ?>
            <h1><?php the_title(); ?></h1>
        </hgroup>
        <div class="bl_commonPageContents">
            <div class="bl_commonPageContents_inner">
                <?php the_content(); ?>
            </div>
        </div>
    </main>
    <?php get_footer(); ?>
</body>

</html>