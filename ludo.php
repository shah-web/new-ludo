<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="ludo.css">

    <title>TravelTrip HTML Web Template</title>
  </head>
  <body>
<div class="header">

<div class="ludopic">
<img src="lu.jpg" alt="" height="500" width="500">
</div>
    <!-- end ludo images design -->


<div class="phpswitch">
<form method="post">
        
        <?php
             $x=rand(1,6);
             $y=rand(6,6);
             $z=rand(1,1);
             $a=rand(1,5);

             $ab=rand(1,6);

        switch($ab){
                    case 1: 
                    echo " <h3>fuuuk</h3> ";
                    break;
                    case 2: 
                    echo "<h3>dui</h3>";
                    break;
                    case 3: 
                    echo "<h3>teen</h3>";
                    break;
                    case 4: 
                    echo "<h3>char</h3>";
                    break;
                    case 5: 
                    echo "<h3>paan</h3>";
                    break;
                    case 6: 
                    echo "<h3>chokka</h3>";
                    break;
             }
        ?>
         <input type="submit">
        </form>
 <!-- start php ludo game -->
</div>
 



</div>
  



</body>
</html>




