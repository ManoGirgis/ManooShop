<div class="content-wrapper" id="body">
    <?php 
if(!isset($_SESSION['User']))
    include_once 'View/interface/login.php';
else {
    include_once 'View/interface/showusr.php';
}
?>
</div>