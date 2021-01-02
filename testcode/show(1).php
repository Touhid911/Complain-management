<?php

$query = "SELECT * FROM `complain`";
$search_result = filterTable($query);

function filterTable($query)
{
    $connect = mysqli_connect("localhost", "root", "", "complaindb");
    $filter_Result = mysqli_query($connect, $query);
    return $filter_Result;
}

?>

<!DOCTYPE html>
<html>
    <head>
        <title>PHP HTML TABLE DATA SEARCH</title>
        <style>
            table,tr,th,td
            {
                border: 1px solid black;
            }
        </style>
    </head>
    <body>
        
        <form action="show.php" method="post">
            <table>
                <tr>
                    <th>ID</th>
                    <th>Type</th>
                    <th>Date of Complain</th>
                    <th>Description</th>
                </tr>

                <?php while($row = mysqli_fetch_array($search_result)):?>
                <tr>
                    <td><?php echo $row['id'];?></td>
                    <td><?php echo $row['type'];?></td>
                    <td><?php echo $row['date_of_complain'];?></td>
                    <td><?php echo $row['description'];?></td>
                </tr>
                <?php endwhile;?>
            </table>
        </form>

<script>
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
</script>
        
    </body>
</html>