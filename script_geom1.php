<?php
    /*echo "<pre>";
    print_r($_POST);
    echo "</pre><hr>";*/
    if (!empty($_POST['name']) && !empty($_POST['geom'])    ) {
        if ($_POST['geom']=="kwadrat") {
            header('location: ./square.php');
        }
        else {
            header('location: ./rectangle.php');
        }
    }
    else {
        ?>
            <script>
                history.back();
            <script>
        <?php
    }
?>