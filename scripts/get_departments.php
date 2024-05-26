<?php
    include realpath(dirname(__FILE__) . '/../config.php');
    include ROOT_PATH . 'includes/db.php';

    $sql = "SELECT * FROM departments";

    try {
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows ($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<div class='container__content__departments__dep'>";
                echo "<h2 class='container__content__departments__dep__name'>" . $row["name"] . "</h2>";
                echo "<p class='container__content__departments__dep__description'>" . $row["description"] . "</p>";
                echo "</div>";
            }
        } else {
            echo "0 results";
        }
        
    } catch (mysqli_sql_exception $e) {
        echo "Query failed: " . $e->getMessage();
    }

?>