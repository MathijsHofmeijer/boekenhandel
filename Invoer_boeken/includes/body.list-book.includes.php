<?php

include "connectdb.php";

$sql = "SELECT * FROM boeken";
$sth = $db->prepare($sql);
$sth->execute();
?>

<table class="table">
    <thead>
        <tr>
            <th>titel</th>
            <th>schrijver</th>
            <th>taal</th>
            <th>paginas</th>
            <th>cover</th>
            <th>uitgever</th>
            <th>genre</th>
            <th>releaseday</th>
            <th>image</th>
        </tr>
    </thead>
    <tbody>
    <?php while($row = $sth->fetch()) { ?>
        <tr>
            <td><?php echo $row["titel"]; ?></td>
            <td><?php echo $row["schrijver"]; ?></td>
            <td><?php echo $row["taal"]; ?></td>
            <td><?php echo $row["paginas"]; ?></td>
            <td><?php echo $row["cover"]; ?></td>
            <td><?php echo $row["uitgever"]; ?></td>
            <td><?php echo $row["genre"]; ?></td>
            <td><?php echo $row["releaseday"]; ?></td>
            <td><?php echo $row["image"]; ?></td>
        </tr>
    <?php } ?>
    </tbody>
</table>

