<!DOCTYPE html>
<html>
 <head>
    <meta charset="utf-8">
    <title>방명록</title>
    </head>
<body>
    <a href="index.html">방명록 쓰기</a><p>
    <?php
        $db = mysql_connect("localhost", "root", "apmsetup");
        mysql_select_db("itdb", $db);
        $result=mysql_query("select * from guestbook", $db);
        echo "방명록 읽기<p>";
        echo "<style>
        table {
    margin-left: auto;
    margin-right: auto;
  }
  th {
      text-align : center;
    vertical-align: middle;
  }
  td {
      text-align : center;
    vertical-align: middle;
  }
</style>
            <table>
      <thead>
        <tr>
          <th>이름</th>
          <th>내용</th>
          <th>전화번호</th>
          <th>좋아하는 과일은?</th></tr>
      </thead></table>";
        while($row=mysql_fetch_array($result))
        {
            echo "
            <style>
            table {
    margin-left: auto;
    margin-right: auto;
  }
  th {width : 400px;
      hight : 200px;
    text-align : center;
    vertical-align: middle;
  }
  td {
      width : 400px;
      hight : 200px;
          text-align : center;
    vertical-align: middle;
  }
</style>
            <table>
      <tbody>
        <tr>
          <td>$row[name]</td>
          <td>$row[content]</td>
          <td>$row[phone]</td>
          <td>$row[ra]</td>
        </tr>
      </tbody>
    </table>";
        }
        mysql_close($db);
    ?>
        </body>
</html>

<!--            echo "이름 : $row[name]<p>";
            echo "내용 : $row[content]<p>";
            echo "전화번호 : $row[phone]<p>";
            echo "좋아하는 과일은? : $row[ra]<p>";