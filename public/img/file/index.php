<!doctype html>

<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <BODY BACKGROUND="img/img7.jpg" BGPROPERTIES="FIXED">
    </BODY>
    <title>HOME</title>
</head>
<body>
    <div class="alert alert-primary" role="alert">
        <center>
            <br />
            ระบบ Google   map  API !!!
            <br />
            <br />

    </div>
    </br>
    <div class="container">
        <div class="row">
            <div class="col-sm">
            </div>
            <div class="col-sm">
                <div class="col">
                    <div class="w3-content" style="max-width:800px;position:relative">
                        <img class="mySlides" src="img/img1.jpg" width="500" height="350" />
                        <img class="mySlides" src="img/img4.jpg" width="500" height="350" />
                        <img class="mySlides" src="img/img5.jpg" width="500" height="350" />
                        <img class="mySlides" src="img/img6.jpg" width="500" height="350" />
                    </div>
                </div>
                <script>
                    var myIndex = 0;
                    carousel();

                    function carousel() {
                        var i;
                        var x = document.getElementsByClassName("mySlides");
                        for (i = 0; i < x.length; i++) {
                            x[i].style.display = "none";
                        }
                        myIndex++;
                        if (myIndex > x.length) { myIndex = 1 }
                        x[myIndex - 1].style.display = "block";
                        setTimeout(carousel, 2500); // Change image every 2 seconds
                    }
                </script>
                <br />
                <br />
                <div class="alert alert-success" role="alert">
                    <h4 class="alert-heading">Well done!</h4>
                    <p>Aww yeah, you successfully read this important alert message. This example text is going to run a bit longer so that you can see how spacing within an alert works with this kind of content.</p>
                    <hr>
                    <p class="mb-0">Whenever you need to, be sure to use margin utilities to keep things nice and tidy.</p>
                </div>
            </div>
            <div class="col-sm">
            </div>
            <div class="col-sm">
                <form">
                    <div class="card" style="width: 20rem;">
                        <img src="img/img2.jpg" alt="Flowers in Chania">
                        <div class="card-body">
                            <form name="form1" method="post" action="login.php">
                                <div class="form-group">
                                    <input type="username" class="form-control" name="user_name" id="user_name" placeholder="username" required />
                                    <br />
                                    <div class="form-group">
                                        <input type="password" class="form-control" name="user_pass" id=="user_pass" placeholder="password" required>
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                        <label class="form-check-label" for="exampleCheck1">Check me out</label>
                                    </div>

                                    <P Align=center> <button type="submit" class="btn btn-primary">subm it</button></P>
                            </form>
                        </div>
                    </div>



                    <form action="registers/register.html">
                        <P Align=center> <button type="submit" class="btn btn-primary">สมัคร ID</button></P>
                    </form>

            </div>
        </div>
    </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>