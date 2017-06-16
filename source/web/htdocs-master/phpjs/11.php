<!-- 웹에플리케이션 만들기 - JS, PHP 프로그래밍 13 : 함수의 기본 문법 -->
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title></title>
</head>
<body>
  <h1>JavaScript</h1>
  <ul>
    <script type="text/javascript">
    list = new Array("최진혁", "최유빈","한이람","한이은","이고잉")
    i = 0;
    while (i < list.length) {
      document.write("<li>"+list[i]+"</li>");
      i++;
    }
    </script>
  </ul>
  <ul>

    <h2>PHP</h2>
    <?php
    $list = array("최진혁", "최유빈","한이람","한이은");
    $i = 0;
    while ($i < count($list)) {
      echo "<li>".$list[$i]."</li>";
      $i++;
    }
    ?>
  </ul>

</body>
</html>
