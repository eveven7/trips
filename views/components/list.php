<div class="container">
    <table class="table table-striped table-hove">
        <thead>
            <tr>
                <th scope="col">Month</th>
                <th scope="col">Max people allowed</th>
                <th scope="col">Distance</th>
                <th scope="col">With animals</th>
                <th>Show</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($trips as $trip) { ?>

            <tr>
                <a href="<?=$_OUTER_PATH . '/views/trip/show.php?' . "id=$trip->id" . '&show='?>" class="main">
                    <td><?=$trip->month?></td>
                    <td><?=$trip->maxPeople?></td>
                    <td><?=$trip->distance?></td>
                    <td><?=($trip->isAnimal)?"ALLOWED":"NOT ALLOWED"?></td>
                </a>
                <td>

                    <form action="<?=$_OUTER_PATH.'/views/trip/show.php'?>" method="get">
                        <input type="hidden" name="id" value="<?=$trip->id?>">
                        <button type="submit" name="show" class="btn btn-primary">Show</button>
                    </form>

                </td>
                <td>
                    <form action="<?=$_OUTER_PATH.'/views/trip/edit.php'?>" method="get">
                        <input type="hidden" name="id" value="<?=$trip->id?>">
                        <button type="submit" name="edit" class="btn btn-success">Edit</button>
                    </form>
                </td>
                <td>
                    <form action="" method="post">
                        <input type="hidden" name="id" value="<?=$trip->id?>">
                        <button type="submit" name="destroy" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
            <?php }?>
        </tbody>
    </table>
</div>