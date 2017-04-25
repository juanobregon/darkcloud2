<!DOCTYPE html>
<html>
<head>
    <title>Dark Cloud 2</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container">
        <div class="page-header">
            <h1>Enemies</h1>
        </div>
        <div class="row">

            <!-- Start Monster -->
            <div class="col-md-2">
                <div class="thumbnail">
                    <a href="javascript:">
                        <img src="assets/images/thumbs/bat.png" alt="">
                        <div class="caption text-center">
                            <h5><?php echo $bat->getName(); ?></h5>
                        </div>
                    </a>
                </div>
            </div>
            <!-- End Monster -->

        </div>
    </div>
</body>
</html>