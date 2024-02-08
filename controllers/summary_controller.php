<?php
    class Summary{
        public function index(){ 
            
            $warning_list = Warning::getAllQuerySQL("select * from warning WHERE date BETWEEN ADDDATE(CURRENT_DATE(), INTERVAL (1-(WEEKDAY(CURRENT_DATE())+2)%7) DAY) AND ADDDATE(CURRENT_DATE(), INTERVAL (7-(WEEKDAY(CURRENT_DATE())+2)%7) DAY);");
            $notifications_list = Notifications::getAllQuerySQL("select * from notifications WHERE date BETWEEN ADDDATE(CURRENT_DATE(), INTERVAL (1-(WEEKDAY(CURRENT_DATE())+2)%7) DAY) AND ADDDATE(CURRENT_DATE(), INTERVAL (7-(WEEKDAY(CURRENT_DATE())+2)%7) DAY);");
            $surveillance_area_list = Surveillance_Area::getAllQuerySQL("SELECT * FROM surveillance_area  as sur NATURAL JOIN notifications INNER JOIN Province as pro on sur.province = pro.id  WHERE date BETWEEN ADDDATE(CURRENT_DATE(), INTERVAL (1-(WEEKDAY(CURRENT_DATE())+2)%7) DAY) AND ADDDATE(CURRENT_DATE(), INTERVAL (7-(WEEKDAY(CURRENT_DATE())+2)%7) DAY) ORDER BY id_notification  ASC;");
          
            require_once("views/summary/index_summary.php");
        }
        
             
        

    }
?>