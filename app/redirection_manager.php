<?php
	function redirect($userEmail,$userPassword,$userType){
        global $dbConnection;
        $page            = "";
		$loginPage       = "auth/login.php";
		$studentDashboard = "student/";


        if ($userEmail == '' || $userEmail == null) {
			$page = $loginPage;
			
		}
		
        else if ($userPassword == 'true'){
            switch($userType){
					case "student":
				
					if($dbConnection->check("SELECT * FROM `users` WHERE `users`.`email` = ?",["$userEmail"]) == true){
			
						$page = $studentDashboard;
											
					}
					break;
					default:
					$page = $loginPage;
					break;
				}
        }
        else{
            $page =$loginPage;
        }
        header('Location: ' . SITEROOT . $page);
    }
?>
