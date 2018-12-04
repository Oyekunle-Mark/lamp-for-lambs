<?php
    include 'default_header.php';
?>

        <div class="container-fluid">
            <div class="container">
                <div class="row text-center">
                    <form id="signUpForm" action="login_handler.php" method="post">
                        <h2>Login</h2>
                        <hr />
                        <div class="form-group col-xs-6 col-xs-offset-3">
                            <label class="sr-only">Username</label>
                            <input type="text" name="username" class="form-control" placeholder="Username" required>
                        </div>
                        <div class="form-group col-xs-6 col-xs-offset-3">
                            <label class="sr-only">Password</label>
                            <input type="password" name="password" class="form-control" placeholder="Password" required>
                        </div>
                        <div class="col-xs-12">
                            <button type="submit" class="btn btn-success btn-lg" id="button"><span class="glyphicon glyphicon-log-in"></span> Enter</button>
                        </div>
                    </form>    
                </div>
            </div>    
        </div>

<?php
    include 'footer_fixed.php';
?>