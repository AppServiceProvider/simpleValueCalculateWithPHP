<?php
include "function.php";
?>

<head>
    <meta charset="UTF-8">
    <title> php</title>
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6 mx-auto">
                <form action="" method="post">
                    <table>
                        <tr>
                            <td>First Number</td>
                            <td><input type="number" name="first_number" id="input"></td>
                        </tr>
                        <tr>
                            <td>Second Number</td>
                            <td><input type="number" name="second_number"></td>
                        </tr>
                        <tr>
                            <td>Result</td>
                            <td><input type="submit" name="calculation" value="Calculation"><input type="reset" value="reset"></td>
                        </tr>
                    </table>
                </form>
                <?php
   if(isset($_REQUEST['calculation'])){
        $first_number=$_REQUEST['first_number'];
        $second_number=$_REQUEST['second_number'];
    if(empty($first_number) or empty($second_number)){

          echo "<span style='color:red'>Field must not be empty</span>";
   }else{
        
              echo "<h5>First number is: ".$first_number."<br>"." Second number is: ".$second_number."</h5>";
        $cal = new Calculation;

$cal->add($first_number, $second_number);
$cal->sub($first_number, $second_number);
$cal->mull($first_number, $second_number);
$cal->div($first_number, $second_number);
    }
       }
?>

            </div>
        </div>
    </div>
