<?php
    include realpath(dirname(__FILE__) . '/../config.php');
    include ROOT_PATH . 'includes/db.php';

    $sql = "SELECT members.id, members.name, teams.name AS team_name, teams.id AS team_id FROM members INNER JOIN teams ON members.team_id = teams.id";

    try {
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<div class='container__content__admin_members__member'>";
                echo "<h2 class='container__content__admin_members__member__name'>" . $row["name"] . "</h2>";
                echo "<p class='container__content__admin_members__member__team'>" . $row["team_name"] . "</p>";
                echo "<div class='container__content__admin_members__member__actions'>";
                echo "<button class='container__content__admin_members__member__actions__edit' data-id='" . $row["id"] . "' data-team-id='" . $row["team_id"] . "'>Editeaza</button>";
                echo "<button class='container__content__admin_members__member__actions__delete' data-id='". $row["id"] ."'>Sterge</button>";
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