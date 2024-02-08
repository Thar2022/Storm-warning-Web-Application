<?php
class Surveillance_Area{ 
    
    public $province;
    public $id_notification;
    public $name_province;
    public $name_notification;
    
    
    public function __construct($province,$id_notification,$name_province,$name_notification)
    {
         
        $this->province  =  $province;
        $this->id_notification  =  $id_notification;
        $this->name_province  =  $name_province;
        $this->name_notification  =  $name_notification;
        
         
    }

    

    public Static function get($province,$id_notification){ 
         
        require("connect_db.php");
        $sql  = "SELECT * FROM surveillance_area  as sur NATURAL JOIN notifications INNER JOIN Province as pro on sur.province = pro.id WHERE id_notification = '$id_notification' AND province = '$province' ;";
        $result = $conn->query($sql); 
        $my_row = $result->fetch_assoc(); 

        $province = $my_row['province'];
        $id_notification = $my_row["id_notification"];
        $name_province = $my_row['name_en'];
        $name_notification = $my_row['name'];

        $surveillance_area = new surveillance_area($province,$id_notification,$name_province,$name_notification);
        require("close_db.php");
        return $surveillance_area;

    }

    public static function getAll( ){
        $surveillance_area = [];
        require("connect_db.php");
        $sql  = "select * from surveillance_area  as sur natural join notifications inner join Province as pro on sur.province = pro.id order by id_notification  asc;";
        $result = $conn->query($sql);

        while($my_row = $result->fetch_assoc()){  
            
            $province = $my_row['province'];
            $id_notification = $my_row["id_notification"];
            $name_province = $my_row['name_en'];
            $name_notification = $my_row['name'];
    
            $surveillance_area[] = new surveillance_area($province,$id_notification,$name_province,$name_notification);
        }
        require("close_db.php");
        return $surveillance_area;

    }
    public static function getAllQuerySQL($SQL ){
        $surveillance_area = [];
        require("connect_db.php");
        $sql  = $SQL;
        $result = $conn->query($sql);

        while($my_row = $result->fetch_assoc()){  
            
            $province = $my_row['province'];
            $id_notification = $my_row["id_notification"];
            $name_province = $my_row['name_en'];
            $name_notification = $my_row['name'];
    
            $surveillance_area[] = new surveillance_area($province,$id_notification,$name_province,$name_notification);
        }
        require("close_db.php");
    //    echo $sql;
        return $surveillance_area;

    }

    public static function add($province, $id_notification){                                                        
        require("connect_db.php");
        $sql = "INSERT INTO surveillance_area(province, id_notification) VALUES( '$province','$id_notification')";
        $result = $conn->query($sql);
        require("close_db.php");
        return "add success $result rows";
    }

 
 

    public static function delete($province,$id_notification){                                                        
        require("connect_db.php");
        $sql = "DELETE FROM surveillance_area WHERE province = $province AND id_notification = $id_notification";
        $result = $conn->query($sql);
        require("close_db.php");
        return "delete success $result rows";
    }



    public static function update($province, $id_notification){
        require("connect_db.php");
        $sql = "UPDATE   surveillance_area SET id = '',province = '$province',id$id_notification= '$id_notification'";
        $result = $conn->query($sql);
        
        require("close_db.php");
    }

 



}

?>