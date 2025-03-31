<?php include 'includes/header.php'; ?>
<?php include 'server.php'; ?>

<div class ="mytable">
<div class="container my-5">
    <div class="view">
    <h2> Your Account<h2>
        <table class="table">
            <thead>
                <tr>
                        <td>Email</td>
              
</tr>
</thead>
<tbody>
    <?php  
     $sql =" SELECT * FROM users WHERE username='".$_SESSION['username']."'";
    $result = $con->query($sql);

    while($row = $result->fetch_assoc()){
        ?>
        <tr>
            <td><?= $row['email']; ?></td>
    <a class="btn btn-primary"  href="eedit.php?Id=<?= $row['Id'];?>"> Edit </a>
</td>

    <?php
    }
    ?>
</tbody>
</table>
</div>
</div>
</div>

<?php include 'includes/footer.php'; ?>