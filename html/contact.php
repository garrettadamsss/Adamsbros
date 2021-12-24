
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
                    <a href = "contact.php" >FREE ESTIMATE</a>
                </p>
                 <img src = "../menu_icon.png" id = "menu-icon" onclick = "toggleMenu()">
            </div>
           
            <nav id = "navbar">
               
                <ul id = "menuList">
                    <li><a href = "index.html">HOME</a></li>
                    <li class = "dropdown-button"><a href = "#">GALLERY <span>&#9698;</span></a>
                        <ul class = "dropdown">
                            <li><a href= "g_newpools.html">NEW POOLS</a></li>
                            <li><a href = "g_remodels.html">REMODELS</a></li>
                            <li><a href = "g_coping.html">TILE&COPING</a></li>
                            <li><a href = "g_decking.html">DECKING</a></li>
                            <li><a href = "g_3d.html">3D PROJECT DESIGNS</a></li>
                            <li><a href = "g_miscellaneous.html">MISCELLANEOUS</a></li>
                        </ul>
                    </li>
                    <li class = "dropdown-button"><a href = "#" >MATERIALS <span>&#9698;</span></a>
                        <ul class = "dropdown">
                            <li><a href= "tile.html">TILE</a></li>
                            <li><a href = "coping.html">COPING</a></li>
                            <li><a href = "decking.html">DECKING</a></li>
                            <li><a href = "pebble.html">PEBBLE</a></li>
                            <li><a href = "turf.html">TURF</a></li>
                        </ul>
                    </li>
                    <li><a href = "contact.php">CONTACT US</a></li>
                    <li><a href = "about.html">ABOUT</a></li>
                   
                </ul>
            </nav>
            
        </header>
        <main id = "main-contact">
            <div class = "first-section-wrapper">
                <h2 class = "page-title"> CONTACT US</h2>
            </div>
            <div id = "contact-message">
                <p> Reach us by filling out the form. We will respond ASAP.</p>
            </div>
            <?php
                
                function success($array){
                    $size = count($array);
                    $i = 0;
                    while($i < $size){
                        foreach($array as $x => $value){
                            if($value == ""){
                            } else{
                                return false; 
                            } 
                            $i++;
                        }
                        return true; 
                    }
                }
                function cleanData($data) {
                    $data = trim($data);
                    $data = stripslashes($data);
                    $data = htmlspecialchars($data);
                    return $data;
                  }

                $error = array("fullnameErr" => "", "addressErr" => "", "cityErr" => "", "stateErr" => "", "zipErr" => "", 
                        "phoneErr" => "", "emailErr" => "", "messageErr" => "");
                $fullname = $address = $city = $state = $zip = $phone = $email = $message = "";
    
                if($_SERVER["REQUEST_METHOD"] == "POST"){
                    if(empty($_POST["fullname"])){
                        $error["fullnameErr"] = "Name is required";
                    } else {
                        $fullname = cleanData($_POST["fullname"]);
                    }
                    if (empty($_POST["address"])){
                        $error["addressErr"] = "Address is required";
                    } else {
                        $address = cleanData($_POST["address"]);
                    }
                    if(empty($_POST["city"])){
                        $error["cityErr"] = "City is required";
                    } else {
                        $city = cleanData($_POST["city"]);
                    }
                    if(empty($_POST["state"])){
                        $error["stateErr"] = "State is required";
                    } else {
                        $state = cleanData($_POST["state"]);
                    }
                    if(empty($_POST["zip"])){
                        $error["zipErr"] = "Zip is required";
                    } else {
                        $zip = cleanData($_POST["zip"]);
                    }
                    if(empty($_POST["phone"])){
                        $error["phoneErr"] = "Phone is required";
                    } else {
                        $phone = cleanData($_POST["phone"]);
                    }
                    if(empty($_POST["email"])){
                        $error["emailErr"] = "Email is required";
                    } else {
                        $email = cleanData($_POST["email"]);
                    }
                    if(empty($_POST["message"])){
                        $error["messageErr"] = "Message is required";
                    } else {
                        $message = cleanData($_POST["message"]);
                    }
                    if(success($error)){
                        $subject = 'Message From Website';
                        $mailTo = "garrettadamssss@gmail.com";
                        $headers = "From: " . $email;          
                        $body = "You have recieved a message from ". $fullname . "\n\t-Basic Information-" . "\n\tAddress: " . $address .
                        "\n\tCity: " . $city . "\n\tState: " . $state . "\n\tZip: " . $zip . "\n\tPhone Number: " . $phone . 
                        "\n\tEmail: " . $email . "\n\n" . $message;
                        
                        mail($mailTo, $subject, $body, $headers);
                        header('Location: confirmation.php');
                        exit();
                    } 
                }
            ?>

            <section id = "form-container">
                <form class = "form"  name = "myform" method = "post" action = "contact.php">
                    <div class = "form-control name">
                        <label for = "fullname">Name</label> <span class = "phpErr"> <?php echo $error["fullnameErr"];?></span>
                        <input type = "text" name = "fullname" value = "<?php echo $fullname;?>">
                        <p>Name is required!</p> 
                        
            
                    </div>
                    
                    <div class = "form-control">
                        <label for = "address">Address</label> <span class = "phpErr"> <?php echo $error["addressErr"];?></span>
                        <input type = "text" name = "address" value = "<?php echo $address;?>">
                        <p>Address is required!</p>
                    </div>  
                    
                    
                    <div class = "form-control city" >
                        <label for = "city">City</label> <span class = "phpErr"> <?php echo $error["cityErr"];?></span>
                        <input type = "text" name = "city" value = "<?php echo $city; ?>">
                        <p>City is required!</p>
                    </div>

                

                    <div class = "form-control state">
                        <label for = "state">State</label> <span class = "phpErr"><?php echo $error["stateErr"]; ?></span>
                        <select name = "state" value = "<?php echo $state; ?>">
                            <option value="" >-Select State-</option>
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
                        <p>State is required</p>
                    </div>
                    
                    <div class = "form-control zip">
                        <label for = "zip">Zip</label> <span class = "phpErr"><?php echo $error["zipErr"];?></span>
                        <input type = "text" name = "zip" value = "<?php echo $zip; ?>">
                        <p>Zip is required</p>
                    </div>
                   
                    
                    <div class = "form-control phone">
                        <label for = "phone">Phone</label> <span class = "phpErr"><?php echo $error["phoneErr"];?></span>
                        <input type = "text" name = "phone" value = "<?php echo $phone; ?>">
                        <p>Phone is required</p>
                    </div>
                   
                    <div class = "form-control email">
                        <label for = "email">Email</label> <span class = "phpErr"><?php echo $error["emailErr"];?></span>
                        <input type = "email" name = "email" value = "<?php echo $email; ?>">
                        <p>Email is required</p>
                    </div>
                   
                    
                    <div class = "form-control">
                        <label for = "message">Tell us about what you would like to do</label> <span class = "phpErr"><?php echo $error["messageErr"];?></span>
                        <textarea name = "message" ><?php echo $message; ?></textarea>
                        <p>A message is required</p> 
                    </div>

                    <script src = "../js/validation.js" type = "text/javascript"></script>
                    <input type = "submit" id = "submit" name = "submit">
                </form>
            </section>
            
           
        </main>
        <footer>
            <a href = "#top"> &uarr; </a>
            <p id = "rights">Adams Brothers Pools -All rights reserved @2021</p> 
        </footer>
        <script src = "../js/menu.js" type = "text/javascript"></script> 
    </body>
</html> 