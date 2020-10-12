<?php
include_once('connection.php');
$query="select * from users";
$result=mysql_query($query);
?>
 
<!DOCTYPE html>
<html>
    <head>
        <title> Fetch Data From Database </title>
    </head>
<body>
    
    <table align="center" border="1px" style="width:600px; line-height:40px;">
        <tr>
            <th colspan="4"><h2>User Record</h2></th>
        </tr>
        <t>
            <th> NO TENTERA </th>
            <th> KATA LALUAN </th>
            <th> E-MEL </th>
            <th> KATEGORI </th>
        </t>
    <?php
        while($rows=mysql_fetch_assoc($result))
        {
    ?>        
            <tr>
                <td><?php echo $rows['no_tentera']; ?></td>
                <td><?php echo $rows['kata_laluan']; ?></td>
                <td><?php echo $rows['emel']; ?></td>
                <td><?php echo $rows['kategori']; ?></td>
            </tr>
    <?php    
        }
    ?>    
    </table>
    
</body>
</html>