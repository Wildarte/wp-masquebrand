<?php  get_header();
//Template Name: Home
?>

<main>
    <section class="hero_home d-flex">
        <?php
            $img_home_top = get_field('imagem_topo');

            if($img_home_top):
        ?>
        <img class="img_hero" src="<?= $img_home_top['url'] ?>" alt="">
        <?php endif; ?>
        <div class="over_content_hero_home">
            <div class="container d-flex content_hero_home">
                <div class="w-100 d-flex justify-space-between align-items-center">
                    <h2 class="title-default m-b-40 f-60 text-uppercase animate__animated animate__fadeInLeft">Sua Personalidade</h2>
                    <div class="f-40 d-flex animate__animated animate__fadeInRight">
                        <a href="" class="m-auto color-white btn-default btn-icon d-flex align-items-center">Contato <span><i class="bi bi-arrow-right"></i></span></a>
                    </div>
                </div>
                <div class="w-100 d-flex justify-space-between">
                    <p class="text-default m-b-60 animate__animated animate__fadeInLeft">Design e Criação de Marcas: Transformamos sua Visão em Identidade. Conte com nosso talento criativo para construir marcas memoráveis e impactantes.</p>
                    <h2 class="title-default m-b-60 animate__animated animate__fadeInRight text-uppercase">Nossa Criação</h2>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container d-flex section-default">
            <div class="f-50 left_content">
                <h3 class="subtitle">Sobre</h3>
                <h2 class="title-second m-b-60">BrandMasque</h2>

                <p class="text-default m-b-60">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente dignissimos aperiam, quis aut quam voluptatum corporis perspiciatis, ullam, provident at iusto quod minima odio nam excepturi architecto! Repudiandae rem repellat reprehenderit, porro consequuntur quaerat odit qui ratione eveniet mollitia soluta?</p>

                <div class="d-flex">
                    <a href="" class="btn-default w-100 d-flex justify-space-between color-white btn-icon align-items-center">Saiba Mais <span><i class="bi bi-arrow-right"></i></span></a>
                </div>
            </div>
            <div class="f-50 d-flex right_content justify-flex-end inner_img_fluid">
                <?php
                    $img_second_home = get_field('imagem_topo');

                    if($img_second_home):
                ?>
                <img src="<?= $img_second_home['url'] ?>" alt="" class="">
                <?php endif; ?>
            </div>
        </div>
    </section>

    <!-- 
    <section>
        <div class="container d-flex section-default">
            <div class="f-25 card_count">
                <h3><span>3</span>+</h3>
                
                <p class="text-default">years of work of our studio</p>
            </div>
            <div class="f-25 card_count">
                <h3><span>680</span>+</h3>
                
                <p class="text-default">created unique interiors</p>
            </div>
            <div class="f-25 card_count">
                <h3><span>946</span>+</h3>
                
                <p class="text-default">happy clients</p>
            </div>
            <div class="f-25 card_count">
                <h3><span>59,343</span>+</h3>
                
                <p class="text-default">sq. m designed by us</p>
            </div>
        </div>
    </section>
     -->

    <section>
        <div class="container section-default d-flex text-center">
            <?php
                $cta_text = get_field('cta_text');
                if($cta_text):
            ?>
            <h2 class="title-default m-auto f-70 text-center font-lato title_cta text-uppercase"><?= $cta_text; ?></h2>
            <?php endif; ?>
        </div>
        <div class="container section-default cta_img">
            <?php
                $imagem_cta = get_field('imagem_cta');
                if($imagem_cta):
            ?>
            <img src="<?= $imagem_cta['url'] ?>" alt="">
            <?php endif; ?>
        </div>
    </section>

    <section>
        <div class="container section-default d-flex">
            <div class="f-50 left_content">

                <p class="text-middle m-b-60">Nossa empresa é especializado na criação de design de soluções para sua marca. Temos muita experiência, o que ajuda a resolver facilmente quaisquer problemas e a acompanhar as tendências.</p>

                <div class="d-flex">
                    <div class="f-50 text-center">

                        <p class="text-middle"></p>
                    </div>
                    <div class="f-50"></div>
                    <div class="f-50"></div>
                    <div class="f-50"></div>
                </div>
            </div>
            <div class="f-50 d-flex right_content justify-flex-end inner_img_fluid">
                <?php
                    $imagem_sessao_inferior = get_field('imagem_sessao_inferior');
                    if($imagem_sessao_inferior):
                ?>
                <img src="<?= $imagem_sessao_inferior['url'] ?>" alt="" class="">
                <?php endif; ?>
            </div>
        </div>
    </section>

    <?php get_template_part('templates-parts/content', 'list-projetos') ?>

    <section>
        <div class="container section-default d-flex">
            <div class="f-50 left_faq">
                <img src="<?= get_template_directory_uri() ?>/assets/img/faq.jpg" alt="">
            </div>
            <div class="f-50 right_faq">

                <h2 class="title-second m-b-60">Perguntas Frequentes</h2>

                <ul class="list_faq">
                    <?php
                        
                        $faq = get_field('faq');

                        //var_dump($faq);

                        foreach($faq as $item):

                    ?>
                    <li>
                        <div class="item_faq d-flex align-items-center"><span><i class="bi bi-x-circle"></i></span> <h3><?= $item['pergunta'] ?></h3></div>
                        <p><?= $item['resposta'] ?></p>
                    </li>

                    <?php endforeach; ?>

                    
                </ul>
            </div>
        </div>
    </section>

    <section>
        <div class="container d-flex section-default">
            <div class="f-50 ">
                <h3 class="subtitle">Está na hora</h3>
                <h2 class="title-second m-b-60 text-uppercase">Vamos conversar sobre seu projeto</h2>

                <p class="text-default m-b-60">Preencha o formulário para obter ajuda de especialistas</p>


                <form action="" class="form_contact">
                    <input type="text" name="" id="">
                    <input type="text" name="" id="">
                    <div class="d-flex">
                        <button type="submit" class="btn-default w-100 d-flex justify-space-between color-white btn-icon align-items-center">ENVIAR <span><i class="bi bi-arrow-right"></i></span></button>
                    </div>
                </form>

                
            </div>
            <div class="f-50 d-flex right_content justify-flex-end">
                <img src="<?= get_template_directory_uri() ?>/assets/img/contact.jpg" alt="" class="">
            </div>
        </div>
    </section>

</main>

<?php get_footer(); ?>