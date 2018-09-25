<?php
    define( "TITLE", "Honest Clickbait Headlines" );
    if(isset($_POST["fix_submit"])) {
         
            // grab value from textarea in $_POST collection
            // make all letters lowercase strtolower()
            // store in a variable
            $clickBait = strtolower($_POST["clickbait_headline"]);
        
        // store array of clickbait words or phrases
        $a = array (
        "scientists",
            "doctors",
            "hate",
            "stupid",
            "weird",
            "simple",
            "trick",
            "shocked me",
            "you'll never believe",
            "hack",
            "epic",
            "unbelievable"
        );
        
        // store array of replacement words or phrases
        // keep the same order as the clickbait words or phrases
        $b = array (
        "so-called scientists",
            "so-called doctors",
            "aren't hated by",
            "average",
            "completely normal",
            "ineffective",
            "method",
            "is no different than the others",
            "you won't really be surprised by",
            "slightly improve",
            "boring",
            "normal"
        )
            
            // replace words
            // uppercase the first letter of every word
            // store in a variable
            $honestHeadline = str_replace($a, $b, $clickBait);
        
        
    } ?>

    <!DOCTYPE html>

    <html>

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>
            <?php echo TITLE; ?>
        </title>

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
        <div class="container">
            <h1>
                <?php echo TITLE; ?>
            </h1>
            <p class="lead">Hate click bait? Turn those annoying headlines into realistic and honest ones using this simple program.</p>

            <div class="row">
                <form class="col-sm-8 col-sm-offset-2" action="" method="post">
                    <textarea placeholder="Paste clickbait headline here" class="form-control input-lg" name="clickbait_headline"></textarea><br>
                    <button type="submit" class="btn btn-primary btn-lg pull-right" name="fix_submit">Make honest!</button>
                </form>
            </div>

            <?php
                if(isset($_POST["fix_submit"])){
                    echo "<strong class='text-danger'>Original Headline</strong><h4>".ucwords($clickBait). "</h4><hr>";
                    echo "<strong class='text-success'>Honest Headline</strong><h4>".ucwords($honestHeadline). "</h4>";
                }
            ?>

        </div>
        <!-- Bootstrap JS -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    </body>

    </html>
