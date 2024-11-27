<?php
require_once('../app/loader.php');



$credentials = IsUserLogged();
if(($credentials == null && $credentials[0] == null) || $credentials[0] != '' && $credentials[1] == '' || $credentials[2] != "student"){
  redirect($credentials[0],$credentials[1],$credentials[2]);
}
$user_id = $credentials["userId"];
$enrolled_courses = $dbConnection->Getrows("SELECT * FROM enrolled_courses JOIN courses ON courses.id = enrolled_courses.course_id WHERE student_id=?",["$user_id"]);
$current_user= $dbConnection->GetRow("SELECT * FROM users WHERE users.id =
?",["$user_id"]);


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
    <div class="container mt-2">
        <div class="d-flex">
            <h4 class="mt-3">Hello <?php echo $current_user['names'];?>, Welcome again</h4>
            <a class="ms-5 enroll-btn btn btn-sm btn-primary" href="../auth/logout.php">Logout</a>
        </div>
        <div class="row mt-5">
            <div class="col-md-7 mx-auto">
                <h5 class="mb-3">My courses</h5>
                <div class="row">
                    <?php 

                    if($enrolled_courses){
                        foreach($enrolled_courses as $enrolled){
                    ?>
                     <div class="col-md-6">
                    <div class="course-card">
                        <img src="../<?php echo $enrolled['image_url'];?>" width="150" alt="Adobe Course">
                        <div class="category">
                           
                            <img src="../images/courses/teacher-1.jpeg" alt="Teacher">
                        </div>
                        <a href="course_details.php?course_id=<?php echo $enrolled['course_id'];?>" class="mt-3"><h2 class="course-title mt-3"><?php echo $enrolled['title'];?></h2></a>
                        
                        <div class="progress" style="display: none;" role="progressbar"
                            aria-label="Animated striped example" aria-valuenow="10" aria-valuemin="0"
                            aria-valuemax="100">
                            <div class="progress-bar progress-bar-striped progress-bar-animated" style="width: 10%">
                            </div>
                        </div>
                    </div>
                    <a class="btn btn-outline-dark btn-sm" href="../certificate/generate_pdf.php?user_id=<?php echo $current_user['id']. "&course_id=".$enrolled['course_id'] ?>" >Get certificate</a>
                </div>

                <?php }} else{?>
 </div>
                    <div class="alert alert-danger">No enrolled courses</div>
                    <?php }?>
            </div>

        </div>
    </div>

</body>

</html>