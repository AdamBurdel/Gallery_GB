<html>
<head>
    <title>Фоточки</title>
</head>
<body>
<?foreach ($photos as $photo) {?>
    <div style="padding:20px;width:600px;margin:0 auto;overflow: hidden;" class="item">
        <img alt="<?=$photo['title']?>" src="<?=$photo['url']?>">
    </div>
<?}?>
</body>
</html>