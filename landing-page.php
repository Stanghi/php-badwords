<?php
$badwords = $_POST['badwords'];
$paragraph = $_POST['paragraph'];
$censored_paragraph = str_replace($badwords, '***', $paragraph);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>landing-page</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial
        }

        h4 {
            margin: 10px 0;
        }

        .container {
            display: flex;
            justify-content: space-between;
            width: 65%;
            margin: 20px auto;
        }

        .paragraph-box {
            width: 45%;
            border: 1px solid black;
            border-radius: 20px;
            padding: 10px 20px;
            overflow-wrap: break-word;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="paragraph-box">
            <h2>Original paragraph: </h2>
            <h4><?php echo 'Length =' . ' ' . strlen($paragraph); ?></h4>
            <p><?php echo $paragraph ?> </p>
        </div>

        <div class="paragraph-box">
            <h2>Censored paragraph: </h2>
            <h4><?php echo 'Length =' . ' ' . strlen($censored_paragraph); ?></h4>
            <p><?php echo $censored_paragraph; ?> </p>
        </div>
    </div>

</body>

</html>