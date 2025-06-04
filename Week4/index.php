<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php
    echo "clock";
    echo "<br>";
    $breakfast = "Bananas, Apples, and Oats";
    $lunch = "Fish, Chicken, and Vegetables";
    $dinner = "Steak, Carrots, and Broccoli";
    $hour = rand(1,23);
    if ($hour >= 5 && $hour <= 9){
        echo $breakfast;
    } else if ($hour >= 12 && $hour <= 14) {
        echo $lunch;
    } else if ($hour >= 19 && $hour <= 21) {
        echo $dinner;
    } else {
        echo "The animal are not being fed";
    }
    echo "<br>";
    echo "<br>";
    echo "FizzBuzz: ";
    echo "<br>";
    $num = rand(1,100);
    if ($num % 3 == 0 && $num % 5 == 0)
    {
        echo $num;
        echo "<br>";
        echo "FizzBuzz";
    } 
    else if ($num % 5 == 0) {
        echo $num;
        echo "<br>";
        echo "Buzz";
    }
    else if ($num % 3 == 0 ) {
        echo $num;
        echo "<br>";
        echo "Fizz";
    } else {
        echo $num;
    }
    echo "<br>";
    echo "<br>";
    echo "api";
    echo "<br>";
     function getUsers() {
         $url = "https://jsonplaceholder.typicode.com/users";
         $data = file_get_contents($url);
         return json_decode($data, true);
     }
     
     
    $users = getUsers();
    for ($i = 0; $i < count($users); $i++) {
        echo $users[$i]['name'];
        echo "<br>";
        echo "<a href='mailto:" . $users[$i]['email'] . "'>" . $users[$i]['email'] . "</a>";
        echo "<br>";
        echo $users[$i]['address']['street'];
        echo "<br>";
        echo $users[$i]['address']['city']; 
        echo "<br>";
        echo "<br>";
    }
    

     

    ?> 
    
</body>
</html>