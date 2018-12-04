<?php
    echo '<!DOCTYPE html>
        <html lang="en">
            <head>
                <meta charset="utf-8">
                <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
                <meta http-equiv="X-UA-Compatible" content="IE=edge">

                <title>Welcome to LawSpace</title>

                <link rel="stylesheet" href="css/bootstrap.min.css">
                <link rel="stylesheet" href="css/index.css">
                <link rel="stylesheet" href="css/all.css">
            </head>
            <body>

                <!-- the navbar with the collapse feature -->
                <nav class="navbar navbar-fixed-top" id="header">
                  <div class="container-fluid">
                    <div class="navbar-header">
                      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="glyphicon glyphicon-th-large"></span>
                      </button>
                      <a class="navbar-brand" href="./index.php" id="navBrand">LawSpace</a>
                    </div>
                    <div class="collapse navbar-collapse" id="myNavbar">


                      <ul class="nav navbar-nav navbar-right">
                        <li class="dropdown"><a href="#" class="dropdown-toggle" id="menu" data-toggle="dropdown"><span class="glyphicon glyphicon-user"></span> Sign Up <span class="caret"></span></a>
                            <ul class="dropdown-menu" role="menu" aria-labelledby="menu">
                                <li><a role="menuitem" href="./client_sign_up.php"><span class="glyphicon glyphicon-pencil"></span> As A Client</a></li>
                                <li><a role="menuitem" href="./lawyer_sign_up.php"><span class="glyphicon glyphicon-certificate"></span> As A Lawyer</a></li>
                            </ul>
                        </li>
                        <li><a href="./login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a>
                        </li>
                      </ul>

                        <form class="navbar-form navbar-right">
                            <div class="form-group">
                                <input type="search" class="form-control" placeholder="Enter question">
                            </div>
                            <button type="submit" class="btn btn-default">Ask A Lawyer</button>
                        </form>
                    </div>
                  </div>
                </nav>';
?>