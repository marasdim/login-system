<?php 
    include_once 'header.php';
?>

<section id="signup-form">
    <h2>Login</h2>
    <form action="includes/login.inc.php" method="post">

    <input type="text" name="username" placeholder="Username or e-mail">
    <input type="password" name="pwd" placeholder="Password">
    <button type="submit" name="submit">Login</button>
</section>

<?php
    include_once 'footer.php';
?>