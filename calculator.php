<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Space+Mono:wght@400;700&display=swap" rel="stylesheet" />
    <style>
        <?php
        include "./styles/styles.css";
        ?>
    </style>
    <title>Web Development with PHP & Laravel</title>
</head>

<body>
    <div class="container">
        <div class="logo">
            <img src="./images/logo.png" alt="logo" />
            <h1>Assignment Task NO: 07</h1>
        </div>

        <div class="card">
            <form method="post" action="">
                <div class="input">
                    <div class="bill-container">
                        <div class="label-wrapper">
                            <label for="inp-bill">First Number</label>
                        </div>
                        <div class="inp-wrapper">
                            <input class="inp-text" type="number" name="firstNumber" id="inp-bill" placeholder="0.0"
                                required />
                            <img src="./images/icon-dollar.svg" alt="dollar-icon" />
                        </div>
                    </div>
                    <div class="bill-container">
                        <div class="label-wrapper">
                            <label for="inp-bill">Second Number</label>
                        </div>
                        <div class="inp-wrapper">
                            <input class="inp-text" type="number" name="secondNumber" id="inp-bill" placeholder="0.0"
                                required />
                            <img src="./images/icon-dollar.svg" alt="dollar-icon" />
                        </div>
                    </div>
                    <div class="tip-container">
                        <div class="label-wrapper">
                            <label for="inp-tip">Select Action</label>
                        </div>
                        <div class="btn-wrapper">
                            <button class="btn tip" name="operator" value="add"> + </button>
                            <button class="btn tip" name="operator" value="sub"> - </button>
                            <button class="btn tip" name="operator" value="mul"> * </button>
                            <button class="btn tip" name="operator" value="div"> / </button>
                        </div>
                    </div>
                </div>
            </form>
            <div class="output">
                <div class="line-wrapper">
                    <div class="line-output">
                        <div class="title-wrapper">
                            <div class="title">Total Amount</div>
                            <div class="desc">/ person</div>
                        </div>
                        <div class="value">$
                            <?php
                            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                                if (isset( $_POST["firstNumber"] ) && isset( $_POST["secondNumber"] ) && isset( $_POST["operator"] )) {
                                    $firstNumber = $_POST["firstNumber"];
                                    $secondNumber = $_POST["secondNumber"];
                                    $operator = $_POST['operator'];

                                    switch ($operator) {
                                        case 'add':
                                            $result = $firstNumber + $secondNumber;
                                            break;
                                        case 'sub':
                                            $result = $firstNumber - $secondNumber;
                                            break;
                                        case 'mul':
                                            $result = $firstNumber * $secondNumber;
                                            break;
                                        case 'div':
                                            if ($secondNumber == 0) {
                                                echo "Division by zero is not allowed.";
                                            }
                                            else {
                                                $result = $firstNumber / $secondNumber;
                                            }
                                            break;

                                        default:
                                            echo "Invalid operator";
                                            break;
                                    }
                                    echo "$result";
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