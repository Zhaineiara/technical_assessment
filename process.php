<!--
    INFORMATION ABOUT PRIME NUMBERS:
    1. 0 and 1 are neither prime nor composite.
    2. A prime number has two factors only, it is divided by 1 and the number itself.         
-->

<!DOCTYPE html>
<html>
    <head>
        <title>Prime</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!--bootstrap-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

        <style>
            table, th, td {
                border: 1px solid black;
                border-collapse: collapse;
            }
        </style>
    </head>


        <!--Starting point for analyzing the given number using PHP-->
        <?php $_numberGiven = $_POST["quantity"]; //getting value from html input type & store in php variable

            //initialization of variables with different data types
            $_factors = array(); //array to store the factors of given number
            $_factorialValue = 1; //starting value for factorial
            $_primeType = True; //help to idenfity the number type connected to arrayQuantity
            $_typeValue = ""; // storage for string connected to primeType

            //check if the given number is 0
            if ($_numberGiven == 0) {
                $_primeType = NULL; //set primetype to null
                array_push($_factors,  "0 and all whole numbers"); //push the string value
            }
            
            // check if the given number is 1
            if ($_numberGiven == 1) {
                $_primeType = NULL; //set primetype to null
            }
        
            //There are various process below specially for more than 1 given numbers.

            //FIRST PROCESS
            //Divide the given value from 1 to max value(given value).
            //If the remainder is 0, it will push the value of i into the array
            //Also, in this for loop, the factorial of the number will also be calculated
            for ($i = 1; $i <= $_numberGiven; $i++) {
                if ($_numberGiven % $i == 0) { //remainder checker
                    array_push($_factors, $i); //push value
                }
                $_factorialValue *= $i; //calculate factorial by with assignment operator.
            }

            //SECOND PROCESS
            //Finding the Array count and determine the primeType using if else
            $_arrayQuantity = count($_factors); //finding the number of items in an array

            if ($_arrayQuantity == 2){ //if quantity is exactly 2, primeType is True
                $_primeType = True;
            } elseif ($_arrayQuantity > 2){ //if quantity is more than 2, primeType is False
                $_primeType = False;
            }

            //THIRD PROCESS
            //Pushing value into typeValue based on primeType
            if ($_primeType === True){ //if primeType is True, store string Prime into typeValue
                $_typeValue = "Prime"; 
            } elseif($_primeType === NULL) { //if primeType is Null, store string Neither Prime nor Composite into typeValue
                $_typeValue = "Neither Prime nor Composite";
            }elseif($_primeType === False){ //if primeType is False, store string Composite into typeValue
                $_typeValue = "Composite"; 
            }
        ?>

    <body class="bg-dark p-3">
        <!--Time to retrive data from PHP using echo-->
        <div class="container">
            <div class="container mt-3">
                <div>
                    <h1 class= "text-bg-info text-dark" style="text-align:center; margin-top:50px; padding:10px">Prime Number Identifier and Factorial Solver</h1>
                    
                    <!--display outputs from PHP using echo-->
                    <table class="table" style="margin-top:50px; padding:10px; text-align:center">
                        <tr>
                            <th>Given Number</th>
                            <th>Type</th>
                            <th>Factorial</th>
                            <th>Factors</th>
                        </tr>

                        <tr>
                            <td><?php echo $_numberGiven . "\n";?></td> <!--display the given number-->
                            <td><?php echo $_typeValue . "\n";?></td> <!--display the number type-->
                            <td><?php echo $_factorialValue . "\n";?></td> <!--display the factorial of the number-->
                            <td>    
                                <?php 
                                    echo "( ";
                                    sort($_factors);
                                    $lastIndex = count($_factors) - 1; //negative index to get the last item in an array
                                
                                    foreach ($_factors as $index => $_item) {
                                        echo $_item;
                                        if ($index != $lastIndex) { //condition: if the index of the item is not equal to the last item, it will echo the comma
                                            echo ", ";
                                        }
                                    }

                                    echo " )"; 
                                ?> <!--display the factors of the number-->
                            </td>
                        </tr>        
                    </table>

                </div>
            </div>
        </div>

        <!--back button to go back to index.php to enter another number-->
        <div class="button" style="text-align:center; margin-top:30px;">
            <button id="back-button" class="btn btn-outline-info">ENTER ANOTHER NUMBER</button>
        </div>
    </body>

    <!--script to make to back-button works-->
    <script>
    function redirectToPage(page) {
            window.location.href = page;
        }

        document.getElementById("back-button").addEventListener("click", function() {
            redirectToPage("index.php");
        });
    </script>
</html>
