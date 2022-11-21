<?php
include $_INNER_PATH."/models/DB.php";


class Trip{
    public $id;
    public $month;
    public $max_people_allowed;
    public $distance;
    public $with_animals;

        public function __construct($id = null, $month = null, $max_people_allowed = null, $distance = null, $with_animals = null){
        
        $this->id = $id;
         $this->month = $month;
        $this->maxPeople = $max_people_allowed;
        $this->distance = $distance;

        $this->isAnimal= $with_animals;
   
        }

        public static function all(){
            $trips = [];
            $db = new DB();
            $query = "SELECT * FROM `trip`";
            $result = $db->conn->query($query);

                while($row = $result->fetch_assoc()){
                    $trips[] = new Trip ($row['id'], $row['month'], $row['max_people_allowed'], $row['distance'], $row['with_animals']);

                }
            $db->conn->close();
            		// print_r($trips);die;

            return $trips;
        }

        public static function create(){
            $db = new DB();
            // print_r($_POST);die;
            $stmt = $db->conn->prepare("INSERT INTO `trip`( `month`, `max_people_allowed`, `distance`, `with_animals`) VALUES (?,?,?,?)");
            $stmt->bind_param("siii", $_POST['month'], $_POST['maxPeople'], $_POST['distance'], $_POST['isAnimal']);
           $stmt->execute();
            // if(!$stmt->execute()) {
            //     print_r( $stmt->error_list);
            // }
            //    die;

            $stmt->execute();

            $stmt->close();
            $db->conn->close();
            }

    public static function find($id)
    {
            $trip = new Trip();
            $db = new DB();
            $query = "SELECT * FROM `trip` where `id`=" . $id;
            $result = $db->conn->query($query);

                while($row = $result->fetch_assoc()){
                    $trip = new Trip ($row['id'], $row['month'], $row['max_people_allowed'], $row['distance'], $row['with_animals']);
                }
            $db->conn->close();
            //   if(!$stmt->execute()) {
            //     print_r( $stmt->error_list);
            // }
            //    die;
                        		// print_r($trip);die;

            return $trip;
        }

    public function update(){       
            $db = new DB();
                        // print_r($_POST);die;

                        $stmt = $db->conn->prepare("UPDATE `trip` SET `month`= ? ,`max_people_allowed`= ? ,`distance`= ? , `with_animals`= ?  WHERE `id` = ?");
                        $stmt->bind_param("siiii", $_POST['month'], $_POST['maxPeople'], $_POST['distance'], $_POST['isAnimal'],  $_POST['id']);
            $stmt->execute();
            $stmt->close();

            //   if(!$stmt->execute()) {
            //     print_r( $stmt->error_list);
            // }
            //    die;

            // print_r($_POST);die;
            $db->conn->close();
          
    }

    public static function destroy($id){
            $db = new DB();
            $stmt = $db->conn->prepare("DELETE FROM `trip` WHERE `id` = ?");
            $stmt->bind_param("i", $_POST['id']);
            $stmt->execute();
    
            $stmt->close();
            $db->conn->close(); 
    }

    public static function getfilterParams(){
            $params = [];
            $db = new DB();
            $query = "SELECT DISTINCT `month` FROM `trip`";
            $result = $db->conn->query($query);

                while($row = $result->fetch_assoc()){
                    $params [] = $row['month'];
                }
            $db->conn->close();
            return $params;
    }

    public static function filter(){
            $trips = [];
            $db = new DB();
            $query = "SELECT * FROM `trip`";
            $first = true;
            if ($_GET['filter'] != "") {
                $first = false;
                $query .= "WHERE `month` = '" . $_GET['filter'] . "' ";
            }
            

            if ($_GET['from'] != "") {
            $query .= (($first)? "WHERE" : "AND") . "`distance` >= " . $_GET['from'] . " ";
                $first = false;
            }


            if ($_GET['to'] != "") {
                $query .= (($first)? "WHERE" : "AND") . "`distance` <= " . $_GET['to'] . " ";
                $first = false;
         }


        switch ($_GET['sort']){
            case '1':
                $query .= "ORDER by `distance`";
                break;
            case '2':
                $query .= "ORDER by `distance` DESC";
                break;
            case '3':
                $query .= "ORDER by `month`";
                break;
            case '4':
                $query .= "ORDER by `month` DESC";
                break;
        }



            // echo $query;
            // die;
            $result = $db->conn->query($query);

                while($row = $result->fetch_assoc()){
                    $trips[] = new Trip ($row['id'], $row['month'], $row['max_people_allowed'], $row['distance'], $row['with_animals']);

                }
            $db->conn->close();
            return $trips;
    }

    public static function search(){
        $trips = [];
        $db = new DB();
        $query = "SELECT * FROM `trip` where `month` like \"%" . $_GET['search'] . "%\"";
        $result = $db->conn->query($query);

            while($row = $result->fetch_assoc()){
                $trips[] = new Trip ($row['id'], $row['month'], $row['max_people_allowed'], $row['distance'], $row['with_animals']);

            }
        $db->conn->close();
        return $trips;
    }

}

?>