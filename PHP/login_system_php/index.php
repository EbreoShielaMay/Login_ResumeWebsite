<?php 
$name = 'Shiela May Ebreo';
$occupation = 'Computer Science Student';
$personal_info = array('contact' => '09123456789', 'email' => 'shiela@gmail.com', 'address' => '123 Malunggay St., Batangas City');
$education = array(
    array('level' => 'Elementary', 'school' => 'Ilijan Elementary School', 'year' => '2010 - 2016'),
    array('level' => 'High School', 'school' => 'Pedro S. Tolentino Memorial Integrated School', 'year' => '2016 - 2023'),
    array('level' => 'Batangas State University-Alangilan Campus', 'school' => 'BS Computer Science', 'year' => '2023 - present')
);
$projects = array('Text-based RPG Game', 'Game Rental System', 'Simple Calculator', 'Digital Bookstore System' );
$seminars = array('LEAD Workshop','Computer Science Seminar','Developers Troupe');
$skills = array('HTML', 'CSS', 'Java', 'C++', 'Python', 'PHP', 'MySql');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resume_Ebreo</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="name-container">
        <h1><?php echo $name; ?></h1>
        <h3><?php echo $occupation; ?></h3>
</div>

<div class="sections-container">
    <div class="education">
        <h3>Education</h3>
        <?php foreach ($education as $edu): ?>
            <li><?php echo $edu['level'] . " - " . $edu['school'] . " (" . $edu['year'] . ")"; ?></li>
        <?php endforeach; ?>
    </div>

    <div class="projects">
        <h3>Projects</h3>
        <?php foreach ($projects as $project): ?>
            <li><?php echo $project; ?></li>
        <?php endforeach; ?>
    </div>

    <div class="seminars">
        <h3>Seminars/Workshops</h3>
        <?php foreach ($seminars as $seminar): ?>
            <li><?php echo $seminar; ?></li>
        <?php endforeach; ?>
    </div>
</div>

<div class="section skills-section">
    <h2>Skills</h2>
    <div class="skills">
        <?php
        foreach ($skills as $skill) {
            echo "<span class='skill-box'>$skill</span>";
        }
        ?>
    </div>
</div>


</body>
</html>