<?php
$con=mysqli_connect("localhost","root","123456","my_test");
// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

// Create tables 

$sql="CREATE TABLE IF NOT EXISTS remind(
            id INT(11) AUTO_INCREMENT NOT NULL,
            title VARCHAR (100),
            text VARCHAR(100),
            date_sign DATE,
            category ENUM ('home','job','family'),
            PRIMARY KEY (id)
            )";

if (mysqli_query($con,$sql)) {
  echo "Table remind created successfully";
} else {
  echo "Error creating table: " . mysqli_error($con);
}

mysqli_query($con,"INSERT INTO remind (title, text, date_sign, category) 
VALUES ('buy', 'bread, milk, beer', '2014-04-04', 'home'),('read', 'php book ', '2014-04-05', 'job'),('congratulate', 'my mother', '2014-04-12', 'family')");

mysqli_close($con);
/*
mysqli_query($con,"INSERT INTO mysite (page_alias, page_title, page_meta_d, page_meta_k, page_h1, page_s_desc, page_content) 
VALUES ('first', 'Ihavesite', '1234', '4567', 'Paragraph', 'blablabla', '<div>Lorem ipsum dolor sit amet, consectetuer 
   adipiscing elit, sed diem nonummy nibh euismod tincidunt ut lacreet 
   dolore magna aliguam erat volutpat.</div>
  <div>Ut wisis enim ad minim veniam, quis nostrud 
   exerci tution ullamcorper suscipit lobortis nisl ut aliquip ex 
   ea commodo consequat.</div> ')");
*/
?>
