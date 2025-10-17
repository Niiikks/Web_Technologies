<?php 
$name = $_POST['name'];
$gvari = $_POST['gvari'];
$an = $_POST['an'];
$tanxa = $_POST['tanxa'];
$sashemosavlo = $_POST['sashemosavlo'];
$sapensio = $_POST['sapensio'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table {
            border: 1px solid black;
            margin: auto;
        }
        td {
            border: 1px solid black;
            width: 100px;
        }
    </style>
</head>
<body>
    <?php echo"
    <table>
<tr>
    <td><b>სახელი</b></td>
    <td><b>გვარი</b></td>
    <td><b>ანგარიშის ნომერი</b></td>
    <td><b>თანხა</b></td>
    <td><b>საშემოსავლო</b></td>
    <td><b>საპენსიო</b></td>
</tr>
<tr>
    <td>$name</td>
    <td>$gvari</td>
    <td>$an</td>
    <td>$tanxa</td>
    <td>$sashemosavlo</td>
    <td>$sapensio</td>
</tr>
</table>
    "?>
</body>
</html>