<html>
<head>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <script src="js/bootstrap.min.js" type="text/javascript"></script>
    <script src="js/jquery-1.11.3.min.js" type="text/javascript"></script>
    <meta charset="UTF-8">
    <title>Добавить кота</title>
</head>
<?

if (!empty($_FILES)) {
    // Тут надо будет ввести проверку на админа.
    addPhoto();
}

?>

<body>

<?var_dump($_POST)?>
<?var_dump($_FILES)?>
<h1>Добавим нового кота.</h1>
<h2><a href="../index.php">Назад</a></h2>
<form name="new_cat" action="" enctype="multipart/form-data" method="post">
    <inpute type="hidden" name="addCat" value="yes">
    <input name="name" type="text">
    <input class="input-large"  name="file" type="file">
    <input class="input-large" type="submit">
</form>
</body>
</html>