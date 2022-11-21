<?php 
$_INNER_PATH = $_SERVER['DOCUMENT_ROOT']."/trips_db";
$_OUTER_PATH = "http://".$_SERVER['SERVER_NAME']."/trips_db";
include $_INNER_PATH ."/routes.php"; 

include "../components/head.php"; 
$old = false;
if(isset($_SESSION['POST'])){
    if(count($_SESSION['POST']) != 0){
        $old = true;
    }
}
?>
<link rel="stylesheet" href="<?= $_OUTER_PATH ."./css/style.css"?>">
<body>
    <div class="container">
        <div class="row">
            <div class="col-4 left"></div>
            <div class="col-4 big">

                <h2>Trip update </h2>

                <form action="" method="post" class="form-group" name="update">

                    <div class="form-group">
                        <label for="f1">Month:</label>
                        <textarea class="form-control" placeholder="month" name="month" rows="3"
                            id="f4">  <?=($old)? $_SESSION['POST']['month'] : $trip->month?> </textarea>
                    </div>
                    <div class="form-group">
                        <label for="f3">With animals</label>

                        <select class="form-select" name="isAnimal">

                            <option value="1">Allowed</option>
                            <option value="0">Not allowed</option>

                        </select>
                    </div>
                    <div class="form-group">
                        <label for="f2">Max people allowed</label>
                        <input type="number" name="maxPeople" id="f2" class="form-control"
                            value="<?=($old) ? $_SESSION['POST']['maxPeople'] : $trip->maxPeople?>" placeholder="eg.1">
                    </div>

                    <div class="form-group">
                        <label for="f2">Distance</label>
                        <input type="number" name="distance" id="f2" class="form-control"
                            value="<?=($old) ? $_SESSION['POST']['distance'] : $trip->distance?>" placeholder="eg. 50">
                    </div>
                    <button type="submit" name="update" class="btn btn-success mt-3 mb-3">Save</button>
            </div>
            <div class="col-4 right"></div>
        </div>
        </form>

    </div>
</body>

</html>




<?php
    $_SESSION['POST'] = [];
?>