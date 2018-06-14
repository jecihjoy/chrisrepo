<?php
include_once('includes/db_connect.php');
$catType = $_POST['fid'];

if (isset($catType)) {
    $stmt = $conn->query("SELECT *
FROM
    agriculture_database.tbl_animals
    INNER JOIN agriculture_database.tbl_animal_category
        ON (tbl_animals.cat_id = tbl_animal_category.cat_id)
        WHERE main_cat = 2 AND tbl_animals.cat_id = '$catType'");
    echo '<option value="">Select Type</option>';
    while ($row = mysqli_fetch_assoc($stmt)) {
        echo '<option value="' . $row['animal_id'] . '">' . $row['name'] . '</option>';
    }
}
?>