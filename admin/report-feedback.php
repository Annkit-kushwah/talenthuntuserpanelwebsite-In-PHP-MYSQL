<?php

$connection = mysqli_connect("localhost", "root", "", "talenthunt");
?>

<center>
    <h2>Feedback Wise Product Report</h2>
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
        echo "<th>feedback date</th>";
        echo "<th>artist</th>";
        echo "<th>feedback details</th>";
        echo "<th>user id</th>";
        echo "</tr>";
        $q = mysqli_query($connection, "SELECT * from tbl_feedback");

        while ($data = mysqli_fetch_array($q)) {

            echo "<tr>";
            echo "<td>{$data['feedback_id']}</td>";
            echo "<td>{$data['feedback_date']}</td>";
            echo "<td>{$data['artist_id']}</td>";
            echo "<td>{$data['feedback_details']}</td>";
            echo "<td>{$data['user_id']}</td>";
            echo "</tr>";
        }               
            ?>

</form>


