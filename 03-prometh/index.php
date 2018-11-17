<?php
    include 'includes/newclass.inc.php';
?>
<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
    <?php
        $object = new NewClass;
        $object2 = new NewClass;
        $object3 = new NewClass;

        $object->setNewProperty("This is data!");
        echo $object->getProperty();

        echo "<br>";

        $object2->setNewProperty("This is the new data!");
        echo $object2->getProperty();

        echo "<br>";

        $object3->setNewProperty("This is the BIG data!");
        echo $object3->getProperty();
    ?>
</body>
</html>
