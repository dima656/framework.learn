<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Default</title>

    <!-- Bootstrap -->
    <link href="http://localhost/tea-embassy.com.ua/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="http://localhost/tea-embassy.com.ua/css/main.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<h1>Hello, world!</h1>
<?php echo $content; ?>
<?= debug(\vendor\core\DB::$countsql)?>
<?= debug(\vendor\core\DB::$queries)?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="http://localhost/tea-embassy.com.ua/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>