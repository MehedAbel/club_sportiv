<?php
    include realpath(dirname(__FILE__) . '/../config.php');
    include ROOT_PATH . 'includes/db.php';

    $sql = "SELECT * FROM gallery";

    try {
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<div class='container__content__gallery__img'>";
                echo "<img src='" . BASE_URL . $row["image_path"] . "' alt='" . $row["name"] . "'>";
                echo "</div>";
            }
        } else {
            echo "0 results";
        }    

    } catch (mysqli_sql_exception $e) {
        echo "Query failed: " . $e->getMessage();
    }

    mysqli_close($conn);
?>