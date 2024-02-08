<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <br><br>
    <form  method="POST" action="?controller=surveillance_area&action=addSurveillance_area"  enctype="multipart/form-data">
         
        <label>Province <select name="province"  ><?php
        foreach( $province_list  as  $province ){
            echo " <option  value=$province->province>  $province->province -$province->name_en</option>";
        }
        ?></select></label> <br> <br>
        <label>Notification <select name="id_notification"  ><?php
        foreach(  $notifications_list  as  $notifications){
            echo " <option  value= $notifications->id_notification>$notifications->id_notification - $notifications->name </option>";
        }
        ?></select></label> <br> <br>
    
        
        <button type="submit" >Save</button> 
    </form>


    <br>
    <form method="GET">
        <input type="hidden" name="controller" value="surveillance_area"> 
        <button type="submit" name="action" value="index">Back</button> 

    </form>
</body>
</html>