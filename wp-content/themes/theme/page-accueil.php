<?php
get_header();

?>

    <div id="intro">
        <h1>Friend-Sitter</h1>
    </div>
    <main id="mainAcc">
        <svg height="600" width="1263">
            <polygon style="fill:rgb(255, 230, 0);" points="0,0 0,600 1263,400 1263,0"/>
        </svg>

        <h2>Bienvenue chez Friend-Sitter !</h2>
        <div id="p1">
            <p>Vous avez besoin d'animaux pour vos story insta mais vous n'aimez pas vous en occuper ?</p>
            <p>Nous avons la solution !</p>
            <p>A un prix très compétitif nos gardons vos animaux :)</p>
            <a href="./nous-decouvrir/">Découvrir l'équipe</a>
        </div>
        <img src="<?php bloginfo('template_url');?>/imgs/dog-g799fb2696_1920.jpg" alt="image décorative" id="g7">

        <h3>Découvrir toutes nos activités</h3>
        <div id="ateliers">
            <div>
                <a href="./services/">Atelier introspection</a>
                <img src="<?php bloginfo('template_url');?>/imgs/friends-g4f771af41_1920.jpg" alt="chien et humain pensifs">
            </div>
            <div>
                <a href="./services/">Atelier sieste</a>
                <img src="<?php bloginfo('template_url');?>/imgs/girl-g8b4e879a2_1920.jpg" alt="chien et humain à la sieste">
            </div>
            <div>
                <a href="./services/">Atelier team building</a>
                <img src="<?php bloginfo('template_url');?>/imgs/girl-g41a984c28_1920.jpg" alt="chien et humain jouent">
            </div>
            <div>
                <a href="./services/">Atelier savoir vivre</a>
                <img src="<?php bloginfo('template_url');?>/imgs/golden-retriever-puppy-gab287e0f0_1920.jpg" alt="chien mange propre ">
            </div>
        </div>


        
        <svg height="600" width="1263">
            <polygon style="fill:rgb(9, 216, 243);" points="0,50 0,1000 1263,1000 1263,200"/>
        </svg>

        <h4>Captivés ?</h4>
        <div id="contact">
            <a href="./contact/">Contactez-nous pour plus d'informations</a>
            <div>
                <img src="<?php bloginfo('template_url');?>/imgs/boites-aux-lettres.png" alt="lettre">
                <img src="<?php bloginfo('template_url');?>/imgs/old-phone.png" alt="lettre">
                <img src="<?php bloginfo('template_url');?>/imgs/e-mail.png" alt="lettre">
            </div>
        </div>
        

    </main>
<?php
get_footer();

?>