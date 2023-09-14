<?php
$name = "Md.Arhan Islam";
$age = 28;
$country = "Bangladesh";
$designation = "Freelance Web Developer";
$description = "I’m working on a professional, 
visually sophisticated and technologically proficient,
 responsive and multi-functional React Components.";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <title>Personal Portfolio Website</title>
    <!----CSS link----->
    <!-- <link rel="stylesheet" href="style.css" /> -->
    <style>
        <?php include "style.css" ?>
    </style>

</head>

<body>
    <div class="hero">
        <div class="content">
            <span class="title"><?php echo $designation ?></span>
            <h4>Hello, I’m <br>
                <span>
                    <?php echo $name ?>,
                </span><br> 
                MY age is <?php echo $age ?> years old,<br>
                I live in <?php echo $country ?>

            </h4>
            <p>
                <?php echo $description ?>

            </p>
            <a href="#" class="btn">Download CV</a>
        </div>
    </div>
</body>

</html>
