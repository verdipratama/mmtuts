<?php
    // Tidak boleh kebalik menaruh include nanti error!
    include 'includes/parentclass.inc.php';
    include 'includes/newclass.inc.php';
    
    // PUBLIC AND PROTECTED
    $object = new NewClass;

    // PRIVATE
    // $object = new ParentClass;
?>
<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
    <?php
        // PUBLIC
        echo $object->name;
        
        // PROTECTED
        // echo $object->name();

        // PRIVATE
        // echo $object->name();
    ?>
</body>
</html>
