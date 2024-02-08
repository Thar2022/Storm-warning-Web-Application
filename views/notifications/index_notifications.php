<br>
new_notification <a href="?controller=notifications&action=newNotifications">click</a>
 
 <table border="1">
     <tr>
         <td>Id_notification</td>
         <td>Name_notification</td>
         <td>File_notification</td>
         <td>Date_notification</td>
         <td>Time_notification</td>
         <td>Id_warning</td> 
         <td>View</td> 
         <td>Update</td> 
         <td>Delete</td>
         
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
            <td>
            <a href=\"?controller=notifications&action=updateForm&id_notification=$notifications->id_notification&name=$notifications->name&file_address=$notifications->file_address&id_warning=$notifications->id_warning\" >update</a>
            </td>
            <td>
            <a href=\"?controller=notifications&action=deleteConfirm&id_notification=$notifications->id_notification\" >delete</a>
            </td>
        </tr>";
        }
        ?>
        




 </table>