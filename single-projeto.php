<?php
get_header();
?>

<main class="content_page">

    <section class="">
        <div class="container d-flex section-default">
            <h3 class="w-100 subtitle"><?= get_the_date('Y') ?></h3>
            <h2 class="title-second m-b-60"><?= get_the_title() ?></h2>

            <div class="d-flex justify-center w-100">

            </div>
            
            <section class="d-flex content_single_page">
            <?php

                $imgs = get_field('galeria_de_imagens');

                foreach($imgs as $img):

                    $url = get_field('link_de_destino' ,$img['ID']);

                    if($url != ""):

                ?>
                <a href="<?= $url; ?>" target="_blank">
                    <img src="<?= $img['url'] ?>" alt="">
                </a>
                <?php else: ?>
                    <img src="<?= $img['url'] ?>" alt="">
                <?php endif; ?>

                <?php endforeach; ?>
            </section>

            <!-- 
            <div class="w-100 text-center p-10">
                <a href="" class="btn-default color-white">Ver mais <span><i class="bi bi-plus-circle"></i></span></a>
            </div>
             -->
            
        </div>

        <div class="container">
            <?php get_template_part('templates-parts/content', 'list-projetos') ?>
        </div>
    </section>

</main>

<?php
get_footer();
?>
