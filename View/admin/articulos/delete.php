<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">¿Estas seguro que quieres Borar este Articulo?</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="?controller=main">Home</a></li>
                        <li class="breadcrumb-item active">Dashboard v1</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
 
    <section class="content">

    <form action="?controller=Articulo&action=delete" method="post">
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
                    <th><?= $articulo->getNombre() ?></th>
                </tr>
                <tr>
                    <th> Precio:</th>
                    <th><?= $articulo->getPrecio() ?> €</th>
                </tr>
                <tr>
                    <th> Descripcion:</th>
                    <th><?= $articulo->getDescripcion() ?></th>
                </tr>
                <tr>
                    <th> Categoria:</th>
                    <th><?= $category->getCatname() ?></th>
                </tr>
                <tr><td><button type="submit"> Si</button></td>
                <!--td><button type="submit" Value = 0> No</button></td-->
            </tr>
                <tr><img class="" id="picsart" src="img/<?= $articulo->getImg() ?>" alt="Card image cap"></tr>
               
            </table>
        </form>
    </form>
    </section>
</div>