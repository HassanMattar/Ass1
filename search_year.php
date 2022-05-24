<?php
$search = $_POST['search_year'];
if (!$search || !is_numeric($search)){
    echo '<h1 style="color:red;">Please Enter Valid Year</h1>';
    exit();
}
date_default_timezone_set("Asia/Gaza");
$data = Date('y/d/m/ h:i:sa');
?>

<html>
<body>
    <h1>Search Date <?php echo $data; ?></h1>
    <style>
        h1 {
            color: green;
        }
    </style>
    <?php
    $cars = [
        "Toyota" => ['MADE' => "china", "COLOR" => "green", "YEAR" => "1999", "ENGINE_CC" => "2001"],
        "BMW" => ['MADE' => "gaza", "COLOR" => "red", "YEAR" => "2005", "ENGINE_CC" => "2006"],
        "Sports Car" => ['MADE' => "cairo", "COLOR" => "blue", "YEAR" => "1998", "ENGINE_CC" => "2007"],
        "Kia" => ['MADE' => "gaza", "COLOR" => "red", "YEAR" => "2008", "ENGINE_CC" => "2000"]
    ];

    $search = $_POST['search_year'];
    foreach ($cars as $name => $car) {
        foreach ($car as $name_property => $property) {
            if ($name_property != 'YEAR') continue;
            if ($search == $property) {
                echo '<h2> The information of ' . $name . '</h2>';
                foreach ($car as $property_name => $found_car) {
                    echo '<div>' . $property_name . ' : ' . $found_car . '</div>';
                }
                echo '<hr>';
                break;
            }
        }
    }
?>
</body>
</html>