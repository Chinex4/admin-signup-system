<?php
include_once "header.php";
?>

<div class="bg-dark text-secondary px-4 py-5 text-center">
    <div class="py-5">

        <h1 class="display-5 fw-bold text-white">
            <?php
            echo isset($_SESSION["id"]) ? "Welcome " . $_SESSION["username"] : "Welcome to DSU PORTAL";
            ?>
        </h1>
        <div class="col-lg-6 mx-auto">
            <p class="fs-5 mb-4">Quickly design and customize responsive mobile-first sites with Bootstrap, the world’s
                most popular front-end open source toolkit, featuring Sass variables and mixins, responsive grid system,
                extensive prebuilt components, and powerful JavaScript plugins.</p>
            <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
                <?php
                if(!isset($_SESSION["id"])) {
                ?>
                <a href="login.php"
                    class="btn btn-outline-info btn-lg px-4 me-sm-3 fw-bold">Log in</a>
                <a href="signup.php"
                    class="btn btn-outline-light btn-lg px-4">Sign up</a>
                <?php
                } else { echo "Please visit your profile and update it!";}
                ?>
            </div>
        </div>
    </div>
</div>

<?php
include_once "footer.php";
?>