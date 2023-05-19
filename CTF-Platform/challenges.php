<?php
// Fetch and display the list of challenges from the database

// Loop through challenges and generate HTML to display them
?>
<h2>Challenges</h2>
<div class="challenge-list">
    <!-- Loop through challenges -->
    <div class="challenge">
        <h3>Challenge Title</h3>
        <p>Challenge Description</p>
        <form action="index.php?page=submit" method="POST">
            <input type="hidden" name="challenge_id" value="1">
            <input type="text" name="solution" placeholder="Solution" required>
            <button type="submit">Submit</button>
        </form>
    </div>
    <!-- End of loop -->
</div>
