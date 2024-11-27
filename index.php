<?php
require_once('app/loader.php');
$courses = $dbConnection->Getrows("SELECT * FROM courses");
?>
<!DOCTYPE html>
<html>
<head>
	<!--  *****   Link To Custom CSS Style Sheet   *****  -->
	<link rel="stylesheet" type="text/css" href="style.css">

	<!--  *****   Link To Font Awsome Icons   *****  -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"/>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

	<!--  *****   Link To Owl Carousel   *****  -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" />

	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Welcome to SkillBridge Rwanda</title>
</head>
<body>
<!--   *** Website Container Starts ***   -->
<div class="website-container">
	
<!--   *** Home Section Starts ***   -->
<section class="home" id="home">
	<!--   === Main Navbar Starts ===   -->
	<?php require_once('partials/_header.php');?>
	<!--   === Main Navbar Ends ===   -->
	<!--   === Banner Starts ===   -->
	<div class="banner">
		
		<div class="banner-desc">
			<h2>Empowering Rwanda's Youth with Practical Skills for the Future</h2>
			<p></p>
			<form class="search-bar">
				<input type="search" placeholder="Search Your Course">
				<i class="fa-solid fa-search"></i>
			</form>
		</div>
		<div> 
			<img src="images/home/student.jpeg">
		</div>

	<!--   === Banner Ends ===   -->
</section>
<!--   *** Home Section Ends ***   -->

<!--   *** Partners Section Starts ***   -->
<section class="partners">
	<h3>Our trusted partners around the Rwanda</h3>
	<div class="owl-carousel owl-theme partners-slider">

    	<div class="item brand-item">
    		<img src="images/brand-logos/BRD.png">
    	</div>
    	<div class="item brand-item">
    		<img src="images/brand-logos/REB.png">
    	</div>
    	<div class="item brand-item">
    		<img src="images/brand-logos/TVET.jpeg">
    	</div>
    	<div class="item brand-item">
    		<img src="images/brand-logos/Coat.png">
    	</div>
    	<div class="item brand-item">
    		<img src="images/brand-logos/MINICT.jpeg">
    	</div>
    	<div class="item brand-item">
    		<img src="images/brand-logos/NESA.jpeg">
    	</div>

	</div>
</section>
<!--   *** Partners Section Ends ***   -->

<!--   *** Services Section Starts ***   -->
<section class="services" id="services">
	<!--   *** Services Header Starts ***   -->
	<header class="section-header">
		<h1>Our services</h1>
		<p>We provide exceptional educational services tailored to meet the unique needs of each student, ensuring a comprehensive and engaging learning experience.</p>
		<h1>Why choose us?</h1>
		

	</header>
	<!--   *** Services Header Ends ***   -->
	<!--   *** Services Contents Starts ***   -->
	<div class="services-contents">

		<div class="service-box">
			<div class="service-icon">
				<i class="fa-solid fa-calendar"></i>
			</div>
			<div class="service-desc">
				<h2>Flexible Timing</h2>
				<p>Our flexible scheduling options allow students to learn at their own pace and convenience, balancing education with other commitments seamlessly.</p>
			</div>
		</div>

		<div class="service-box">
			<div class="service-icon">
				<i class="fa-solid fa-users"></i>
			</div>
			<div class="service-desc">
				<h2>Expert Teachers</h2>
				<p>Our team of experienced educators are experts in their respective fields, providing high-quality instruction and personalized support to foster student success.</p>
			</div>
		</div>

		<div class="service-box">
			<div class="service-icon">
				<i class="fa-solid fa-clock"></i>
			</div>
			<div class="service-desc">
				<h2>24/7 Live Support</h2>
				<p>Our support team is available around the clock to assist you with any questions or challenges you may encounter during your learning journey.</p>
			</div>
		</div>

	</div>
	<!--   *** Services Contents Ends ***   -->
</section>
<!--   *** Services Section Ends ***   -->

