<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <br><br>
    <form  method="POST" action="?controller=notifications&action=addNotifications"  enctype="multipart/form-data">
        <label >Name <input type="text" name="name"></label> <br><br>
        <label>Id_warning <select name="id_warning"  ><?php
        foreach($warning_list  as $warning ){
            echo " <option  value=$warning->id_warning>$warning->id_warning - $warning->name</option>";
        }
        ?></select></label> <br> 
        <br>    
        <input type="file" accept=".pdf" name="file">
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