<?php

// Function to validate the user input
function validate_input($input) {
    $input = trim($input);
    $input = stripslashes($input);
    $input = htmlspecialchars($input);
    return $input;
}

$response = [
    'status' => 'error',
    'message' => 'An error occurred. Please try again.'
];

// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = validate_input($_POST["name"]);
    $email = validate_input($_POST["email"]);
    $project = validate_input($_POST["project"]);
    $message = validate_input($_POST["message"]);

    // Perform validation checks (e.g., required fields, valid email, etc.)
    if (!empty($name) && !empty($email) && !empty($project) && !empty($message) && filter_var($email, FILTER_VALIDATE_EMAIL)) {
        // Save the message to a file
        $filename = "messages.txt";
        $file_contents = "Name: " . $name . "\nEmail: " . $email . "\nProject: " . $project . "\nMessage: " . $message . "\n\n";

        file_put_contents($filename, $file_contents, FILE_APPEND);

        // Set the response to success
        $response['status'] = 'success';
        $response['message'] = 'Thank you for your message!';
    } else {
        $response['message'] = 'Sending message failed. Please check your input and try again.';
    }
}

header('Content-Type: application/json');
echo json_encode($response);

?>
