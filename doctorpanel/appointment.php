
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Appointment</title>
    <style type="text/css">
      .form-group
      {
        margin: 20px;
        font-size: 20px;
      }
      .container
      {
        border: 2px solid black;
      }
    </style>
  </head>
  <body>
    <div class="container">

      <form class="form-group">
        <h2 align="center">Please fill out all information, so that we may better server you.</h2>
        <div class="form-group">
          <label for="full name">Full Name</label>
          <input type="text" class="form-control" name="name" placeholder="Full Name" required autofocus autocomplete="on">
        </div>
        <div class="form-group">
          <label for="email">E-Mail</label>
          <input type="email" class="form-control" name="email" placeholder="E-Mail" required>
        </div>
        <div class="form-group">
          <label for="phone">Phone Number</label>
          <input type="text" class="form-control" name="phoneno" placeholder="Phone No." required>
        </div>
        <div class="form-group">
          <label for="age">Age:</label>
          <input type="text" class="form-control" name="age" placeholder="Age" min="1" max="110" required>
        </div>
        <div class="form-group">
          <label for="date">What day best for you?</label>
          <input type="date" class="form-control" name="date" required>
        </div>
        <div class="form-group">
          <label for="meet">Is this going to be your first visit, or are you already a patient of ours?</label><br>
          <input type="radio" id="meet" name="meet">It's my first Time
          <br>
          <input type="radio" id="meet" name="meet">I've been here before
        </div>  
        <div class="form-group">
          <label for="via">What is the best way to reach you?</label><br>
          <input type="radio" id="via" name="via">Phone,video call
          <br>
          <input type="radio" id="via" name="via">Personal
        </div>  
        <div class="form-group">
          <label for="address">Address:</label>
          <input type="textarea" class="form-control" name="address" placeholder="Address" required>
        </div>
        <div class="form-group">
          <label for="problem">Can you briefly describe you're Problem?</label>
          <input type="textarea" class="form-control" name="problem" placeholder="Problem" required>
        </div>     
        <div class="form-group">
          <button class="btn btn-primary col-6" name="appointment" type="submit" style="margin-left: 250px;">Make appointment</button>
        </div>
      </form>

    </div> <!-- /container -->
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>