<!DOCTYPE html>
<html lang="en" >

    <head>
        <meta charset="UTF-8">
        <title>smo1in||registration Form</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel='stylesheet prefetch' href='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css'>

        <link rel="stylesheet" href="css/style.css">

        <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
        <link rel="icon" href="favicon.ico" type="image/x-icon">


    </head>

    <body>
        <div class="container">
            <h1 class="span12 fs-main-title text-center" >smo1in</h1>
            <h2 class="span12 fs-title text-center" style="color: red">Registration Form</h2>
        </div>
        <!-- MultiStep Form -->
        <div class="row">
            <div class="container">
            <form id="msform" action="submit.php" method="post">
                    <!-- progressbar -->
                    <ul id="progressbar">
                        <li class="active">Personal Details</li>
                        <li>Adress Details</li>
                        <li>Comment</li>
                    </ul>
                    <!-- fieldsets -->
                    <fieldset>
                        <h2 class="fs-title">Personal Details</h2>
                        <h3 class="fs-subtitle">Tell us about you</h3>
                        <input type="text" name="first_name" placeholder="Your First Name" required=""/>
                        <input type="text" name="second_name" placeholder="Your Second Name" required=""/>
                        <input type="text" name="phone" placeholder="Phone" required=""/>
                        <button type="button" name="next" class="next action-button">NEXT</button>
                    </fieldset>
                    <fieldset>
                        <h2 class="fs-title">Adress Details</h2>
                        <h3 class="fs-subtitle">Enter Your Address</h3>
                        <input type="text" name="street" placeholder="Street" required=""/>
                        <input type="text" name="building" placeholder="Building №" required=""/>
                        <input type="text" name="city" placeholder="City" required=""/>
                        <button type="button" name="previous" class="previous action-button-previous">PREVIOUS</button>
                        <button type="button" name="next" class="next action-button">NEXT</button>
                    </fieldset>
                    <fieldset>
                        <h2 class="fs-title">Comment</h2>
                        <h3 class="fs-subtitle">Fill in your comment</h3>
                        <textarea name="comment" placeholder="Comments"></textarea>
                        <button type="button" name="previous" class="previous action-button-previous">PREVIOUS</button>
                        <button type="submit" name="submit" class="submit action-button">SUMBIT</button>
                    </fieldset>
                </form>
            </div>
        </div>
        <!-- /.MultiStep Form -->
        <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js'></script>
        <script src='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js'></script>
        <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js'></script>


        <script  src="js/index.js"></script>

    </body>

</html>