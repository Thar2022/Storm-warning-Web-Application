<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <br><br>
    <form  method="POST" action="?controller=warning&action=update"  enctype="multipart/form-data">
        <label>ReportStorm_ID <select name="reportStormID"  >
        <?php
        foreach($report_list  as $report ){
            if($report == $warning->reportStormID){
                echo " <option  value=$report selected = 'selected'>$report</option>";
            }
            else
                echo " <option  value=$report>$report</option>";
        }
        ?></select></label> <br> <br>
        <label >Name <input type="text" name="name" value=<?php  echo $warning->name ?>></label> <br><br>
        <label >Edition <input type="text" name="edition" value=<?php  echo $warning->edition ?>></label> <br><br>
        <label >Old File <input type="text" name="name" value=<?php  echo $warning->file_address ?> disabled></label> <br><br>
      
        <input type="hidden"  name="id_warning"   value=<?php  echo $warning->id_warning ?>></label> 
        <br>    
        <label >New File
        <input type="file" accept=".pdf" name="file"></label> 
        <br> <br>
    
        
        <button type="submit" >Save</button> 
    </form>


    <br>
    <form method="GET">
        <input type="hidden" name="controller" value="warning"> 
        <button type="submit" name="action" value="index">Back</button> 

    </form>
</body>
</html>