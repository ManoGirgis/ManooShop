<?php
if (isset($_SESSION["User"])) {

    $user = $_SESSION['User'];
    //var_dump($user);
?>

    <div class="card card-primary card-outline" id="body">
        <div class="card-body box-profile">
            <div class="text-center">
            </div>
            <img class="profile-user-img img-fluid img-circle" src="<?= $user->getUserpic() ?>" alt="User profile picture" id="profile">

            <h3 class="profile-username text-center"><?= $user->getFirstname() . ' ' . $user->getLastname() ?></h3>
            <p class="text-muted text-center"><?= $user->getUsername() ?></p>
            <ul class="list-group list-group-unbordered mb-3" >
                <li class="list-group-item" id="body">
                    <b>Birthday(yyyy/dd/mm)</b> <a class="float-right"><?= $user->getBirthdate() ?></a>
                </li>
                <div clas="card-body">
                    <a class="btn btn-app bg-danger" href="?controller=user&action=logout">
                        <svg xmlns="http://www.w3.org/2000/svg" height="16" width="16" viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                            <path d="M377.9 105.9L500.7 228.7c7.2 7.2 11.3 17.1 11.3 27.3s-4.1 20.1-11.3 27.3L377.9 406.1c-6.4 6.4-15 9.9-24 9.9c-18.7 0-33.9-15.2-33.9-33.9l0-62.1-128 0c-17.7 0-32-14.3-32-32l0-64c0-17.7 14.3-32 32-32l128 0 0-62.1c0-18.7 15.2-33.9 33.9-33.9c9 0 17.6 3.6 24 9.9zM160 96L96 96c-17.7 0-32 14.3-32 32l0 256c0 17.7 14.3 32 32 32l64 0c17.7 0 32 14.3 32 32s-14.3 32-32 32l-64 0c-53 0-96-43-96-96L0 128C0 75 43 32 96 32l64 0c17.7 0 32 14.3 32 32s-14.3 32-32 32z" />
                        </svg>
                        <br> Logout
                    </a>
                </div>

        </div>
    <?php
} else {
    include_once 'View/interface/login.php';
}
    ?>