<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-strong-password-generator</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body>

    <!-- NOTE HTML -->
    <div class="container text-center">

        <!-- Title  -->
        <h1 class="mt-5 mb-4">
            Generatore di password
        </h1>

        <!-- Password length form -->
        <form method="GET" action="" class="mb-4">

        <div class="mb-3">
            <label for="length" class="form-label">
                Inserire la lunghezza desiderata:
            </label>
            <input type="number" id="length" class="form-control" name="length" min="8" max="32" required>
        </div>
            
            
            <button type="submit" class="btn btn-primary">
                Genera Password
            </button>
        </form>

    </div>
    
    <!-- NOTE PHP -->
    <?php

    //Generazione password
    function generateRandomPassword($length){

        $lowercase_chars = 'abcdefghijklmnopqrstuvwxyz';
        $uppercase_chars = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $numbers = '0123456789';
        $special_chars = '!"#$%&\'()*+,-./:;<=>?@[\]^_`{|}~';

        //Unisco tutti i caratteri
        $all_chars = $lowercase_chars . $uppercase_chars . $numbers . $special_chars;
    
        $password = '';
        
        //Creazione password casuale
        for ($i = 0; $i < $length; $i++) {
            $index = rand(0, strlen($all_chars) - 1);
            $password .= $all_chars[$index];
        }
        
        return $password;
    }
    
    //Stampa della password
    if (isset($_GET['length'])) {

        $password_length = intval($_GET['length']);

        $generated_password = generateRandomPassword($password_length);

        echo "<p class='text-center mb-3 fs-6'>&darr; La tua password di $password_length caratteri è &darr;</p>";
        echo "<h3 class='text-center'>$generated_password</h3>";
    }
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>