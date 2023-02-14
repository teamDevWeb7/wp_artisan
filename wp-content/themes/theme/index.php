<?php

get_header();
?>
<main id="chouquette">
    <p id="title">Tous nos ateliers</p>
    <section id="secBlog">
        <?php
        
            if(have_posts()):while(have_posts()):the_post();

        ?>
        <article id="artBlog">
            <div id="tf">
                <?php the_post_thumbnail();?>
            </div>
            
            <div id="salut">
                <p id="titrr"><?php the_title(); ?></a></p>
                <p><?php the_excerpt(); ?></p>
            </div>

        </article>
        <?php
            endwhile; endif;
        ?>
    </section>
    <section id="expert">
            <img src="<?php bloginfo('template_url');?>/imgs/v987-11a.jpg" alt="" srcset="">
            <p>Ateliers approuvés par nos experts canins</p>
            <img src="<?php bloginfo('template_url');?>/imgs/swimming-goggles-gbc5ca32b6_1920.jpg" id="lunettes">
    </section>

</main>







<?php

get_footer();
?>