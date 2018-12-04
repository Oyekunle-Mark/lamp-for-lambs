<?php
    include 'default_header.php';
?>

        <div class="container-fluid">
            <div class="container">
                <div class="row text-center">
                    <form id="signUpForm" action="lawyer_handler.php" method="post">
                        <h2>Sign Up As A Lawyer</h2>
                        <hr />
                        <div class="form-group col-xs-6">
                            <label class="sr-only">First Name</label>
                            <input type="text" name="fname" class="form-control" placeholder="First Name" required>
                        </div>
                        <div class="form-group col-xs-6">
                            <label class="sr-only">Last Name</label>
                            <input type="text" name="lname" class="form-control" placeholder="Last Name" required>
                        </div>
                        <div class="form-group col-xs-6">
                            <label class="sr-only">Email</label>
                            <input type="email" name="email" class="form-control" placeholder="Email" required>
                        </div>
                        <div class="form-group col-xs-6">
                            <label class="sr-only">Phone Number</label>
                            <input type="tel" name="tel" class="form-control" placeholder="Phone Number" required>
                        </div>
                        <div class="form-group col-xs-6 text-center">
                            <label class="col-xs-3">Gender:</label>
                            <div class="col-xs-9">
                                <select id="select" name="sex" class="form-control">
                                    <option value="M">Male</option>
                                    <option value="F">Female</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group col-xs-6 text-center">
                            <label class="col-xs-2">DOB:</label>
                            <div class="col-xs-10">
                                <input type="date" class="form-control" placeholder="Date of Birth" name="dob" required>
                            </div>
                        </div>
                        <div class="form-group col-xs-12">
                            <label class="sr-only">Address</label>
                            <input type="text" name="address" class="form-control" placeholder="Address" required>
                        </div>
                        <div class="form-group col-xs-6 text-center">
                            <label class="col-xs-4">Practice Area:</label>
                            <div class="col-xs-8">
                                <select id="select" name="p_area" class="form-control">
                                    <option>Civil Right</option>
                                    <option>Domestic Violence</option>
                                    <option>Real Estate</option>
                                    <option>Family</option>
                                    <option>Criminal Law</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group col-xs-6">
                            <label class="sr-only">Nigerian Bar ID</label>
                            <input type="text" name="nba_id" class="form-control" placeholder="Nigerain Bar ID" required>
                        </div>
<!--
                        <div class="form-group col-xs-6">
                            <label class="col-xs-6">Select Location</label>
                            <select class="form-control ">
                                <option class="col-xs-6">Ikeja</option>
                                <option>Yaba</option>
                                <option>Alimosho</option>
                                <option>Magodo</option>
                                <option>Ikorodu</option>
                            </select>
                        </div>
-->
                        <div class="form-group col-xs-8 col-xs-offset-2">
                            <label class="sr-only">Username</label>
                            <input type="text" name="username" class="form-control" placeholder="Username" required>
                        </div>
                        <div class="form-group col-xs-6">
                            <label class="sr-only">Password</label>
                            <input type="password" name="password" class="form-control" placeholder="Password" required>
                        </div>
                        <div class="form-group col-xs-6">
                            <label class="sr-only">Confirm Password</label>
                            <input type="password" class="form-control" placeholder="Confirm Password" required>
                        </div>
                        <div class="col-xs-12">
                            <button type="submit" class="btn btn-success btn-lg" id="button">Sign Up</button>
                        
                        </div>
                    </form>
                </div>
            </div>
        </div>

<?php
    include 'footer.php';
?>