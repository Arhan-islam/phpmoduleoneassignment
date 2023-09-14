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
      <h1>Assignment Task NO: 02</h1>
    </div>
    <div class="card">
      <form method="post" action="">
        <div class="input">
          <div class="bill-container">
            <div class="label-wrapper">
              <label for="inp-bill">Temperature Value</label>
            </div>
            <div class="inp-wrapper">
              <input class="inp-text" type="number" name="firstNumber" id="inp-bill" placeholder="0.0" required />
            </div>
          </div>
          <div class="tip-container">
            <div class="label-wrapper">
              <label for="inp-tip">Convert in °C | °F </label>
            </div>
            <div class="btn-wrapper">
              <button class="btn tip" name="operator" value="celcius"> °C </button>
              <button class="btn tip" name="operator" value="farenhite"> °F </button>
            </div>
          </div>
        </div>
      </form>
      <div class="output">
        <div class="line-wrapper">
          <div class="line-output">
            <div class="title-wrapper">
              <div class="title">Final result</div>
              <div class="desc">°C | °F </div>
            </div>
            <div class="value">
              <?php
              if ($_SERVER["REQUEST_METHOD"] == "POST") {
                if (isset( $_POST["firstNumber"] ) && isset( $_POST["operator"] )) {
                  $firstNumber = $_POST["firstNumber"];
                  $operator = $_POST['operator'];

                  switch ($operator) {
                    case 'celcius':
                      $result = ( $firstNumber * ( 9 / 5 ) ) + 32;
                      break;
                    case 'farenhite':
                      $result = ( $firstNumber - 32 ) * ( 5 / 9 );
                      break;
                    default:
                      echo "Invalid operator";
                      break;
                  }
                  $formattedResult = number_format( $result, 2 );
                  echo "$formattedResult";
                }
              }
              ?>
            </div>
          </div>
        </div>
        <!-- <div class="btn reset">Reset</div> -->
        <div class="btn reset" onclick="resetform()">Reset</div>
      </div>
    </div>
  </div>

  <!-- <script src="./js/app.js"></script> -->
  <script>
    function resetform (){
      document.getElementById("calcForm").reset();
    }
  </script>
</body>

</html>