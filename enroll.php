<?php

require_once('app/loader.php');
$credentials = IsUserLogged();
if(($credentials == null && $credentials[0] == null) || $credentials[0] != '' && $credentials[1] == '' || $credentials[2] != "student"){
  redirect($credentials[0],$credentials[1],$credentials[2]);
}
$student_id = $credentials["userId"];
$course_id = $_GET['id'];

if ($dbConnection->Check("SELECT * FROM enrolled_courses WHERE course_id =? AND student_id=? ",["$course_id","$student_id"])){
echo "<script>alert('already enrolled!');document.location='/skillbridge'</script>";
} 
else{
if($dbConnection->InsertData("INSERT INTO `enrolled_courses` (`student_id`,`course_id`) VALUES (?,?)",["$student_id","$course_id"])){
    }else{
        echo "failed to save";
    }
}
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
</head>
<body>
    <div class="container">
        <div class="row mt-4">
            <div class="col-md-6 mx-auto">
                <div class="card">
                    <div class="card-header"><h5>Success!</h5></div>
                    <div class="card-body">
                        <div class="alert alert-success">
                            You have successfully enrolled to this course,click <a href="student">Here</a> to view enrolled courses
                        </div>
                    </div>
                    <div class="col-md-3">
<button class="btn btn-sm btn-outline-dark m-3">Go home</button>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
    
</body>
</html>