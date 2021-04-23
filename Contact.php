<?php
 session_start();
 include('includes/header.php');
 include('includes/navbar.php');
 ?>

<div class="container">
    <div class="row">
        <div class=" col-md-6 mr-auto ml-auto text-center py-5 mt-5">

        <form class="container" action="mail.php" method="POST">
            <h1>Contact US</h1>
            <p>Name</p> <input type="text" name="name">
            <p>Email</p> <input type="text" name="email">
            <p>Phone</p> <input type="text" name="phone">

            <br />

            <p>Message</p><textarea name="message" rows="6" cols="25"></textarea>
            <br />
            <button type="submit">Send</button>
            <button type="reset">Clear</button>
            
        </form>
        </div>
    </div>
</div>

<?php
     include('includes/scripts.php');
     include('includes/footer.php');
    ?>