<?php
/* template name:contactform */
 get_header();
?>
<!doctype html>
<html>
<head>
  <style>

  .contact{
    padding: 5%;
    height: 450px;
  }
  .col-md-3{
    background: #ff9b00;
    padding: 5%;
    border-top-left-radius: 0.5rem;
    border-bottom-left-radius: 0.5rem;
  }
  .contact-info{
    margin-top:15%;
  }
  .contact-info img{
    margin-bottom: 20%;
  }
  .contact-info h2{
    margin-bottom: 22%;
  }
  .col-md-9{
    background: #fff;
    
    border-top-right-radius: 0.5rem;
    border-bottom-right-radius: 0.5rem;
  }
  .contact-form label{
    font-weight:600;
  }
  .contact-form button{
    background: #25274d;
    color: #fff;
    font-weight: 600;
    width: 25%;
  }
  .contact-form button:focus{
    box-shadow:none;
  }
</style>
</head>
</body>
     <section class="image-head-wrapper">
            <div class="container">
                 <img src="<?php the_field('banner_image');?>" class="img-responsive" alt="gallery1">
                 <div class="centered"><h1><?php the_field('banner_text');?></h1></div>
            </div>
      </section></br></br>

 <div class="container contact">
  <div class="row">
    <div class="col-md-3">
      <div class="contact-info">
        <img src="https://image.ibb.co/kUASdV/contact-image.png" alt="image"/>
        <h2>Contact Us</h2>
        <h4>We would love to hear from you !</h4>
      </div>
    </div>
   <div class="col-md-9">
      <form method="POST">
     <div class="contact-form">
        <div class="form-group">
          <label class="control-label col-sm-2" for="fname">First Name:</label>
          <div class="col-sm-10">          
          <input type="text" class="form-control" required="required" placeholder="Enter First Name" name="fname"></br>
          </div>
        </div>
        <div class="form-groudp">
          <label class="control-label col-sm-2" for="lname">Last Name:</label>
          <div class="col-sm-10">          
          <input type="text" class="form-control" required="required" placeholder="Enter Last Name" name="lname"></br>
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-2" for="email">Email:</label>
          <div class="col-sm-10">
          <input type="email" class="form-control" required="required" placeholder="Enter email" name="email"></br>
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-2" for="comment">message:</label>
          <div class="col-sm-10">
          <textarea class="form-control" rows="5"  name="message"></textarea></br>
          </div>
        </div>
        <div class="form-group">        
          <div class="col-sm-offset-2 col-sm-10">
          <center><button type="submit" class="btn btn-primary" name ="submit">Submit</button>
          </center>
          </div>
        </div>
      </div>
        </form>
    </div>
  </div>
</div>
</body>
</html>
<?php
  if(isset($_POST['submit']))
  {
      $fname   = $_POST['fname'];
      $lname   = $_POST['lname'];
      $email   = $_POST['email'];
      $message = $_POST['message'];

      //declare gloabal variable for custom query
      global $wpdb;

      //query
      $args = array('firstname' =>$fname,
                     'lastname'=>$lname,
                     'email'=>$email,
                     'message'=>$message);
      $sql = $wpdb->insert('wp_contact',$args);
        if($sql==true)
        {
          echo"<script>alert('thanks for message us !!');</script>";
        }

   }


 get_footer();
?>