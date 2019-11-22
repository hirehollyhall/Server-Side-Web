<html>
	<head>
        <meta charset="utf-8">
        <title>Half your age plus seven calculator</title>
        <style>
        	h1 {text-align: center;}
        	h2 {text-align: center;}
        </style>
    </head> 
    <?php
    	$bkgnd = "https://i0.pickpik.com/photos/110/979/798/question-question-mark-help-response-preview.jpg";
    	$newhdr = "Should we Date?";
    	$fntclr = "black";
    	if (isset($_REQUEST['age1']) and isset($_REQUEST['age2']) and !empty($_REQUEST['age1']) and !empty($_REQUEST['age2'])){
        	$age1=$_REQUEST['age1'];
        	$age2=$_REQUEST['age2'];
            $lower_limit=$age1/2 + 7;
            $upper_limit=($age1-7)*2;
            if (($age2>=$lower_limit) and ($age2<=$upper_limit)) {
                $bkgnd = "https://cdn4.vectorstock.com/i/1000x1000/64/93/simple-love-heart-pink-graphic-vector-19446493.jpg";
                $newhdr = "Yes, go right ahead!";
                $fntclr = "white"; 
            }
            elseif ($age2<$lower_limit) {
                	$bkgnd = "https://www.freevector.com/uploads/vector/preview/7845/FreeVector-Sad-Punk-Cartoon.jpg";
                	$newhdr = "You're way too old, you creeper!!"; 
                	$fntclr = "blue"; 
            }
            elseif ($age2>$upper_limit) {
                	$bkgnd = "https://www.freevector.com/uploads/vector/preview/7845/FreeVector-Sad-Punk-Cartoon.jpg";
                	$newhdr = "You're too young!"; 
                	$fntclr = "blue"; 
            }
            
    		$_REQUEST['age1'] = null;
    		$_REQUEST['age2'] = null;
        }
        echo "<body background = '$bkgnd'>";
        echo "<br><h1><font color='$fntclr'>$newhdr</h1>";
    ?> 
    <form>
        <br><br><h2>Enter your age:<br>
        <input type=number name=age1><br><br>
        Enter the age of your prospective date:<br>
        <input type=number name=age2><br><br>
        <input type=submit value="calculate"></h2>
    </form>
    </body>
</html>