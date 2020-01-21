<?php

$loggedIn = false;

$js = array("React", "Angular", "Vue");

print_r($js);
echo '<br>';

var_dump($js);

echo '<br><br>' . $js[1];

echo '<hr>';

//Associative Array

$js = array(
  "React" => "Facebook",
  "Angular" => "Google",
  "Vue" => "Evan You"
);

var_dump($js);

echo '<h3>' . $js["React"] . '</h3>';
echo '<h3>' . $js["Vue"] . '</h3>';

$users = array(
  array(
    "userID" => "User1",
    "password" => "1234"
  ),
  array(
    "userID" => "User2",
    "password" => "4321"
  )
  );

  var_dump($users);
  echo '<h3>' . $users[0]["userID"] . '</h3>';

  //while loop

  echo '<h1>While Loop</h1>';

  $limit = 10;
  $num = 0;

  echo "<ul>";

  while($num <= $limit){
    echo "<li>$num</li>";
    $num++;
  }

  echo "</ul>";

  //for loop

  echo "<hr>";

  echo '<h1>For Loop</h1>';

  echo '<ul>';

  for ($i =0; $i <= $limit; $i++){
    echo "<li>$i</li>";
  };

  echo '</ul>';

// do while loop

  echo '<h1>Do while Loop</h1>';

  $num =0;

  echo "<ul>";

  do{
    echo "<li>$num</li>";
    $num++;
  } while($num <= $limit);

  echo "</ul>";


//for each

  echo '<h1>For each Loop</h1>';

  $names = array("Bob", "jane", "Charlie");

  echo "<ul>";

  foreach($names as $name){
    echo "<li>$name</li>";
  }

  echo "</ul>";

//#2 assciative foreach


echo '<h1>For each Asscociative Loop</h1>';

$languages = array(
  "PHP" => "Laravel",
  "Python" => "Django"
);

echo "<ul>";

foreach ($languages as $language => $framework) {
  echo "<li>Framework for $language: $framework</li>";
}

echo "</ul>";



//functions

function sayHi($name){
  echo "Hi $name!";
}

sayHi("Evelyn");

function add($num1, $num2){
  return $num1 + $num2;
}

echo '<h4> The sum of 20 and 30 is ' . add(20,30) . ' </h4>';



?>


<form action="dashboard.php" method="post">
  <input type="text" name="userid">
  <input type="password" name="password">
  <input type="submit" value="Log in">
</form>
