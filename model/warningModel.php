<?php
class Warning{ 
    public $id_warning;
    public $reportStormID;
    public $name;
    public $edition;
    public $file_address;
    public $path;
    public $date;
    public $time;
    
    
    public function __construct($id_warning,$reportStormID,$name,$edition,$file_address,$path,$date,$time )
    {
        $this->id_warning   =  $id_warning;
        $this->reportStormID  =  $reportStormID;
        $this->name  =  $name;
        $this->edition  =  $edition;
        $this->file_address  =  $file_address; 
        $this->path = $path;
        $this->date  =  $date;  
        $this->time  =  $time; 
    }

    

    public Static function get($id_warning){
        $warning = null;
        require("connect_db.php");
        $sql  = "select * from warning where id_warning  = $id_warning ";
        $result = $conn->query($sql);

        $my_row = $result->fetch_assoc(); 
        $id_warning = $my_row['id_warning'];
        $reportStormID = $my_row['reportStormID'];
        $name = $my_row["name"];
        $edition = $my_row["edition"];
        $path = $my_row["path"];
        $file_address = $my_row["file_address"];
        $date= $my_row["date"];
        $time = $my_row["time"]; 
        $warning = new Warning($id_warning,$reportStormID,$name,$edition,$file_address,$path,$date,$time);
        require("close_db.php");
        return $warning;

    }

    public static function getAll( ){
        $warning = [];
        require("connect_db.php");
        $sql  = "select * from warning ";
        $result = $conn->query($sql);

        while($my_row = $result->fetch_assoc()){  
            $id_warning = $my_row['id_warning'];
            $reportStormID = $my_row['reportStormID'];
            $name = $my_row["name"];
            $edition = $my_row["edition"];
            $path = $my_row["path"];
            $file_address = $my_row["file_address"];
            $date= $my_row["date"];
            $time = $my_row["time"]; 
            $warning[] = new Warning($id_warning,$reportStormID,$name,$edition,$file_address,$path,$date,$time);
        }
        
        require("close_db.php");
        return $warning;

    }

    public static function getAllQuerySQL($SQL ){
        $warning = [];
        require("connect_db.php");
        $sql  = $SQL;
        
        $result = $conn->query($sql);

        while($my_row = $result->fetch_assoc()){  
            $id_warning = $my_row['id_warning'];
            $reportStormID = $my_row['reportStormID'];
            $name = $my_row["name"];
            $edition = $my_row["edition"];
            $path = $my_row["path"];
            $file_address = $my_row["file_address"];
            $date= $my_row["date"];
            $time = $my_row["time"]; 
            $warning[] = new Warning($id_warning,$reportStormID,$name,$edition,$file_address,$path,$date,$time);
        }
       // echo $sql;
        require("close_db.php");
        return $warning;

    }

    public static function add($reportStormID, $name,$edition,$file_address){
                                                                
        require("connect_db.php");
        $sql = "INSERT INTO warning(reportStormID, name,edition, file_address, date,time ) VALUES( '$reportStormID','$name','$edition', '$file_address', CAST(NOW() as date),  CAST(NOW() as time))";
        $result = $conn->query($sql);
      //  echo $sql;
        require("close_db.php");
        return "add success $result rows";
    }

 
 

    public static function delete( $id_warning){                                                        
        require("connect_db.php");
        $sql = "DELETE FROM warning WHERE id_warning='$id_warning'";
        $result = $conn->query($sql);
        require("close_db.php");
        return "delete success $result rows";
    }



    public static function update($id_warning,$reportStormID, $name,$edition,$file_address){
        require("connect_db.php");
        $sql = "UPDATE   warning SET id_warning = '$id_warning',reportStormID = '$reportStormID',name= '$name',edition = '$edition' ,file_address= '$file_address' ,date  = CAST(NOW() AS DATE),time = CAST(NOW() AS TIME)      WHERE id_warning = '$id_warning'";
        $result = $conn->query($sql);
        
        require("close_db.php");
    }

 



}

?>