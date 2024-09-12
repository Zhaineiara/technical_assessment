<!DOCTYPE html>
<html>
    <head>
        <title>Prime</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!--bootstrap-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    </head>

    <body class="bg-dark p-3">
        <div class="container">
            <div class="container mt-3">
            <!--form to get the number from the user-->
            <form action="process.php" method="POST">
                <h1 class= "text-bg-info text-dark" style="text-align:center; margin-top:50px; padding:10px" >Prime Number Identifier and Factorial Solver</h1>
                <div class="container mt-3" style="text-align:center; padding-top:30px">
                    <label for="quantity" class="text-bg-light form-control-lg" style="width:200px">Enter a Number :</label>
                    <input type="number" id="given_number" name="quantity" class="form-control-lg" style="width:120px"required min="0">
                    <input type="submit" value="SUBMIT" class="btn btn-outline-info">
                </div>
            </form>
            </div>
        </div>
    </body>
</html>
            
