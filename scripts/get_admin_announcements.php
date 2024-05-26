<?php
    include realpath(dirname(__FILE__) . '/../config.php');
    include ROOT_PATH . 'includes/db.php';

    $sql = "SELECT * FROM announcements";

    try {
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<div class='container__content__admin_announcements__an'>";
                echo "<h2 class='container__content__admin_announcements__an__title'>" . $row["title"] . "</h2>";
                echo "<p class='container__content__admin_announcements__an__date'>" . $row["creation_date"] . "</p>";
                echo "<div class='container__content__admin_announcements__an__actions'>";
                echo "<button class='container__content__admin_announcements__an__actions__edit' data-id='". $row["id"] ."'>Editeaza</button>";
                echo "<button class='container__content__admin_announcements__an__actions__delete' data-id='". $row["id"] ."'>Sterge</button>";
                echo "</div>";
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