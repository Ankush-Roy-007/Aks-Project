<?php
session_start();
/*if(isset($_POST['sub1'])){
    $_SESSION["sub1"]="Teacher 1";
}
if(isset($_POST['sub2'])){
    $_SESSION["sub2"]="Teacher 2";
}
if(isset($_POST['sub3'])){
    $_SESSION["sub3"]="Teacher 3";
}*/
$name="";
if(isset($_POST['sub'])){
    if(($_POST['sub'])=="Teacher 1"){
        $name="Subject 1";
        $_SESSION["sub1"]=$_POST['sub'];
    }
else if(($_POST['sub'])=="Teacher 2"){
        $name="Subject 2";
        $_SESSION["sub2"]=$_POST['sub'];
    }
else if(($_POST['sub'])=="Teacher 3"){
        $name="Subject 3";
        $_SESSION["sub3"]=$_POST['sub'];
    }
}
$_SESSION["yo"]=$_POST['sub'];
?>
<html>
    <head>
        <title>subject1</title>
    </head>
    <body style="background-image: linear-gradient(to bottom,#EAC6AE, #291c20);margin: 0px">
        <div style="float: right;background-image: linear-gradient(to bottom left, #ff8533,  #59979C);width: 100%;height: 210px;padding: 5px;margin: 0px">
            <img src="Capture.PNG" style="position: relative;left: 10px;position: relative;top: 10px">
            <h1 style="float: right;font-size: 40px;position:relative;top: 2px;color:black">JAYPEE UNIVERSITY OF INFORMATION TECHNOLOGY<p style="text-align: right; position: relative;top: 1px;font-size: 15px">Established under H.P. Legislative Assembly Act No. 14 of 2002<br> and Approved by UGC under section 2(f)</p></h1>
        </div>
        <hr>
        <div style="height: 600px">
        <table style="position: relative;left: 20%;font-size:20px;background-image:radial-gradient(#AECAEA, #AEEAD5);padding: 7px;border: 4px groove              black;width: 800px">
            <caption style="font-size: 45px"><img src="AA.jpg" style="float: left;position: relative;top: 30px"><strong><br><u><?php echo($name);?></u></strong><p style="text-align: right;font-size: 20px"><u><?php echo($_POST['sub']); ?></u></p></caption>
        <thead>
            <tr>
                <td style="border: 2px solid black">Rating on the basis of</td>
                <td colspan="5" style="position: relative;left: 0%;border: 2px solid black;text-align: center">rating</td>
                
            </tr>
        </thead>
            <form action="final.php" method="post">
        <tbody>
            <tr class="tr">
                <td style="border: 2px solid black">Confidance</td>
                <td style="border: 2px solid black"><input type="radio" name="rating1" value="2" required>Poor</td>
                <td style="border: 2px solid black"><input type="radio" name="rating1" value="4">Average</td>
                <td style="border: 2px solid black"><input type="radio" name="rating1" value="6">Good</td>
                <td style="border: 2px solid black"><input type="radio" name="rating1" value="8">Very Good</td>
                <td style="border: 2px solid black"><input type="radio" name="rating1" value="10">Excelent</td>
            </tr>
            <tr class="tr">
                <td style="border: 2px solid black">Behaviour</td>
                <td style="border: 2px solid black"><input type="radio" name="rating2" value="2" required>Poor</td>
                <td style="border: 2px solid black"><input type="radio" name="rating2" value="4">Average</td>
                <td style="border: 2px solid black"><input type="radio" name="rating2" value="6">Good</td>
                <td style="border: 2px solid black"><input type="radio" name="rating2" value="8">Very Good</td>
                <td style="border: 2px solid black"><input type="radio" name="rating2" value="10">Excelent</td>
            </tr>
            <tr class="tr">
                <td style="border: 2px solid black">Nature</td>
                <td style="border: 2px solid black"><input type="radio" name="rating3" value="2" required>Poor</td>
                <td style="border: 2px solid black"><input type="radio" name="rating3" value="4">Average</td>
                <td style="border: 2px solid black"><input type="radio" name="rating3" value="6">Good</td>
                <td style="border: 2px solid black"><input type="radio" name="rating3" value="8">Very Good</td>
                <td style="border: 2px solid black"><input type="radio" name="rating3" value="10">Excelent</td>
            </tr>
            <tr class="tr">
                <td style="border: 2px solid black">Knowledge</td>
                <td style="border: 2px solid black"><input type="radio" name="rating4" required value="2">Poor</td>
                <td style="border: 2px solid black"><input type="radio" name="rating4" value="4">Average</td>
                <td style="border: 2px solid black"><input type="radio" name="rating4" value="6">Good</td>
                <td style="border: 2px solid black"><input type="radio" name="rating4" value="8">Very Good</td>
                <td style="border: 2px solid black"><input type="radio" name="rating4" value="2">Excelent</td>
            </tr>
            <input type="submit" value="Submit" id="sbutton" style="border-radius: 10px;background-color: #ffb399;position: relative;top:435px;left: 990" onclick="myFunction1()">
        </tbody>
            </form>
             </table></div>
    </body>
    <style> 
                tr:nth-child(even) {background-color: #6CC8C8;}
                .tr:hover {color:red;}
                td
                    {
                        padding: 5px;
                    }
        #sbutton:hover{background-color:green}
                    
                                    
    </style>
    
</html>