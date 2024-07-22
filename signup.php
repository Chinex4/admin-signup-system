<?php
include_once "header.php";
?>
<div class="container my-5">
    <div class="row">
        <div class="col">
            <div class="col-lg-6 mx-auto">
                <h1 class="display-5 fs-1 text-center mb-5">Sign up</h1>
                <?php
                if (isset($_GET["error"])) {
                    if ($_GET["error"] === "empty_input") {
                        echo '<div style="width: 300px;" class="alert alert-danger alert-dismissible fade show" role="alert">
                        <strong>Oops!</strong> Please fill in all text fields. Thanks!
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>';
                    } else if ($_GET["error"] === "invalid_email") {
                        echo '<div style="width: 300px;" class="alert alert-danger alert-dismissible fade show" role="alert">
                        <strong>Oops!</strong> Please provide a valid email. Thanks.
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>';
                    } else if ($_GET["error"] === "invalid_username") {
                        echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <strong>Oops!</strong> Username is invalid, must be an alpha-numeric text without space. Thanks.
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>';
                    } else if ($_GET["error"] === "passwords_dont_match") {
                        echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <strong>Oops!</strong> Passwords do not match.
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>';
                    } else if ($_GET["error"] === "user_already_exits") {
                        echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <strong>Oops!</strong> Username or Email has already been taken.
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>';
                    } else if ($_GET["error"] === "user_already_exits") {
                        echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <strong>Oops!</strong> Username or Email has already been taken.
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>';
                    } else if ($_GET["error"] === "stmt_failed") {
                        echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <strong>Oops!</strong> Technical issues. Please Contact Support 
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>';
                    }
                }
                ?>


                <form method="post" action="includes/signup.inc.php">
                    <div class="mb-3">
                        <label for="fullname"
                            class="form-label">Full Name</label>
                        <input name="fullname"
                            type="text"
                            class="form-control"
                            placeholder="e.g John Doe">
                    </div>
                    <div class="mb-3">
                        <label for="email"
                            class="form-label">Email Address</label>
                        <input name="email"
                            type="text"
                            class="form-control"
                            placeholder="e.g jdoe@gmail.com">
                    </div>
                    <div class="mb-3">
                        <label for="username"
                            class="form-label">Username</label>
                        <input name="username"
                            type="text"
                            class="form-control"
                            placeholder="e.g john4Life">
                    </div>
                    <div class="mb-3">
                        <label for="pwd"
                            class="form-label">Password</label>
                        <input name="pwd"
                            type="password"
                            class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="cpwd"
                            class="form-label">Confirm Password</label>
                        <input name="cpwd"
                            type="password"
                            class="form-control">
                    </div>
                    <div class="mb-3 form-check">
                        <input type="hidden"
                            class="form-check-input"
                            name="role"
                            value="user"
                            id="role">
                    </div>

                    <button type="submit"
                        name="signup"
                        class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>




<?php
include_once "footer.php";
?>