<!--   *** Courses Section Starts ***   -->
<section class="courses" id="courses">
    <!--   *** Courses Header Starts ***   -->
    <header class="section-header">
        <div class="header-text">
            <h1>Choose Your Favourite Course</h1>
            <p>Explore our diverse range of courses designed to help you acquire new skills, advance your career, and achieve your personal goals.</p>
        </div>
        <button class="courses-btn btn">View All</button>
    </header>
    <!--   *** Courses Header Ends ***   -->

    <!--   *** Courses Contents Starts ***   -->
    <div class="course-contents">

	<?php foreach($courses as $course){
	?>

        <div class="course-card">
            <img src="<?php echo $course['image_url'];?>" alt="Design Course">
            <div class="category">
                <div class="subject"><h3><?php echo $course['category'];?></h3></div>
                <img src="images/courses/teacher-1.jpeg" alt="Teacher">
            </div>
            <h2 class="course-title"><?php echo $course['title'];?></h2>
            <div class="course-desc">
                <span><i class="fa-solid fa-video"></i> <?php echo $course['duration'];?></span>
                <span><i class="fa-solid fa-users"></i>2456+ Student</span>
            </div>
            <a class="enroll-btn btn btn-dark" href="enroll.php?id=<?php echo $course['id'];?>">Enroll</a>
			<div class="progress" style="display: none;" role="progressbar" aria-label="Animated striped example" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">
				<div class="progress-bar progress-bar-striped progress-bar-animated" style="width: 10%"></div>
			</div>
        </div>
		<?php }?>
    </div>
    <!--   *** Courses Contents Ends ***   -->
</section>
<!--   *** Courses Section Ends ***   -->

<!--   *** Courses Section Ends ***   -->

<!--   *** Courses Categories Section Starts ***   -->
<section class="categories" id="categories">
	<!--   === Categories Section Header Starts ===   -->
	<header class="section-header">
		<h1>Broswer Courses By Categories</h1>
		<p>Explore a wide range of courses tailored to enhance your skills and knowledge in various fields.</p>
	</header>
	<!--   === Categories Section Header Ends ===   -->
	<!--   === Categories Section Contents Starts ===   -->
	<div class="categories-contents">
		
		<div class="category-item">
			<div class="category-icon">
				<i class="fa-solid fa-palette"></i>
			</div>
			<div class="category-desc">
				<h3>Designing</h3>
				<p>Unleash your creativity and learn the latest design techniques and tools.</p>
			</div>
		</div>

		<div class="category-item">
			<div class="category-icon">
				<i class="fa-solid fa-code"></i>
			</div>
			<div class="category-desc">
				<h3>Development</h3>
				<p>Master the art of coding and software development with our comprehensive courses.</p>
			</div>
		</div>


		<div class="category-item">
			<div class="category-icon">
				<i class="fa-solid fa-camera"></i>
			</div>
			<div class="category-desc">
				<h3>Photography</h3>
				<p>Enhance your photography skills and learn to capture stunning images.</p>
			</div>
		</div>

	</div>
	<!--   === Categories Section Contents Ends ===   -->
</section>
<!--   *** Courses Categories Section Ends ***   -->

<!--   *** Teacher Section Starts ***   -->
<section class="instructor">
	<div class="instructor-container">
		<h2>Become an instructor with Bright Future Platform</h2>
		<p>Join our team of expert instructors and share your knowledge with students worldwide. Help shape the future by providing high-quality education and inspiring the next generation of learners.</p>
		<button class="teacher-btn btn">Your Details</button>
	</div>
</section>
<!--   *** Teacher Section Ends ***   -->

<!--   *** About us Section Starts ***   -->
<section class="testimonials" id="About">
	<!--   === About us Section Header Starts ===   -->
	<header class="section-header">
		<h1>About Us</h1>
		<p>I am a dedicated individual committed to providing exceptional educational services. This platform bring together diverse expertise to ensure the success and growth of our country's youth.</p>
	</header>
	<!--   === About us Section Header Ends ===   -->
	
</section>
<!--   *** About us Section Ends ***   -->

<!--   *** Certification Section Starts ***   -->
<section class="certificate" id="categories">
    <!--   === Certification Section Header Starts ===   -->
	<header class="section-header">
		 <h1>Certification</h1>
		 <p>Get your certificates after completing all the courses.</p>
	</header>
	<!--   === About us Section Header Ends ===   --> 
    <div>
        <h2>Your Courses</h2>
        <ul>
            <li>Course: Development <progress value="100" max="100"></progress>
                <button onclick="downloadCertificate('courseId')">Download Certificate</button>
            </li>

            <li>Course: Designing <progress value="100" max="100"></progress>
                <button onclick="downloadCertificate('courseId')">Download Certificate</button>
            </li>

            <li>Course: Photography <progress value="100" max="100"></progress>
                <button onclick="downloadCertificate('courseId')">Download Certificate</button>
            </li>
        </ul>
    </div>
    
</section>
<!--   *** Certification Section Ends ***   -->   
    
<!--   *** Footer Section Starts ***   -->
<?php require_once('partials/_footer.php');?>
<!--   *** Footer Section Ends ***   -->


</div>
<!--   *** Website Container Ends ***   -->



<!--   *** Link To JQuery ***   -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>

<!--   *** Link To Owl Carousel ***   -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

<!--   *** Link To Curstom Script File ***   -->
<script type="text/javascript" src="script.js"></script>

	

</body>
</html>