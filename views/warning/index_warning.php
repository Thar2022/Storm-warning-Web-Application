<br>
new_warning <a href="?controller=warning&action=newWarning">click</a>
 
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
         <td>Update</td> 
         <td>Delete</td>
         
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
            <td>
            <a href=\"?controller=warning&action=updateForm&id_warning=$warning->id_warning&name=$warning->name&file_address=$warning->file_address&id_warning=$warning->id_warning\" >update</a>
            </td>
            <td>
            <a href=\"?controller=warning&action=deleteConfirm&id_warning=$warning->id_warning\" >delete</a>
            </td>
        </tr>";
        }
        ?>
        




 </table>