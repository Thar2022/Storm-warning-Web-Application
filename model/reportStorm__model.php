<?php
class ReportStorm{   

    public static function getAllId( ){
        $arrayId = [];
        require("connect_db.php");
        $sql  = "select reportStormID from reportStorm";
        $result = $conn->query($sql);
      
        echo $result->num_rows;

        while($my_row = $result->fetch_assoc())
        {  
           $arrayId[] =  $my_row["reportStormID"];
        }
        require("close_db.php");
        return $arrayId;

    }
 



}

?>