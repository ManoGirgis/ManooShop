<?php
include_once 'main.php';
?>


<div class="container mt-3" >
  <div class="row">

    <?php

    foreach ($listacategory as $category) {
    ?>

      <div class="card" style="width: 13rem;" id="articard">
        <div class="card-body">
          <h5 class="card-title"><?= $category->getCatname() ?></h5>
          <p class="card-text">Categoria numero: <?= $category->getIdcategory() ?></p>
        </div>
      </div>

    <?php } ?>
    <div>