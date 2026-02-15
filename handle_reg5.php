<?php
// Check if form was submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    // Trim and store values
    $first_name = trim($_POST['first_name']);
    $last_name  = trim($_POST['last_name']);
    $email      = trim($_POST['email']);
    $comments   = trim($_POST['comments']);
    $gender     = $_POST['gender'] ?? NULL;
    $age        = $_POST['age'] ?? NULL;

    // Validate first name
    if (!empty($first_name)) {
        echo "<p>First Name: $first_name</p>";
    } else {
        echo "<p><strong>You forgot to enter your first name.</strong></p>";
    }

    // Validate last name
    if (!empty($last_name)) {
        echo "<p>Last Name: $last_name</p>";
    } else {
        echo "<p><strong>You forgot to enter your last name.</strong></p>";
    }

    // Validate email
    if (!empty($email)) {
        echo "<p>Email: $email</p>";
    } else {
        echo "<p><strong>You forgot to enter your email address.</strong></p>";
    }

    // Validate gender using comparison operators
    if ($gender == 'M') {
        echo "<p>Gender: Male</p>";
    } elseif ($gender == 'F') {
        echo "<p>Gender: Female</p>";
    } else {
        echo "<p><strong>You forgot to select your gender.</strong></p>";
    }

    // Validate age using logical operators
    if (is_numeric($age) && ($age > 0)) {
        echo "<p>Age: $age</p>";
    } else {
        echo "<p><strong>You forgot to enter your age.</strong></p>";
    }

    // Validate comments
    if (!empty($comments)) {
        echo "<p>Comments:<br>" . nl2br($comments) . "</p>";
    } else {
        echo "<p><strong>You forgot to enter comments.</strong></p>";
    }

} else {
    echo "<p>This page has been accessed incorrectly.</p>";
}
?>
