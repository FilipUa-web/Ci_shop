<!DOCTYPE html>
<html lang="ru"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <head>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="shortcut icon" href="">

        <title>TehRed</title>

        <link href="<?=base_url();?>./bootstrap/bootstrap.min.css" rel="stylesheet">
        <script  src="<?=base_url();?>ckeditor/ckeditor.js"></script>

        <style id="holderjs-style" type="text/css"></style>
        <script src='https://www.google.com/recaptcha/api.js'></script>

        <style>
            header{
                min-height: 100px;
                height: 25%;
                width: 100%;
                background-color: #2c2d33 ;
                color: whitesmoke;
            }
            .header {
                margin-top: 20px;
            }
            .site_title a{
               text-decoration: none;
               color: whitesmoke;
               font-size: 24px;
               font-weight: bold;

            }
            .site_title a:hover{
                text-decoration: none;
                color: gainsboro;
            }
            .site_title p{
                color: #9aa0a7;
                font-size: 15px;
                margin-top: -7px ;
            }
            .search-field{
                background-color: #f2f2f2;
                color: #43454b;
                outline: 0;
                border: 0;
                padding: 4px;
                border-radius: 2px;
                box-sizing: border-box;
                font-weight: 400;
                box-shadow: inset 0 1px 1px rgba(0,0,0,.125);
                height: 40px;
                width: 250px;
            }
            menu{
                background-color: #292a30;
                min-height: 50px;
                width: 100%;
            }
            .site_title p{
                color: #9aa0a7;
                font-size: 15px;
                margin-top: -7px ;
            }
        </style>
    </head>
<body>
    <header>
        <div class="row">
            <div class=".col-lg-3 col-md-3"></div>
            <div class=".col-lg-5 col-md-5 header">
                <div class="site_title">
                    <a href="#">TehReg</a>
                    <p>mini cms</p>
                </div>
            </div>
            <div class=".col-lg-4 col-md-4 header">
                <form action="" >
                    <input type="text" class="search-field" placeholder="search tags">
                </form>
            </div>
        </div>
        <menu>
            <div class="row">
                <div class=".col-lg-3 col-md-3"></div>
                <div class=".col-lg-5 col-md-5 header">
                   <a>main</a><a>shop</a><a>blog</a>

                </div>
                <div class=".col-lg-4 col-md-4"></div>
            </div>
        </menu>
    </header>

</body>
</html>