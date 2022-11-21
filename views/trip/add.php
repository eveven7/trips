<?php 
include "../components/head.php"; 
include $_INNER_PATH ."/routes.php"; 
// $old = false;
// if(isset($_SESSION['POST'])){
//     if(count($_SESSION['POST']) != 0){
//         $old = true;
//     }
// }
?>
<link rel="stylesheet" href="<?= $_OUTER_PATH ."./css/style.css"?>">

<body>

    <div class="container">
        <div class="row">
            <div class="col-4 left"></div>
            <div class="col-4 big">
                <h2>Add new trip </h2>
                <form action="" method="post">
                    <div class="form-group">
                        <label for="f1">Month</label>
                        <textarea class="form-control" type="text" name="month" placeholder="eg. June,July, December "
                            rows="3" id="f4"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="f2">Max People Allowed</label>
                        <input type="number" min="1" name="maxPeople" id="f2" class="form-control" placeholder="eg.80">
                    </div>
                    <label class="">Pets</label>
                    <div>
                        <select class="form-select" name="isAnimal">
                            <option disabled selected value></option>
                            <option value="0">Pets allowed</option>
                            <option value="1">Pets not allowed</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="f4">Distance</label>
                        <input type="number" min="1" name="distance" id="f2" class="form-control" placeholder="eg. 50">
                    </div>
                    <button type="submit" name="save" class="btn btn-primary mt-3 mb-3">SAVE</button>
            </div>
            <div class="col-4 right"></div>
        </div>
        </form>
        <?php
    $_SESSION['POST'] = [];
?>