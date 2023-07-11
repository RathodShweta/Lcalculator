<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        h1 {
            font-family: 'Caprasimo', cursive;
            font-family: 'Tilt Prism', cursive;
            margin-top: 35px;
            color: purple;
            text-align: center;
        }

        input[type="text"] {
            width: 250px;
            height: 30px;
        }

        input[type="submit"] {
            margin-top: 35px;
            width: 250px;
            height: 30px;
            background: white;
        }

        body {
            background: red;
        }

        .result {
            text-align: center;
            margin-top: 20px;
        }
    </style>
</head>
<body>
<p>
    <?php
    $msg = "";
    $error = "";
    if (isset($_GET['msg'])) {
        extract($_GET);
        echo "<h3 style='color: green;'>$msg</h3>";
    } else {
        extract($_GET);
        echo "<h3 style='color: red;'>$error</h3>";
    }
    ?>
</p>

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
    <h1>Love Calculator</h1>
    <table width="20%" align="center">
        <tr>
            <td style="text-align: center;">Your Name:</td>
        </tr>
        <tr>
            <td>
                <input type="text" style="width: 300px;" name="your_name" placeholder="Name">
            </td>
        </tr>
        <tr>
            <td style="text-align: center;">Partner's Name:</td>
        </tr>
        <tr>
            <td>
                <input type="text" style="width: 300px;" name="part_name" placeholder="Name">
            </td>
        </tr>
        <tr>
            <td style="text-align: center;">
                <input type="submit" name="Calculator" value="Calculate">
            </td>
        </tr>
    </table>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $yourName = $_POST["your_name"];
    $partnerName = $_POST["part_name"];

    $result = strlen($yourName) + strlen($partnerName);
    ?>
    <div class="result">
        <h2>Result: <?php echo $result; ?></h2>
    </div>
    <?php
}
?>
</body>
</html>
