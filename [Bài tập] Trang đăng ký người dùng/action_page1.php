<?php
require 'action_page.php'
?>
<style>
    table {
        border-collapse: collapse;
        width: 100%;
    }

    th, td {
        padding: 8px;
        text-align: left;
        border-bottom: 1px solid #ddd;
    }
</style>
<form method="post" action="action_page1.php">
    <?php require_once 'action_page.php' ?>
    <link rel='stylesheet' href="css.css">
    <div class="container">
        <h1>Register</h1>
        <p>Please fill in this form to create an account.</p>
        <hr>
        <label for="email"><b>Email</b></label>
        <input type="text" placeholder="Enter Email" name="email">
        <div style="color: #ff573e"><?php echo "$email1" ?> </div>
        <label for="psw"><b>Password</b></label>
        <input type="password" placeholder="Enter Password" name="psw">
        <div style="color: #ff573e"><?php echo $pas ?></div>
        <label for="psw-repeat"><b>Repeat Password</b></label>
        <input type="password" placeholder="Repeat Password" name="psw-repeat">
        <div style="color: #ff573e"><?php echo $repeatPas ?></div>
        <hr>

        <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>
        <button type="submit" class="registerbtn">Register</button>
    </div>

    <div class="container signin">
        <p>Already have an account? <a href="#">Sign in</a>.</p>
    </div>
    <table border="0">
        <caption><h2>Danh sách người đăng kí</h2></caption>
        <tr>
            <th style="text-align: center">STT</th>
            <th style="text-align: center">Email</th>
            <th style="text-align: center">Password</th>
        </tr>
        <?php
        $arrays = getContents();
        ?>
        <?php foreach ($arrays as $index => $array): ?>
            <tr>
                <td><?php echo $index + 1 ?></td>
                <td><?php echo $array['email']; ?></td>
                <td><?php echo $array['pass']; ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</form>