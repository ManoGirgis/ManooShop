<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">show articulo</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">User</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <section class="content">
        <table>
            <tr>
                <th> ID Articulo:</th>
                <th><!--input type="text" name="idarticulos" placeholder="IDart" required /-->
                    <?= $_GET["idarticulos"] ?>
                    <input type="text" name="idarticulos" Value="<?= $_GET["idarticulos"] ?>" hidden />
                </th>
            </tr>
            <!--tr><td></td><td><button type="submit">Buscar</button></td></tr-->
            <tr>
                <th> Nombre: </th>
                <th><?= $articulo->getNombre() ?></th>
            </tr>
            <tr>
                <th> Precio:</th>
                <th><?= $articulo->getPrecio() ?></th>
            </tr>
            <tr>
                <th> Descripcion:</th>
                <th> <?= $articulo->getDescripcion() ?></th>
            </tr>
            <tr>
                <th>Categoria:</th>
                <th><?= $category->getCatname() ?></th>
            </tr>
            <tr><img class="" id="picsart" src="<?= $articulo->getImg() ?>" alt="Card image cap"></tr>
            <tr><th><a class="btn btn-app bg-success" href="?controller=compra&action=buy&prod=<?= $articulo->getIdarticulos() ?>" name = "prod"> 
<i class="fas fa-plus"></i>
Comprar
</a></th></tr>
        </table>
        </form>
    </section>
</div>