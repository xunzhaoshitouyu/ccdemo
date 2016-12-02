<?php  
$name = isset($_POST['name'])? $_POST['name'] : '';  
$gender = isset($_POST['gender'])? $_POST['gender'] : '';  
  
//$filename = time().substr($_FILES['file1']['name'], strrpos($_FILES['file1']['name'],'.'));
//$filename = time().substr($_FILES['file1']['name'], -6);
$filename = time().".jpg";  
  
$response = array();  
  
if(move_uploaded_file($_FILES['file1']['tmp_name'], $filename)){  
    $response['isSuccess'] = true;  
    $response['name'] = $name;  
    $response['gender'] = $gender;  
    $response['photo'] = $filename;  
}else{  
    $response['isSuccess'] = false;  
}  
  
echo json_encode($response);  
?>  