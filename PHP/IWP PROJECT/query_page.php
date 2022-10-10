<!DOCTYPE html>
<html>
<head>
	<title>Queries</title>
	<meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Bootstrap CSS -->
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
    />

    <!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

    <!-- Font Awesome -->
    <script
      src="https://kit.fontawesome.com/996973c893.js"
      crossorigin="anonymous"
    ></script>

    <!-- Google Fonts -->
    <link
      href="https://fonts.googleapis.com/css2?family=Baloo+Thambi+2:wght@400;500;600;700;800&display=swap"
      rel="stylesheet"
    />

    <!-- My Stylesheet -->
    <link rel="stylesheet" href="style.css" />

    <!-- My jQuery -->
    <script src="main.js"></script>

    <!-- Chart.js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js"></script>
    <title>Covid-19 Tracker</title>
    <link rel = "icon" href =  
"https://upload.wikimedia.org/wikipedia/commons/thumb/b/b1/Coronavirus_SVG_Vector_Image.svg/512px-Coronavirus_SVG_Vector_Image.svg.png" 
        type = "image/x-icon">
</head>
<body>
	<div class="container-fluid bg-light p-5 text-center my-3">
        <h1 class="">Are You Not Feeling Well?<br>You can Submit Your details we will get back to you</h1>
    </div>
    <div class="container-fluid bg-light p-5 text-center my-3">
    	 <form  method="post" id="details">
			  <div class="form-group">
			    <label for="email">Your Full Name:</label>
			    <input type="text" class="form-control" id="name" name="full_name">
			  </div>
			  <div class="form-group">
			    <label for="pwd">Your Address:</label>
			    <input type="text" class="form-control" name="address">
			  </div>
			  <div class="form-group">
			    <label for="pwd">Your Mobile Number</label>
			    <input type="text" class="form-control" name="number">
			  </div>
			  <div class="form-group">
			    <label for="pwd">For how long are you not feeling well</label>
			    <input type="text" class="form-control" name="numdays">
			  </div>
			  
			  <button type="submit" class="btn btn-success">Submit</button>
</form> 
<div id="wait" style="display:none;text-align:center;width:90px;height:80px;position:absolute;top:50%;left:45%;padding:2px;background-color: white;"><img src='https://media.tenor.com/images/cbae2dfd31aa5ec2fcb7f46b65e1550f/tenor.gif' width="200" height="200" /></div>
    </div>
    <script>
    	$(document).ready(function() {

		    $('#details').submit(function(e) {
		        e.preventDefault();
		        $.ajax({
		            type: "POST",
		            url: 'back.php',
		            data: $(this).serialize(),
		            success: function(result)
		            {
		                //alert("Your details are recorded Successfully");
		                $("#wait").show();
		                setTimeout(function(){
		                	$("#wait").hide();
		                },3000);
		           }
		       });
		        
		     });
		    
			
    });
    </script>
    
</body>
</html>