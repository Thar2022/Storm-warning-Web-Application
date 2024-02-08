<br><br>
<br>Are you sure delete this Warning<br><br>
<table border="1">
    <tr>
         <td>Id</td>
         <td>Report_id</td>
         <td>Name</td>
         <td>Edition</td>
         <td>File</td>
         <td>Date</td>
         <td>Time</td>
         
         
     </tr>
     <?php 
            echo "  <tr>
            <td>$warning->id_warning</td>
            <td>$warning->reportStormID</td>
            <td>$warning->name</td>
            <td>$warning->edition</td>
            <td>$warning->file_address</td>
            <td>$warning->date</td>
            <td>$warning->time </td> 
            
            
             
             
        </tr>";
      
        ?> 
 </table>
 <br>
 <form method="get" action="">
    <input type="hidden" name="controller" value="warning">
    <input type="hidden" name="id_warning" value=<?php echo $warning->id_warning ?>>
    <button type="submit" name="action" value="index">Back</button>
    <button type="submit" name="action" value="delete">Delete</button>

</form>