<div class="content-wrapper" id="body">
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

    <form action="?controller=category&action=delete" method="post">
    <table>
                <tr>
                    <th> ID Articulo:</th>
                    <th><!--input type="text" name="idarticulos" placeholder="IDart" required /-->
                    <?= $_GET["idcategorys"]?>
                    <input type="text" name="idcategorys" Value="<?=$_GET["idcategorys"] ?>" hidden />
                </th>
                </tr>
                <!--tr><td></td><td><button type="submit">Buscar</button></td></tr-->
                <tr>
                    <th> nombre categoria: </th>
                    <th> <?= $category->getCatname() ?> </th>
                </tr>
                <tr>
                </tr>
                <tr><td><button type="submit"> Si</button></td>
                <!--td><button type="submit" Value = 0> No</button></td-->
            </tr>
                
               
            </table>
        </form>
    </form>
    </section>
</div>