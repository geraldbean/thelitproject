<?php
include 'dbparameters.php';

$conn = OpenCon();

?>

<!DOCTYPE>
<html>
<head>
<title>THE LIT PROJECT</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet"
href="https://www.w3schools.com/w3css/4/w3.css">
</head>
<style>

.container {
  position: relative;
  width: 100%;
  overflow: hidden;
  padding-top: 100%; /* 1:1 Aspect Ratio */
}

.responsive-iframe {
  position: absolute;
  top: 0;
  left: 0;
  bottom: 0;
  right: 0;
  width: 100%;
  height: 100%;
  border: none;
}

#rcorners1 {
  border-radius: 25px;
  background: #d2ccff;
  padding: 20px; 
  width: 100%;
  height: 500px;  
}


#rcorners2 {
  border-radius: 25px;
  background: #d2ccff;
  padding: 20px; 
  width: 100%;
  height: 300px;  
}

.button {
  border: none;
  color: #d2ccff;
  padding: 16px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  transition-duration: 0.4s;
  cursor: pointer;
  border-radius: 25px;
}

.button1 {
  background-color: white; 
  color: black; 
  border: 2px solid #2dccff;
}

.button1:hover {
  background-color: #e1b1ff;
  color: white;
}

/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
}

/* Next & previous buttons */
.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  padding: 16px;
  margin-top: -22px;
  color: white;
  font-weight: bold;
  font-size: 18px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
  user-select: none;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover, .next:hover {
  background-color: rgba(0,0,0,0.8);
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}


@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .prev, .next,.text {font-size: 11px}
}

/* Clearfix (clear floats) */
.row::after {
  content: "";
  clear: both;
  display: table;
}

.block {
  display: block;
  width: 100%;
  border: none;
  background-color: #a64dff;
  color: white;
  padding: 15px 15px;
  font-size: 20px;
  cursor: pointe;
  text-align: center;
  margin: 4px 2px;
  border-radius: 25px;
}

.block:hover {
  background-color: #bf80ff;
  color: black;
}


</style>
</head>
<body>

<style>
.mySlides {display:none;}

* {
	box-sizing: border-box;
}

body {margin:0;}

.menu {
	float: left;
	width: 20%;
	text-align: center;
}

.menu a {
	background-color: hsl(204, 100%, 80%);
	padding: 10px;
	margin-top: 8px;
	display: block;
	width: 100%;
	color: black;
}

.navbar {
  overflow: hidden;
  background-color: #9900cc;
  position: fixed;
  top: 0;
  width: 100%;
}

.navbar a {
  float: left;
  display: block;
  color: #ffffff;
  text-align: center;
  padding: 5px 8px;
  text-decoration: none;
  font-size: 17px;
}

.navbar a:hover {
  background: #a64dff;
  color: black;
}

.main {
  padding: 16px;
  margin-top: 30px;
  height: 1500px; /* Used in this example to enable scrolling */
}

.image-container {
  background-image: url("/images/library.jpeg");
  background-size: cover;
  position: relative;
  height: 250px;
}

.hero-text {
  text-align: center;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  color: white;
}

</style>
<!-- <link href="assets/css/styles.css" rel="stylesheet" type="text/css"> -->
<script src="https://code.jquery.com/jquery-3.6.1.min.js"
    integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ="
    crossorigin="anonymous"></script>
<script type="text/javascript" src="assets/js/rate.js"></script>
</head>
<body>

<div class="image-container">
  <b><h1><div class="hero-text">THE LIT PROJECT</div></h1></b>
</div>
<br>

<br><br>



<?php

$sql = "SELECT id, title, description, pictureurl, rating FROM books";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
 // output data of each row
 while($row = mysqli_fetch_assoc($result)) {
    $id = $row["id"];
    $title = $row["title"];
    $description = $row["description"];
    $pictureurl = $row["pictureurl"];
    $rating = $row["rating"];

?>


   <button class="block"><a href="/book.php?id=<?php echo $id ?>" target=_blank;><?php echo $title ?></a></button>


<?php
}
} else {
 echo "No books found in the database.";
}

CloseCon($conn);

?>

<div class="navbar">
  <a href="resources.php" target=_blank;>RESOURCES</a>
  <a href="Libraries.php" target=_blank;>LIBRARY</a>
  <a href="gallery.php" target=_blank;>GALLERY</a>


</div>
<div class="main"> 
<br><br>
<p> for questions please email theenglishlitproject@gmail.com</p>
<br><br>
<center><button class="button button1"><a href ="ourlibrary.php" target=_blank;>BOOKS</button>
<br>
<center><button class="button button1"><a href ="meet.php" target=_blank;>MEET THE TEAM!</button>

<br>

<script>
let slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}
</script>

</body>
</html>



