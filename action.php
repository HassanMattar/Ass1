<?php
$search = $_POST['search'];
if (!$search){
    echo '<h1 style="color:red;">Please Enter Valid Text</h1>';
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
    $searchName = $_POST['search'];
    foreach ($cars as $name => $car) {
        if ($name != $search) continue;
        foreach ($car as $property) {
                echo '<h2> The information of ' . $name . '</h2>';
                foreach ($car as $propertyName => $InformationCar) {
                    echo '<div>' . $propertyName . ' : ' . $InformationCar . '</div>';
                }
                echo '<hr>';
                break;
            
        }
    }
?>
</body>
</html>


