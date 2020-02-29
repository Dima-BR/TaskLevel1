<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Project Level one</title>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <style>
            .page-holder {
              min-height: 100vh;
            }

            .bg-cover {
              background-size: cover !important;
            }
        </style>
    </head>
    <body>
        <div style="background: url(https://wallpaperplay.com/walls/full/9/7/e/162410.jpg)" class="page-holder bg-cover">
            <center>
                <form action="add.php" method="GET">
                    <input type="submit" value="ADD" class="btn btn-primary btn-lg mt-4 ">
                </form> 
                <form action="find.php" method="GET">
                    <input type="submit" value="FIND" class="btn btn-primary btn-lg mt-4 ">
                </form>
            </center>
        </div>
    </body>
</html>

