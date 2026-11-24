<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
     <?php
    include 'header.php';
    ?>
    <h1>confirmation you filled this form.</h1>
  <span><h4>First NAME:<h4></span> <span style="color: blue"><?php echo $_POST["fname"];?> </span>
    <span><h4>Last NAME:<h4></span> <span style="color: blue"><?php echo $_POST["lname"];?> </span>
  <span><h4>AGE:<h4></span> <span style="color: blue"><?php echo $_POST["age"];?> </span>
  <span><h4>county:<h4></span> <span style="color: blue"><?php echo $_POST["county"];?> </span>
<!-- <?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fname != $_POST["fname"];
    $lname != $_POST["lname"];
    $age != $_POST["age"];
    echo "<h1>confirmation you filled this form.</h1>";
    echo "<span><h4>First NAME:<h4></span> <span style='color: blue'>$fname</span><br>";
    echo "<span><h4>Last NAME:<h4></span> <span style='color: blue'>$lname</span><br>";
    echo "<span><h4>AGE:<h4></span> <span style='color: blue'>$age</span><br>";
}
    else {
        echo "<h1>Please fill out the form.</h1>";
    }?> -->
</body>
</html>
