<!DOCTYPE html>
<html lang="en">

<body>

    <header>
       <?php    
            include_once 'navbar.php';
        ?>
    </header>



    <main class="pt-6">
        <div class="container">
            <div class="row">
                <div class="col text-center">
                    <h1>LOGIN FORM</h1>
                </div>
            </div>
            <hr>

            <div class="row">
                <div class="col-md-4"> </div>
                <div class="col-md-4">
                    <!--Naked Form-->
                        <br>
                        <form class="login-form" method="post">
                            <?php if (isset($error)): ?>
                              <div class="error">
                                  <?php echo $error ?>
                              </div>
                            <?php endif; ?>
                            <div class="md-form">
                                <i class="fa fa-user prefix"></i>
                                <input type="text" id="form2" class="form-control" name="username">
                                <label for="form2">Username</label>
                            </div>
                            <div class="md-form">
                                <i class="fa fa-lock prefix"></i>
                                <input type="password" id="form4" class="form-control" name="password">
                                <label for="form4">Password</label>
                            </div>

                            <div class="text-center">
                                <button type="submit" name="kirim" class="btn btn-deep-purple">Login</button>
                            </div>
                        </form>
                    <!--Naked Form-->
                </div>
                <div class="col-md-4"> </div>
            </div>
        </div>
    </main>

    <!-- SCRIPTS -->
    <!-- JQuery -->
    <script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="js/tether.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="js/mdb.min.js"></script>
    
    <?php
        include "footer.php";
    ?>
    
</body>



</html>
