<?php
get_header();
//Template Name: Sobre
?>

<main class="content_page">

    <section class="">
        <div class="container d-flex section-default">
            <h3 class="w-100 subtitle">Principal</h3>
            <h2 class="title-second m-b-60">Sobre Nós</h2>
        </div>
    </section>

    <section>
        <div class="container section-default">
            <img src="http://localhost/wordpress/masquebrand/wp-content/themes/masquebrand/assets/img/imas.jpeg" alt="">
        </div>
    </section>

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
    
    <section>
        <div class="container d-flex">
            <div class="carousel_team slider">
                <img src="https://cdn.pixabay.com/photo/2020/05/09/13/29/photographer-5149664_1280.jpg" alt="">
                <img src="https://cdn.pixabay.com/photo/2020/05/09/13/29/photographer-5149664_1280.jpg" alt="">
                <img src="https://cdn.pixabay.com/photo/2020/05/09/13/29/photographer-5149664_1280.jpg" alt="">
                <img src="https://cdn.pixabay.com/photo/2020/05/09/13/29/photographer-5149664_1280.jpg" alt="">
            </div>
        </div>
    </section>
    

    <script src="https://code.jquery.com/jquery-3.7.1.slim.min.js" integrity="sha256-kmHvs0B+OpCW5GVHUNjv9rOmY0IvSIRcf7zGUDTDQM8=" crossorigin="anonymous"></script>
    <script type="text/javascript">
    $(document).ready(function(){
        $('.carousel_team').slick({
            centerMode: true,
            centerPadding: '0',
            slidesToShow: 3,
            responsive: [
                {
                breakpoint: 768,
                settings: {
                    arrows: false,
                    centerMode: true,
                    centerPadding: '40px',
                    slidesToShow: 3
                }
                },
                {
                breakpoint: 480,
                settings: {
                    arrows: false,
                    centerMode: true,
                    centerPadding: '40px',
                    slidesToShow: 1
                }
                }
            ]
        });

        document.querySelector('.slick-prev.slick-arrow').innerHTML = '';
        document.querySelector('.slick-next.slick-arrow').innerHTML = '';
    });
  </script>


    <section class="content_page">
        <div class="container d-flex section-default">
            <h3 class="w-100 subtitle">Nossos</h3>
            <h2 class="title-second m-b-60">Projetos</h2>
            
            <section class="d-flex">
                <div class="f-50">
                    <article class="card_project">
                        <img src="http://localhost/wordpress/masquebrand/wp-content/themes/masquebrand/assets/img//card-project.jpg" alt="">
                        <a href="#" class="info_card_project color-white">
                            <h3 class="title-third">Dark and spacious apartment for a family</h3>
                            <div class="d-flex w-100">
                                <div class="btn-default w-100 d-flex justify-space-between color-white btn-icon align-items-center btn_card_project">Ver projeto <span><i class="bi bi-arrow-right"></i></span></div>
                            </div>
                        </a>
                    </article>
                </div>
                <div class="f-50">
                    <article class="card_project">
                        <img src="http://localhost/wordpress/masquebrand/wp-content/themes/masquebrand/assets/img//card-project.jpg" alt="">
                        <a href="#" class="info_card_project color-white">
                            <h3 class="title-third">Dark and spacious apartment for a family</h3>
                            <div class="d-flex w-100">
                                <div class="btn-default w-100 d-flex justify-space-between color-white btn-icon align-items-center btn_card_project">Ver projeto <span><i class="bi bi-arrow-right"></i></span></div>
                            </div>
                        </a>
                    </article>
                </div>
                <div class="f-50">
                    <article class="card_project">
                        <img src="http://localhost/wordpress/masquebrand/wp-content/themes/masquebrand/assets/img//card-project.jpg" alt="">
                        <a href="#" class="info_card_project color-white">
                            <h3 class="title-third">Dark and spacious apartment for a family</h3>
                            <div class="d-flex w-100">
                                <div class="btn-default w-100 d-flex justify-space-between color-white btn-icon align-items-center btn_card_project">Ver projeto <span><i class="bi bi-arrow-right"></i></span></div>
                            </div>
                        </a>
                    </article>
                </div>
                <div class="f-50">
                    <article class="card_project">
                        <img src="http://localhost/wordpress/masquebrand/wp-content/themes/masquebrand/assets/img//card-project.jpg" alt="">
                        <a href="#" class="info_card_project color-white">
                            <h3 class="title-third">Dark and spacious apartment for a family</h3>
                            <div class="d-flex w-100">
                                <div class="btn-default w-100 d-flex justify-space-between color-white btn-icon align-items-center btn_card_project">Ver projeto <span><i class="bi bi-arrow-right"></i></span></div>
                            </div>
                        </a>
                    </article>
                </div>
            </section>

            
            <div class="w-100 text-center p-10">
                <a href="" class="btn-default color-white">Ver mais <span><i class="bi bi-plus-circle"></i></span></a>
            </div>
            
            
        </div>
    </section>

    <section>
        <div class="container d-flex section-default">
            <div class="f-50 ">
                <h3 class="subtitle">It's Time To</h3>
                <h2 class="title-second m-b-60">DISCUSS YOUR PROJECT</h2>

                <p class="text-default m-b-60">Please, fill the following application in order to get free expert advice by specialists</p>


                <form action="" class="form_contact">
                    <input type="text" name="" id="">
                    <input type="text" name="" id="">
                    <div class="d-flex">
                        <button type="submit" class="btn-default w-100 d-flex justify-space-between color-white btn-icon align-items-center">READ MORE <span><i class="bi bi-arrow-right"></i></span></button>
                    </div>
                </form>

                
            </div>
            <div class="f-50 d-flex right_content justify-flex-end">
                <img src="http://localhost/wordpress/masquebrand/wp-content/themes/masquebrand/assets/img/imag.jpg" alt="" class="">
            </div>
        </div>
    </section>

</main>

<?php
get_footer();
?>
