<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> M Ikhsan Raffli || Portfolio</title>
    <!-- css -->
    <link rel="stylesheet" href="style.css">

    <!-- jquery -->
    <script src="jquery.js"></script>

    <!-- favicon -->
    <link rel="shortcut icon" href="ghost.png" type="image/x-icon">

    <!-- googlefont -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lilita+One&family=VT323&display=swap" rel="stylesheet">
</head>

<body>
    <header>

        <nav class="text-center">
            <ul class="inline-block">
                <li class="pull-left">
                    <span>
                        <img src="ghost.png" width="90"> Sansflly
                    </span>
                </li>
                <li class="pull-left active" style="margin-top: 20px;"><a href="#" data-direction="front">Home</a></li>
                <li class="pull-left" style="margin-top: 20px;"><a href="#" data-direction="back">Portfolio</a></li>
                <li class="pull-left" style="margin-top: 20px;"><a href="#" data-direction="top">About</a></li>
                <li class="pull-left" style="margin-top: 20px;"><a href="#" data-direction="right">Contact</a></li>
                <div class="clearfix"></div>
            </ul>
        </nav>
    </header>
    <div id="wrap">
        <div class="cube">
            <section class="page active face front" id="home">
                <div class="act-table text-center">
                    <div v class="act-table-cell ver-middle">
                        <?php  include 'Home/index.html' ?>
                    </div>
                </div>
            </section>
            <section class="page face back" id="portfolio">
                <div class="act-table text-center">
                    <div class="act-table-cell ver-middle">
                        <?php  include 'Portofolio/index.html' ?>
                    </div>
                </div>
            </section>
            <section class="page face top" id="about">
                <div class="act-table text-center">
                    <div class="act-table-cell ver-middle">
                        <?php  include 'About/index.html' ?>
                    </div>
                </div>
            </section>
            <section class="page face right" id="contact">
                <div class="act-table text-center">
                    <div class="act-table-cell ver-middle">
                    <?php  include 'Contact/index.php' ?>
                    </div>
                </div>
            </section>
            <!-- <section class="page face bottom" id="blog">
                <div class="act-table text-center">
                    <div class="act-table-cell ver-middle">blog Page</div>
                </div>
            </section>
            <section class="page face left" id="article">
                <div class="act-table text-center">
                    <div class="act-table-cell ver-middle">article Page</div>
                </div>
            </section> -->
        </div>
    </div>

    <!-- js -->
    <script>
    (function(document, window, $) {
        $(document).ready(function() {

            // Variables
            var
                windowWidth = $(window).width(),
                windowHeight = $(window).height(),
                $header = $('header');

            // header anchor tags
            function headerAnchors() {
                var pageDirection = '';
                var thisElement;
                var timeout;
                $header.find('nav li a').click(function(event) {
                    event.preventDefault();
                    $('.cube').removeClass('reverse-' + pageDirection);
                    thisElement = $(this);
                    pageDirection = thisElement.data('direction');
                    reverseDirection = thisElement.data('reverse-direction');
                    thisElement.parent().addClass('active').siblings().removeClass('active');
                    $('.cube').addClass('reverse-' + pageDirection);

                    $header.addClass('go-out');
                    $('#wrap').addClass('active');
                    clearTimeout(timeout);
                    timeout = setTimeout(function() {
                        $header.removeClass('go-out');
                        $('#wrap').removeClass('active');
                    }, 1000);
                });
            }
            headerAnchors();
            $(window).resize(function() {

                // Vars
                windowWidth = $(window).width();
                windowHeight = $(window).height();
                // Functions
            });
        });
    })(document, window, jQuery);
    </script>
</body>

</html>