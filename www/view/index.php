<html>
<head>
    <title>Фоточки</title>
</head>
<body>
<?foreach ($photos as $photo) {?>
    <div style="padding:20px;width:600px;margin-left:50px;overflow: hidden;" class="item">
        <img alt="<?=$photo['title']?>" src="<?=$photo['url']?>">
        <form method="get" enctype="multipart/form-data">
            <input type="hidden" name="catID" value="<?=$photo['id']?>">
            <input style="margin:0 auto;" type="submit" value="Это не кот">
        </form>
    </div>
<?}?>
</body>
</html>