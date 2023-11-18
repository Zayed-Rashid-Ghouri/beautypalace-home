<?php
    session_start();
    session_unset();
    session_destroy();

    ?>
        <script>
            window.location.assign("login.php");
        </script>
    <?php
?>