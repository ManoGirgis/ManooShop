<div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
    <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasExampleLabel"><b>Filter by</b></h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
<form action="?controller=main&action=filter" method="post">
    <table>
        <tr>
            <td>Category: </td>
        </tr>
        <?php foreach ($listacategory as $cat) { ?>
            <tr>
                <td>
                    <input type="radio" value="<?= $cat->getIdcategory() ?>" name ="cats">
                </td>
                <td>
                    <?= $cat->getCatname()?>
                </td>
            </tr>
        <?php } ?>
      <tr><td><button type="submit">Find</button> </td></tr> 
    </table>
</form>
       
