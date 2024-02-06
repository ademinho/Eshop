<?php
include '../partials/header.php';
 
 
?> <div class="wrapper">
 
    <h1>Contact Page</h1>
    <form action="process_contact.php" method="POST">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required><br><br>
       
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br><br>
       
        <label for="message">Message:</label>
        <textarea id="message" name="message" required></textarea><br><br>
       
        <input type="submit" value="Submit">
    </form>
</div>
 
<?php include '../partials/footer.php' ?>