<br><br><br>
<br><br> <label for="" style="font-size: 30px">Weekly summary </label>
 <br><br>

<br><br> <label for="">Warning </label>
<table border="1">
     <tr>
         <td>Id_warning</td>
         <td>Report_id</td>
         <td>Name_warning</td>
         <td>Edition_warninig</td>
         <td>File_warning</td>
         <td>Date_warning</td>
         <td>Time_warnig</td>
         <td>View</td> 
          
         
     </tr>
     <?php
      
        foreach ($warning_list as $warning) {
            echo "  <tr>
            <td>$warning->id_warning</td>
            <td>$warning->reportStormID</td>
            <td>$warning->name</td>
            <td>$warning->edition</td> 
            <td>$warning->file_address</td>
            <td>$warning->date</td>
            <td>$warning->time </td>
            
            <td>
            <a href=\"$warning->path$warning->file_address\">View</a>
            </td>
           
            
        </tr>";
        }
        ?> 

 </table>
 <br><br> <label for="">Notifications </label>
 
 <table border="1">
     <tr>
         <td>Id_notification</td>
         <td>Name_notification</td>
         <td>File_notification</td>
         <td>Date_notification</td>
         <td>Time_notification</td>
         <td>Id_warning</td> 
         <td>View</td> 
         
         
     </tr>
     <?php
      
        foreach ($notifications_list as $notifications) {
            echo "  <tr>
            <td>$notifications->id_notification</td>
            <td>$notifications->name</td> 
            <td>$notifications->file_address</td>
            <td>$notifications->date</td>
            <td>$notifications->time </td>
            <td>$notifications->id_warning</td>
            
            <td>
            <a href=\"$notifications->path$notifications->file_address\">View</a>
            </td>
             
        </tr>";
        }
        ?>
        




 </table>


 <br><br> <label for="">Surveillance Area</label>
 <table border="1">
     <tr>
     
         <td>ID_notifications</td> 
         <td>Name_notifications</td>
         <td>ID_province</td> 
         <td>Name_province</td>
         
          
         
     </tr>
     <?php
      
        foreach ($surveillance_area_list as $surveillance_area) {
            echo "  <tr>
            <td>$surveillance_area->id_notification</td>
            <td>$surveillance_area->name_notification</td>
            <td>$surveillance_area->province</td> 
            <td>$surveillance_area->name_province</td> 
            
            
            
             
        </tr>";
        }
        ?>
        




 </table>