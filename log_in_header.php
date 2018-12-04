<?php
    echo '<!DOCTYPE html>
        <html lang="en">
            <head>
                <meta charset="utf-8">
                <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
                <meta http-equiv="X-UA-Compatible" content="IE=edge">

                <title>LawSpace</title>

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
                        <li class="dropdown"><a class="btn btn-default dropdown-toggle" type="button" id="menu" data-toggle="dropdown"><span class="glyphicon glyphicon-user"></span> Profile <span class="caret"></span></a>
                            <ul class="dropdown-menu" role="menu" aria-labelledby="menu">
                                <li><a role="menuitem" href="#"><span class="glyphicon glyphicon-edit"></span> Edit Profile</a></li>
                                <li><a role="menuitem" href="#"><span class="glyphicon glyphicon-log-out"></span> Log Out</a></li>
                            </ul>
                        </li>
                      </ul>

                    </div>
                  </div>
                </nav>';
?>