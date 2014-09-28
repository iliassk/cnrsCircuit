<form method="post" action="index.php">
 
<p>
	Intitulé de l'atelier : 
    <input type="text" name="intitule_atelier" placeholder="Titre" /> <br />
    Laboratoire :
    <input type="text" name="laboratoire" placeholder="Laboratoire"/> <br />
    Lieu : <br />
	<input type="text" name="lieu" placeholder="Lieux"/> <br />
    Dicipline : <br />

    <select name="discipline">
    <option value="Physique">Physique</option>
    <option value="Chimie">Chimie</option>
    <option value="Biologie">Biologie</option>
    <option value="Informatique">Informatique</option>
    <option value="Mathematiques">Mathematiques</option>
	</select> <br />
	<br />
    Descriptif de l'atelier : <br />
    <textarea name="descriptif" rows="8" cols="45" placeholder="Entrez la description de l'atelier"></textarea>

    <input type="submit" name="valider" />
</p>
 
</form>