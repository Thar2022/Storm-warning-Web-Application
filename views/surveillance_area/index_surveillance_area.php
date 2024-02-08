<br>
new_surveillance_area <a href="?controller=surveillance_area&action=newSurveillance_area">click</a>
 
 <table border="1">
     <tr>
     
         <td>ID_notifications</td> 
         <td>Name_notifications</td>
         <td>ID_province</td> 
         <td>Name_province</td>
         
         <td>Delete</td>
         
     </tr>
     <?php
      
        foreach ($surveillance_area_list as $surveillance_area) {
            echo "  <tr>
            <td>$surveillance_area->id_notification</td>
            <td>$surveillance_area->name_notification</td>
            <td>$surveillance_area->province</td> 
            <td>$surveillance_area->name_province</td> 
            
            
            
            <td>
            <a href=\"?controller=surveillance_area&action=deleteConfirm&id_notification=$surveillance_area->id_notification&province=$surveillance_area->province\" >delete</a>
            </td>
        </tr>";
        }
        ?>
        




 </table>