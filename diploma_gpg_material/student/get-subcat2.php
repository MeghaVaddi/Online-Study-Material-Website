<?php
include "connection.php";
$category_id = $_POST["category_id"];
$result = mysqli_query($con, "SELECT * FROM tbl_subject where b_id = $category_id");
?>
<option value="">Select</option>
<?php
while ($row = mysqli_fetch_array($result)) {
    ?>
    <option value="<?php echo $row["sub_id"]; ?>"><?php echo $row["sub_name"]; ?></option>
    <?php
}
?>