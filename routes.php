<?php
    $controllers = array( 'pages'=>['home','error'],'notifications'=>['index','newNotifications','addNotifications','deleteConfirm','delete','updateForm','update'],'warning'=>['index','newWarning','addWarning','deleteConfirm','delete','updateForm','update'],'surveillance_area'=>['index','newSurveillance_area','addSurveillance_area','deleteConfirm','delete'],'summary'=>['index']);
    function call($controller,$action){
        //echo $action;
        require_once("controllers/".$controller."_controller.php");
        switch($controller){ 
            case 'pages': 
                    $controller = new PagesController();
                    break;
            case 'notifications':
                    require_once("model/notificationsModel.php");
                    require_once("model/warningModel.php");
                    $controller = new NotiController();
                    break;
            case 'warning':
                    require_once("model/warningModel.php");   
                    require_once("model/reportStorm__model.php");     
                    $controller = new WarningController();
                    break;       
            case 'surveillance_area':
                    require_once("model/surveillance_area_model.php"); 
                    require_once("model/notificationsModel.php");
                    require_once("model/provinceModel.php");
                    //echo "ttttt";
                    $controller = new SurveilController();
                    //echo "xxxx";
                    break;
            case 'summary':
                    require_once("model/notificationsModel.php");
                    require_once("model/warningModel.php");
                    require_once("model/warningModel.php");   
                    require_once("model/reportStorm__model.php");  
                    require_once("model/surveillance_area_model.php"); 
                    require_once("model/provinceModel.php");
                    $controller = new Summary();
                    break;
                    

        }
        
       
        $controller->{$action}();
    }
    if(array_key_exists($controller,$controllers)){
        if(in_array($action,$controllers[$controller])){
            call($controller,$action);
        }
       
    }
    
?>