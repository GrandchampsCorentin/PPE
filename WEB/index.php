<!-- Classe container de bootstrap 4 -->
<div class="container h-100 bg-dark">
    
    <?php 
        /*  Contient les composants :
        * - session_start() (utile pour créer des variables SESSION)
        * - top.php         (utilisé - données méta, lien css, javascript etc...)
        * - header.php      (vide)
        * - sidebar.php     (utilisé - menu des pages)
        * - logo.php        (utilisé - image)
        * - titre.php       (utilisé - titre du site)
        */
        include("StructureHTML/strHautPage.php");
    ?>

    <?php 
        /*  Contient :
        * - la première déclaration de l'uc qui dirige sur accueil
        * - le switch qui redirige sur les controleurs et les vues
        */
        include("StructureHTML/strContenu.php");
    ?>

    <?php 
        /*  Contient les composants :
        * - footer.php    (vide - servira pour le bandeau des réseau sociaux et mentions légales)
        * - bottom.php    (utilisé - indique la fin du body et du html)
        */
        include("StructureHTML/strBasPage.php");
    ?>
    
</div>