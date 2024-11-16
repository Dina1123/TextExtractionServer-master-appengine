<?php

include "connection.php";

if (isset($_FILES['images'])) {
    $images = imageUploadToGCS('images');
    // $images = imageUpload('images');
} else {
    return;
}
if ($images == 'fail') {
    echo json_encode(array('status' => 'failure', 'message' => 'Image upload failed'));
    exit;
}

if (isset($_POST['texts'])) {
    $texts = $_POST['texts'];
} else {
    $texts = '';
}

if (isset($_POST['user_identifier'])) {
    $user_identifier = $_POST['user_identifier'];
} else {
    $user_identifier = '';
}


$data = array(
    'images' => $images,
    'texts' => $texts,
    'user_identifier' => $user_identifier,
);

$inserted_rows = insertData('users', $data);

if ($inserted_rows > 0) {
    echo json_encode(array('status' => 'success'));
} else {
    echo json_encode(array('status' => 'failure'));
}
