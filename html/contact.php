<?php


if($_POST["name"]) {


    mail("garrettadamssss@gmail.com", "Here is the subject line",


        $_POST["insert your message here"]. "From: an@email.address");


}


?>


<!DOCTYPE html>
<html lang = "en">
    <head>
        <meta charset="utf-8">
        <title>Adams Brothers Pools | About</title>
        <link rel = "stylesheet" type = "text/css" href = "../css/style.css">
        <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    </head>
    <body>
         
        <header id = "top">
            <div class = "top-row-wrapper">
                <p id = "serving">Serving Southern California Since 1981</p>
                <a href = "index.html"><img id = "logo" src = "../adams_logo.png" alt = "logo"></a>
                <p id = "start">Start Your Project Today!
                    <a href = "contact.html">FREE ESTIMATE</a>
                </p>
            </div>

            <nav>
                <ul>
                    <li><a href = "index.html">HOME</a></li>
                    <li><a href = "#" class = "dropdown-button">GALLERY <span>&#9698;</span></a>
                        <ul class = "dropdown">
                            <li><a href= "tile.html">NEW POOLS</a></li>
                            <li><a href = "coping.html">REMODELS</a></li>
                            <li><a href = "decking.html">TILE&COPING</a></li>
                            <li><a href = "pebble.html">DECKING</a></li>
                            <li><a href = "pebble.html">3D PROJECT DESIGNS</a></li>
                        </ul>
                    </li>

                    <li><a href = "#" class = "dropdown-button">MATERIALS <span>&#9698;</span></a>
                        <ul class = "dropdown">
                            <li><a href= "tile.html">TILE</a></li>
                            <li><a href = "coping.html">COPING</a></li>
                            <li><a href = "decking.html">DECKING</a></li>
                            <li><a href = "pebble.html">PEBBLE</a></li>
                            <li><a href = "turf.html">TURF</a></li>
                        </ul>
                    </li>
                    <li><a href = "contact.html">CONTACT US</a></li>
                    <li><a href = "about.html">ABOUT</a></li>
                </ul>
            </nav>
        </header>
        <main>
            <div class = "first-section-wrapper">
                <h2 class = "page-title"> CONTACT US </h2>
            </div>
            <section id = "form-wrapper">
                <form method = "post" action = "confirmation.php">
                    <input type = "text" name = "name">
                    <input type = "text" name = "address">
                    <input type = "text" name = "city">
                    <input type = "text" name = "state">
                    <select>
	                    <option value="AL">Alabama</option>
	                    <option value="AK">Alaska</option>
	                    <option value="AZ">Arizona</option>
                        <option value="AR">Arkansas</option>
                        <option value="CA">California</option>
                        <option value="CO">Colorado</option>
                        <option value="CT">Connecticut</option>
                        <option value="DE">Delaware</option>
                        <option value="DC">District Of Columbia</option>
                        <option value="FL">Florida</option>
                        <option value="GA">Georgia</option>
                        <option value="HI">Hawaii</option>
                        <option value="ID">Idaho</option>
                        <option value="IL">Illinois</option>
                        <option value="IN">Indiana</option>
                        <option value="IA">Iowa</option>
                        <option value="KS">Kansas</option>
                        <option value="KY">Kentucky</option>
                        <option value="LA">Louisiana</option>
                        <option value="ME">Maine</option>
                        <option value="MD">Maryland</option>
                        <option value="MA">Massachusetts</option>
                        <option value="MI">Michigan</option>
                        <option value="MN">Minnesota</option>
                        <option value="MS">Mississippi</option>
                        <option value="MO">Missouri</option>
                        <option value="MT">Montana</option>
                        <option value="NE">Nebraska</option>
                        <option value="NV">Nevada</option>
                        <option value="NH">New Hampshire</option>
                        <option value="NJ">New Jersey</option>
                        <option value="NM">New Mexico</option>
                        <option value="NY">New York</option>
                        <option value="NC">North Carolina</option>
                        <option value="ND">North Dakota</option>
                        <option value="OH">Ohio</option>
                        <option value="OK">Oklahoma</option>
                        <option value="OR">Oregon</option>
                        <option value="PA">Pennsylvania</option>
                        <option value="RI">Rhode Island</option>
                        <option value="SC">South Carolina</option>
                        <option value="SD">South Dakota</option>
                        <option value="TN">Tennessee</option>
                        <option value="TX">Texas</option>
                        <option value="UT">Utah</option>
                        <option value="VT">Vermont</option>
                        <option value="VA">Virginia</option>
                        <option value="WA">Washington</option>
                        <option value="WV">West Virginia</option>
                        <option value="WI">Wisconsin</option>
                        <option value="WY">Wyoming</option>
                    </select>	
                    <input type = "text" name = "zip">
                    <input type = "email" name = "email">
                    <textarea name = "message">Tell us about what you would like to do</textarea>
                    <input type = "submit">
                </form>
            </section>
            
           
        </main>
        <footer>
            <a href = "#top"> &uarr; </a>
            <p id = "rights">Adams Brothers Pools -All rights reserved @2021</p> 
        </footer>
        
    </body>
</html> 