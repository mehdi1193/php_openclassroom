<form method="post" action="cible.php" enctype="multipart/form-data">
    <label>Pseudo: </label>
    <input type="text" name="pseudo" value="mehdi"></br></br>
    <!--Zone de texte multilingue-->
    <textarea name="message" rows="8" cols="45">
        Bonjour mes amis !! Je suis le codeur numéro 1 au Maroc ! 
    </textarea>
    </br></br>
    <!--Liste déroulante-->
    <select name="choix">
        <option value="choix1">Choix 1</option>
        <option value="choix2">Choix 2</option>
        <option value="choix3">Choix 3</option>
        <option value="choix4" selected="selected">Choix 4</option>
    </select>
    </br></br>
    <!--Case à cocher-->
    <input type="checkbox" name="case" id="case1" /> <label for="case">Ma case à cocher</label>
    <input type="checkbox" name="case" id="case2" /> <label for="case">Mas case à cocher</label>
    <!--Les boutons d'options-->
    Aimez-vous les frites ?
    <input type="radio" name="frites" value="oui" id="oui" checked="checked" /> <label for="oui">Oui</label>
    <input type="radio" name="frites" value="non" id="non" /> <label for="non">Non</label>
    <!--un champ caché-->
    </br>
    <input type="hidden" name="pseudo2" value="sofia"/>
    
    <!--un champ fichier--></br>
    <input type="file" name="monfichier"/></br></br>
    
    <input type="submit" value="Envoyer" />
</form>


