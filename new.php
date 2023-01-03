<?php

// Connecting to the Database
$servername = "localhost";
$username = "root";
$password = "";
$database = "bookstore";

// Create a connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Die if connection was not successful
if (!$conn){
    die("Sorry we failed to connect: ". mysqli_connect_error());
    
}
else{
    echo "Connection was successful<br>";
   // echo 
}

                  

// Sql query to be executed
$sql = "SELECT BookImg, BookName FROM `books`";
$result = mysqli_query($conn, $sql);

// Add a new trip to the Trip table in the database
if(mysqli_num_rows($result)>0){

    while ($row =mysqli_fetch_assoc($result)){
     echo   "<img src='".$row["BookImg"]."' style='width: 120px;'>"."<br>".$row["BookName"] ;
        
    }

}
else{
    echo "The record was not inserted successfully because of this error ---> ". mysqli_error($conn);
}



?>