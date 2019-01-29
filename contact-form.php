<?php
    $errors = array();
    $data = array();

    if (!isset($_POST['inputName']) && !isset($_POST['inputEmail']) && !isset($_POST['inputMessage'])) {
        $data['success'] = false;
        $data['message']  = 'Failed! Try again';
    } else {
        $data['success'] = true;
        $data['message'] = 'Success!';
    }

    // return all our data to an AJAX call
    echo json_encode($data);
?>