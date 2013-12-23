<form method='POST' action='/users/p_signup'>
<?php if(isset($success)): ?>
        <div class='success'>
           Registered. Please <a href="/users/login">login</a>!
        </div>
        <br>
    <?php endif; ?>
Please enter your details...<br>
    First Name<br>
    <input type='text' name='first_name'>
    <br><br>

    Last Name<br>
    <input type='text' name='last_name'>
    <br><br>

    Email<br>
    <input type='text' name='email'>
    <br><br>

    Password<br>
    <input type='password' name='password'>
    <br><br>

    <input type='submit' value='Sign up' class="btn btn-primary btn-lg">

</form>