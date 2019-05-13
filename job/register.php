<?php include 'partials/header.php';?>
   <!-- Page Title -->
   <title>Contact | MEXXON</title>
   </head>

<body>
    <!-- Preloader Starts -->
    <div class="preloader">
        <div class="spinner"></div>
    </div>
    <!-- Preloader End -->

    <!-- Header Area Starts -->
    <!-- Header Area Starts -->
    <header class="header-area single-page" style="background-image: url('assets/images/register.jpg');">
    <?php include 'partials/nav.php';?>
        <div class="page-title text-center">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 offset-md-3">
                        <h2>Register</h2>
                        <p>Take the course now <i class="fa fa-smile-o"></i>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Header Area End -->
    <section class="contact-form section-padding2 section-padding3">
        <div class="container">
            <div class="row">
                <div class="text-center">
                    <a id="display-modal" style="display:none;" class="btn btn-primary" data-toggle="modal" href='#modal-id'>Trigger modal</a>
                </div>
            </div>
        </div>
    <section>
        
        
        <div class="modal fade" id="modal-id">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                    <h4 class="modal-title text-left">Enroll</h4>
                    </div>
                    <div class="modal-body">
                        
                        <div class="row">
                            
                            <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1 text-center">
           
                                    

                            

                                
                            </div>
                            
                            <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                                <form action="mail.php" method="POST" role="form">
                                    <div class="form-group">
                                        <label for="">Full name</label>
                                        <input type="text" placeholder="Enter your name" class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="">Phone Number</label>
                                        <input type="text" placeholder="Enter your phone number" class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="">Email</label>
                                        <input type="email" placeholder="Enter email address" class="form-control" required>
                                    </div>   
                                    
                                    <div class="row">
                                        
                                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                            <div class="form-group">
                                                <select class="form-control" name="gender" id="input" class="form-control" required="required">
                                                    <option selected="true" disabled>Gender</option>
                                                    <option value="male">MALE</option>
                                                    <option value="female">FEMALE</option>
                                                </select>
                                            </div>
                                        </div>
                                        
                                        <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                                            
                                        </div>
                                        
                                        
                                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                            <div class="form-group">
                                                <select class="form-control" name="qualification" id="input" required="required">
                                                    <option selected="true" disabled> Highest Qualification</option>
                                                    <option>SSCE</option>
                                                    <option>OND</option>
                                                    <option>HND</option>
                                                    <option>BSC</option>
                                                    <option>MSC</option>
                                                    <option>PHD</option>    
                                                </select>
                                            </div>
                                        </div>
                                        
                                        
                                    </div>
                                    <button type="submit" class="btn btn-block btn-primary">Submit</button>
                                </form>
                            </div>
                            
                            
                        </div>
                        
                        
                        
                    </div>
                </div>
            </div>
        </div>
        

<?php include 'partials/footer.php';?>

<script> 
    $(function(){
        $('#display-modal').click();
    });
</script>