<nav id="menu-ateliers">        

    <div class="element_menu">
        <h3>Liste des ateliers</h3>
        <ul>
            <?php
            $reponse = $bdd->query('SELECT idA, nom FROM atelier');
            
            while ($donnees = $reponse->fetch())
            {
            ?>
            <li><a href= <?php echo "atelier.php?" . $donnees['idA']?> ><?php echo $donnees['nom']; ?></a></li>
            <?php
            }
            $reponse->closeCursor(); // Termine le traitement de la requête
            ?>


        </ul>
    </div>  
    <?php
	$nombre_ateliers = 3;
	echo 'Il y a ' . $nombre_ateliers . ' ateliers';
    ?>  
</nav>