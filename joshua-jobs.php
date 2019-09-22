<!DOCTYPE html>
<html lang="en">
<head>

	<meta charset="utf-8"/>
	<title>Assignment 02 | "Smash" Website</title>
	<link rel="stylesheet" href="css/styles.css">

</head>

<body class="container">

	<header>
		<a href= "/joshua.php">
			<h1>Joshua Wolkoff</h1>
			<img src="images/josh.jpeg" alt="Photo of Joshua">
		</a>
	</header>

	<?php include 'inc/universal-nav.php';?>

	<nav>
		<ul>
			<li><a  href="/joshua.php">Home</a></li>
			<li><a  href="/joshua-jobs.php">Jobs</a> </li>
			<li><a  href="/joshua-travel.php">Travel</a></li>
			<li><a  href="/joshua-tidbits.php">Tidbits</a></li>
		</ul>
	</nav>

	<aside>
		<ul>
			<li>CSC and Philosophy major</li>
			<li>Incredible person</li>
			<li>Extremely modest</li>
		</ul>
	</aside>

	<main>

		<h2>Jobs</h2>

		<p>	I have had a wide range of jobs since high school, where I was a cashier at Whole Foods. In college I worked at the campus Starbucks for a year (the only perk was that you got to take home the leftover pastries every night but otherwise the job gets a rating of “needs improvement”). The summer of my sophomore year I worked as a software engineering intern at The MITRE Corporation creating a web application as part of a small agile team. This most recent summer I was a Civic Digital Fellow with Coding it Forward and worked in the General Services Administration creating reproducible cloud infrastructure in Amazon Web Services with technologies like Terraform, and Ansible. My sophomore year I was an RA in Southside. While I liked being an RA, I hated Southside because it was created by the devil to steal undergraduate student’s happiness. </p>

	</main>

	<footer>CSC 174: Advanced Front-end Web Design and Development</footer>

</body>
</html>
