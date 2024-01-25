<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Editar articulo</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Dashboard v1</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
 
    <section class="content">

    <form action="?controller=Articulo&action=edit" method="post" enctype="multipart/form-data">
    <table>
                <tr>
                    <th> ID Articulo:</th>
                    <th><!--input type="text" name="idarticulos" placeholder="IDart" required /-->
                    <?= $_GET["idarticulos"]?>
                    <input type="text" name="idarticulos" Value="<?=$_GET["idarticulos"] ?>" hidden />
                </th>
                </tr>
                <!--tr><td></td><td><button type="submit">Buscar</button></td></tr-->
                <tr>
                    <th> Nombre: </th>
                    <th><input type="text" name="nombre" Value="<?= $articulo->getNombre() ?>" required /></th>
                </tr>
                <tr>
                    <th> Precio:</th>
                    <th><input type="number" name="precio" Value="<?= $articulo->getPrecio() ?>" required /> €</th>
                </tr>
                <tr>
                    <th> Descripcion:</th>
                    <th> <textarea name="descripcion" required><?= $articulo->getDescripcion() ?></textarea></th>
                </tr>
                <tr>
                    <th> Categoria:</th>
                    <th>
                    <select id="idcategory" name="idcategoria">
                            <?php foreach ($listacategory as $categoria) { ?>
                                <option value="<?= $categoria->getIdcategory() ?>" <?php if ($categoria->getIdcategory() == $articulo->getIdcatergoria()) { ?> selected <?php } ?> > <?= $categoria->getCatname() ?></option>
                            <?php } ?>

                        </select>
                    </th>
                </tr>
                <tr>
                    <th> la foto:</th>
                    <th><input type="file" name="img"  Value="<?= $articulo->getimg() ?>" accept="image/*"required /></th>
                </tr>
                <tr><td><button type="submit"> Campiar</button></td></tr>
                <tr><img class="" id="picsart" src="img/<?= $articulo->getImg() ?>" alt="Card image cap"></tr>
               
            </table>
        </form>
    </form>
    </section>
</div>