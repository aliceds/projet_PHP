


<form class ="form-inline" method="POST"action="index.php?page=ajouterGalerie" enctype="multipart/form-data">
    Select image to upload:
    <input type="hidden" name="MAX_FILE_SIZE" value="5242880" />
	<input type="file" name="fileToUpload" value="Choisissiez un fichier" id="fileToUpload" class="form-control"></input>
	<input type="submit" value="Upload Image" name="submit" class="btn btn-default">
</form>

<div class="container">
  <h2>Modifier une image</h2>
  <div class="table-responsive">
  <table class="table">
    <thead>
      <tr>
        <th></th>
        <th>Ordre des images</th>
        <th>Nom du fichier</th>
        <th>Titre de l'image</th>
        <th>Description de l'image</th>
        <th></th>
        <th></th>
      </tr>
    </thead>
    <tbody>
      <?php
      //print_r($diapositives);
      foreach($diapositives as $diapo)
      {
      //print_r($diapo);
      echo'
          <form class ="form-inline" method="POST"action="index.php?page=modifierGalerie">
           <tr>
           <div class="form-group">
           <input type="hidden" name="id"  class="form-control" value='.$diapo['image_id'].'></input>
           <td><img src="'.PATH_IMAGES.$diapo['nom_fichier'].'"style="width:20%"></img></td>
           <td><input type="text" class="form-control" name="ordre" value='.$diapo['ordre'].'></input></td>
           <td>'.$diapo['nom_fichier'].'</td>
           <td><input type="text" size="30" maxlength="10" class="form-control"name="titre" value='.$diapo['titre'].'></input></td>
           <td><textarea class="form-control"  rows="3" cols="20"name="description">'.$diapo['description'].'</textarea></td>
            <td><button type="submit"name="modifier"  class="btn btn-default">Modifier</button></td>
            </form>
            </div>
         <form class ="form-inline" method="POST"action="index.php?page=supprimerGalerie">
           <input type="hidden" name="id" class="form-control" value='.$diapo['image_id'].'></input>
          <td><button type="submit" name="supprimer" class="btn btn-default">Supprimer</button></td>

        </form>
      </tr>';
      }

      ?>
    </tbody>
  </table>
  </div>
</div>

</body>
</html>
