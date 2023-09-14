<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Space+Mono:wght@400;700&display=swap" rel="stylesheet" />
  <style>
    <?php
    include "./styles/styles.css";
    ?>
  </style>
  <!-- <link rel="stylesheet" href="./styles/styles.css" /> -->
  <title>Web Development with PHP & Laravel</title>
</head>

<body>
  <div class="container">
    <div class="logo">
      <img src="./images/logo.png" alt="logo" />
      <h1>Assignment Task NO: 03</h1>
    </div>

    <div class="card">
      <form method="post" action="">
        <div class="input">
          <div class="bill-container">
            <div class="label-wrapper">
              <label for="inp-bill">First Subject Number</label>
            </div>
            <div class="inp-wrapper">
              <input class="inp-text" type="number" name="firstNumber" id="inp-bill" placeholder="0.0" required />

            </div>
          </div>
          <div class="bill-container">
            <div class="label-wrapper">
              <label for="inp-bill">Second Subject Number</label>
            </div>
            <div class="inp-wrapper">
              <input class="inp-text" type="number" name="secondNumber" id="inp-bill" placeholder="0.0" required />

            </div>
          </div>
          <div class="bill-container">
            <div class="label-wrapper">
              <label for="inp-bill">Third Subject Number</label>
            </div>
            <div class="inp-wrapper">
              <input class="inp-text" type="number" name="thirdNumber" id="inp-bill" placeholder="0.0" required />

            </div>
          </div>
          <div class="tip-container">
            <div class="label-wrapper">
              <label for="inp-tip">Select Action</label>
            </div>
            <div class="btn-wrapper">
              <button class="btn tip" name="operator" value="add"> Grade </button>

            </div>
          </div>
        </div>
      </form>
      <div class="output">
        <div class="line-wrapper">
          <div class="line-output">
            <div class="title-wrapper">
              <div class="title">
                <?php
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                  if (isset( $_POST["firstNumber"] ) && isset( $_POST["secondNumber"] ) && isset( $_POST["thirdNumber"] ) && isset( $_POST["operator"] )) {
                    $firstNumber = $_POST["firstNumber"];
                    $secondNumber = $_POST["secondNumber"];
                    $thirdNumber = $_POST["thirdNumber"];
                    $operator = $_POST['operator'];

                    $average = ( $firstNumber + $secondNumber + $thirdNumber ) / 3;
                    $letterGrade = '';
                    if ($average >= 90) {
                      $letterGrade = 'A';
                    }
                    elseif ($average >= 80) {
                      $letterGrade = 'B';
                    }
                    elseif ($average >= 70) {
                      $letterGrade = 'C';
                    }
                    elseif ($average >= 60) {
                      $letterGrade = 'D';
                    }
                    else {
                      $letterGrade = 'F';
                    }
                    echo "Results:<br>";
                    echo "Average Score: $average<br>";
                    echo "Letter Grade: $letterGrade<br>";
                  }
                }
                ?>
              </div>

            </div>

          </div>
        </div>

      </div>
    </div>
  </div>

  <!-- <script src="./js/app.js"></script> -->
 
</body>

</html>