
<!DOCTYPE html>
<html lang="zxx">
<head>
    <title>skillbridge.com - Certificate</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">

    <!-- External CSS libraries -->
    <link type="text/css" rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link type="text/css" rel="stylesheet" href="assets/fonts/font-awesome/css/font-awesome.min.css">

    <!-- Favicon icon -->
    <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon" >

    <!-- Google fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&amp;display=swap" rel="stylesheet">

    <!-- Custom Stylesheet -->
    <link type="text/css" rel="stylesheet" href="assets/css/style.css">
</head>

<body>
<div class="invoice-7 invoice-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="invoice-inner" id="invoice_wrapper">
                    <div class="invoice-top">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="">
                                <img src="assets/img/logos/logo.png" alt="logo" width="150">
                                </div>
                            </div>
                            <div class="">
                                <div class="invoice text-center">
                                    <h1>Certificate</h1>
                                    <p class="mb-0">Date : <span>{{ issued_date }}</span></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="invoice-info">
                        <div class="row">
                            <div class="col-sm-6 mb-3">
                                <div class="invoice-number">
                                    <h4 class="inv-title-1">Student Information</h4>
                                    <p class="invo-addr-1">
                                        Names: {{ names }} <br/>
                                        
                                       
                                    </p>
                                </div>
                            </div>
                            
                        </div>
                        
                    </div>
                    <div class="container">
                         <h4 class="text-center mt-2">This is to justify that you have completed the </h4> 

                         <em><h1 class="text-center"> {{ course }}</h1></em>

                         <h5 class="mt-4 text-center">We appreciate your dedication and commitment.</h5>
                        </div>
                    <hr>

                   
                    <div class="invoice-contact clearfix">
                        <div class="row g-0">
                            <div class="col-lg-9 col-md-11 col-sm-12 mx-auto">
                            
                                <div class="contact-info">
                                    <a><i class="fa fa-phone"></i> +250 783 477 911</a>
                                    <a ><i class="fa fa-envelope"></i> info@skillbridge.com</a>
                                    <a class="mr-0 d-none-580"><i class="fa fa-map-marker"></i> 1224 Street, Kigali, Rwanda</a>
                                    
                                    
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                
            </div>
        </div>
    </div>
</div>
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/jspdf.min.js"></script>
<script src="assets/js/html2canvas.js"></script>
<script src="assets/js/app.js"></script>
</body>
</html>
