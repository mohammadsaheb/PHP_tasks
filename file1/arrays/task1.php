<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task 1</title>
</head>
<body>
    <ul>
        <?php 
            $colors = array('white', 'green', 'red');
            sort($colors);
            foreach($colors as $color) {
                echo "<li>$color</li>";
            }
            
            
        ?>
    </ul>
</body>
</html>