<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Fira+Mono:wght@500&display=swap" rel="stylesheet">
    <title>Webpage</title>
</head>
<body>
    <style>
        :root {
            --penguin-size: 300px;
            --penguin-skin: black;
            --penguin-belly: white;
            --penguin-beak: orange;
        }

        @media (max-width: 350px) {
            :root {
                /* Only change code below this line */
                --penguin-size: 200px;
                --penguin-skin: black;
                /* Only change code above this line */
            }
        }

        .penguin {
            position: relative;
            margin: auto;
            display: block;
            margin-top: 5%;
            width: var(--penguin-size, 300px);
            height: var(--penguin-size, 300px);
        }

        /* ... (rest of your CSS styles) ... */

    </style>
    <div class="penguin">
        <!-- ... (rest of your HTML content) ... -->
    </div>
    
    <style>
        p {
            text-align: center;
            font-family: \'Fira Mono\', monospace;
            font-size: x-large;
            color: blue;
        }
    </style>

    <p> 
        Hi, I am <strong>Fatimaezzahra</strong>
        <br>
        I have deployed this webpage on the AWS cloud using Terraform.
        <br>
    </p>

    <center><img src="Profile.jpg" style="width: 425px; height: 285px; align-content: center;"></center>
</body>
</html>
