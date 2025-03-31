<?php include 'includes/header.php'; ?>
<?php include 'server.php'; ?>

<?php 

if(isset($_GET["reservationid"]))
{
$reservationid = $_GET["reservationid"];

$sql = "DELETE FROM reservation WHERE reservationid = $reservationid ";

$con->query($sql);

}

header("Location: accountmanagment.php");
exit;

?>
<?php include 'includes/footer.php'; ?>