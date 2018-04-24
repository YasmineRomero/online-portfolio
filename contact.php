<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
 
    <title>Yasmine's Portfolio</title>
   
    <link rel="stylesheet" href="css/styles-10.css"> 
    <script type="text/javascript" src="js/functionality-3.js"></script>
    
    <link href="https://fonts.googleapis.com/css?family=Dancing+Script" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
    
</head>

<body>
   <div id="flex-all">
   	    <div id="navigation-php">
   	        <?php include('navigation.php'); ?>
   	    </div>
        <main>
            <article id="main-parallax" class="contact-alignment">
                <section>
                    <h1>Contact</h1>
                    <br>
                    <p class="p-indents" id="contact-p">Thank you for taking the time to look around at my website. I hope what you've seen shows how far my education in web design has taken me. I am available for calls from 4pm - 7pm during the week days and from 1pm - 6pm on weekends. If you would like to contact me for anything, please contact me at: yasminecromero@gmail.com</p>
                    <p class="p-indents" id="contact-p">I'm active on social media, and if you would like to take a look, you can click on the links below.</p>
                    <br><br>
                    <div class="contact-flex-it">
                        <a href="https://twitter.com/YasmineCRomero"><img src="images/twitter.jpg" alt="Twitter logo." id="twitter"></a>
                        <a href="https://www.linkedin.com/in/yasmine-romero-045a46149/"><img src="images/linkedin.png" alt="LinkedIn's logo." id="linkedin"></a>
                    </div>
                    <br><br>
                    <p class="p-indents" id="contact-p">If you would like me to contact you, please put in your contact information in the fields below. Be sure to put in a valid e-mail. I will get back to you as soon as I can.</p>
                    <br><br><br>
                    <form onsubmit="validatePhone(this.phoneNumber); return false;">
                        <label for="email" id="email">Email: * </label>
                        <br>
                        <input type="email" id="email-function" required>
                        <br><br>
                        <label for="phone" id="phone">Phone Number: *</label>
                        <br>
                        <input type="number" name="phoneNumber" id="phone-function" required>
                        <br><br>
                        <label for="comments" id="comments">Comments: </label>
                        <br>
                        <textarea cols="20" rows="10" id="comments-function"></textarea>
                        <br><br>
                        <input type="submit" id="submit">
                        <input type="reset" id="reset">
                    </form>
                </section>
            </article>
        </main>
    </div>
    <div id="footer-php">
   	        <?php include('footer.php'); ?>
    </div>