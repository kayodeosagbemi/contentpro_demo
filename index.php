<?php
require "Models\\rb-mysql.php";
R::setup( 'mysql:host=localhost;dbname=coursemanager',
        'root', '' ); //for both mysql or mariaDB

        // try{
        //     $db = new PDO( 'mysql:host=localhost;dbname=coursemanager',
        //     'root', '');
        //     echo "PDO successfully Connected to coursemanager<br>"; 
        // } catch(PDOException $e){
        //     echo $e->getmessage();
        //     echo "<br>";
        // }
echo "Welcome to RedbeanPHP";
// $course = R::dispense("course");
// $course->title = "Creating a Ball Gown";
// $course->dateCreated = date("Y-m-d");
// $course->isActive =  true;
// $course->courseVideoList = ["https://www.google.com/"];
// $courseID = R::store($course);
$courseID=2;
$loadedCourse = R::load("course", $courseID);

echo "<br>";
//An empty bean has an id of 0, so check for id==0
if ($loadedCourse->id != 0) {
    R::trash($loadedCourse);
}


// echo "The course id is $loadedCourse->id";
?>