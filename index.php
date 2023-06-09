<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>php-hotel</title>
</head>
<body>

<?php

    $hotels = [

        [
            'name' => 'Hotel Belvedere',
            'description' => 'Hotel Belvedere Descrizione',
            'parking' => true,
            'vote' => 4,
            'distance_to_center' => 10.4
        ],
        [
            'name' => 'Hotel Futuro',
            'description' => 'Hotel Futuro Descrizione',
            'parking' => true,
            'vote' => 2,
            'distance_to_center' => 2
        ],
        [
            'name' => 'Hotel Rivamare',
            'description' => 'Hotel Rivamare Descrizione',
            'parking' => false,
            'vote' => 1,
            'distance_to_center' => 1
        ],
        [
            'name' => 'Hotel Bellavista',
            'description' => 'Hotel Bellavista Descrizione',
            'parking' => false,
            'vote' => 5,
            'distance_to_center' => 5.5
        ],
        [
            'name' => 'Hotel Milano',
            'description' => 'Hotel Milano Descrizione',
            'parking' => true,
            'vote' => 2,
            'distance_to_center' => 50
        ],

    ];

?>

<main>

    <h1 class="text-center m-3">HOTELS</h1>

    <table class="table table-hover bg-white mt-5">
        <thead>
            <tr>
                <?php 
                    foreach ( $hotels[0] as $key  => $attributo ) {
                        echo '<th scope="col">' . $key . '</th>';
                    }
                ?>
            </tr>
        </thead>
        <tbody>
                <?php 

                    $park = $_GET["parcheggio"];

                    foreach ( $hotels as $atribute ) {


                        if($atribute["parking"] === true){
                            $atribute["parking"] = "yess";
                        } else {
                            $atribute["parking"] = "no";
                        };

                        if($park === $atribute["parking"]){
                            echo '<tr>' ;
                            echo '<td>' . $atribute["name"] . '</td>';
                            echo '<td>' . $atribute["description"] . '</td>';
                            echo '<td>' . $atribute["parking"]  . '</td>';
                            echo '<td>' . $atribute["vote"] . '</td>';
                            echo '<td>' . $atribute["distance_to_center"] . '</td>';
                            echo '</tr>' ;
                        };

                    } 

                ?>
        </tbody>
    </table>

    <div>
        <form action="index.php">

            <select name="parcheggio">
                <option value="yess" >yess</option>
                <option value="no">no</option>
            </select>

            <button type="submit" >CERCA</button>

        </form>
    </div>

</main>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>