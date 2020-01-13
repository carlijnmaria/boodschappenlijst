<?php
$boodschap = ["aardappelen", "aardbeien", "3 pakken melk", "yoghurt"];
?>

<ul>
    <?php
    foreach ($boodschap as $lijstje) {

        
        echo "<li>" . $lijstje . "</li>";
    }
    ?>
</ul>
