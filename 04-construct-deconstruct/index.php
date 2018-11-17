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
        echo $object->getProperty();
    ?>
</body>
</html>
