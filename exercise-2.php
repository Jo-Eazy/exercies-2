<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Variables, Data Types, and Scope</title>
    </head>
    <body>
        <?php
        // Task 1: Personal Bio with Variables
        // Declaring variables
        $name = "Jose";
        $age = 19;
        $favouriteColor = "black";
        $favouriteHobby = "creating"
        ?>

        <ul><li><i><?php echo "Hi, I'm $name. I'm $age years old, my favourite color is $favouriteColor, and I love $favouriteHobby."; ?></i></li></ul><br><br>

        <?php
        // Task 2: BMI Calculator
        $height = 1.7;
        $weight = 71;

        $bmi = $weight / ($height * $height);

        // Determining a BMI category
        // Conditional Statements (if / elseif / else)
        if ($bmi < 18.5) {
            $category = "Underweight";
        } elseif ($bmi < 25) {
            $category = "Normal weight";
        } elseif ($bmi < 30) {
            $category = "Overweight";
        } else {
            $category = "Obese";
        }
        ?>

        <ul><li></li><?php echo "Your BMI is: " . round($bmi, 1) . " ($category)";?></ul><br><br>

        <?php
        // Task 3: Global vs Local Variables
        // This is very similar to Python, however I still used ChatGPT to refresh my mind on the concept
        $globalVar = 10;

        function modifyGlobalVar() {
            global $globalVar; // Accessing global variable
            $globalVar += 5;
        }

        modifyGlobalVar();
        echo "The value of the global variable is now: $globalVar<br><br>";

        // Task 4: Type Conversion Experiment
        // Float value
        $floatValue = 12.7;

        // Convert float to integer
        $intValue = intval($floatValue);

        // Output values
        echo "Original float value: $floatValue<br>";
        echo "Converted integer value: $intValue<br><br>";

        //Task 5: Data Type Identification
        // Different data types
        $integerVar = 10;
        $floatVar = 3.14;
        $stringVar = "Hello PHP";
        $arrayVar = array(1, 2, 3);

        // Identify and print data types
        echo "Type of integerVar: " . gettype($integerVar) . "<br>";
        echo "Type of floatVar: " . gettype($floatVar) . "<br>";
        echo "Type of stringVar: " . gettype($stringVar) . "<br>";
        echo "Type of arrayVar: " . gettype($arrayVar) . "<br>";
        ?>
    </body>
</html>