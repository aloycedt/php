<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cjdreamy</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        * {
            box-sizing: border-box;
            border-radius: 10px;
        }

        body {
            background: linear-gradient(45deg, #9d660d, #305905, #2e0333);
            background-repeat: no-repeat;
            min-height: 100vh; /* Prevents background cutoff if form gets tall */
            font-family: sans-serif;
            margin: 0;
        }

        .form-container {
            display: flex;
            flex-direction: column;
            align-items: center;
            margin-top: 20px;
        }

        input[type="text"],
        input[type="number"],
        select {
            background: transparent;
            color: #004d40; /* Darker teal so it's readable against the gradient */
            border: 1px solid #333;
            height: 35px; /* Fixed typo: 'hieght' -> 'height' */
            width: 220px;
            padding: 5px 10px;
            margin-bottom: 15px;
        }

        input[type="submit"] {
            border: 0;
            background: blue;
            color: white;
            width: 220px;
            height: 40px; /* Fixed typo: 'hieght' -> 'height' */
            cursor: pointer;
            transition: all 0.2s ease;
        }

        input[type="submit"]:hover {
            background-color: green;
            transform: scale(1.05); /* Fixed syntax: added comma & adjusted so button doesn't shrink tiny */
        }

        dialog::backdrop {
            background-color: rgba(0, 0, 0, 0.5);
            backdrop-filter: blur(4px);
        }

        dialog {
            border: none;
            border-radius: 8px;
            padding: 20px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
        }
    </style>
</head>
<body>

    <?php
    include 'header.php';
    ?>

    <div style="text-align: center; margin-top: 10px;">
        <?php
        echo date("l jS \of F Y h:i:s A");
        ?>
    </div>

    <div class="form-container">
        <form action="show.php" method="POST">
            <label for="fname">Enter your First name</label><br>
            <input type="text" id="fname" name="fname"><br>

            <label for="lname">Enter your Last name</label><br>
            <input type="text" id="lname" name="lname"><br>

            <label for="age">Enter your age</label><br>
            <input type="number" id="age" name="age"><br>

            <label for="county">Select your County</label><br>
            <select name="county" id="county">
                <option value="">--NOT LIVING--</option>
                <option value="Kiambu">Kiambu</option>
                <option value="Nairobi">Nairobi</option>
                <option value="Kilifi">Kilifi</option> <!-- Fixed value typo: 'Kilif' -> 'Kilifi' -->
                <option value="Kisumu">Kisumu</option>
                <option value="Kajiado">Kajiado</option>
            </select><br>

            <input type="submit" value="Submit"><br>
            <hr>

            <?php
            function test_input($data) {
                $data = trim($data);
                $data = stripslashes($data);
                $data = htmlspecialchars($data);
                return $data;
            }

            function validate_input($data) {
                if (empty($data)) {
                    return "This field is required.";
                }
                return "";
            }

            function chekInputs() {
                // Uses ?? '' to avoid PHP "Undefined array key" warnings before the form is submitted
                $fnameErr = validate_input($_POST["fname"] ?? '');
                $lnameErr = validate_input($_POST["lname"] ?? '');
                $ageErr = validate_input($_POST["age"] ?? '');
                $countyErr = validate_input($_POST["county"] ?? '');

                if ($fnameErr || $lnameErr || $ageErr || $countyErr) {
                    echo "<p style='color: red;'>Please fill out all fields.</p>";
                    return false;
                }
                return true;
            }
            ?>
        </form>
    </div>

    <script>
        // Safely checks if #aibtn exists (e.g., inside header.php) before adding the click event
        const aiBtn = document.getElementById("aibtn");
        if (aiBtn) {
            aiBtn.addEventListener("click", function() {
                window.location.href = "ai.html";
            });
        }
    </script>

<!--
<script>
function send(){
// let myval = document.getElementById('name').value;

fetch('test.php', {
method: 'POST',
headers: {'Content-Type':'application/x-www-form-urlencoded'},
body: 'name=' + encodeURIComponent(myval) // Note: changed encodedURIComponent to encodeURIComponent
})
.then(res => res.text())
.then(data => console.log(data));
}

</script>
-->

</body>
</html>
