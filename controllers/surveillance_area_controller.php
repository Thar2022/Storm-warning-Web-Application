<?php
    class SurveilController{
        public function index(){
         //   echo "AAAA";
            $surveillance_area_list = Surveillance_Area::getAll();
            //echo "AAAA";
            require_once("views/surveillance_area/index_surveillance_area.php");
        } 
        public function newSurveillance_area(){
            $notifications_list = Notifications::getAll();
            $province_list = Province::getAll();

            require_once("views/surveillance_area/newSurveillance_area.php");
        }  
        public function addSurveillance_area(){
            $province = $_POST['province'];
            $id_notification = $_POST["id_notification"] ;
            
            Surveillance_Area::add( $province, $id_notification); 
        
            SurveilController::index();
        
        }
        public function deleteConfirm(){
            $province = $_GET['province'];
           $id_notification = $_GET['id_notification'];
           
           $surveillance_area = Surveillance_Area::get( $province,$id_notification );
            
            require_once("views/surveillance_area/deleteConfirm.php");
           
        
        }
        
        public function delete(){
            $province = $_GET['province'];
            $id_notification = $_GET['id_notification'];
            Surveillance_Area::delete($province,$id_notification);
            SurveilController::index();
         
         }







         
            
      
             
        

    }
?>