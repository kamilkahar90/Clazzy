<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- external css -->
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <?php

    $post = $_POST;

    echo 'My name is ' . $post['name'] . ' and my age ' . $post['age'];

    ?>


    <!-- inline css -->
    <div class="text-hello-world" id="text-hi" name="hello-world">Hello World</div>
    <form action="<?php $_PHP_SELF ?>" method="POST">
        <input type="text" name="name" placeholder="Please enter name">
        <input type="text" name="age" placeholder="Please enter age">
        <input type="submit" value="Submit">
    </form>
    <p class="text-yellow">How are you!!</p>
</body>
<!-- internal css -->
<style>
    .text-green {
        color: green;
    }
</style>

<?php

// Index Array
// $car = [
//     'proton',
//     'perodua'
// ];

// // Associative Array
// $car = [
//     'brand' => 'proton',
//     'model' => 'saga',
//     'year' => '2023'
// ];


// // Multidimentional
// $car = [
//     'general' => [
//         'brand' => 'proton',
//         'model' => 'saga',
//         'year' => '2023',
//     ],
//     'engine' => [
//         'chasis' => 'dewcewddeqfe'
//     ]

// ];

// echo ($car['general']['year']);
// echo (json_encode($car));
?>


<script>
    // Function Declaration
    // function greeting(num1, num2) {
    //     return num1+num2;
    // }

    // console.log(greeting(4,5));

    // Function Expression
    // const addition = function greeting(num1, num2) {
    //     return num1 + num2;
    // }
    // const x = addition(7, 8)
    // console.log(x);


    // Function as Variable values
    // function greeting(num1, num2) {
    //     return num1 + num2;
    // }

    // let addition = greeting(4,5);

    // console.log(addition);

    // const a = ["apple", "pineapple"];

    // const food = a.map(function(s){
    //     return s.length;
    // })

    // Arrow Function
    // let addition = (num1,num2) => {
    //     num1+num2;
    // };
    // console.log("using arrow function", addition(1,3));
</script>

</html>