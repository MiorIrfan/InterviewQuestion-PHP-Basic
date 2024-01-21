<?php

// Retrieve the username from the POST request
$username = isset($_POST['username']) ? $_POST['username'] : '';

// Check if the username is 'abc'
if ($username === 'abc') {

    echo 'Verified';

} else {

    echo 'Error';

}
?>
