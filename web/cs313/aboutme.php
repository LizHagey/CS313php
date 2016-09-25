<html>
    <head>
        <title>About Me | CS313</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="style.css" type="text/css" rel="stylesheet" media="screen"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
        <meta name="description" content="About me page for CS313">
    </head>
    <body>
        <nav>
          <ul>
            <li><a href="home.php">Home</a></li>
            <li><a href="assignments.php">Assignments</a></li>
            <li><a href="aboutme.php">About Me</a></li>
          </ul> 
        </nav>
        <div id="body_background">
        <div id='one'>
                <div class="flip-container">
                        <div class="flipper" onclick="this.classList.toggle('flipped')">
                                <div class="front">
                                    <h3> </h3>
                                    <img src="images/photo.jpg" alt="Photo" width="280px">
                                    <p id="bottom">Click to see more</p>
                                </div>
                                <div id="backone" class="back">
                                    <h3 id='flip_heading'>Viva Las Vegas</h3>
                                    <img src="images/valleyoffire.jpg" alt="Photo" width="280px">
                                </div>
                        </div>
                </div>
             </div>
         <div id='two'>
                <div class="flip-container2">
                        <div class="flipper2" onclick="this.classList.toggle('flipped')">
                                <div class="front2">
                                    <h3 id='flip_heading'>Some of my family</h3>
                                    <img src="images/kidsSnow.jpg" alt="Photo" width="280px">
                                    <p id="bottom">Click to see more</p>
                                </div>
                                <div id="backone" class="back2">
                                    <h3 id='flip_heading'>All of my strange kids</h3>
                                    <img src="images/strangeKids.jpg" alt="Photo" width="280px">
                                        
                                </div>
                        </div>
                </div>
             </div>

        </div>
    </body>
</html>

