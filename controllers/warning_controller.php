<?php
    class WarningController{
        public function index(){
            $warning_list = Warning::getAll();
            require_once("views/warning/index_warning.php");
        }
        public function newWarning(){ 
            $warning_list = Warning::getAll();
            
            $report_list = ReportStorm::getAllId();
            
            require_once("views/warning/newWarning.php");
        } 

        public function addWarning(){
            
            $reportStormID = $_POST['reportStormID'];
            $name = $_POST["name"] ;
            $edition = $_POST["edition"] ;
             
            $targetDir = "fileUpload/warning/";
            $fileName = $_FILES['file']['name']; 
            
            move_uploaded_file($_FILES['file']['tmp_name'], $targetDir.$_FILES["file"]["name"]);
            Warning::add($reportStormID,$name,$edition,$fileName); 
        
            WarningController::index();
        
        }
 

        public function deleteConfirm(){
           $id_warning = $_GET['id_warning'];
           $warning = Warning::get( $id_warning );
            
            require_once("views/warning/deleteConfirm.php");
           
        
        }
        public function delete(){
            $id_warning= $_GET['id_warning']; 
            $warning = Warning::get( $id_warning );
            $path = $warning->path;
            Warning::delete( $id_warning );
            unlink( $path.$warning->file_address );
            WarningController::index();
         
         } 

         public function updateForm(){
            $id_warning= $_GET['id_warning']; 
            $report_list = ReportStorm::getAllId();
            $warning = Warning::get($id_warning ); 
            require_once("views/warning/updateForm.php");
         }
            
         public function update(){
            $id_warning = $_POST['id_warning']; 
            $warning = Warning::get( $id_warning ); 
            $reportStormID = $_POST['reportStormID'];
            $name = $_POST["name"] ;
            $edition  = $_POST['edition'];
            $targetDir = "fileUpload/warning/";
            $fileName = null;
            if(!empty($_FILES['file']['name'])){
                $path = $warning->path;
                unlink( $path.$warning->file_address );

                $fileName =  $_FILES['file']['name']; 
                move_uploaded_file($_FILES['file']['tmp_name'], $targetDir.$_FILES["file"]["name"]);
                
            }
            else{
                $fileName =$warning->file_address;
            }
            
            Warning::update($id_warning,$reportStormID, $name,$edition,$fileName);
            WarningController::index();
         }
             
        

    }
?>