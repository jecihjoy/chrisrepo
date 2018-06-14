<?php
include_once('includes/db_connect.php');
$subcatID = $_POST['fid'];

if (isset($subcatID)) {
    if ($subcatID == 2) {
        $stmt = $conn->query("SELECT * FROM `tbl_animal_category` WHERE main_cat = '$subcatID'");
        echo '<option value="">Select Animal Category</option>';
        while ($row = mysqli_fetch_assoc($stmt)) {
            echo '<option value="' . $row['cat_id'] . '">' . $row['cat_name'] . '</option>';
        }
    }

    else if ($subcatID == 1) {
        {
            $stmt = $conn->query("SELECT * FROM `tbl_crop_category`  WHERE main_cat = '$subcatID' ");
            echo '<option value="">Select Crop Category</option>';
            while ($row = mysqli_fetch_assoc($stmt)) {
                echo '<option value="' . $row['cat_id'] . '">' . $row['cat_name'] . '</option>';
            }

        }
    }

}
?>