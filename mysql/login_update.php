<?php include "db.php";?>
<?php include "functions.php";?>
<?php updateTable(); ?>
<?php include "includes/header.php"?>

    <section class="container">
    <form action="login_update.php" method="post" style="display:flex; flex-direction: column;">
        <div class="col-xs-6">
            <h1 class="">Update</h1>
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
        <input class="btn btn-primary" type="submit" name="submit" value="UPDATE" style="width: 10rem;">
    </form>
    
    <?php include "includes/footer.php"?>


