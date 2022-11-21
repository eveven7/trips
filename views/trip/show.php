<?php 
include "../components/head.php"; 
include $_INNER_PATH ."/routes.php"; 
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
        <?php include $_INNER_PATH."./views/components/filter.php";?>
        <div class="row">
            <div class="col-4 left"></div>
            <div class="col-4 big">
                <h2>Trip information </h2>
                <form action="" class="form-group">
                    <div class="form-group">
                        <h5><label for="f1">Month</label></h5>
                        <p2><?=$trip->month?> </p2>
                    </div>
                    <div class="form-group">
                        <h5><label for="f2">Max people allowed</label></h5>
                        <p2><?=$trip->maxPeople?></p2>
                    </div>
                    <div class="form-group">
                        <h5> <label for="f3">Distance</label></h5>
                        <p2><?=$trip->distance?></p2>
                    </div>
                    <div class="form-group">
                        <h5><label for="f4">With animals</label></h5>
                        <td><?=($trip->isAnimal)?"ALLOWED":"NOT ALLOWEDN"?></td>
                    </div>
                    <form action="<?=$_OUTER_PATH.'/views/trip/edit.php'?>" method="get" class="button">
                        <input type="hidden" class="btn" name="id" value=" <?=$trip->id?>">
                        <button type="submit" name="edit" class="btn btn-primary mt-3 mb-3">EDIT</button>
            </div>
            <div class="col-4 right"></div>
        </div>
        </form>
    </div>
</body>

/html>
<?php
    $_SESSION['POST'] = [];
?>