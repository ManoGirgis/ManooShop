<?php 
if (isset($_SESSION["User"])) {

 $user = $_SESSION['User'];
//var_dump($user);
?>

<div class="card card-primary card-outline">
<div class="card-body box-profile">
<div class="text-center">
</div>
<img class="profile-user-img img-fluid img-circle" src="<?= $user->getUserpic() ?>" alt="User profile picture" id="profile">

<h3 class="profile-username text-center"><?= $user->getFirstname() . ' ' . $user->getLastname()?></h3>
<p class="text-muted text-center"><?= $user->getUsername() ?></p>
<ul class="list-group list-group-unbordered mb-3">
<li class="list-group-item">
<b>Birthday(yyyy/dd/mm)</b> <a class="float-right"><?= $user->getBirthdate() ?></a>
</li>
<a href="?controller=user&action=logout">
<button type="button" class="btn btn-block btn-danger btn-lg">logout</button>
</a>
</div>
<?php
}
else {include_once 'View/interface/login.php';}
?>