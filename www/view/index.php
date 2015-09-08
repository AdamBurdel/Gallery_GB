<html>
<head>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <script src="js/bootstrap.min.js" type="text/javascript"></script>
    <script src="js/jquery-1.11.3.min.js" type="text/javascript"></script>
    <meta charset="UTF-8">
    <title>Фоточки</title>
</head>
<body>
<a class="add_cat" href="?addnew=yes">Добавить нового кота</a>
<?foreach ($photos as $photo) {?>
    <div style="" class="item">
        <img alt="<?=$photo['title']?>" src="<?=$photo['resized_url']?>">
        <form method="get" enctype="multipart/form-data">
            <input type="hidden" name="catID" value="<?=$photo['id']?>">
            <input class="btn-block" style="margin:0 auto;" type="submit" value="Это не кот">
        </form>
    </div>
<?}?>
</body>
</html>