<?php include_once 'Controller/compraController.php' ?>

<div class="content" id="body">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <a href="?controller=main"> <button type="button" class="btn">
                            <i class="fas fa-arrow-left text-muted"></i>
                        </button></a>
                    <h1 class="m-0">show articulo</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="?controller=main">Home</a></li>
                        <li class="breadcrumb-item active">User</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <section class="content" id="artishow">
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
            <tr>
                <div id="img"><img id="picsart" src="img/<?= $articulo->getImg() ?>" alt="Card image cap">
            </tr>
</div>
<tr>

    <?php
    if (compraController::exista($articulo->getIdarticulos())) { ?>
        <th> <a class="btn btn-app bg-success" href="?controller=main&action=showcarrito">
                <i class="fas fa-check"></i>
                Mostrar carrito
            </a>
        </th>
        <th>
            <a class="btn btn-app bg-danger" href="?controller=compra&action=dontwant&prod=<?= $articulo->getIdarticulos() ?>">
                <i class="fas fa-times"></i>

                Ya no quiero
            </a>
        </th>
    <?php  } else { ?>
        <th>
            <a class="btn btn-app bg-success" href="<?php
                                                    echo "?controller=compra&action=buy&prod=" . $articulo->getIdarticulos();
                                                    ?>">
                <i class="fas fa-plus"></i>
                Comprar
            </a>
        <?php } ?>
        </th>
</tr>
</table>
</form>



</div>

</section>

<div class="card-footer card-comments" id="commentCard">
    <div class="card-comment">
        <?php foreach ($listacomments as $comment) { ?>
            <img class="img-circle img-sm" src="<?= $comment->getUsrpic() ?>" alt="User Image">
            <div class="comment-text">
                <span class="username">
                    <?= $comment->getUsername() ?>
                    <span class="text-muted float-right">
                        <?php
                        /*$date1 = new DateTime(date("Y-m-d h:i:sa"));
                        $date2 = new DateTime($comment->getUsername());
                        $interval = $date1->diff($date2);
                        echo $interval->format('%R%a days, %h hours, %i minutes');*/
                        /*  if(   $comment->getUsername()  == date("Y/m/d",time())){
                    echo "ahora";
                }
                else if(   $comment->getUsername()  == date("Y/m/d")){
                    echo "hoy";
                }
                else{
                    echo date("Y/m/d",time()) - $comment->getUsername();  
                }*/


                        ?></span>

                </span>
                <?= $comment->getComment() ?>
            </div>

    </div>
<?php } ?>

</div>


        <div class="comment-text">
            <span class="username">
                Maria Gonzales
                <span class="text-muted float-right">8:03 PM Today</span>
            </span>
            It is a long established fact that a reader will be distracted
            by the readable content of a page when looking at its layout.
        </div>
