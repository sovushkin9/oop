<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Изумительная математика</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="css/own.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../src/jquery.jqplot.css" />
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script type="text/javascript" src="../src/jquery.jqplot.js"></script>
    <script type="text/javascript" src="../src/plugins/jqplot.json2.js"></script>
    <script language="javascript" type="text/javascript" src="js/own.js"></script>
</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?php $_SERVER['HTTP_HOST']?>">Изумительная математика</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <div class="container">

        <div class="row">

            <div class="col-md-6">
			    <form action="form.php" method="post">
                  <div class="form-group">
                    <label for="inputFunction">Введите функцию</label>
                    <input  name="inputFunction" type="text" class="form-control" id="inputFunction" placeholder="Ввведите функцию">
                  </div>
                  <div class="form-group">
                    <label for="inputIntStart">Введите интервал:</label>
                    <span id="err_interval" class="text-danger"></span>
                    <div sytle="display:inline;">
                    <input type="text" class="form-control coordinates" id="inputIntStart" placeholder="Координата начала" value=1>
                    <input type="text" class="form-control coordinates" id="inputIntEnd" placeholder="Координата конца" value=10 >
                    </div>
                  </div>
                  
                    <button type="button" onclick="send();" class="btn btn-info">Построить график</button>
                </form>
            </div>

            <div class="col-md-6">  
                <div id="chart" class="effect6"></div>
            </div>

        </div>

    </div>
    <!-- /.container -->

    <div class="container">

        <hr>

        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; NoName 2016</p>
                </div>
            </div>
        </footer>

    </div>
    <!-- /.container -->
    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Custom JavaScript -->
    <script type="text/javascript" src="../js/jquery.js"></script>
    <script type="text/javascript" src="../src/jquery.jqplot.js"></script>
    <script type="text/javascript" src="../src/plugins/jqplot.json2.js"></script>
    <script language="javascript" type="text/javascript" src="js/own.js"></script>
</body>
</html>