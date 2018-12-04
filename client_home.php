<?php
    include 'log_in_header.php';
?>

        <div class="container-fluid">
            <div class="container">
                <div class="row">
                    <div class="col-xs">
                        <div class="searchForm">
                            <form action="find_lawyer.php" method="post" class="col-xs-12 text-center">
                                <div class="form-group">
                                    <label>Choose Category</label>
                                    <select name="category" class="form-control" id="select">
                                        <option>Civil Right</option>
                                        <option>Domestic Violence</option>
                                        <option>Real Estate</option>
                                        <option>Family</option>
                                        <option>Criminal Law</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Choose Preferred Location</label>
                                    <select name="location" class="form-control" id="select">
                                        <option>Ikeja</option>
                                        <option>Yaba</option>
                                        <option>Alimosho</option>
                                        <option>Magodo</option>
                                        <option>Ikorodu</option>
                                    </select>
                                </div>
                                <button type="submit" class="btn btn-success btn-lg" id="button">Find My Lawyer</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="row text-center">
                    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                        <a href="#">
                            <figure>
                            <img src="icons/upload-button.svg" class="img-responsive" id="userIcons">
                            <figcaption>Post Cases</figcaption>
                            </figure>
                        </a>
                    </div>
                    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                        <a href="#">
                            <figure>
                            <img src="icons/mail.svg" class="img-responsive" id="userIcons">
                            <figcaption>Review Responses</figcaption>
                            </figure>
                        </a>
                    </div>
                    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                        <a href="#">
                            <figure>
                            <img src="icons/speed.svg" class="img-responsive" id="userIcons">
                            <figcaption>Ratings</figcaption>
                            </figure>
                        </a>
                    </div>
                </div>
            </div>
        </div>

<?php
    include 'footer.php';
?>