<?php
include 'connection.php';
if(isset($_POST['save_data'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['phone'];
    $gender = isset($_POST['gender']) ? $_POST['gender'] :'';
    $image = $_FILES['image'];

    $errors = array();

    if(empty($name)){
        $errors[] = 'Name must not be empty';
    }

    if(empty($email)){
        $errors[] = 'Email must not be empty';
    } elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $errors[] = 'invalid email format';
    }

    if(empty($mobile)){
        $errors[] = 'number must not be empty';
    } elseif(!preg_match('/^[0-9]{11}+$/', $mobile)){
        $errors[] = 'mobile number must be 12 digit';
    }

    if(empty($image['name'])){
        $errors[] = 'image is required';
    } else {
        $allowedext = array('jpg', 'jpeg', 'png');
        $fileExtension = strtolower(pathinfo($image['name'], PATHINFO_EXTENSION));
        if(!in_array($fileExtension, $allowedext)){
            $errors[] = 'Invalid image format. Allowed formats are JPG, JPEG, PNG';
        }
    }
    

    if(!empty($errors)){
        foreach($errors as $error){
            echo 'Error: ' . $error. "<br>";
        }
    }
    else {
        $filename = $image['name'];
        $filepath = $image['tmp_name'];

    $destfile = 'upload/' . $filename;

    if(move_uploaded_file($filepath, $destfile)){
        
    $sql = "insert into collect(name, email, mobile, gender, image) values ('$name', '$email', '$mobile', '$gender', '$destfile')";

    if(mysqli_query($conn, $sql)){
        echo 'data insert successfully';
    }
    else{
        echo "Could not insert record: ". mysqli_error($conn);  
    }

    }
    else {
        echo 'image not upload';
    }

    }

   

}
mysqli_close($conn);
?>