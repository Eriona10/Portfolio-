<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>portfolio </title>
    <link rel="stylesheet" href="main.css">
</head>
<body>
    <nav class="nav" >
        
        <div>
            <h3>portfolio </h3>
        </div>
        <label class="label" for="open-menu">&#9776</label>
            <input  type="checkbox" id="open-menu">
        <div class="links">
            <ul>
                <li><a href="#home">Home </a></li>
                <li><a href="#skills">Skills</a></li>
                <li><a href="#project">Project</a></li>
                <li><a href="#contact">Contact Me</a></li>
            </ul>
        </div>     
    </nav>
    <section id="home" >
    <div class="first-div">
            <div class="name-div" >

        <h1>
            Hello! <br> I am <span> Eriona Mehmeti</span>
        </h1>
       
        <button class="btn-contact"> <a href="#contact"> Contact me </a></button>
    </div>
    <div class="aboutme">
        <h2>About me </h2>

        <p id="about-p">I am 20 years old and I am student of Computer Science and Engineering at University of Business and Technology. <br> <br> I was part 
of several training and activities which allowed me to practice what I have learned and I am certified in 
Web Development at Social Hub and also finished J-coders, Programming Course for html, css and 
bootstrap
        </p>
        <button class="btn-download"> <a download="" href="Cv Eriona Mehmeti.pdf"> Download CV</a></button>
           
    </div>

    </div>
</section>
<section id="skills" >
    <div class="Skills">
        <h1>Skills</h1>
        <div class="first-skills">

        <img src="https://www.ujudebug.com/wp-content/uploads/2022/07/html-logo-transparent.png" alt="">
        <img src="https://camo.githubusercontent.com/edc736634dd35b0f4008e2f7db456136b9fc0e1e7a4078bb72c7352b1bdf8a7e/68747470733a2f2f776f726c64766563746f726c6f676f2e636f6d2f6c6f676f732f6373732d332e737667" alt="">
        <img src="https://www.freepnglogos.com/uploads/javascript-png/javascript-logo-transparent-logo-javascript-images-3.png" alt=""></div> 
        <div class="second-skills">
        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/b/b2/Bootstrap_logo.svg/1200px-Bootstrap_logo.svg.png" alt="">
        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/e/ee/.NET_Core_Logo.svg/2048px-.NET_Core_Logo.svg.png" alt="">
        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/2/27/PHP-logo.svg/2560px-PHP-logo.svg.png" alt=""></div>
    </div>
</section>
<section id="project" >

    <div class="project" >
        <h1>Project</h1>
        <div class="project-repository" > 
                <a href="https://github.com/Eriona10/Portfolio-"> My Portfolio </a>
        </div>
    </div>

</section>
<section id="contact" >
    <div class="contact">
        <h1>CONTACT </h1>
        <p> <b> Get in Touch</b></p>

        <form action="mesazhi.php" method="post">

        <input type="text" class="name" placeholder="Name" name="name" required>
        <input type="email" class="email" placeholder="Email" name="email" required> <br>
        <textarea  id="" cols="80" rows="13" class="message" name="message" placeholder="Tell us more about your needs.." required></textarea>
        <br>
        <button type="submit" name="submit" class="btn-send">Send Message </button> 

    </form>
    </div></section>
</body>
</html> 