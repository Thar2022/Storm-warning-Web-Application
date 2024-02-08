<br><br>
<br>Are you sure delete this Notification<br><br>
<table border="1">
     <tr>
         <td>Id</td>
         <td>Name</td>
         <td>File</td>
         <td>Date</td>
         <td>Time</td>
         <td>Id_warning</td> 
         
         
     </tr>
     <?php
      
       
            echo "  <tr>
            <td>$notifications->id_notification</td>
            <td>$notifications->name</td> 
            <td>$notifications->file_address</td>
            <td>$notifications->date</td>
            <td>$notifications->time </td>
            <td>$notifications->id_warning</td>
            
            
             
             
        </tr>";
      
        ?> 
 </table>
 <br>
 <form method="get" action="">
    <input type="hidden" name="controller" value="notifications">
    <input type="hidden" name="id_notification" value=<?php echo $notifications->id_notification ?>>
    <button type="submit" name="action" value="index">Back</button>
    <button type="submit" name="action" value="delete">Delete</button>

</form>