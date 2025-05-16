<?php
/*
Template Name: INTERVIEW
*/
?>
<?php get_header('meta'); ?>
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/post.css" type="text/css" />
<?php wp_head(); ?>
</head>


<body>
<?php get_header(); ?>

    <ol class="breadcrumbs">
        <li class="breadcrumbs_top"><a href="<?php echo home_url(); ?>">トップ</a><span>&gt;</span></li>
        <li><?php the_title(); ?></li>
    </ol>




    


    <?php get_footer(); ?>
     </body>

 </html>