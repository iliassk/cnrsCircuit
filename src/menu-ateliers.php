<nav id="menu-ateliers">        

    <div class="element_menu">
        <h3>Liste des ateliers</h3>
        <ul>
            <?php
            $idA_nom_list = $bdd->query('SELECT idA, nom FROM atelier');
            
            while ($idA_nom = $idA_nom_list->fetch())
            {
            ?>
            <li><a href= <?php echo "atelier.php?idA=" . $idA_nom['idA']?> ><?php echo $idA_nom['nom']; ?></a></li>
            <?php
            }
            $idA_nom_list->closeCursor(); // Termine le traitement de la requête
            ?>


        </ul>
    </div>  
</nav>