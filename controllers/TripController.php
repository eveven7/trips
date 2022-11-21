<?php
include $_INNER_PATH."/models/trip.php";
include $_INNER_PATH."/helperClasses/Validator.php";



class TripController{

    public static function index()
    {
        // print_r("something");
        // die;
        $trip = Trip::all();
        return $trip;
    }

    public static function store()
    {   
        // if(Validator::validate()){
        //     header("Location: "."http://".$_SERVER['SERVER_NAME']."/namai_crud"."/views/house/add.php");
        //     die;
        // }


        // print_r($_POST['hghgv']);
        // die;
        Trip::create();
    }

    public static function show()
    {

        // print_r("something");
        // die;
        // echo "something";
        // die;
        // echo($id);
        $trip = Trip::find($_GET['id']);
		return $trip;
    }

    public static function update()
    {
        // if(Validator::validate()){
        //     header("Location: "."http://".$_SERVER['SERVER_NAME']."/trips_db"."/views/trip/edit.php?edit=&id=".$_GET['id']);
        //     die;
        // }
        // echo"something";
        // die;
        $trip = new Trip();
       
        $trip->id = $_POST['id'];
        $trip->month = $_POST['month'];
        $trip->maxPeople = $_POST['maxPeople'];
        $trip->distance = $_POST['distance'];

        $trip->isAnimal = $_POST['isAnimal'];
        $trip->update();
         print_r($trip);
        die;
    // 
    }

    public static function destroy()
    {
        Trip::destroy($_POST['id']);
    }

    public static function filter()
    {
        return Trip::filter();
        
    }
    public static function search()
    {
        return Trip::search();
    }
    

    public static function getfilterParams(){
        return Trip::getfilterParams();
     }







}
?>