<?php include "db.php";?>
<?php include "functions.php";?>
<?php deleteRows(); ?>

<?php include "includes/header.php"?>
    <section class="container">
    <form action="login_delete.php" method="post" style="display:flex; flex-direction: column;">
        <div class="col-xs-6">
            <h2 class="text-center">Delete</h2>
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" name="username" class="form-control" style="width: 30rem;">
            </div>

            <div class="form-group">
                <label for="password">password</label>
                <input type="password" name="password" class="form-control" style="width: 30rem;">
            </div><br>
            <div class="form-group">
                <select name="id" id="">
                    <?php
                      showallData();
                    ?>
                </select>
            </div>
        </div>
        <input class="btn btn-primary" type="submit" name="submit" value="DELETE" style="width: 10rem;">
    </form>
    <?php include "includes/footer.php"?>




