 <!-- ======= Header ======= -->
 <header id="header">
     <div class="container">

         <h1><a href="index.html"><?= get_theme_mod('hero_name'); ?></a></h1>
         <!-- Uncomment below if you prefer to use an image logo -->
         <!-- <a href="index.html" class="mr-auto"><img src="<?= get_template_directory_uri(); ?>/assets/img/logo.png" alt="" class="img-fluid"></a> -->
         <h2>I'm a passionate <span><?= get_theme_mod('hero_passion'); ?></span> from <?= get_theme_mod('hero_from'); ?></h2>

         <nav id="navbar" class="navbar">
             <ul>
                 <li><a class="nav-link active" href="#header">Home</a></li>
                 <li><a class="nav-link" href="#about">About</a></li>
                 <li><a class="nav-link" href="#resume">Resume</a></li>
                 <li><a class="nav-link" href="#services">Services</a></li>
                 <li><a class="nav-link" href="#portfolio">Portfolio</a></li>
                 <li><a class="nav-link" href="#contact">Contact</a></li>
             </ul>
             <i class="bi bi-list mobile-nav-toggle"></i>
         </nav><!-- .navbar -->

         <div class="social-links">
             <? if (get_theme_mod('hero_twitter') != '') : ?>
                 <a href="<?= get_theme_mod('hero_twitter'); ?>" class="twitter"><i class="bi bi-twitter"></i></a>
             <? endif ?>
             <? if (get_theme_mod('hero_facebook') != '') : ?>
                 <a href="<?= get_theme_mod('hero_facebook'); ?>" class="facebook"><i class="bi bi-facebook"></i></a>
             <? endif ?>
             <? if (get_theme_mod('hero_instagram') != '') : ?>
                 <a href="<?= get_theme_mod('hero_instagram'); ?>" class="instagram"><i class="bi bi-instagram"></i></a>
             <? endif ?>
             <? if (get_theme_mod('hero_linkedin') != '') : ?>
                 <a href="<?= get_theme_mod('hero_linkedin'); ?>" class="linkedin"><i class="bi bi-linkedin"></i></a>
             <? endif ?>
         </div>

     </div>
 </header><!-- End Header -->