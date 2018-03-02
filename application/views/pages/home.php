<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<p>这个视图的路径为views/pages/home.php</p>
<p>pages目录为自定义添加，与控制器Page类的view方法参数保持一致</p>
<table>
    <?php
    foreach ($news as $item) {
        echo '<tr><td>' . $item['title'] .
            '</td><td>' . $item['author'] .
            '</td><td>' . $item['content'] .
            '</td><td>' . $item['time'] .
            '</td><td>' . $item['state'] .
            '</td></tr>';
    }
    ?>
</table>
</body>
</html>