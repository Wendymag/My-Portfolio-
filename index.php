<!doctype html>


<html>
<head>
<title>Page Title</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<style>
  /*style*/
  * {
  box-sizing: border-box;
}

/* Style inputs */
input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

input[type=submit] {
  background-color: #09e0c4;
  color: white;
  padding: 12px 20px;
  border: none;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

/* Style the container/contact section */
.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 10px;
}

/* Create two columns that float next to eachother */
.column {
  float: left;
  width: 50%;
  margin-top: 6px;
  padding: 20px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .column, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
}
  
 /*lusanda  wendy magobiane*/ 
* {
  box-sizing: border-box;
}

/* Style the body */
body { background-color:lightgray;
  font-family: Arial;
  margin: 0;
}

/* Header/logo Title */
.header {
  padding: 60px;
  text-align: center;
  background: #1abc9c;
  color: white;
}

/* Style the top navigation bar */
.navbar {
  display: flex;
  background-color: #333;
}

/* Style the navigation bar links */
.navbar a {
  color: white;
  padding: 14px 20px;
  text-decoration: none;
  text-align: center;
}

/* Change color on hover */
.navbar a:hover {
  background-color: #ddd;
  color: black;
}

/* Column container */
.row {
  display: flex;
  flex-wrap: wrap;
}

/* Create two unequal columns that sits next to each other */
/* Sidebar/left column */
.side {
  flex: 30%;
  background-color:lightblue;
  padding: 20px;
}

/* Main column */
.main {
  flex: 70%;
  background-image:url("apple.jpg");
  background-color: white;
  padding: 20px;
}

/* Fake image, just for this example */
.fakeimg {
  background-color: #aaa;
  width: 20%;
  padding: 20px;
}


/* Responsive layout - when the screen is less than 700px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 700px) {
  .row, .navbar {
    flex-direction: column;
  }
}
</style>
</head>
<body>

<!-- Note -->
<div style="background:lightskyblue;padding:5px">
  <h4 style="text-align:center">Contact Me</h4>
</div>
<!-- Navigation Bar -->
<div class="navbar">
  <a href="index.home">Home</a>
    <a href="index.html">About</a>
    <a href="Index.project.html">Projects</a>
      <a href="Index.interest.html">Hobbies And Interests</a>
      <a href="Index.skills.html">Key skills </a>
    <a href="Index.contact.html">Contacts</a>
  
  </div>

    <section id="Contacts">
        
	<img src="images (4).png"alt="Myself" width="200" height="200">
        <P><b><mark>Contacts</mark></b></P> 

          

        <!--<div class="fakeimg" style="height:200px;">Image</div> -->
        <ul>
    <li>
    <p>
    Email: <a href="mailto:wendymagobiane001@gmail.com">wendymagobiane001@gmail.com</a>
    </p>
    </li>
    <li>
    <p> Phone:(078) 306 7623
    </p>
    <li>
    <p>Whatsapp:<a href="https://wa.me/27783067623?text=I'm%20interested%20in%20your%20portfolio"</p>
    <button style="font-size:24px"> <i class="fa fa-whatsapp"></i></button> </a>

    </li>
    <p>
     <li>Facebook: <a target="_blank" title="follow me on facebook" href="https://www.facebook.com/profile.php?id=10000501676694 "><img alt="follow me on facebook" src="https://c866088.ssl.cf3.rackcdn.com/assets/facebook40x40.png" border=0></a>
      </a></li>
      </li>
        </ul>
    </section>

<
     
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact Form</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style type="text/css">
        input, textarea {
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <div class="container" style="margin-top:100px;">
        <div class="row justify-content-center">
            <div class="col-md-6 col-md-offset-3" align="center">
                <input id="name" placeholder="Name" class="form-control">
                <input id="email" placeholder="Email" class="form-control">
                <input id="subject" placeholder="Subject" class="form-control">
                <textarea class="form-control" id="body" placeholder="Email Body"></textarea>
                <div class="g-recaptcha" data-sitekey="6Lf1_u0ZAAAAAKvATuNlA5VaveBxqtRCrPcfmB7B"></div>   
  
                 
                <script src='https://www.google.com/recaptcha/api.js'></script>

                <input type="button" onclick="sendEmail()" value="Send An Email" class="btn btn-primary">
            </div>
        </div>
    </div>

    <script src="http://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script type="text/javascript">
        function sendEmail() {
            var name = $("#name");
            var email = $("#email");
            var subject = $("#subject");
            var body = $("#body");

            if (isNotEmpty(name) && isNotEmpty(email) && isNotEmpty(subject) && isNotEmpty(body)) {
                $.ajax({
                   url: 'sendEmail.php',
                   method: 'POST',
                   dataType: 'json',
                   data: {
                       name: name.val(),
                       email: email.val(),
                       subject: subject.val(),
                       body: body.val()
                   }, success: function (response) {
                        if (response.status == "success")
                            alert('Email Has Been Sent!');
                        else {
                            alert('Please Try Again!');
                            console.log(response);
                        }
                   }
                });
            }
        }

        function isNotEmpty(caller) {
            if (caller.val() == "") {
                caller.css('border', '1px solid red');
                return false;
            } else
                caller.css('border', '');

            return true;
        }
    </script>
    <!-- Footer -->
<div class="footer">
	<centre><h4><p> &copy;2020-Lusanda-All rights reseved</p></h4></centre>
  </div>



</body>
</html>