<div class="content-wrapper" id="body">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Añadir ariculo</h1>
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

    <section class="content" >

        <form action="?controller=Articulo&action=add" method="post" enctype="multipart/form-data">
            <table>
                <tr>
                    <th> Nombre:</th>
                    <th><input type="text" name="nombre" placeholder="Nombre" required /></th>
                </tr>
                <tr>
                    <th> Precio:</th>
                    <th><input type="number" name="precio" placeholder="precio" required /> €</th>
                </tr>
                <tr>
                    <th> Descripcion:</th>
                    <th> <textarea name="descripcion" placeholder="Desc" required></textarea></th>
                </tr>
                <tr>
                    <th>Articulo:</th>
                    <th><!--input type="number" name="idcategoria" placeholder="idCat" required /-->
                        <select id="idcategory" name="idcategoria">
                            <?php foreach ($listacategory as $categoria) { ?>
                                <option value="<?= $categoria->getIdcategory() ?>"><?= $categoria->getCatname() ?></option>
                            <?php } ?>

                        </select>
                    </th>
                </tr>
                <tr>
                    <th> Foto:</th>
                    <!--th><input type="link" name="img" placeholder="put the link here" required /></th-->
                    <th>
                        
                    <input type="file" accept="image/*" name="img" /></th>
                </tr>
                <tr>
                    <td><button type="submit" id="special">Guardar</button></td>
                </tr>
            </table>
        </form>
    </section>
</div>