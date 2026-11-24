<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>contacts</title>
     <link rel="stylesheet" href="styles.css">
    <style>
        footer{
            bottom: 0px;
            position: absolute;
        }
        body{
            background:  rgb(49, 44, 44);
        }
    </style>
    
</head>
<body>
     <?php
    include 'header.php';
    ?>
    <center>
    <div class="card">
    <h3>Corn_tacts </h3>
    <p>
          <br> <p>info@unonymous.dark , +x 755 702-676-645  yeah just pray with your concern and we will answer and follow up😂😇😎</p>
    </p>
    <div>
</center>
    <footer>
        <?php
        $visitor = ' ';
        require 'checkVisitor.php';


        if ($vistor.contains("suspcious")){
            dontshowdetails();
            echo "are you DCI?";
        }
        else {
            showDetails();
        }
        function showDetails() {
           echo "<br> <p>info@unonymous.dark , +x 755 702-676-645  yeah just pray with your concern and we will answer and follow up</p>" ;
        }
        ?>
        <?php
                   echo "<br> <p>info@unonymous.dark , +x 755 702-676-645  yeah just pray with your concern and we will answer and follow up😂😇😎</p>" ;

        ?>
</footer>
</body>
</html>