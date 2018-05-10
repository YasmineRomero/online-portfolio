<?php require('connection-init.php');?>
<!DOCTYPE html>
<html lang="en">

<?php require 'head.php'; ?>

<body>
    <div id="flex-all">
        <?php require 'navigation.php'; ?>
        <main>
            <article id="main-parallax" class="contact-alignment">
                <section>
                    <h1 class="no-select">Contact</h1>
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
                    <form onsubmit="validatePhone(this.phoneNumber); return false;" method="post" action="">
                        <label for="email" id="email">Email: * </label>
                        <br>
                        <input type="email" name="email" id="email-function" placeholder="johnsmith@name.com" required>
                        <br><br>
                        <label for="phone" id="phone">Phone Number: *</label>
                        <br>
                        <input type="number" name="phoneNumber" id="phone-function" placeholder="(555)555-5555" required>
                        <br><br>
                        <label for="comments" id="comments">Message: </label>
                        <br>
                        <textarea cols="20" rows="10" id="comments-function" name="message" placeholder="Please put your message here"></textarea>
                        <br><br>
                        <input type="submit" id="submit" name="submit">
                        <input type="reset" id="reset" name="reset">
                    </form>
                </section>
            </article>
        </main>
    </div>
    <?php require 'footer.php'; ?>
</body>
</html>
<?php $conn->close(); ?>