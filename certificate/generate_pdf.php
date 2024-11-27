<?php
require_once("../app/loader.php");
require_once("vendor/autoload.php");
$course_id = $_GET['course_id'];
$user_id = $_GET['user_id'];

if(!$course_id){
    echo "Not Allowed";
    exit();
}
$info = $dbConnection->Getrow("SELECT * FROM enrolled_courses JOIN courses ON courses.id = enrolled_courses.course_id JOIN users ON users.id=enrolled_courses.student_id WHERE student_id=? AND course_id=?",["$user_id","$course_id"]);
use Dompdf\Dompdf;
use Dompdf\Options;
$names = $info['names'];
$course = $info['short_title'];
$options = new Options;
$options->setChroot(__DIR__);
$options->setIsRemoteEnabled(true);
$options->setIsPhpEnabled(true);
$dompdf = new Dompdf($options);
$dompdf->setPaper("A4","landscape");
$today = date("d-m-Y");
$html = file_get_contents("certificate.php");
if (!file_exists("certificate.php")) {
    die("certificate.php not found");
}
$html = str_replace("{{ names }}", $names, $html);
$html = str_replace("{{ course }}", $course, $html);
$html = str_replace("{{ issued_date }}", $today, $html);
$dompdf->loadHtml($html);
$dompdf->render();
$dompdf->addInfo("Title","Skillbridge certificate");
$dompdf->addInfo("Subject","official confirmation of course completion");
$dompdf->addInfo("Author","SkillBridge");
$dompdf->stream("certificate-$names.pdf",["Attachment" => false]);
$output = $dompdf->output();

?>