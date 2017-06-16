<!-- 웹에플리케이션 만들기 - JS, PHP 프로그래밍 6 : 변수 -->
<?php
$name = "egoing"
 ?>
<script type="text/javascript">
 name = "leeze"
</script>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>JavaScript</h1>
    <script type="text/javascript">
      document.write("안녕하세요"+name)
    </script>
    <h1>php</h1>
    <?php
    echo "안녕하세요 ".$name;

     ?>
  </body>
</html>
