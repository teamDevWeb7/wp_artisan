<?php

get_header();

?>
<main id="connex">
    <p id="pCon">Pas encore de compte ? Tant pis pour vous</p>
    <form id="formCon">
        <label for="id" id="lid">Identifiant :</label>
        <input type="text" name="id" id="id">
        <label for="mdp" id="lmdp">Mot de passe :</label>
        <input type="password" name="mdp" id="mdp">
        <input type="submit" value="Se connecter" id="sub">
    </form>

</main>

<?php
get_footer();
?>