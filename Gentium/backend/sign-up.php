
<?php
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: POST, GET, OPTIONS, PUT, DELETE');
header('Access-Control-Allow-Headers: Origin, Content-Type, Accept, Authorization, X-Request-With');

include('connection.php');

if(isset($_POST['username']) && isset($_POST['password']) && isset($_POST['email']) && isset($_POST['firstName']) && isset($_POST['lastName']) ){
    $email = $_POST['email'] ; 
    $firstName = $_POST["firstName"];
    $lastName = $_POST["lastName"];                                                
    $username =$_POST['username'];
    $dateJoined = date("d M Y ");
    $password = hash("sha256", $_POST["password"] );
}

$sql = "SELECT username, email FROM users WHERE username = '$username' OR email = '$email'";

// Execute the query
$query = sqlsrv_query($conn, $sql);

// Check if the query was successful
if (!$query) {
    die(print_r(sqlsrv_errors(), true));
}
$response = [];
// Fetch data from the result set
while ($row = sqlsrv_fetch_array($query, SQLSRV_FETCH_ASSOC)) {
    // Process each row of data
    $response[] = $row;
}
$ID = 6;
if(!$response){
    ;
    $sql_insert = "INSERT INTO users (user_id,f_name,l_name,date_of_joining,username, email, password) VALUES ('$ID','$firstName','$lastName','$dateJoined','$username', '$email', '$password')";

    // Execute the query
    $query_insert = sqlsrv_query($conn, $sql_insert);
    
    // Check if the query was successful
    if (!$query_insert) {
        die(print_r(sqlsrv_errors(), true));
    }
    
}
elseif($response[0]['username'] === $username ){
    die(json_encode("error: username already in use."));
}
// email is taken previously
else {
    die(json_encode("error: email already in use."));
}





?>

