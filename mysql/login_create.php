<?php include "db.php";?>
<?php include "functions.php";?>
<?php createRows(); ?>

<?php include "includes/header.php"?>
    <section class="container">
        <form action="login_create.php" method="post">
        <div class="col-xs-6">
            <h1 class="text-center">center</h1>
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" name="username" class="form-control">
            </div>

            <div class="form-group">
                <label for="password">password</label>
                <input type="password" name="password" class="form-control">
            </div>
        </div>
        <input class="btn btn-primary" type="submit" name="submit" value="SUBMIT">
    </form>
    <?php include "includes/footer.php" ?>