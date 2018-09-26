<?php
    define( "TITLE", "Honest Clickbait Headlines" );
    include("functions.php");

    if( isset( $_POST["fix_submit"] ) ) {
        // call function
        checkForClickBait();
    }
?>

    <!DOCTYPE html>

    <html>

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>
            <?php echo TITLE; ?>
        </title>
        <link rel="stylesheet" href="css/styles.css">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>

    <body>
        <div class="container-fluid">
            <h1>
                <?php echo TITLE; ?>
            </h1>
            <p class="lead">Hate clickbaits? Turn those annoying headlines into realistic and honest ones using this simple program.</p>

            <div class="row">
                <form class="col-sm-8" action="" method="post">
                    <textarea placeholder="Paste clickbait headline here" class="form-control input-lg" name="clickbait_headline"></textarea><br>
                    <button type="submit" class="btn btn-primary btn-lg pull-right" name="fix_submit">Make honest!</button>
                </form>
                <div class="col-sm-4">
                    <h2>Example phrases you can try:</h2>
                    <ul>
                        <li>You won't believe what happens next</li>
                        <li>17 secrets doctors don't want you to know</li>
                        <li>European Professionals hate this trick</li>
                        <li>How one woman made $$$ in her bedroom</li>
                        <li>The 4 worst types of friends</li>
                        <li>Lose 15 kg in 3 months with this natural product</li>
                        <li>The hot new diet everyone is talking about</li>
                        <li>Five features paypal power users don't know about</li>
                        <li>20 Signs You're actually a sensitive person</li>
                        <li>The 15 most terrifying sea creatures</li>
                    </ul>
                </div>
            </div>
            <div class="results">
                <?php
            if ( isset( $_POST["fix_submit"] ) ) {
                
                // get first value in array returned by checkForClickBait() function
                // store it in a variable
                $clickBait = checkForClickBait()[0];
                
                // get second value in array returned by checkForClickBait() function
                // store it in a variable
                $honestHeadline = checkForClickBait()[1];
                
                // call function
                // pass two arguments in the function
                displayHonestHeadline( $clickBait, $honestHeadline );
            }
            ?>
            </div>
        </div>
        <!-- Bootstrap JS -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    </body>

    </html>
