<?php
if (isset($_GET['convert'])) {
    $cc_input = $_GET['input'];
    $cc_dropdown = $_GET['dropdown'];

    if ($cc_dropdown == 'usd') {

        $output = $cc_input * 0.0091932909;
        echo "<script>alert('$output US Dollar') </script>";

    }else if ($cc_dropdown == 'pound'){

        $output = $cc_input * 0.0070765592;
        echo "<script>alert('$output British Pound') </script>";
        
    }else if ($cc_dropdown == 'euro'){

        $output = $cc_input * 0.0082634106;
        echo "<script>alert('$output Euro') </script>";
        
    }else if ($cc_dropdown == 'indr'){

        $output = $cc_input * 0.75400852;
        echo "<script>alert('$output Indian Rupees') </script>";
        
    }else if ($cc_dropdown == 'kwd'){

        $output = $cc_input * 0.0028191626;
        echo "<script>alert('$output Kuwaiti Dinner') </script>";
        
    }else if ($cc_dropdown == 'pkr'){

        $output = $cc_input * 2.5521991;
        echo "<script>alert('$output Pakistani Rupees') </script>";
        
        
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Currency Converter</title>
    <!-- bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <style>
        .content {
            height: 100vh;
        }
       
    </style>
</head>

<body>
    <div class="row content d-flex justify-content-center align-items-center">
        <div class="col-md-5">
            <div class="box shadow bg-light p-4 form-container">
                <h3 class="mb-4 text-center fs-1">Currency Converter</h3>

                <form class="mb-3" action="" method="get">

                    <div class="row mb-3">
                        <label class="col-sm-3 col-form-label">Enter Value</label>
                        <div class="col-sm-6">
                            <input type="number" class="form-control" name="input">
                        </div>
                    </div>

                    <div class="class-floating mb-3">
                        <label class="col-sm-3 col-form-label">Select Currency</label>

                        <select name="dropdown" class="border-0" required>
                            <option value="usd">US Dollar</option>
                            <option value="pound">British Pound </option>
                            <option value="euro">Euro</option>
                            <option value="indr">Indian Rupee</option>
                            <option value="kwd">Kuwaiti Dinner</option>
                            <option value="pkr">Pakistani Rupee</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <input type="submit" name="convert" class="btn btn-dark btn-start border-0 rounded-0 " value="Convert">

                    </div>


                </form>

            </div>
        </div>
    </div>
</body>

</html>