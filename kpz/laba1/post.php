<?php
$value = $_POST['val'];
$connection = mysqli_connect("localhost", "pisarjevsky", "BY_41147");
$db = mysqli_select_db($connection, "kpz_lb1");
if (isset($_POST['val'])) {
    $query = mysqli_query($connection, "insert into lb1(val) values ('$value')");
}
$q = mysqli_query($connection, "select val from lb1");

$return = [];
while ($row = mysqli_fetch_array($q)) {
    $return [] = ['val'=>$row['val']];
}

echo json_encode($return);
mysqli_close($connection);
