<?php
    $errors = array();
    $data = array();

    if (!isset($_POST['inputName']) && !isset($_POST['inputEmail']) && !isset($_POST['inputMessage'])) {
        $data['success'] = false;
        $data['message']  = 'Failed! Try again';
    } else {
        $to_email = "6ojoshdee@gmail.com";
        $headers = "From: ".$_POST["inputEmail"];
        $name = $_POST["inputName"];
        $body = $_POST["inputMessage"];

        if ( mail($to_email, $name, $body, $headers)) {
            $data['success'] = true;
            $data['message'] = 'Email successfully!';
        } else {
            $data['success'] = false;
            $data['message'] = 'Email sending failed...';
        }
    }

    // return all our data to an AJAX call
    echo json_encode($data);
?>
