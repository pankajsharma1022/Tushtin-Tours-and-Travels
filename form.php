<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="mainpagecss.css">
    <title>Connect With Us</title>
</head>

<body>
    <header1>

        <div class="logo">
            <a href="logo.html">
                <img src="logo\logo5.jpg" alt="logo" height="30px" width="30px">
            </a>
        </div>
    
        <nav>
    
            <ul>
    
                <a href="home.html">Home</a>
                <a href="user manual.html">User Manual</a>
                <a href="contactus.html">Contact Us</a>
                <a href="about.html">About</a>
            </ul>
    
        </nav>
        <div class="name">
            <h1><b> @Tushtin </b></h1>
    
    
        </div>
    
    </header1>
</body>



<div class="body2">
    <!-- Example Code -->

    <form action="userdataform.php"  method="post"  form class="row g-3"  >
        <div class="col-md-6">
            <label for="inputPassword4" class="form-label">Name</label>
            <input type="text" class="form-control"  name="name" id="inputPassword4">
        </div>
        <div class="col-md-6">
            <label for="inputEmail4" class="form-label">Email Id</label>
            <input type="email" class="form-control" name="email" id="inputEmail4">
        </div>

        <div class="col-md-6">
            <label for="inputCity" class="form-label">City</label>
            <input type="text" class="form-control" name="city" id="inputCity">
        </div>
        <div class="col-md-4">
            <label for="inputState" class="form-label">State</label>
            <select id="inputState" name="state" class="form-select">
                <option selected="">Choose...</option>
                <option>Andhra Pradesh</option>
                <option>Arunachal Pradesh</option>
                <option>Assam </option>
                <option>Bihar </option>
                <option>Chhattisgarh </option>
                <option>Goa </option>
                <option>Gujarat </option>
                <option>Haryana </option>
                <option>Himachal Pradesh</option>
                <option>Jammu and Kashmir</option>
                <option>Jharkhand </option>
                <option>Karnataka </option>
                <option>Kerala </option>
                <option>Madhya Pradesh</option>
                <option>Maharashtra </option>
                <option>Manipur </option>
                <option>Meghalaya </option>
                <option>Mizoram </option>
                <option>Nagaland </option>
                <option>Odisha </option>
                <option>Punjab </option>
                <option>Rajasthan </option>
                <option>Sikkim </option>
                <option>Tamil Nadu</option>
                <option>Telangana </option>
                <option>Tripura </option>
                <option>Uttar Pradesh</option>
                <option>Uttarakhand </option>
                <option>West Bengal</option>

            </select>
        </div>

        <div class="col-md-6">
            <label for="inputCity" class="form-label">Feedback</label>
            <input type="text" class="form-control" name="feedback" id="inputCity">
        </div>


        <div class="col-12">
          
           <button type="submit" class="btn btn-primary" >Submit</button> 
        </div>

    </form>

    <!-- End Example Code -->

</div>

<br>



<div class="logoimg">
    <img src="logo\logo5.jpg" alt="">
</div>

</html>