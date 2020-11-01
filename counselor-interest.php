<!-- Add your content of head and header -->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta content="IE=edge" http-equiv="X-UA-Compatible">
  <meta content="width=device-width,initial-scale=1" name="viewport">
  <meta content="description" name="description">
  <meta name="google" content="notranslate" />
  <meta content="Mashup templates have been developped by Orson.io team" name="author">

  <!-- Disable tap highlight on IE -->
  <meta name="msapplication-tap-highlight" content="no">
  
  <link href="./assets/favicon.ico" rel="icon">
  <!-- for animation -->
    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.0/animate.min.css"
  />
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

  <title>CareerHub- Guidance For Courses</title>  

<link href="./assets/style.css" rel="stylesheet"></head>

<body style="text-align:justify; text-align-last:center">

 <!-- Add your content of header -->
    <header class="container-fluid">
        <div class="topnav row justify-content-around">
            <a class="col-md-2 col-xs-2" href="index.html"><i class="fa fa-home" aria-hidden="true"></i><span class="mob-hide">&nbsp Home</span></a>
            <a class="col-md-2 col-xs-2" href="about.html"><i class="fa fa-users" aria-hidden="true"></i><span class="mob-hide">&nbsp About</span></a>
            <a class="col-md-2 col-xs-2" href="overview.html"><i class="fa fa-eye" aria-hidden="true"></i><span class="mob-hide">&nbsp Overview</span></a>
            <a class="active col-md-2 col-xs-2" href="counselor.html"><i class="fa fa-search" aria-hidden="true"></i><span class="mob-hide">&nbsp Counselor</span></a>
            <a class="col-md-2 col-xs-2" href="blogs.html"><i class="fa fa-newspaper-o" aria-hidden="true"></i><span class="mob-hide">&nbsp Blogs</span></a>
            <a class="col-md-2 col-xs-2" href="feedback.html"><i class="fa fa-comments" aria-hidden="true"></i><span class="mob-hide">&nbsp Feedback</span></a>
        </div>
    </header>



<!-- Add your site or app content here -->
<div class="background-image-container white-text-container" style="background-image: url('./assets/images/counselor-banner.png')">
    <div class="overlay"></div>
    <div class="container">
        <div class="row wow animate__animated animate__fadeInUp ">
            <div class="col-xs-12 ">
            <br><Br>
                <img src = "assets/images/logo.png" style ="width:35%">
                <h1 style="font-size:2.5em">Counselor</h1>
                <p>Online Digital Guidance</p>
            </div>
        </div>
    </div>
</div>

<br><br>

<div class="section-container section-half-background-image-container" style="background-color:rgba(42,157,143,0.3);">
    <div class="container">
        <div class="row">
            <div class="col-md-10 offset-md-1 text-column center-div-b"  style="text-align:justify; text-align-last:center">
                <h2 class="text-center wow animate__animated animate__fadeInUp ">Digital Course Calculator!</h2>
                <h3 class="text-center">Enter Details & Get Instant Output!</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-md-10 offset-md-1">
                <form class="well form-horizontal" action="counselor-config-interest.php " method="post"  id="contact_form">
                    <fieldset>
                        <div class="form-group"> 
                            <label class="col-md-5 control-label">Interest</label>
                            <div class="col-md-5 selectContainer">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
                                    <select name="sub1" class="form-control selectpicker" >
                                        <option value="xyz" >Please select your interest</option>
                                        <option value="English">English</option>
                                        <option value="Hindi">Hindi</option>
                                        <option value="Sanskrit">Sanskrit</option>
                                        <option value="Physics">Physics</option>
                                        <option value="Chemistry">Chemistry</option>
                                        <option value="Biology">Biology</option>
                                        <option value="Botany">Botany</option>
                                        <option value="Pharmacy">Pharmacy</option>
                                        <option value="Maths">Maths</option>
                                        <option value="Data-Statistics">Data-Statistics</option>
                                        <option value="Business-Studies">Business-Studies</option>
                                        <option value="Accounts">Accounts</option>
                                        <option value="Economics">Economics</option>
                                        <option value="Computers">Computers</option>
                                        <option value="Media">Media</option>
                                        <option value="Designing">Designing</option>
                                        <option value="History">History</option>
                                        <option value="Political-Science">Political-Science</option>
                                        <option value="Geography">Geography</option>
                                        <option value="Psychology">Psychology</option>
                                        <option value="Sociology">Sociology</option>
                                        <option value="Philosophy">Philosophy</option>
                                        <option value="Law">Law</option>
                                        <option value="Management">Management</option>
                                        <option value="Aviation">Aviation</option>
                                        <option value="Dance">Dance</option>
                                        <option value="Music">Music</option>
                                        <option value="Drawing-Painting">Drawing-Painting</option>
                                        <option value="Travel">Travel</option>
                                        <option value="Makeup-Beauty">Makeup-Beauty</option>
                                        <option value="Physical">Physical</option>
                                        <option value="Food">Food</option>
                                        <option value="Banking">Banking</option>
                                        <option value="Finance">Finance</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-5 control-label"></label>
                            <div class="col-md-3">
                                <button name="submit" type="submit" class="btn btn-warning" >Submit <span class="glyphicon glyphicon-send"></span></button>
                            </div>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
</div>

<br><br>

<script>
document.addEventListener("DOMContentLoaded", function (event) {
    
  googleMapInit(); 
  scrollToAnchor();
  scrollRevelation('reveal');
});
</script>
<!--adding wow.js script for animation while scrolling-->
<script src="assets/wow.min.js"></script>
              <script>
              new WOW().init();
              </script>

<!--counter-->
 <script type='text/javascript'>$(document).ready(function() {

$('.counter').each(function () {
$(this).prop('Counter',0).animate({
Counter: $(this).text()
}, {
duration: 4000,
easing: 'swing',
step: function (now) {
$(this).text(Math.ceil(now));
}
});
});

});</script>


<footer class="footer-container">
    <div class="container">
        <div class="row">
            <div class="col-md-12" style="text-align:center">
                <p>© CareerHub</p>
            </div>
        </div>
    </div>
</footer>

<script>
document.addEventListener("DOMContentLoaded", function (event) {
  navbarToggleSidebar();
});
</script>
<script>
    
</script>
<script type="text/javascript" src="./assets/main.faaf51f9.js"></script>