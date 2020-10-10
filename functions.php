<?php 


// koneksi ke database
$conn = mysqli_connect("localhost","root", "","dumcourse" );

// ambildata
function query ($query) {
	global $conn;
	$result = mysqli_query ($conn, $query);
	$rows = [];
	while ($row = mysqli_fetch_assoc($result)) {
		$rows[] =$row;
	}
	return $rows;

}


function insertAuthor($author)
{
	global $conn;
	$query = "Insert INTO author
          VALUES
          ('','$author')
  ";

	mysqli_query($conn, $query);
}


function insertCourse($data)
{
	global $conn;
	$query = "Insert INTO course
          VALUES
           ('','{$data['name']}', '{$data['thumbnail']}' , '{$data['id_author']}' , '{$data['duration']}', '{$data['deskription']}')
  ";

	mysqli_query($conn, $query);
}


function insertContent($data)
{
	global $conn;
	$query = "Insert INTO content
          VALUES
           ('','{$data['name']}', '{$data['vidio_link']}' , '{$data['type']}' , '{$data['id_course']}')
  ";


	mysqli_query($conn, $query);
}


 ?>