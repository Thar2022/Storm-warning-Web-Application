<?php
    class NotiController{
        public function index(){
            $notifications_list = Notifications::getAll();
            require_once("views/notifications/index_notifications.php");
        }
        public function newNotifications(){
            $warning_list = Warning::getAll();
            require_once("views/notifications/newNotifications.php");
        }
        public function addNotifications(){
            $id_warning = $_POST['id_warning'];
            $name = $_POST["name"] ;
            $targetDir = "/fileUpload/notifications/";
            $fileName = $_FILES['file']['name']; 
            move_uploaded_file($_FILES['file']['tmp_name'], $targetDir.$_FILES["file"]["name"]);
            Notifications::add($name,$fileName,$id_warning); 
        
            NotiController::index();
        
        }
        public function deleteConfirm(){
           $id_notification = $_GET['id_notification'];
           $notifications = Notifications::get( $id_notification );
            
            require_once("views/notifications/deleteConfirm.php");
           
        
        }
        public function delete(){
            $id_notification = $_GET['id_notification']; 
            $notifications = Notifications::get( $id_notification );
            $path = $notifications->path;
            Notifications::delete( $id_notification );
            unlink( $path.$notifications->file_address );
            NotiController::index();
         
         }

         public function updateForm(){
            $id_notification = $_GET['id_notification']; 
            $warning_list = Warning::getAll();
            $notifications = Notifications::get( $id_notification ); 
            require_once("views/notifications/updateForm.php");
         }
            
         public function update(){
            $id_notification = $_POST['id_notification']; 
            $notifications = Notifications::get( $id_notification ); 
            $id_warning = $_POST['id_warning'];
            $name = $_POST["name"] ;
            $targetDir = "/fileUpload/notifications/";
            $fileName = null;
            if(!empty($_FILES['file']['name'])){
                $path = $notifications->path;
                unlink( $path.$notifications->file_address );

                $fileName =  $_FILES['file']['name']; 
                move_uploaded_file($_FILES['file']['tmp_name'], $targetDir.$_FILES["file"]["name"]);
                
            }
            else{
                $fileName =$notifications->file_address;
            }
            
            Notifications::update($id_notification,$name,$fileName,$id_warning);
            NotiController::index();
         }
             
        

    }
?>