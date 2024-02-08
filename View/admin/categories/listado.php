<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Dashboard</h1>
                </div>
                <div class="col-sm-6">

                    <a href="?controller=Dashboard&action=addcategory" class="btn btn-app bg-primary" style="width: 5rem; height: 4rem">
                        <i class="fas fa-plus"></i> Add</a>


                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="?controller=main">Home</a></li>
                        <li class="breadcrumb-item active">Dashboard v1</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <section class="content">

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Nombre Categoria</th>
                    <th>ID</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($listacategory as $category) {
                ?>
                    <tr>
                        <td><?= $category->getCatname() ?></td>
                        <td><?= $category->getIdcategory() ?></td>
                        <td>
                            <a href="?controller=Dashboard&action=editcategory&idcategorys=<?= $category->getIdcategory() ?>" class="btn btn-app bg-secondary" style="width: 5rem; height: 4rem">
                                <i class="fas fa-pen"></i> edit</a>
                            <a href="?controller=Dashboard&action=deletecategory&idcategorys=<?= $category->getIdcategory() ?>" class="btn btn-app bg-danger" style="width: 5rem; height: 4rem">
                                <i class="fas fa-minus"></i> delete</a>
                        </td>
                    </tr>

                <?php } ?>

            </tbody>
        </table>
    </section>
</div>