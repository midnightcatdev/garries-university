<!-- this file makes the blog post page -->

<?php get_header();
pageBanner(array(
    'title' => 'Welcome to our blog',
    'subtitle' => 'keep up'
));
?>

<div class="container container--narrow page-section">
    <?php while (have_posts()) {
        the_post() ?>
        <div class="post-item">
            <h2 class="headline headline--medium headline--post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?> </a></h2>

            <div class="metabox">
                <p>posted by je <?php the_author_link() ?> on <?php the_time('n-j-y') ?> in <?php echo get_the_category_list(', ') ?> </p>
            </div>

            <div class="generic-content">
                <?php the_excerpt(); ?>
            </div>
            <p><a class="btn btn--blue" href="<?php the_permalink() ?>">Read more</a></p>

        </div>
    <?php }

    echo paginate_links();

    ?>

</div>

<?php get_footer(); ?>