<!DOCTYPE html>
<html>
 <head>
    <meta charset="utf-8">
    <title>입력</title>
    </head>
<body>
    <?php
      $na = $_POST['name'];
    $cont = $_POST['content'];
    $phon = $_POST['phone'];
    $radio = $_POST['ra'];
    $db=mysql_connect("localhost", "root", "apmsetup");
    mysql_select_db("itdb",$db);
    $dbinsert="insert into guestbook values ('$na', '$cont', '$phon', '$radio')";
    $result=mysql_query($dbinsert, $db);
    mysql_close($db);
    echo "<a href='read.php'>리스트</a>";
    ?>
        </body>
</html>