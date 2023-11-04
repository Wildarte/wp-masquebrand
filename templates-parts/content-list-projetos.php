<section>
    <div class="container d-flex section-default">
        <h3 class="w-100 subtitle">Nossos</h3>
        <h2 class="title-second m-b-60">Últimos Projetos</h2>
        
        <section class="d-flex">

            <?php

                $args = [
                    'post_type' => 'projeto',
                    'posts_per_page' => 6
                ];

                $result = new WP_Query($args);

                if($result->have_posts()):
                    while($result->have_posts()):
                        $result->the_post();

            ?>

            <div class="f-50">
                <article class="card_project">
                    <img src="<?= get_the_post_thumbnail_url(null, 'large') ?>" alt="">
                    <a href="<?= get_the_permalink() ?>" class="info_card_project color-white">
                        <h3 class="title-third"><?= get_the_title(); ?></h3>
                        <div class="d-flex w-100">
                            <div class="btn-default w-100 d-flex justify-space-between color-white btn-icon align-items-center btn_card_project">Ver projeto <span><i class="bi bi-arrow-right"></i></span></div>
                        </div>
                    </a>
                </article>
            </div>

            <?php endwhile; wp_reset_postdata(); endif; ?>

           

        <div class="w-100 text-center p-10">
            <a href="" class="btn-default color-white">Ver mais <span><i class="bi bi-plus-circle"></i></span></a>
        </div>
        
    </div>
</section>