<!DOCTYPE html>
<!-- saved from url=(0038)http://bootstrap-3.ru/examples/signin/ -->
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="">

    <title>Адміністрація</title>

    <!-- Bootstrap core CSS -->
    <link href="<?=base_url()?>./bootstrap/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?=base_url()?>./bootstrap/enter.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>

<div class="container">

    <form class="form-signin" action="<?=base_url()?>index.php/admin/login" method="post">
        <h2 class="form-signin-heading">Адміністрація</h2>
        <div class="form-group">
            <?php
            if(!empty($error))
                echo "<div class='alert alert-danger'>Помилка ! ".$error."</div>";
            ?>
        </div>

        <input name="login" type="text" class="form-control" placeholder="Логін"  autofocus="">

        <input name="password" type="password" class="form-control" placeholder="Пароль" >

        <input name="enter" class="btn btn-lg btn-primary btn-block" type="submit" value="Увійти">
    </form>

</div> <!-- /container -->


<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->

</body></html>