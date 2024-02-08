<?php
class Province{
    public $province;
    public $name_th;
    public $name_en;
    public function __construct($province,$name_th,$name_en)
    {
         
        $this->province  =  $province;
        $this->name_th  =  $name_th;
        $this->name_en  =  $name_en;
         
         
    }

    public static function getAll( ){
        $province_ = [];
        require("connect_db.php");
        $sql  = "SELECT * FROM Province";
        $result = $conn->query($sql);

        while($my_row = $result->fetch_assoc()){  
            
            $id = $my_row['id'];
            $name_th = $my_row["name_th"];
            $name_en = $my_row["name_en"];
    
            $province_[] = new Province( $id,$name_th,$name_en);
        }
        require("close_db.php");
        return  $province_;

    }

    
}

?>