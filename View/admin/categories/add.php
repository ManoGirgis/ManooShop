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

    <section class="content">

        <form action="?controller=category&action=add" method="post">
            <table>
                <tr>
                    <th> Nombre del category:</th>
                    <th><input type="text" name="catname" placeholder="Nombre" required /></th>
                </tr>
               
                <tr><td><button type="submit">Guardar</button></td></tr>
            </table>
        </form>
    </section>
</div>