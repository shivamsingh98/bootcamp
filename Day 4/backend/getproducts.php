<?php 

function getallproducts(){
    include 'conn.php';
    $data = array();
    $sql = " select * from products";
    $result = $conn->query($sql);
    while ($row = $result->fetch_assoc()) {
         array_push($data,$row);
    }
    return $data;
}


function getsingleproduct($id){
    include 'conn.php';
    $sql = " select * from products where id='$id'";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    return $row;


}
    
?>