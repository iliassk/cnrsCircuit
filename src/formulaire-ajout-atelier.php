<form method="post" action="frontpage.php">
 
<p>
	Intitulé de l'atelier : 
    <input type="text" name="intitule_atelier" /> <br />
    Laboratoire :
    <input type="text" name="laboratoire" /> <br />
    Lieu : <br />
	<input type="text" name="lieu" /> <br />
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
    <textarea name="descriptif" rows="8" cols="45">
    Entrer le descriptif de l'atelier.	
    </textarea>

    <input type="submit" name="valider" />
</p>
 
</form>