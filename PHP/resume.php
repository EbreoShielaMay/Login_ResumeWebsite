<?php 
$name = 'Shiela May Ebreo';
$occupation = 'Computer Science Student';
$personal_info = array(
    'contact' => '09123456789', 
    'email' => 'shiela@gmail.com', 
    'address' => '123 Malunggay St., Batangas City'
);
$education = array(
    array('level' => 'Elementary', 'school' => 'Ilijan Elementary School', 'year' => '2010 - 2016'),
    array('level' => 'High School', 'school' => 'Pedro S. Tolentino Memorial Integrated School', 'year' => '2016 - 2023'),
    array('level' => 'College', 'school' => 'Batangas State University - Alangilan Campus (BS Computer Science)', 'year' => '2023 - present')
);
$projects = array('Text-based RPG Game', 'Game Rental System', 'Simple Calculator', 'Digital Bookstore System');
$seminars = array('LEAD Workshop','Computer Science Seminar','Developers Troupe');
$skills = array('HTML', 'CSS', 'Java', 'C++', 'Python', 'PHP', 'MySQL');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resume - Ebreo</title>
    <link rel="stylesheet" href="style.css">
</head>
<body class="resume-body">

<div class="resume-container">

    <!-- Header -->
    <div class="profile-header">
        <img src="profile.png" alt="Profile Photo" class="profile-pic">
        <h1><?php echo $name; ?></h1>
        <p class="subtitle"><?php echo $occupation; ?></p>
    </div>

    <!-- Introduction -->
    <div class="resume-card reveal">
        <p><?php echo "I am a Computer Science student with a strong 
        foundation in programming, problem-solving, and software 
        development. Passionate about learning new technologies and 
        applying theoretical knowledge to real-world projects, 
        I aim to contribute my skills in coding, system design, and a
        pplication development to a dynamic and growth-oriented environment. 
        Eager to gain hands-on experience, enhance my technical expertise,
         and collaborate on innovative solutions. "?><p>
    </div>

        <!-- Personal Info -->
    <div class="resume-card reveal">
        <h2>Personal Information</h2>
        <p><strong>Contact:</strong> <?php echo $personal_info['contact']; ?></p>
        <p><strong>Email:</strong> <?php echo $personal_info['email']; ?></p>
        <p><strong>Address:</strong> <?php echo $personal_info['address']; ?></p>
    </div>

    <!-- Education -->
    <div class="resume-card reveal">
        <h2>Education</h2>
        <ul>
            <?php foreach ($education as $edu): ?>
                <li><?php echo $edu['level'] . " - " . $edu['school'] . " (" . $edu['year'] . ")"; ?></li>
            <?php endforeach; ?>
        </ul>
    </div>

    <!-- Projects -->
    <div class="resume-card reveal">
        <h2>Projects</h2>
        <ul>
            <?php foreach ($projects as $project): ?>
                <li><?php echo $project; ?></li>
            <?php endforeach; ?>
        </ul>
    </div>

    <!-- Seminars -->
    <div class="resume-card reveal">
        <h2>Seminars & Workshops</h2>
        <ul>
            <?php foreach ($seminars as $seminar): ?>
                <li><?php echo $seminar; ?></li>
            <?php endforeach; ?>
        </ul>
    </div>

    <!-- Skills -->
    <div class="resume-card reveal">
        <h2>Skills</h2>
        <div class="skills">
            <?php foreach ($skills as $skill): ?>
                <span class="skill-box"><?php echo $skill; ?></span>
            <?php endforeach; ?>
        </div>
    </div>

</div>

<script src="effects.js"></script>

</body>
</html>
