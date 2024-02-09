<div class="container mt-3">
  <div class="row">
    <?php foreach ($listaarticulos as $articulo) { ?>
      <div class="card mt-3" style="width: 18rem; height: 32rem; margin-right: 10px; margin-bottom: 10px; box-shadow: 0 4px 8px rgba(0,0,0,0.1);" id="articard">
        <img src="img/<?= $articulo->getImg() ?>" class="card-img-top mt-3" alt="..." id="prodfoto">
        <div class="card-body">
          <h5 class="card-title"><b><?= $articulo->getNombre() ?></b></h5>
          <p class="card-text">Categoria numero: <?= $articulo->getIdcatergoria() ?></p>
          <p class="card-text">Descripcion: <br><?= $articulo->getDescripcion() ?></p>
          <p class="card-text">Precio: <?= $articulo->getPrecio() ?> Euro</p>
          <a class="btn btn-app bg-primary" href="?controller=Articulo&action=masinfo&idarticulos=<?= $articulo->getIdarticulos() ?>&idcat=<?= $articulo->getIdcatergoria() ?>">
            <svg xmlns="http://www.w3.org/2000/svg" height="1.5em" viewBox="0 0 384 512">
              <path d="M192 0c-41.8 0-77.4 26.7-90.5 64H64C28.7 64 0 92.7 0 128V448c0 35.3 28.7 64 64 64H320c35.3 0 64-28.7 64-64V128c0-35.3-28.7-64-64-64H282.5C269.4 26.7 233.8 0 192 0zm0 64a32 32 0 1 1 0 64 32 32 0 1 1 0-64zM112 192H272c8.8 0 16 7.2 16 16s-7.2 16-16 16H112c-8.8 0-16-7.2-16-16s7.2-16 16-16z" />
            </svg> <br> Mas Info
          </a>
          <a class="btn btn-app bg-danger">
            <!--span class="badge bg-info">531</span-->
            <i class="fas fa-heart"></i> Likes
          </a>
        </div>
      </div>
    <?php } ?>
  </div>
</div>