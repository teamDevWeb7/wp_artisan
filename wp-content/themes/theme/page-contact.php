<?php

get_header();

?>

<main id="mainCont">
    <section id="infos">
        <img src="<?php bloginfo('template_url');?>/imgs/Untitled1" alt="">
        <div>
            <p>15 rue du Scherbluk<br><br>89065 QUAEDYPRE<br><br>06.67.24.09.54<br><br>contact@friend-sitter.com</p>
        </div>

    </section>
    
    <form id="contacto">
            <input type="text" placeholder="Nom" id="nom">
            <input type="text" placeholder="Prénom" id="prenom">
            <input type="text" placeholder="Mail" id="mail">
            <input type="text" placeholder="Message" id="mess">
            <input type="submit" id="mit">
        </form>

    
    

</main>



<?php
get_footer();
?>