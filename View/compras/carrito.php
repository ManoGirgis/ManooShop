<?php
//include_once 'Model/Articulo.php';
$List = array();
?>

<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Carrito</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="?controller=main">Home</a></li>
                    <li class="breadcrumb-item active">carrito</li>
                </ol>
            </div>
        </div>
    </div>
</div>
<div class="carrito-cesta">
    <?php
    if (isset($_SESSION["carrito" . $_SESSION["User.id"]]) && $_SESSION["carrito" . $_SESSION["User.id"]] != NULL) {
        $total = 0;
        $List = $_SESSION["carrito" . $_SESSION["User.id"]];
    ?>


        <section class="contents" id="contents">

            <table class="tablero">
                <thead>
                    <tr>
                        <th>Img</th>
                        <th>Nombre</th>
                        <th>Descripción</th>
                        <th>Precio</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($List as $articulo) {

                        $total += $articulo->getPrecio();

                    ?>
                        <tr>
                            <td><img class="" id="pics" src="img/<?= $articulo->getImg() ?>" alt="Card image cap"></td>
                            <td><?= $articulo->getNombre() ?></td>
                            <td><?= $articulo->getDescripcion() ?></td>
                            <td><?= $articulo->getPrecio() ?></td>
                            <td>
                                <a href="?controller=compra&action=dontwant&prod=<?= $articulo->getIdarticulos() ?>"><i href="#"><svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 448 512" id="delete">
                                            <style>
                                                #delete {
                                                    fill: #cc0000
                                                }
                                            </style>
                                            <path d="M135.2 17.7L128 32H32C14.3 32 0 46.3 0 64S14.3 96 32 96H416c17.7 0 32-14.3 32-32s-14.3-32-32-32H320l-7.2-14.3C307.4 6.8 296.3 0 284.2 0H163.8c-12.1 0-23.2 6.8-28.6 17.7zM416 128H32L53.2 467c1.6 25.3 22.6 45 47.9 45H346.9c25.3 0 46.3-19.7 47.9-45L416 128z" />
                                        </svg></i>

                                    <path d="M410.3 231l11.3-11.3-33.9-33.9-62.1-62.1L291.7 89.8l-11.3 11.3-22.6 22.6L58.6 322.9c-10.4 10.4-18 23.3-22.2 37.4L1 480.7c-2.5 8.4-.2 17.5 6.1 23.7s15.3 8.5 23.7 6.1l120.3-35.4c14.1-4.2 27-11.8 37.4-22.2L387.7 253.7 410.3 231zM160 399.4l-9.1 22.7c-4 3.1-8.5 5.4-13.3 6.9L59.4 452l23-78.1c1.4-4.9 3.8-9.4 6.9-13.3l22.7-9.1v32c0 8.8 7.2 16 16 16h32zM362.7 18.7L348.3 33.2 325.7 55.8 314.3 67.1l33.9 33.9 62.1 62.1 33.9 33.9 11.3-11.3 22.6-22.6 14.5-14.5c25-25 25-65.5 0-90.5L453.3 18.7c-25-25-65.5-25-90.5 0zm-47.4 168l-144 144c-6.2 6.2-16.4 6.2-22.6 0s-6.2-16.4 0-22.6l144-144c6.2-6.2 16.4-6.2 22.6 0s6.2 16.4 0 22.6z" />
                                    </svg></i>
                                </a>

                            <?php } ?>

                </tbody>
            </table>
            <div id="totals">
                <table id="money">
                    <tr>
                        <td id="total">
                            Total:
                        </td>
                        <td id="total">
                            <?= $total ?>
                        </td>
                    </tr>
                    <tr>
                        <td id="iva">
                            IVA:
                        </td>
                        <td id="iva">
                            <?= $IVA = ($total / 100) * 14 ?>
                        </td>
                    </tr>
                    <tr>
                        <td>Precio Final: </td>
                        <td><?= $total + $IVA ?> </td>
                    </tr>
                </table>

            </div>
            <form action="?controller=compra&action=buyall" method="post">

                <input type="hidden" name="precio" value=<?= $total + $IVA ?> />

                <button type="submit" class="btn float-right float-bottom" id="btn-yes"><i class="far fa-credit-card"></i> Submit
                    Payment
                </button>
            </form>
        </section>
</div>

<?php
    } else {
?> <p> No hay ningun producto todavía <span><a href="?controller=main">Compra ahora</a></span></p>
<?php
    } ?>
</div>