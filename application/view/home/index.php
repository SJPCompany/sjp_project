<div class="container">
    <br><br>
    <img class="rotate" src="<?php echo URL; ?>public/img/sjp-logo.png">
    <br><br><br><br>
    <h1>Welcome to the SJP company</h1>
    <p> Please use the form below to register or log in on the site:</p>
    <br>
    <form method="POST" action="/project/home/doLogin">
        <label> username: </label> <br>
        <input type="text" name="username"> <br> <br>
        <label> password: </label> <br>
        <input type="password" name="password"> <br> <br>
        <input type="hidden" name="role" value="member">
        <label> email: </label> <br>
        <input type="text" name="email"> <br> <br>
        <input type="submit" name="submit" value="submit"><br><br>
        <a href="#"> Forgot password ?</a><br>
    </form>
</div>
