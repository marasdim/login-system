<?php 
    include_once 'header.php';
?>

<section id="signup-form">
    <h2>Sign Up</h2>
    <form action="includes/signup.inc.php" method="post">

    <input type="text" name="email" placeholder="Email">
    <input type="text" name="username" placeholder="Username">
    <input type="password" name="pwd" placeholder="Password">
    <input type="password" name="pwd-repeat" placeholder="Repeat password">
    <button type="submit" name="submit">Sign Up</button>
</section>

<?php
    include_once 'footer.php';
?>