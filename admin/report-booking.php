<?php

$connection = mysqli_connect("localhost", "root", "", "talenthunt");
?>

<center>
    <h2>Booking Wise Product Report</h2>
</center>
<hr />
<?php
echo " Date:" . date("d-m-Y");
?>
<br />
<a href="#" onclick="window.print();">Print</a>


<form method="get">

    Booking :<?php                 
        echo "<table align='center' width='95%' border='1'> ";
        echo "<tr>";

        echo "<th>ID</th>";
        echo "<th>Title</th>";
        // echo "<th>Price</th>";
        echo "<th>Date of Booking</th>";
        echo "<th>booking_status</th>";
        echo "<th>booking_purpose</th>";
        echo "<th>user_id</th>";
        echo "</tr>";
        $q = mysqli_query($connection, "SELECT * from tbl_booking");

        while ($data = mysqli_fetch_array($q)) {

            echo "<tr>";
            echo "<td>{$data['booking_id']}</td>";
            echo "<td>{$data['artist_id']}</td>";
            echo "<td>{$data['date_time']}</td>";
            echo "<td>{$data['booking_status']}</td>";
            echo "<td>{$data['booking_purpose']}</td>";
            echo "<td>{$data['user_id']}</td>";
            echo "</tr>";
        }               
            ?>

</form>


