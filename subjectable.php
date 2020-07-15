<?php
session_start();
?>
<html>
    <head>
        <title>subject feedback</title>
    </head>
    <body style="margin: 0px">
          <div style="float: right;background-image: linear-gradient(to bottom left, #ff8533,  #59979C);width: 100%;height: 210px;padding: 4px;margin: 0px">
            <img src="Capture.PNG" style="position: relative;left: 10px;position: relative;top: 10px">
            <h1 style="float: right;font-size: 40px;position:relative;top: 2px;color:black">JAYPEE UNIVERSITY OF INFORMATION TECHNOLOGY<p style="text-align: right; position: relative;top: 1px;font-size: 15px">Established under H.P. Legislative Assembly Act No. 14 of 2002<br> and Approved by UGC under section 2(f)</p></h1>
            </div><hr>
        <div style=" margin: 0px;background-color:#4dd2ff;position: relative;top:-8px;padding: 4px">
            <div><h2><u><?php echo "Welcome ".$_SESSION["uname"];?></u></h2></div>
            <div style="float:right;position:relative;top:-65px"><h2><u><a href="logout.php">Logout</a></u></h2></div>
            <br>
            <p style="text-align: center;font-size: 80px"><strong><u>Subjects</u></strong></p>
            <form method="post" action="individualsubject.php">
            <?php 
                if(isset($_SESSION["sub1"])){
                ?> <p style="font-size:50px;margin-left: 35%"> <?php echo("Feedback Submitted"); ?> </p> <?php
                }
                else{
                ?> <input type="submit" value="Teacher 1" name="sub" style="font-size:50px;margin-left: 42%;border-radius:30px"><br><br><?php
                }
                if(isset($_SESSION["sub2"])){
                    ?><p style="font-size:50px;margin-left: 35%"> <?php echo("Feedback Submitted"); ?> </p> <?php
                }
                else{
                ?> <input type="submit" value="Teacher 2" name="sub" style="font-size:50px;margin-left: 42%;border-radius:30px"><br><br><?php
                }
                if(isset($_SESSION["sub3"])){
                    ?><p style="font-size:50px;margin-left: 35%"> <?php echo("Feedback Submitted"); ?> </p> <?php
                }
                else{
                ?> <input type="submit" value="Teacher 3"  name="sub" style="font-size:50px;margin-left: 42%;border-radius:30px"><?php
                }?>
            </form>
        </div>
    </body>
</html>