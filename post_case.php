<?php
    include 'log_in_header.php';
?>

<div class="container-fluid" style="padding-top: 8%; padding-bottom: 2%;">
    <div class="container">
        <div class="row">
            <div class="col-xs">
                <form id="signUpFor" class="col-xs-12 text-center" name="post_case_handler.php">
                    <h2>Post Case</h2>
                    <hr />
                    <div class="form-group col-xs-6">
                        <label>Choose Category</label>
                        <select name="category" class="form-control" id="select">
                            <option>Civil Right</option>
                            <option>Domestic Violence</option>
                            <option>Real Estate</option>
                            <option>Family</option>
                            <option>Criminal Law</option>
                            <option>Others</option>
                        </select>
                    </div>
                    <div class="form-group col-xs-6">
                        <label>Full Name</label><br/>
                        <input type="text" name="name" class="form_control" style="border-radius: 25px; border: 2px solid green; min-width: 250px; height: 35px;">
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" name="description" placeholder="Please state your case" rows="8" style="border: 2px solid green"></textarea>
                    </div>
                    <button type="submit" class="btn btn-success btn-lg" id="button">Post Case</button>
                </form>
            </div>
        </div>
    </div>
</div>

<?php
    include 'footer.php';
?>