<div class="page-header">
    <div class="container">
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="page-caption">
                    <h1 class="page-title"> Trips </h1>
                </div>
            </div>
        </div>
    </div>
</div>





<div class="card-section">
    <div class="container">
        <div class="card-block bg-white mb30">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <!-- section-title -->
                    <div class="section-title mb-0">
                        <h2></h2>
                        <p1>Snow-dusted mountains and coral reefs, sweeping savannas and pristine national parks: get
                            immersed in the natural world on our trips.. </p1>
                    </div>
                    <!-- /.section-title -->
                </div>
            </div>
        </div>

        <?php include $_INNER_PATH."./views/components/filter.php";?>
        <!-- Form cards -->


        <?php if(isset($_GET['cards'])){ ?>
        <a href="<?= $_OUTER_PATH.'/views/index.php' ?>">
            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" id='svg'
                class="bi bi-list" viewBox="0 0 16 16">
                <path fill-rule="evenodd"
                    d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z" />
            </svg>

            <?php include "$_INNER_PATH/views/components/cards.php";?>


        </a>



        <style>
        svg {
            margin-bottom: 20px;
        }
        </style>
        <?php }else{ ?>


        <a href="<?= $_OUTER_PATH.'/views/index.php?cards' ?>">
            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" id='svg'
                class="bi bi-grid" viewBox="0 0 16 16">
                <path
                    d="M1 2.5A1.5 1.5 0 0 1 2.5 1h3A1.5 1.5 0 0 1 7 2.5v3A1.5 1.5 0 0 1 5.5 7h-3A1.5 1.5 0 0 1 1 5.5v-3zM2.5 2a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3zm6.5.5A1.5 1.5 0 0 1 10.5 1h3A1.5 1.5 0 0 1 15 2.5v3A1.5 1.5 0 0 1 13.5 7h-3A1.5 1.5 0 0 1 9 5.5v-3zm1.5-.5a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3zM1 10.5A1.5 1.5 0 0 1 2.5 9h3A1.5 1.5 0 0 1 7 10.5v3A1.5 1.5 0 0 1 5.5 15h-3A1.5 1.5 0 0 1 1 13.5v-3zm1.5-.5a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3zm6.5.5A1.5 1.5 0 0 1 10.5 9h3a1.5 1.5 0 0 1 1.5 1.5v3a1.5 1.5 0 0 1-1.5 1.5h-3A1.5 1.5 0 0 1 9 13.5v-3zm1.5-.5a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3z" />
            </svg>


            <?php include "$_INNER_PATH/views/components/list.php";?>
        </a>


        <?php } ?>