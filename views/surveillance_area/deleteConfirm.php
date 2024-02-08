<br>
<br>Are you sure delete this Surveillance_Area?<br><br>
 <table border="1">
     <tr>
     
         <td>ID_notifications</td> 
         <td>Name_notifications</td>
         <td>ID_province</td> 
         <td>Name_province</td>
        
         
     </tr>
     <?php
      
        
            echo "  <tr>
            <td>$surveillance_area->id_notification</td>
            <td>$surveillance_area->name_notification</td>
            <td>$surveillance_area->province</td> 
            <td>$surveillance_area->name_province</td> 
            
            
         
        </tr>"; 
        ?>
        




 </table>


 <form method="get" action="">
    <input type="hidden" name="controller" value="surveillance_area">
    <input type="hidden" name="province" value=<?php echo $surveillance_area->province ?>>
    <input type="hidden" name="id_notification" value=<?php echo $surveillance_area->id_notification ?>>
    <button type="submit" name="action" value="index">Back</button>
    <button type="submit" name="action" value="delete">Delete</button>

</form>