<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        form {
            background-color: lightblue;
            height: 500px;
            width: 300px;
            gap: 10px;
            flex-direction: column;
            display: flex;
            margin: auto;
            margin-top: 100px;
        }
        input {
            height: 50px;
        }
    </style>
</head>
<body>
    <form action="worker.php" method="POST">
        <label for="">სახელი</label>
        <input type="text" name="name">
        <label for="">გვარი</label>
        <input type="text" name="gvari">
        <label for="">ანგარიშის ნომერი</label>
        <input type="text" name="an">
        <label for="">თანხა</label>
        <input type="text" name="tanxa">
        <label for="">საშემოსავლო %</label>
        <input type="text" name="sashemosavlo">
        <label for="">საპენსიო %</label>
        <input type="text" name="sapensio">
        <input type="submit" value="გაგზავნა">
    </form>
</body>
</html>