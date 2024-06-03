<?php

$connection = mysqli_connect("localhost", "root", "", "talenthunt");
?>

<center>
    <h2>Category Wise Product Report</h2>
</center>
<hr />
<?php
echo " Date:" . date("d-m-Y");
?>
<br />
<a href="#" onclick="window.print();">Print</a>


<form method="get">

    Category :<?php
                $cq = mysqli_query($connection,"SELECT * FROM tbl_type");
                echo "<select name='cid'>";
                    while ($cdata= mysqli_fetch_array($cq)){
                        echo "<option value='{$cdata['type_id']}'>{$cdata['type_name']}</option>";
                    }

                echo "</select>";
            ?>

    <input type="submit" value="GetData">

</form>


<?php

if (isset($_GET['cid'])) {

    $cid = $_GET['cid'];
    $q = mysqli_query($connection, "SELECT * from tbl_artist where  type_id  ='{$cid}'");

    $count = mysqli_num_rows($q);

    echo "<br/><center>$count Records Found</center>";
    if ($count > 0) {

        echo "<table align='center' width='95%' border='1'> ";
        echo "<tr>";

        echo "<th>ID</th>";
        echo "<th>Title</th>";
        // echo "<th>Price</th>";
        echo "<th>email</th>";
        echo "<th>Gender</th>";
        echo "<th>Date of Birth</th>";
        echo "<th>Password</th>";
        echo "<th>Mobile</th>";
        echo "<th>Type</th>";
        echo "<th>profile photo</th>";
        echo "<th>about me</th>";
        echo "<th>area</th>";
        echo "</tr>";
        while ($data = mysqli_fetch_array($q)) {
            echo "<tr>";
            echo "<td>{$data['artist_id']}</td>";
            echo "<td>{$data['artist_name']}</td>";
            // echo "<td>{$data['product_price']}</td>";
            echo "<td>{$data['email_id']}</td>";
            echo "<td>{$data['artist_gender']}</td>";
            echo "<td>{$data['artist_dob']}</td>";
            echo "<td>{$data['artist_password']}</td>";
            echo "<td>{$data['artist_mobile']}</td>";
            echo "<td>{$data['type_id']}</td>";
            echo "<td>{$data['profile_photo']}</td>";
            echo "<td>{$data['about_me']}</td>";
            echo "<td>{$data['area_id']}</td>";
            echo "</tr>";
        }

        echo "</table>";
    } else {
        echo "No Records Found";
    }
}
?>