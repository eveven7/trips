<?php

include $_INNER_PATH."/controllers/TripController.php";

$edit = false;
if($_SERVER['REQUEST_METHOD'] == "POST"){
    
    if(isset($_POST['save'])){
         
       TripController::store();
        // print_r($_POST['save']);
        //     die;
        header("Location: ./index.php");
        die;
    }      

    if(isset($_POST['edit'])){
        // echo"something";
        // die;
    
        $trip = TripController::show();
        $trips = TripController::index();
        // $edit = true;
    }  

    if(isset($_POST['update'])){
        //  print_r($trips);
        //     die;
        //  echo"something";
        //     die;
        TripController::update();
        header("Location: ./index.php");
        die;
    }

    if(isset($_POST['destroy'])){
        TripController::destroy();
        header("Location: ./index.php");
        die;
    }

}

    if($_SERVER['REQUEST_METHOD'] == "GET"){
        
        if(count($_GET) == 0 || isset($_GET['cards'])){
            $trips = TripController::index(); 
        }
        
        if(isset($_GET['show']) ){
    
          
            $trip = TripController::show($_GET['id']); 
            //  print_r($trip);
            // die;
            //      print_r("something");
            // die;
            // $trips = TripController::index();
            //  echo "something";
            // die;
    
    
        }
        if (isset($_GET['search'])) {
            $trips = TripController::search();
    
    }
        
        if(isset($_GET['edit'])){
            //  echo"something";
            // die;
            $trip = TripController::show($_GET['id']);
            $trips = TripController::index();
    
        }  
        if (isset($_GET['filter']) ) {
            $trips = TripController::filter();
            
        }
    
        
    }
    $params = TripController::getfilterParams();
    ?>