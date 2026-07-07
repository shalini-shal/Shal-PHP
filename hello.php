<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
 integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

<?php
/* DFP40443: Full Stack Web Development 
   Activity: My First PHP Script 
   Name: Shalini
*/

$name = "Shalini";
$institution = "Politeknik KT";


// This line prints a message to the browser 
echo "Hello World!";

# You can also include HTML tags inside echo
echo "<h1>Welcome to PHP Programming</h1>";

echo "<hr><h2>My Name is $name</h2>";
echo "<br>";
echo $name;
echo "<br>";
echo "Institution Name: $institution";
echo "<br>";
echo 'Institution Name: $institution';


echo "<hr>";
echo "<h3>Constant</h3>";
//Define constant
define("SITE_URL", "https://pkt.mypolycc.edu.my/v1/");

//Using constant 
echo 'Thank you for visiting - ' . SITE_URL;


echo "<hr>";
echo "<h3>Constant VS Variable </h3>";

//1.Define a constant (fixed value)
define("TAX_RATE", 0.06); // 6% Sales Tax

// 2. Declaring Variables (Can change)
$itemName = "Laptop";
$price = 2501;

// 3. Calculation
$totalTax = $price * TAX_RATE;
$totalPrice = $price + $totalTax;

//4. Output
echo "Item:" . $itemName . "<br>";
echo "Base Price: RM" . $price . "<br>";
echo "Total with Tax: RM" . $totalPrice;

?>