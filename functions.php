<?php 
    
         function checkForClickBait() {
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
             
            // in order to access the variables globally
             return array($clickBait, $honestHeadline);
         }

function displayHonestHeadline($x, $y) {
    echo "<strong class='text-danger'>Original Headline</strong><h4>".ucwords($x). "</h4><hr>";
    echo "<strong class='text-success'>Honest Headline</strong><h4>".ucwords($y). "</h4>";
}

?>
