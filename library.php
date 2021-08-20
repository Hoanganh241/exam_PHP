<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>List Of Book</title>
</head>
<style>
    body{
        width: 1200px;
        t
    }
    table {
        text-align: center;
        padding-left: 50%;
        padding-right: 50%;
    }
    .title{
        background: #eee;
    }
</style>
<body>
<?php
//connect database
$con = mysqli_connect('localhost', 'root', '', 'books');
//xay dung va thuc thi truy van
$sql = "SELECT * FROM books";

$recordset = mysqli_query($con, $sql);
?>

<table border="1" cellpadding="2px">
    <tr class="title"><th colspan="6"><h1>LIBRARY</h1></th></tr>
    <tr>
        <th>BookId</th>
        <th>AuthorId</th>
        <th>title</th>
        <th>ISBN</th>
        <th>Pub_year</th>
        <th>Available</th>
    </tr>
    <?php
    while($row = mysqli_fetch_assoc($recordset)) {
        ?>
    <tr>
        <td><?php echo $row['bookid'];?></td>
        <td><?php echo $row['authorid'];?></td>
        <td><?php echo $row['title'];?></td>
        <td><?php echo $row['ISBN'];?></td>
        <td><?php echo $row['pub_year'];?></td>
        <td><?php echo $row['available'];?></td>
    </tr>

    <?php
    }
    ?>
</table>
<?php
//close
mysqli_close($con)
?>
</body>
</html>
