<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css">

    <title>Pace Convert</title>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>

<div class="container">

    <div class="page-header">
        <h1>Pace Conversion Tool
            <small>By Nathan Martin</small>
        </h1>
    </div>

    <div class="row">

        <div class="col-lg-3">
            <div class="panel panel-default">

                <div class="panel-heading">Convert Min/Km to Min/Mile</div>
                <div class="panel-body">

                    <form action="/minutes/mile" method="POST">
                        <input type="hidden" name="distance" value="1">

                        <div class="input-group">
                            <input class="form-control" type="text" id="time" name="time">

                            <div class="input-group-btn">
                                <button class="btn btn-default" type="submit">Go!</button>
                            </div>
                        </div>

                    </form>

                </div>

            </div>
        </div>

        <div class="col-lg-3">
            <div class="panel panel-default">

                <div class="panel-heading">Convert Min/Mile to Min/Km</div>
                <div class="panel-body">

                    <form action="/minutes/kilometre" method="POST">
                        <input type="hidden" name="distance" value="1">

                        <div class="input-group">
                            <input class="form-control" type="text" id="time" name="time">

                            <div class="input-group-btn">
                                <button class="btn btn-default" type="submit">Go!</button>
                            </div>
                        </div>
                    </form>

                </div>

            </div>
        </div>

        <div class="col-lg-3">
            <div class="panel panel-default">

                <div class="panel-heading">Convert Km/Hour to Mile/Hour</div>
                <div class="panel-body">

                    <form action="/miles/hour" method="POST">
                        <input type="hidden" name="time" value="1">

                        <div class="input-group">
                            <input class="form-control" type="text" id="distance" name="distance">

                            <div class="input-group-btn">
                                <button class="btn btn-default" type="submit">Go!</button>
                            </div>
                        </div>
                    </form>

                </div>

            </div>
        </div>

        <div class="col-lg-3">
            <div class="panel panel-default">

                <div class="panel-heading">Convert Mile/Hour to Km/Hour</div>
                <div class="panel-body">

                    <form action="/kilometres/hour" method="POST">
                        <input type="hidden" name="time" value="1">

                        <div class="input-group">
                            <input class="form-control" type="text" id="distance" name="distance">

                            <div class="input-group-btn">
                                <button class="btn btn-default" type="submit">Go!</button>
                            </div>
                        </div>
                    </form>

                </div>

            </div>
        </div>

    </div>

</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
</body>
</html>