<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Список файлов в корневой директории  @MikeRzhevsky miker.ru@gmail.com </title>
</head>
<body>
<form action="/FileList/App/fileListFormPost.php" method="post">
<table border="2px" cellspacing="0px";>
    <tr>
        <th>fieldname</th>
        <th>filesize</th>
        <th>filetype</th>
        <th>moddate</th>
    </tr>
    <?php foreach ($files as $file) {?>
        <tr>
        <?php  $result = array_unique($file); foreach($result as $fldname => $fldvalues)
        {
            if($fldname!='id')
                echo "<td>".$fldvalues."</td>";
        }?>
        </tr>
    <?php }?>
</table>
    <input  type="submit" value="Refresh"/>
</form>

</body>
</html>
