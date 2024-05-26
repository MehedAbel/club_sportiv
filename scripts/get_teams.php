<?php
    include realpath(dirname(__FILE__) . '/../config.php');
    include ROOT_PATH . 'includes/db.php';

    $sql = "SELECT * FROM teams";

    try {
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows ($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                $department_id = $row["department_id"];
                $dp_result = mysqli_query($conn, "SELECT name FROM departments WHERE id = $department_id");
                $dp_row = mysqli_fetch_assoc($dp_result);
                $department_name = $dp_row["name"]; // get department name

                $mem_result = mysqli_query($conn, "SELECT name FROM members WHERE team_id = " . $row["id"]);
                $members = [];
                while ($mem_row = mysqli_fetch_assoc($mem_result)) {
                    array_push($members, $mem_row["name"]);
                }
                $members_list = implode(", ", $members); // get members names list

                echo "<div class='container__content__teams__team'>";
                echo "<h2 class='container__content__teams__team__name'>" . $row["name"] . "</h2>";
                echo "<p class='container__content__teams__team__department'>Sectie: " . $department_name . "</p>";
                echo "<p class='container__content__teams__team__description'>" . $row["description"] . "</p>";
                echo "<p class='container__content__teams__team__members'>Membri: " . $members_list . "</p>";
                echo "</div>";
            }
        } else {
            echo "0 results";
        }
        
    } catch (mysqli_sql_exception $e) {
        echo "Query failed: " . $e->getMessage();
    }

?>