<?php
    /*
    Template Name: Home page
    */
    ?>
<?php get_header(); /* Tells WordPress to include header.php */ ?>   
<section class="container-fluid aboutbg text-center">

        <div class="container">
            
<h2><?php the_field('titleforaboutme'); ?></h2><!--  custom field for the aboutme content-->
<p class="particle"><?php the_field('subtitleforaboutme'); ?></p>
<p class="about-text"><?php the_field('paragraphforaboutme'); ?></p>            
            <div class="blocker"></div>
        </div>
        <!--container-->
    </section>


    <section class="container-fluid articlesbg">
        <div class="container">
            <div class="row">
                <div class="article-title text-center">
                    <h3>LATEST ARTICLES</h3>
                </div>
<div class="col-md-4 article-cent">
<!--placeholder for col1-->
                </div>
                <!--col-md-4-->

                <div class="col-md-4 article-cent">
<!--placeholder for col2-->
                </div>
                <!--col-md-4-->

                <div class="col-md-4 article-cent">
<!--placeholder for col3-->
                </div>
                <!--col-md-4-->

            </div>
            <!--row-->
        </div>
        <!--container-->
    </section>
<?php get_footer(); /* Tells WordPress to include footer.php */ ?>