<?php get_header('splash'); ?>
<div id="primary" class="content-area">

    <main id="main" class="site-main" role="main">
        <?php if (have_posts()):
            while (have_posts()):
                the_post(); ?>
                <?php get_template_part('template-parts/content', 'page'); ?>
            <?php endwhile; else: ?>
                <?php get_template_part( 'template-parts/content', 'none'); ?>
        <?php endif; ?>

        <p>Singular</p>

    </main>

</div>

<?php get_sidebar(); ?>


<?php get_footer('splash'); ?>