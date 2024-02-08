<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <br><br>
    <form  method="POST" action="?controller=warning&action=addWarning"  enctype="multipart/form-data">
        <label>ReportStorm_ID <select name="reportStormID"  >
        <?php
        foreach($report_list  as $report ){
            echo " <option  value=$report>$report</option>";
        }
        ?></select></label> <br> <br>
        <label >Name <input type="text" name="name"></label> <br><br>
        <label >Edition <input type="text" name="edition"></label> <br><br>
      
        <br>    
        <input type="file" accept=".pdf" name="file">
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