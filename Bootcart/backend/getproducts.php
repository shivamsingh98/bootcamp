<?php 

function getallproducts(){
    include 'conn.php';
    $data = array();  //empty array
    $sql = " select * from products";
    $result = $conn->query($sql);
    while ($row = $result->fetch_assoc()) {
         array_push($data,$row);  //pushing from row to data
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

function getproductsbycategory($category){
    include 'conn.php';
    $data = array();
    $sql = " select * from products where category='$category'";
    $result = $conn->query($sql);
    while ($row = $result->fetch_assoc()) {
         array_push($data,$row);
    }
    return $data;
}


function getcart($id){
    include 'conn.php';
    $data1 = array();
    $sql = " select * from cart where userid='$id'";
    $result = $conn->query($sql);
    while ($row = $result->fetch_assoc()) {
         array_push($data1,$row);
    }
    return $data1;
}



    
?>