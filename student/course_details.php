<?php
require_once('../app/loader.php');



$credentials = IsUserLogged();
if(($credentials == null && $credentials[0] == null) || $credentials[0] != '' && $credentials[1] == '' || $credentials[2] != "student"){
  redirect($credentials[0],$credentials[1],$credentials[2]);
}
$user_id = $credentials["userId"];

$course_id = $_GET['course_id'];


$course_details = $dbConnection->GetRow("SELECT * FROM enrolled_courses 
JOIN courses ON courses.id =enrolled_courses.course_id where course_id=?
AND student_id=?",["$course_id","$user_id"]);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SkillBridge</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="../style.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
        </script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" integrity="sha384-tViUnnbYAV00FLIhhi3v/dWt3Jxw4gZQcNoSCxCIFNJVCx7/D55/wXsrNIRANwdD" crossorigin="anonymous">
</head>

<body>
    <div class="container mt-2">
      <div class="row mt-5 mx-auto">
        

      <div class="col-md-9 mx-auto">
        <h5 class="text-center mb-3"><?php echo $course_details['title'];?></h5>
        <div class="card">
            <div class="card-body">
            <ul class="list-group list-group-flush">
            <li class="list-group-item"><strong>Chapter One </strong>: <i class="bi bi-play-circle-fill"></i> Introduction</li>
            <li class="list-group-item"><strong>Chapter two </strong>: <i class="bi bi-play-circle-fill"></i> Course Outline</li>
            <li class="list-group-item"><strong>Chapter Three</strong> : <i class="bi bi-play-circle-fill"></i> Workshop </li>
            <li class="list-group-item"><strong>Chapter four</strong> : <i class="bi bi-play-circle-fill"></i> Live examples</li>
            <li class="list-group-item"><strong>Chapter Five</strong> : <i class="bi bi-play-circle-fill"></i> Conclusion and recommendations</li>
        </ul>


            </div>
        </div>
        <a class="btn btn-outline-dark btn-sm mt-4" href="../certificate/generate_pdf.php?user_id=<?php echo $user_id. "&course_id=".$course_id; ?>" >Get certificate</a>

        <p class="mt-2"> <strong>NB:</strong> If you generate certificate without completing the course it won't be signed or stamped.</p>
       
      </div>


      </div>
    </div>

</body>

</html>