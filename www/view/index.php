<html>
<head>
    <title>Фоточки</title>
</head>
<body>
<?foreach ($photos as $photo) {?>
    <div style="padding:20px;width:600px;margin-left:50px;overflow: hidden;" class="item">
        <img alt="<?=$photo['title']?>" src="<?=$photo['url']?>">
    </div>
<?}?>
</body>
</html>