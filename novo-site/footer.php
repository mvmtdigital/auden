<footer>
    <div class="container">
        <div class="left-footer">
            <div class="row-info">
                <i class="icon-footer">
                    <img src="image/icons/icon-phone-footer.svg" alt="Auden">
                </i>
                <div class="content-info-footer">
                    <small>Atendimento</small>
                    <h3>+(1) 123 456 7890</h3>
                </div>
            </div>
            <div class="row-info">
                <i class="icon-footer">
                    <img src="image/icons/icon-mail-footer.svg" alt="Auden">
                </i>
                <div class="content-info-footer">
                    <small>Dúvidas? Entre em contato!</small>
                    <h3>Company@mail.com</h3>
                </div>
            </div>
            <div class="row-info">
                <i class="icon-footer">
                    <img src="image/icons/icon-share.svg" alt="Auden">
                </i>
                <div class="content-info-footer">
                    <small>Siga-nos nas redes sociais!</small>
                    <nav class="social-list">
                        <ul>
                            <li>
                                <a href="#"><img src="image/icons/icon-fb.svg" alt="Facebook"></a>
                            </li>
                            <li>
                                <a href="#"><img src="image/icons/icon-tw.svg" alt="Twitter"></a>
                            </li>
                            <li>
                                <a href="#"><img src="image/icons/icon-ld.svg" alt="Linkedin"></a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>

        <div class="right-footer">
            <div class="colunm-footer">
                <h3>Atendimento</h3>
                <nav class="list-footer">
                    <ul>
                        <li><a href="#">On Page SEO</a></li>
                        <li><a href="#">Off Page SEO</a></li>
                        <li><a href="#">Thematic Keyword</a></li>
                        <li><a href="#">Web Developement</a></li>
                    </ul>
                </nav>
            </div>
            <div class="colunm-footer">
                <h3 class="title-blue">Cursos</h3>
                <nav class="list-footer">
                    <ul>
                        <li><a href="#">Professional Team</a></li>
                        <li><a href="#">Testimonials</a></li>
                        <li><a href="#">Support</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                        <li><a href="#">Press</a></li>
                        <li><a href="#">Why SEO Matters</a></li>
                    </ul>
                </nav>
            </div>
            <div class="colunm-footer">
                <h3>Institucional</h3>
                <nav class="list-footer">
                    <ul>
                        <li><a href="#">Careers</a></li>
                        <li><a href="#">SEO Blog</a></li>
                        <li><a href="#">Sitemap</a></li>
                        <li><a href="#">Keyword Analytics</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="copy">
            <p>Copyright © <?php echo date('Y') ?> Auden.edu.br. All rights reserved</p>
        </div>
    </div>
</footer>

<div class="menu-overlay"></div>
<section class="side-menu-wrapper">
    <button class="menu-close">
        <span class="material-icons-outlined">
            close
        </span>
    </button>
    <?php require('includes/organisms/menu-responsive.php'); ?>
</section>

<!-- Modal video -->
<div class="modal fade modal-auden" id="modal-video" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="container">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <div class="steps-title">
                        <h2 class="gray-four">
                            Auden 100% Online
                        </h2>
                    </div>
                    <div class="action-modal">
                        <button type="button" class="btn-question">
                            <span>?</span>
                        </button>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                </div>
                <div class="modal-body">

                    <div class="video-auden">
                        <iframe width="100%" height="100%" src="https://www.youtube.com/embed/e2YDpU4Ut_Y"
                            title="YouTube video player" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen></iframe>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
    integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js"
    integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous">
</script>

<script type="text/javascript" src="components/mobile-menu/js/mobile.js"></script>

<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

<!-- abre o botão de search -->
<script>
$(".bt-open-search").click(function() {
    $(".search").addClass('open-search');
    $(".bt-open-search").addClass('close-search');
    $(".bt-open-search").removeClass('bt-open-search');
});
</script>

<!-- slide principal home -->
<script>
$('.slide-intro').slick({
    infinite: true,
    slidesToShow: 1,
    slidesToScroll: 1,
    dots: true,
    arrows: false
});
</script>

<!-- slide diretores -->
<script>
$('.slide-team').slick({
    infinite: true,
    slidesToShow: 5,
    slidesToScroll: 1,
    dots: false,
    autoplay: true,
    arrows: false,
    responsive: [{
            breakpoint: 1200,
            settings: {
                dots: true,
                slidesToShow: 4
            }
        },
        {
            breakpoint: 997,
            settings: {
                dots: true,
                slidesToShow: 3
            }
        },
        {
            breakpoint: 768,
            settings: {
                dots: true,
                slidesToShow: 2
            }
        },
        {
            breakpoint: 600,
            settings: {
                dots: true,
                slidesToShow: 1
            }
        }
    ]
});
</script>

<!-- slide depoimentos -->
<script>
$('.slide-testimonials').slick({
    infinite: true,
    variableWidth: true,
    centerMode: true,
    slidesToScroll: 1,
    dots: true,
    autoplay: true,
    arrows: false,
    responsive: [{
            breakpoint: 1200,
            settings: {
                dots: true,
                slidesToShow: 2
            }
        },
        {
            breakpoint: 997,
            settings: {
                dots: true,
                slidesToShow: 2
            }
        },
        {
            breakpoint: 768,
            settings: {
                dots: true,
                slidesToShow: 2
            }
        },
        {
            breakpoint: 701,
            settings: {
                dots: true,
                slidesToShow: 1
            }
        }
    ]
});
</script>

<!-- slide cursos -->
<script>
$('.slide-curses').slick({
    infinite: true,
    slidesToScroll: 1,
    dots: false,
    autoplay: true,
    arrows: true,
    centerMode: true,
    variableWidth: true,
    responsive: [{
            breakpoint: 1200,
            settings: {
                dots: false,
                slidesToShow: 2
            }
        },
        {
            breakpoint: 997,
            settings: {
                dots: false,
                slidesToShow: 2
            }
        },
        {
            breakpoint: 768,
            settings: {
                dots: false,
                slidesToShow: 2
            }
        },
        {
            breakpoint: 701,
            settings: {
                dots: false,
                slidesToShow: 1
            }
        }
    ]
});
</script>

<!-- botão para anexar documento do enem -->
<script>
$('.btn-enem').on('click', function() {
    $('.field-enem').addClass('active');
});

$('.btn-enem').on('click', function() {
    $('.doc-enem').trigger('click');
});

$('.doc-enem').on('change', function() {
    var fileName = $(this)[0].files[0].name;
    $('.field-enem').val(fileName);
});
</script>

<script>
$(document).on("input", "#redacao", function() {
    var limite = 0;
    var caracteresDigitados = $(this).val().length;
    var caracteresRestantes = limite + caracteresDigitados;

    $(".caracteres").text(caracteresRestantes);
});
</script>

</body>

</html>