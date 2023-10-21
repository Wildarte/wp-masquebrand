<?php
get_header(); // Inclui o cabeçalho do site
?>

<div id="content">
    <div id="main-content">
        <?php
        if (have_posts()) :
            while (have_posts()) :
                the_post();
        ?>

        <article <?php post_class(); ?> id="post-<?php the_ID(); ?>">
            <header class="entry-header">
                <h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
            </header>
            <div class="entry-content">
                <?php the_content(); ?>
            </div>
        </article>

        <?php
            endwhile;
        else :
            ?>
            <p><?php _e('Desculpe, não foram encontrados posts.'); ?></p>
        <?php
        endif;
        ?>
    </div>

    <?php get_sidebar(); // Inclui a barra lateral ?>

</div>

<?php
get_footer(); // Inclui o rodapé do site
?>
