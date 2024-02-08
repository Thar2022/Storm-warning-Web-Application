<?php
class Notifications{
    public $id_notification;
    public $name;
    public $file_address;
    public $path;
    public $date;
    public $time;
    public $id_warning;
    
    public function __construct($id_notification,$name,$file_address,$path,$date,$time,$id_warning)
    {
        $this->id_notification   =  $id_notification;
        $this->name  =  $name;
        $this->file_address  =  $file_address;
        $this->path = $path;
        $this->date  =  $date;
        $this->time  =  $time;
        $this->id_warning  =  $id_warning;
    }

    public static function get($id_notification){
        $noti = null;
        require("connect_db.php");
        $sql  = "select * from notifications where id_notification = $id_notification ";
        $result = $conn->query($sql);

        $my_row = $result->fetch_assoc(); 
        $id_notification = $my_row['id_notification'];
        $name = $my_row["name"];
        $file_address = $my_row["file_address"];
        $path = $my_row["path"];
        $date= $my_row["date"];
        $time = $my_row["time"];
        $id_warning = $my_row["id_warning"]; 
        $noti = new Notifications($id_notification,$name,$file_address,$path,$date,$time,$id_warning);
        require("close_db.php");
        return $noti;

    }
   

    public static function getAll( ){
        $noti = [];
        require("connect_db.php");
        $sql  = "select * from notifications ";
        $result = $conn->query($sql);

        while($my_row = $result->fetch_assoc()){ 
            $id_notification = $my_row['id_notification'];
            $name = $my_row["name"];
            $file_address = $my_row["file_address"];
            $path = $my_row["path"];
            $date= $my_row["date"];
            $time = $my_row["time"];
            $id_warning = $my_row["id_warning"]; 
            $noti[] = new Notifications($id_notification,$name,$file_address,$path,$date,$time,$id_warning);
        }
        require("close_db.php");
        return $noti;

    }

    public static function  getAllQuerySQL($SQL){
        $noti = [];
        require("connect_db.php");
        $sql  = $SQL;
        $result = $conn->query($sql);

        while($my_row = $result->fetch_assoc()){ 
            $id_notification = $my_row['id_notification'];
            $name = $my_row["name"];
            $file_address = $my_row["file_address"];
            $path = $my_row["path"];
            $date= $my_row["date"];
            $time = $my_row["time"];
            $id_warning = $my_row["id_warning"]; 
            $noti[] = new Notifications($id_notification,$name,$file_address,$path,$date,$time,$id_warning);
        }
       // echo $sql;
        require("close_db.php");
        return $noti;

    }

    public static function add( $name,$file_address,$id_warning){                                                        
        require("connect_db.php");
        $sql = "INSERT INTO notifications( name, file_address, date,time, id_warning) VALUES( '$name', '$file_address', cast(NOW() as date),  cast(NOW() as time), $id_warning)";
        $result = $conn->query($sql);
        require("close_db.php");
        return "add success $result rows";
    }

    public static function delete( $id_notification){                                                        
        require("connect_db.php");
        $sql = "DELETE FROM notifications WHERE id_notification='$id_notification'";
        $result = $conn->query($sql);
        require("close_db.php");
        return "delete success $result rows";
    }

    public static function update($id_notification,$name,$file_address,$id_warning){
        require("connect_db.php");
        $sql = "UPDATE  notifications SET name= '$name', file_address= '$file_address' ,date  = CAST(NOW() AS DATE),time = CAST(NOW() AS TIME),id_warning='$id_warning'      WHERE id_notification = '$id_notification'";
        $result = $conn->query($sql);
        
        require("close_db.php");
    }

     


}

?>