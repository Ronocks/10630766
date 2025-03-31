<?php include 'includes/header.php'; ?>
<?php include 'server.php'; ?>

<div class ="mytable">
<div class="container my-5">
    <div class="view">
    <h2> Your Account<h2>
        <table class="table">
            <thead>
                <tr>
                        <td>Username</td>
                        <td>Email</td>   
                        <td>Password</td>           
</tr>
</thead>
<tbody>
    <?php  
     $sql =" SELECT * FROM users WHERE username='".$_SESSION['username']."'";
    $result = $con->query($sql);

    while($row = $result->fetch_assoc()){
        ?>
        <tr>
            <td><?= $row['username']; ?></td>
            <td><?= $row['email']; ?></td>
            <td><?= $row['password']; ?></td>

    <?php
    }
    ?>
</tbody>
</table>
</div>
</div>
</div>

<?php include 'includes/footer.php'; ?>