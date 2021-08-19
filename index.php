<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Teko:wght@600&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@200&display=swap" rel="stylesheet">
    
<title>Basic Banking System</title>
  </head>
  <style>
      /* style.css */
      *{
	padding: 0;
	margin: 0;
	box-sizing: border-box;
	font-family: sans-serif;
}
.intro{
	background: #EAF0F1;
}
h1{
    font-family: 'Teko', sans-serif;
	color: white;
	font-weight: bold;
	transition: 0.5s;
    font-style: italic;
    font-size: 5em;
    letter-spacing: 2px;
}
h4{
  font-family: 'Nunito Sans', sans-serif;
  color: #F6F6F6;
  font-size: 1.5em;
}
button{
	border:none;
	border-radius: 8px;
	padding: 10px;
	background:#7B8788; 
	color:white;
	letter-spacing: 1.5px;
	font-size: 15px;
	transition: 0.5s;
    
}
button:hover,h1:hover,h4:hover{
	transform: scale(1.1);
}
button:hover{
	background-color:#4C4B4B;
}
footer{
	color:#586776;
	background-color:#EAF0F1;
	letter-spacing: 0.5px;
}
footer p{
	margin: 0;
	font-size: 15px;
}
@media only screen and (orientation:portrait){
	.intro{
		display:flex;
		flex-direction: column-reverse;
	}
	h1{
		font-size: 30px;
	}
	.act{
		padding-bottom: 100px;
	}
}
/* navbar.css */
@import url('https://fonts.googleapis.com/css2?family=Raleway:wght@600&display=swap');
.nav-link{
	margin-right: 15px;
	color:#2F363F;
	letter-spacing: 0.5px;
	transition: 0.5s;
}
.navbar-brand{
	color: #4C4B4B;
	letter-spacing: 0.5px;
}
h2{
	color: #4C4B4B;
	letter-spacing: 0.5px;
	font-family: raleway;
}
  </style>

  <body>
  <?php
  include 'navbar.php';
  ?>
  
      <div class="container-fluid">
      <!-- Introduction section -->
            <div class="row intro py-1" style="background-color : #242424;">
              <div class="col-sm-12 col-md">
                <div class="heading text-center my-5">
                  <h1>BHARAT BANK</h1>
                  <h4><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-envelope" viewBox="0 0 16 16">
  <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2zm13 2.383-4.758 2.855L15 11.114v-5.73zm-.034 6.878L9.271 8.82 8 9.583 6.728 8.82l-5.694 3.44A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.739zM1 11.114l4.758-2.876L1 5.383v5.73z"/>
</svg> bharatbank@gmail.com</h4>
<h4 style = "font-size: 1.2em;"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-telephone" viewBox="0 0 16 16">
  <path d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/>
</svg> 1800 400 0018</h4>
                </div>
              </div>
              <div class="col-sm-12 col-md img text-center my-3">
                <img style= "height : 15em; width: 15em;" src="https://png.pngtree.com/png-vector/20190214/ourlarge/pngtree-vector-bank-icon-png-image_515245.jpg" class="img-fluid pt-2">
              </div>
            </div>

      <!-- Activity section -->
            <div class="row activity text-center">
                  <div class="col-md act my-2">
                    <img style="height: 20em; width: 20em;" src="https://www.pngitem.com/pimgs/m/22-220721_circled-user-male-type-user-colorful-icon-png.png" class="img-fluid">
                    <br>
                    <a href="createuser.php"><button style="margin-top : 9px; background-color : #4E709D;">Create a User</button></a>
                  </div>
                  <div class="col-md act my-4">
                    <img style="height: 18em; width: 25em;" src="https://www.kindpng.com/picc/m/648-6485684_transaction-vector-hd-png-download.png" class="img-fluid">
                    <br>
                    <a href="transfermoney.php"><button style="margin-top : 28px; background-color : #4E709D;">Make a Transaction</button></a>
                  </div>
                  <div class="col-md act my-4">
                    <img style="height: 18em; width: 18em;" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTXfc3RTCd7pSYfMowQyb8FSTbYtgfaSi6m6Q&usqp=CAU" class="img-fluid">
                    <br>
                    <a href="transactionhistory.php"><button style="margin-top : 30px; background-color : #4E709D;">Transaction History</button></a>
                  </div>
            </div>
      </div>
      <footer class="text-center mt-5 py-2">
      <p>&copy 2021. Made by <b>SUHANI SINGH</b></p>
      </footer>
      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
  </body>
</html>