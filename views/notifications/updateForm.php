<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <br>
    <form  method="POST" action="?controller=notifications&action=update"  enctype="multipart/form-data">
        <label >Name <input type="text" name="name" value=<?php echo  $notifications->name?>></label> <br><br>
        <label>Id_warning <select name="id_warning"  ><?php
        foreach($warning_list  as $warning ){
            if($warning->id_warning == $notifications->id_warning)
                 echo " <option  value=$warning->id_warning selected = 'selected'>$warning->id_warning - $warning->name</option>";
            else   
                 echo " <option  value=$warning->id_warning>$warning->id_warning - id_warning - $warning->name</option>";
        }
        ?></select></label> <br> <br>
         <label >Old File <input type="text" name="name" value=<?php  echo $notifications->file_address ?> disabled></label> <br>
      
        <input type="hidden"   name="id_notification" value=<?php echo  $notifications->id_notification?> >
        <br>    
        <label for="">NEW FILE <input type="file" accept=".pdf" name="file" ></label> 
        <br> <br>
    
        
        <button type="submit" >Save</button> 
    </form>


    <br>
    <form method="GET">
        <input type="hidden" name="controller" value="notifications"> 
        <button type="submit" name="action" value="index">Back</button> 

    </form>
</body>
</html>