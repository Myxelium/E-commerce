

<?php 
   <?php
    require('src/config.php');
    require('src/dbconnect.php');
    
    $msg             = '';

     // Fetch user by id
     $user = fetchUsersById($_GET['id']);

     include('layout/header.php')
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Uppdatera användare</title>
     
      
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    </head>
    <body>
        <div id="content">
            <form method="POST" action="#" id="updateform">
                    <fieldset>
                        <legend>UPPDATERA användaruppgifter</legend>
                            
                        
                        <div id="message-field"><?=$msg?></div>
                       
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="input1">Förnamn:</label> <br>
                                <input type="text" class="form-control" name="firstname" value="<?=htmlentities(ucfirst($user['firstname']))?>">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="input1">Efternamn:</label> <br>
                                <input type="text" class="form-control" name="lastname" value="<?=htmlentities(ucfirst($user['lastname']))?>">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="input1">Mail-adress:</label> <br>
                                <input type="text" class="form-control" name="mail" value="<?=htmlentities($user['mail'])?>">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="input1">Mobilnummer:</label> <br>
                                <input type="text" class="form-control" name="mobile" value="<?=htmlentities($user['mobile'])?>">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="input1">Adress:</label> <br>
                                <input type="text" class="form-control" name="street" value="<?=htmlentities(ucfirst($user['street']))?>">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="input1">Postnummer:</label> <br>
                                <input type="text" class="form-control" name="postalcode" value="<?=htmlentities($user['postalcode'])?>">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="input1">Stad:</label> <br>
                                <input type="text" class="form-control" name="city" value="<?=htmlentities(ucfirst($user['city']))?>">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="input1">Land:</label> <br>
                                <input type="text" class="form-control" name="country" value="<?=htmlentities(ucfirst($user['country']))?>">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="input2">Lösenord (Fler än 6 tecken och fortf. ej Jordan :):</label> <br>
                                <input type="password" class="form-control" name="password">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="input2">Bekräfta Lösenordet:</label> <br>
                                <input type="password" class="form-control" name="confirmPass">
                            </div>
                        </div>
                        <p>
                            <input type="submit" name="register" value="Update" class="update-user-btn">
                        </p>
                    </fieldset>
                </form>
        </div>
        <?php include('layout/footer.php'); ?>
        