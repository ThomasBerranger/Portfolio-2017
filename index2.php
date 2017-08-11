

<!-- Wrapper -->
<div id="wrapper">

    <!-- Header -->
    <header id="header">
        <nav>
            <ul>
                <li><a href="#intro">Présentation</a></li>
                <li><a href="#work">Compétences</a></li>
            </ul>
        </nav>
        <div class="content">
            <div class="inner">
                <h1>Thomas Berranger</h1>
                <p>Bienvenue sur mon portfolio et bonne lecture.</p>
            </div>
        </div>
        <nav>
            <ul>
                <li><a href="#" data-action="show-projects" >Projets</a></li>
                <li><a href="#contact">Contact</a></li>
                <!--<li><a href="#elements">Elements</a></li>-->
            </ul>
        </nav>
    </header>


    <!-- Main -->
    <div id="main">

        <!-- Intro -->
        <article id="intro">
            <?php include('Présentation.php') ?>
        </article>


        <!-- Compétences -->
        <article id="work">
            <?php include('Compétences.php') ?>
        </article>


        <!-- Contact -->
        <article id="contact">
            <?php include('Contacte.php') ?>
        </article>

    </div>


    <!-- Footer -->
    <footer id="footer">
        <p class="copyright">© 2015 - 2017 / TB - Tous droits réservés.</p>
    </footer>


</div>

<!-- BG -->
<div id="bg"></div>


<!-- Scripts -->
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/skel.min.js"></script>
<script src="assets/js/util.js"></script>
<script src="assets/js/main.js"></script>

<script src="animated-skills-bars/js/vendor/jquery.js"></script>
<script src="animated-skills-bars/js/foundation.min.js"></script>
<script>
    $(document).foundation();
</script>
