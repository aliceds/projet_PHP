<?php
require_once('header.php');
require_once(PATH_MODEL.'diaporama.php');

// echo $user;
// print_r($diapositives);
$nb_diapo = count($diapositives);
$i = 1;

echo '<div class="slideshow-container">';
foreach($diapositives as $diapo){
  ?>

  <div class="mySlides fade">
    <div class="numbertext"> <?php echo $i;?> / <?php echo  $nb_diapo; ?></div>
    <img src="<?php echo PATH_IMAGES.$diapo['nom_fichier'] ; ?>" style="width:100%">
    <div class="text">Caption Text</div>
  </div>
  <?php
  //print_r($diapo);
  $i++;
}
?>

  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
  <a class="next" onclick="plusSlides(1)">&#10095;</a>
</div>
<br>

<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span>
  <span class="dot" onclick="currentSlide(2)"></span>
  <span class="dot" onclick="currentSlide(3)"></span>
</div>

  <script src=<?php echo PATH_SCRIPT."diapositive.js";?>></script>
