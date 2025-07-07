<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Game Library</title>
    <style>
        .title {
            text-align: center;
            color: darkblue;
        }

        .subtitle {
            color: darkred;
        }

    </style>
</head>
<body>
    <h1 class="title">Pokémon Battle Results</h1>
    <?php 
        require('connect.php');
        
        $sql_join_query = " SELECT p.`COL 2` AS PokemonName, p.`COL 3` AS PrimaryType, p.`COL 12` AS Legendary, COUNT(c.`COL 3`) AS Wins
            FROM pokemon AS p
            JOIN combats AS c ON p.`COL 1` = c.`COL 3`
            GROUP BY p.`COL 2`, p.`COL 3`, p.`COL 12`";
        $datas = mysqli_query($connect, $sql_join_query);
    ?>
    <?php
        $num = 0;
        echo '<h2>Pokémon - Primary Type - Legendary - Wins</h2>';
        while($data = mysqli_fetch_assoc($datas)) {
                $num++;
                if ($num % 2 == 0) {
                    echo '<div style="background-color: lightblue; padding: 10px; margin: 10px;">';
                    echo '<h4>';
                    echo $num . ' - ' . $data['PokemonName'] . ' - ' . $data['PrimaryType']. ' - '. $data['Legendary']. ' - ' .$data['Wins'];
                    echo '</h4>';
                    echo '</div>';
                } else {
                    echo '<div style="background-color: lightgreen; padding: 10px; margin: 10px;">';
                    echo '<h4>';
                    echo $num . ' - ' . $data['PokemonName'] . ' - ' . $data['PrimaryType']. ' - '. $data['Legendary']. ' - ' .$data['Wins'];
                    echo '</h4>';
                    echo '</div>';
                }
        }
    ?>
</body>
</html>