<?php
include "connection.php";
$category_id = $_POST["category_id"];
$result = mysqli_query($con, "SELECT * FROM tbl_branch where b_stream = $category_id");
?>
<option value="">Select</option>
<?php
while ($row = mysqli_fetch_array($result)) {
    ?>
    <option value="<?php echo $row["b_id"]; ?>"><?php echo $row["b_name"]; ?></option>
    <?php
}
?>