<?php
include('config.php');


$staff_name = $_POST[ 'staff_name' ];
$post_rating = $_POST[ 'rating' ];

$find_data = $conn->query( "SELECT * FROM rates WHERE staff_name='$staff_name' ");

while($row = $find_data->fetch_assoc())
{

    $id= $row[ 'id' ];
    $current_rating= $row[ 'rating' ];
    $current_hits= $row[ 'hits' ];
}

$new_hits = $current_hits +1;
$update_hits = $conn->query("UPDATE rates SET hits = '$new_hits' WHERE id='$id' ");


$pre_rating = $post_rating + $current_rating * $current_hits;
if($current_rating == 0){
    $pre_rating = $current_rating + $post_rating;
}

$new_rating = $pre_rating / $new_hits;

$update_rating = $conn->query("UPDATE rates SET rating = '$new_rating' WHERE id='$id' ");

header("Location: rating-index.php");
?>