<?php include 'includes/header.php'; ?>
<?php include 'server.php'; ?>
<div class="container my-5">
    <div class="view">
    <h2> Your Past Reservations<h2>
        <table class="table">
            <thead>
                <tr>
                    <td>Reservation Id</td>
                        <td>Username</td>
                        <td>Email</td>
                        <td>Location</td>
                        <td>Time</td>
                        <td>Date</td>
                        <td>Number Of Guests</td>
                        <td>Window Seat</td>
                        <td>Booking Tine</td>
</tr>
</thead>
<tbody>
    <?php
 
    $sql = "SELECT * FROM reservation ";
    $result = $con->query($sql);

    while($row = $result->fetch_assoc()){
        ?>
        <tr>
            <td><?= $row['reservationid']; ?></td>
            <td><?= $row['username']; ?></td>
            <td><?= $row['email']; ?></td>
            <td><?= $row['rlocation']; ?></td>
            <td><?= $row['rtime']; ?></td>
            <td><?= $row['rdate']; ?></td>
            <td><?= $row['numofguests']; ?></td>
            <td><?= $row['windowseat']; ?></td>
            <td><?= $row['bookingtime']; ?></td>
            <td>
    <a class="btn btn-primary"  href="redit.php?reservationid=<?= $row['reservationid'];?>"> Edit </a>
    <a class="btn btn-danger" href="rdelete.php?reservationid=<?= $row['reservationid'];?>"> Cancel </a>
</td>
    </tr>
    <?php
    }
    ?>
</tbody>
</table>
</div>
</div>
</div>
<?php include 'includes/footer.php'; ?>