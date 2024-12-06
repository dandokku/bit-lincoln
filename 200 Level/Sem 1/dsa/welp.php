<!-- THIS IS ASS, I DON'T WANT TO DO PHP, BUT I'VE GOT NOT CHOICE -->
 <!-- 
ARRAYS: are a type of data structure that allows us to store multiple elements of similar or different data types under a single variable. The elements can be accessed using their index or key

Types of Array in PHP
- Indexed or Numeric Arrays: An array with a numeric index where values are stored linearly

- Associative Arrays: An array with a string index where values are stored in key-value pairs

- Multidimensional Arrays: An array that contains multiple arrays as its elements
 
 -->

 <!-- 
 Arrays
 Operators
 Methods
 Switch Case
 Loops
 Functions
 -->


<?php 
// * Associative Array
$name_one = array(
    "Name" => "Kami",
    "Age" => 18,
    "Gender" => "Male",
    "Country" => "Nigeria",
);

foreach ($name_one as $key => $value) {
    echo "$key: $value\n";
};

?>

<!-- MULTI-DIMENSIONAL ARRAY -->
<?php 
$students = array(
    array("Name" => "Kami", "Age" => 18, "Gender" => "Male"),
    array("Name" => "Kamhi", "Age" => 19, "Gender" => "Female"),
    array("Name" => "Dandokku", "Age" => 20, "Gender" => "Male"),
);

//? $students is a two-dimensional array where each element is an associative array representing a student

$students_data = json_encode( $students );
echo "$students_data"
// echo $students[0]["Name"]

?>

<!-- Functions (using user login as an example)-->
 
<?php 
function userLogin($email = "welpwelp@gmail.com", $password = "welp123"){
    echo "$email";

    if(empty($email) || empty($password)){
        echo "Invalid Email or Password";
    } else {
        echo "Login Successful";
    }
};

userLogin()

?>