<?php

require_once('connect.php');

if($_SERVER['REQUEST_METHOD'] !== "GET"){
    http_response_code(405);
    echo json_encode(['error' => "Invalid request method."]);
    exit();
}

try{
    $result = mysqli_query($con, "select * from csokik;");

    if (!$result){
        throw new Exception("Lekérdezési hiba: ". mysqli_error($con));
    }

    $csokik = [];

    while($row = mysqli_fetch_assoc($result)){
        $csokik[] = $row;
    }

    if(!empty($csokik)){
        $result = file_put_contents('csokik.json', json_encode($csokik, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT));
        if(!$result){
            throw new Exception("Error while writing to csokik.json");
        }
        echo "File writing successful";
    }
    else{
        echo "No data found in the array";
    }
    

}
catch(Exception $e){
    http_response_code(405);
    echo json_encode([
        'error' => $e->getMessage()
    ], JSON_UNESCAPED_UNICODE);
}

mysqli_close($con);
?>