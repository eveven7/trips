<?php foreach ($trips as $trip) {?>
<div class=" container grid mb-2 ">
    <div class="card">
        <div class="slide slide1 mb-3">
            <div class="text">
                <div class="blue center">
                    <i class="" aria-hidden="true">
                        <a href="<?=$_OUTER_PATH . '/views/trip/show.php?' . "id=$trip->id" . '&show='?>" class="main">

                            <h3><?=$trip->month?></h3>
                            <p> Maximum number of people: <?=$trip->maxPeople?></p2>
                                <p id="">
                                    <?php
                                    if ($trip->isAnimal) {
                                        echo "Pets allowed";
                                    } else {
                                        echo "Pets not allowed";
                                    }
                                        ?>
                                </p>
                                <p>Distance: <?=$trip->distance?> km</p>
                        </a>
                    </i>
                </div>
            </div>
        </div>



        <div class="slide slide2">
            <div class="content">
                <form action="<?=$_OUTER_PATH . '/views/trip/edit.php'?>" method="get">
                    <input type="hidden" name="id" value=" <?=$trip->id?>">
                    <button id="edit-btn" type="submit" name="edit" class="btn btn-success">edit</button>
                </form>
                <form action="" method="post">
                    <input type="hidden" name="id" value=" <?=$trip->id?>">
                    <button type="submit" name="destroy" class="btn btn-danger">delete</button>
                </form>
            </div>
        </div>
    </div>
</div>

<?php }?>