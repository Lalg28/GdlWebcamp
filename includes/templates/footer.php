<footer class="site-footer">
        <div class="contenedor clearfix">
            <div class="footer-informacion">
                <h3>Sobre <span>GdlWebCamp</span></h3>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Accusamus ea nisi et deleniti id ab dolores nemo deserunt autem, amet unde obcaecati voluptates alias. Incidunt omnis rem autem dolores.</p>
            </div>
            <div class="ultimos-tweets">
                <h3>Ultimos <span>Tweets</span></h3>
                <ul>
                    <li>
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Corporis nihil deserunt blanditiis ipsam laudantium saepe ipsa est doloremque ut illo, magni culpa eos architecto a eligendi non ipsum debitis vero.
                    </li>
                    <li>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel assumenda iste at. Doloribus harum a ea, minima quam id, voluptas consequuntur quibusdam error quasi recusandae delectus earum impedit, soluta at?
                    </li>
                </ul>
            </div>
            <div class="menu">
                <h3>Redes <span>Sociales</span></h3>
                <nav class="redes-sociales">
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-pinterest-p"></i></a>
                    <a href="#"><i class="fab fa-youtube"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                </nav>
            </div>
        </div>
    </footer>

    <p class="copyright">
        Todos los derechos reservados GDLWEBCAMP 2020
    </p>

    <script src="js/vendor/modernizr-3.11.2.min.js"></script>
    <script src="https://unpkg.com/leaflet@1.6.0/dist/leaflet.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/jquery.animateNumber.min.js"></script>
    <script src="js/jquery.countdown.min.js"></script>
    <script src="js/jquery.lettering.js"></script>

    <?php
        $archivo = basename($_SERVER['PHP_SELF']);
        $pagina = str_replace(".php", "", $archivo);
        if($pagina == 'invitados' || $pagina == 'index'){
            echo '<script src="js/jquery.colorbox-min.js"></script>';
        }else if($pagina == 'conferencia'){
            echo '<script src="js/lightbox.js"></script>';
        }
    ?>

    <script src="js/main.js"></script>

    <!-- Google Analytics: change UA-XXXXX-Y to be your site's ID. -->
    <script>
        window.ga = function() {
            ga.q.push(arguments)
        };
        ga.q = [];
        ga.l = +new Date;
        ga('create', 'UA-XXXXX-Y', 'auto');
        ga('set', 'anonymizeIp', true);
        ga('set', 'transport', 'beacon');
        ga('send', 'pageview')
    </script>
    <script src="https://www.google-analytics.com/analytics.js" async></script>
</body>

</html>