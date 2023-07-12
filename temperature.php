<?php
if (isset($_POST['convert'])) {

    $t_input = $_POST['input'];
    $t_dropdown = $_POST['dropdown'];

    if ($t_dropdown == 'celsius') {

        $output = $t_input * 9 / 5 + 32;
        echo "<script>alert('Converted temperature is $output celsius') </script>";

    } else if ($t_dropdown == 'fahrenheit') {

        $output = ($t_input - 32) * 5 / 9;
        echo "<script>alert('Converted temperature is $output Fahrenheit') </script>";
    } 
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Temperature Conversion</title>
    <!-- bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <style>
        .content {
            height: 100vh;
        }
        .gapp {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 20px;
        }
    </style>
</head>

<body>
    <div class="row content d-flex justify-content-center align-items-center">
        <div class="col-md-5">
            <div class="box shadow bg-light p-4 form-container">
                <h3 class="mb-4 text-center fs-1">Temperature Conversion</h3>

                <form class="mb-3" action="" method="post">

                    <div class="row mb-3">
                        <label class="col-sm-3 col-form-label"></label>
                        <div class="col-sm-6">
                            <input type="number" class="form-control" name="input">
                        </div>
                    </div>

                    <div class="class-floating mb-3 gapp">
                    
                        <select name="dropdown" class="border-0" required>
                            <option value="celsius">Celsius C</option>
                            <option value="fahrenheit">Fahrenheit F</option>
                        </select>

                        <div class="mb-3">
                            <input type="submit" name="convert" class="btn btn-dark border-0 rounded-0 " value="Convert">
                        </div>
                    </div>



                </form>

            </div>
        </div>
    </div>
</body>

</html>