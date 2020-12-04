<style type="text/css">

/*======================================================

  universal styling

=======================================================*/

* {
  font-size: 18pt;
  font-family: 'Open Sans', sans-serif;
}

/*=======================================================

  nav bar / menu styling

========================================================*/

.center {
  display: block;
  margin-left: auto;
  margin-right: auto;
  width: 50%
}

.menu {
  margin: 0 auto;
  max-width: 100%;
  text-align: center;
}

.menu ul {
  background: #683695;
  list-style: none;
}

.menu > ul > li {
  background: #683695;
  display: inline-block;
  margin-bottom: 1px;
  position: relative;
  vertical-align: top;
  width: 24%;
}

.menu ul li a {
  color: #ffffff;
  display: block;
  padding: 15px;
  text-decoration: none;
  transition: .5s;
}

.menu ul li a:hover {
  background: #231f20;
  color: #f7ec13;
  transition: .5s
}

.sub-menu {
  display: none;
}

.menu-item:hover .sub-menu {
  background: #231f20;
  display: block;
  position: absolute;
  top: 50px;
  width: 100%;
}

.menu svg {
  position: relative;
  top: 12px;
}

/*==========================

  footer styling

===========================*/

footer {
    text-align: center;
    background: black;
    color: white;
    padding: 40px 0;
}

footer a {
    color: white;
    font-size: 25px;
    margin: 0 5px;
    transition: .3s;
}

footer a:hover {
    color: #c5c2c2;
    transition: .3s;
}

.website {
    margin-bottom: 15px;
}
</style>

<header>
	<div class="logo-container">
		<a href="index.html">
			<img class="center" src="images/dpm-logo-horizontal.jpg" alt="Daddy, Papa + Me Logo" />
		</a>
	</div>

	<nav class="menu">
		<ul>
			<li class="menu-item"><a href="about">About Us</a></li>
			<li class="menu-item"><a href="partners">Partners<i class="far fa-caret-square-down"></i></a>
				<ul class="sub-menu">
					<li class="menu-item"><a href="home-study">Home Study</a></li>
					<li class="menu-item"><a href="attorneys">Attorneys</a></li>
					<li class="menu-item"><a href="consultants">Consultants</a></li>
					<li class="menu-item"><a href="agencies">Agencies</a></li>
					<li class="menu-item"><a href="adoption-resources">Adoption Resources</a></li>
				</ul>
			<li class="menu-item"><a href="faq.html">FAQ</a></li>
			<li class="menu-item"><a href="contact.html">Contact Us</a></li>
		</ul>
	</nav>
</header>



<div class="container">
	<h1>Missing fields</h1>
	<p>Sorry, you have not completed all of the required fields.</p>
	<p>Please hit <a href="#" onClick="history.go(-1)">back</a> and complete the following required fields.</p>

	<ul>
	<?php
		for($i=0; $i<count($this->missing_required_fields); $i++){
			echo "<li>" . $this->missing_required_fields[$i]['title'] . "</li>\n";
		}
	?>
	</ul>

	<p><strong><a href="#" onClick="history.go(-1)">Back to form</a></strong></p>
</div>


<footer>
	<p class="website">Website by: Efren Vasquez</p>
	<p> Follow me:</p>
	<p>
		<a href="https://facebook.com" target="_blank"><i class="fab fa-facebook-square"></i></a>
		<a href="https://instragram.com" target="_blank"><i class="fab fa-instagram-square"></i></a>
		<a href="https://twitter.com" target="_blank"><i class="fab fa-twitter-square"></i></a>
	</p>
</footer>