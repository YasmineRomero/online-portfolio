<?php require('connection-init.php');?>
<!DOCTYPE html>
<html lang="en">

<?php require 'head.php'; ?>

<body>
    <div id="flex-all">
        <?php require 'navigation.php'; ?>
		<main>
			<article id="main-parallax" class="about-me-alignment">
			    <section>
                    <h1 class="no-select">About Me</h1>
                    <br>
                    <br>
                    <p class="p-indents about-chunks">Hi, my name is Yasmine Romero and I currently live in Madera, California. I’m attending Clovis North High School as well as the Center of Advanced Research and Technology. I’m a music enthusiast and also am passionate about web development.</p>
                    <img src="images/computer-code.jpg" alt="Computer code in various colors are displayed on a dark gray blackground.">
                    <p class="p-indents about-chunks">I have always had an intense passion for computers. It all began just about the time that I could figure out how to type on a keyboard. Since I’ve been using computers for so long, I was able to build up my typing speed to about 80 words per minute. In my sophomore year of high school, I started to try and learn the basics of HTML. When I got accepted into the Center for Advanced Research and Technology, I was able to start learning HTML, CSS, JavaScript, SQL, and PHP. I have also worked on projects where I got experience working with people on my team and collaborating ideas.</p>
                    <img src="images/sheet-music.jpg">
                    <p class="p-indents about-chunks">Music has been a passion for me, and I taught myself everything that I know. Starting at 14 years old, I began picking up some skills for several instruments. I have experience with guitar, ukulele, recorder, pennywhistle, violin, and piano. I am the most experienced on the guitar, ukulele, and the violin. For the guitar, I can play songs like If I Had You by Adam Lambert and thnks fr th mmrs by Fall Out Boy. On the ukulele, I can play songs like Rolling in the Deep by Adele and Kiss Me Kill Me by Mest. On the violin I can also play songs like Imaginary by Evanescence and My Demons by Starset. I have even made a few original songs in the process of learning these wonderful instruments!</p>
                    <p class="p-indents about-chunks">My future plans are to go to California State University, Fresno and get a bachelor's degree in computer science. Within five years, I will have hopefully completed my college education and started securing a job within the technology field.</p>
                    <p class="p-indents about-chunks">Feel free to take a look at my website and see the kind of work I can produce and I hope you will consider me to be a valuable member of your team!</p>
                    <p class="p-indents about-chunks">You can visit me on <a href="https://www.linkedin.com/in/yasmine-romero-045a46149/">LinkedIn</a> or <a href="https://twitter.com/YasmineCRomero">Twitter</a>!</p>
			    </section>
			</article>
		</main>
    </div>
    <?php require 'footer.php'; ?>
</body>
</html>
<?php $conn->close(); ?>