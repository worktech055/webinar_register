<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IREU Education</title>
    <link rel="icon" href="img/ireu_fav.png" type="image/icon type">
    <!-- cdn -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<style>

body, html {
    height: 100%;

    /* padding: 10px; */
    background-color: rgba(55, 72, 113, 0.5);
    
}

div.fill-screen {
    position: fixed;
    left: 0;
    right: 0;
    top: 0;
    bottom: 0;
    text-align: center;
}

img.make-it-fit {
    max-width: 100%;
    max-height: 100%;
}
.text {
  text-align: center;
  position: absolute;
  top: 70%;
  left: 50%;
  transform: translate(-50%, -50%);
}
.form-group {
    margin-bottom: 2px!important;
}
@media only screen and (max-width: 767px) {
  .make-it-fit{
    /* The file size of this background image is 93% smaller
     * to improve page load speed on mobile internet connections */
    background-image: url(img/webinar_mobile.jpg);
    height: 600px !important;
  }
	}
  
.btn {
  position: absolute;
  top: 50%;
  left: 64%;
  transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  background-color: white;
  color: black;
  font-size: 22px;
  padding: 12px 24px;
  border: none;
  cursor: pointer;
  border-radius: 2px;
  text-align: center;
  
}

.btn:hover {
  background-color: #374871;;
  color: #fff;
}
@media only screen and (max-width: 1440px) {
  .btn{
    top: 45%!important;
  left: 65%!important;
  font-size: 22px!important;
  padding: 5px 15px;
  font-weight: 600 !important;
  }

}
@media only screen and (max-width: 768px) {
  .btn{
    top: 40%!important;
  left: 68%!important;
  font-size: 16px!important;
  padding: 5px 10px!important;
  font-weight: 600 !important;
  }
  img{
    width: 80%!important;
  }
  
}
@media only screen and (max-width: 425px) {
  .btn{
    top: 35%!important;
  left: 75%!important;
  font-size: 10px!important;
  padding: 3px 3px!important;
  width: 80px!important;
  font-weight: 600 !important;
  }
  img{
    width: 100%!important;
  }
  
}
</style>
<body>
  <div class='fill-screen'>
    <img class='make-it-fit' 
         src='img/Webinar.jpg'>
         <button type="button" class="btn">Register Now</button>
</div>


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Register</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Student Name</label>
            <input type="text" class="form-control" id="student_name">
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Email</label>
            <input type="email" class="form-control" id="email">
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Mobile No:</label>
            <input type="number" class="form-control" id="mobile_no">
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">College Name</label>
            <input type="text" class="form-control" id="college_name">
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Course Name</label>
            <input type="text" class="form-control" id="course_name">
          </div>
        </form>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>
      </div>
      
    </div>
  </div>
</div>
    
</body>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" ></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" ></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" ></script>
</html>