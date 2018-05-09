 <!DOCTYPE html>
<html lang="en">

<?php require 'head.php'; ?>

<body>
    <div id="flex-all">
        <?php require 'navigation.php'; ?>
            <main>
                <article id="main-parallax">
				<h1 class="no-select">Resume</h1>
				<section id="resume" class="resume-alignment">
					<div class="resume-container">
						<div class="resume-back-and-next">
							<button class="resume-back" onclick="resumeVariableAdd(-1)">
									<b>Back</b>
                            </button>
                            <button onclick="resumeVariableAdd(1)">
                                    <b>Next</b>
                            </button>
						</div>
                        <ul class="resume-section" style="display: block;"><b>Education</b>
                            <li>Center for Advanced Research and Technology
                                <ul>
                                    <li>Web Application Development (Aug. 2017-present)
                                        <ul>
                                            <li>Collaborated professionally with team members to develop website layouts</li>
                                            <li>Developed websites independently and with groups</li>
                                            <li>Created websites with the use of HTML, CSS, and JavaScript</li>
                                            <li>Produced and presented formal PowerPoint presentations</li>
                                            <li>Conducting myself professionally</li>
                                            <li>Communicating information and ideas with groups of people</li>
                                            <li>Exemplary Award: Finalist</li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li>Clovis North High School (Aug. 2015-present)
                                 <ul>
                                    <li>College Preparatory Honors English Classes</li>
                                    <li>Two years of Spanish</li>
                                    <li>GPA 3.5</li>
                                 </ul>
                            </li>
                        </ul>
                        <ul class="resume-section" style="display: none;"><b>Volunteer Experience</b>
                            <li>Palm Gardens (April 2016 - May 2016)
                                <ul>
                                    <li>Playing games with the elderly</li>
                                    <li>Aiding in feeding them</li>
                                    <li>Supervising their activities</li>
                                </ul>
                            </li>
                            <li>Knights of Columbus (March 18, 2017)
                                <ul>
                                    <li>Serving food to people at dining events</li>
                                    <li>Showing courtesy and politeness</li>
                                    <li>Thinking on my feet</li>
                                </ul>
                            </li>
                            <li>Holy Spirit Catholic Church (December 24, 2016, December 23, 2017)
                                <ul>
                                    <li>Distributing Christmas presents to low-income families' homes</li>
                                </ul>
                            </li>
                        </ul>
                        <ul class="resume-section" style="display: none;"><b>Certificates and Awards</b>
                            <li>Honor Roll (January 2016-January 2017, January 2018)</li>
                            <li>Knights of Columbus:
                                <ul>
                                    <li>Religious Freedom Essay Contest 2017
                                        <ul>
                                            <li>California Jurisdiction: 2nd Place - 10th Grade</li>
                                        </ul>
                                    </li>
                                    <li>Keep Christ in Christmas Poster Contest 2015
                                        <ul>
                                            <li>Holy Spirit: 1st Place - 11-14 Year Old</li>
                                       </ul>
                                    </li>
                                </ul>
                            <li>Center for Advanced Research and Technology: Exemplary Award 2018 Finalist</li>
                            <li>Career Skills Challenge (Timed Typing): 3rd Place</li>
                        </ul>
                        <ul class="resume-section" style="display: none;"><b>Programming Languages</b>
                            <li>Hypertext Markup Language (HTML)</li>
                            <li>Cascading Style Sheets (CSS)</li>
                            <li>JavaScript</li>
                        </ul>
                        <ul class="resume-section" style="display: none;"><b>Software</b>
                            <li>Brackets</li>
                            <li>Microsoft Word</li>
                            <li>Microsoft Powerpoint</li>
                            <li>Adobe Photoshop</li>
                        </ul>
                        <ul class="resume-section" style="display: none;"><b>Skills</b>
                            <li>Designing website layouts</li>
                            <li>Basic understanding of computer functions</li>
                            <li>Proficient in Microsoft Office and Powerpoint</li>
                            <li>Strong writing skills</li>
                            <li>Well organized</li>
                        </ul>
                        <ul class="resume-section" style="display: none;"><b>Extracirricular Activities</b>
                            <li>African American Student Union (August 2016-June 2018)</li>
                            <li>Youth Court (August 2015-2017)</li>
                        </ul>
					</div>
                    <h2>Letters of Reccomendation:</h2>
                    <div class="letter-of-rec-container">
                        <div class="letter-back-and-next">
                            <button class="letter-back" onclick="letterVariableAdd(-1)">
                                    <b>Back</b>
                            </button>
                            <button onclick="letterVariableAdd(1)">
                                    <b>Next</b>
                            </button>
                        </div>
                        <div class="letters" style="display: block;">
                            <p class="letters-right">November 4, 2017</p>
                            <p>To whom it may concern:</p>
                            <p class="p-indents">Yasmine is an excellent candidate for your internship program. She was very successful in my Biology class and she worked hard to be successful in every facet of the class. Her interest in doing well can be seen by the level of her work in the class and the fact that she intentionally sat in the front of the class ready to learn each day. Her math and writing skills are superb and she would be able to handle complicated material.</p>
                            <p class="p-indents">Her charisma is apparent when you see how willing people are to work with her. They know she will get the job done and make sure it's done well. She communicates well with other team members and was always willing to solve issues between members. Her group's presentations were always thorough and insightful.</p>
                            <p class="p-indents">Yasmine has a wonderful attitude coming into every class. She always had a smile on her face and welcomed you with a hello.</p>
                            <p class="p-indents">After considering all that I have seen of Yasmine, I see her as highly intelligent, passionate and very motivated to enter an intership program like yours. I highly recommend her for your internship program. I think she would benefit from the experience and would not let you down in any way.</p>
                            <p>Sincerely,</p>
                            <div class="cancel-margin-top">
                                <p>Geoffrey Quiring</p>
                                <p>Biology and Chemistry Teacher/Science Olympiad Coach</p>
                                <p>Clovis North High School</p>
                            </div>
                        </div>
                        <div class="letters" style="display: none;">
                            <p class="letters-right">March 6, 2018</p>
                            <p>To whom it may Concern:</p>
                            <p class="p-indents">I am writing this letter on behalf of Yasmine Romero.  I have had the privilege of knowing Yasmine for the past year. She was a student in my Psychology / Sociology class this school year.</p>
                            <p class="p-indents">I believe Yasmine has many valuable assets. I think what sets her apart is her maturity. She is way ahead of most young women at her age in regard to responsibility, discipline, and work ethic.  She has done a great job of balancing academics and extra-curricular activities, being successful in both. Yasmine is a part of the African American Student Union, as well as the Youth Court program here at Clovis North.</p>
                            <p class="p-indents">Academically, Yasmine is a high achiever. She works extremely hard for everything she gets and takes nothing for granted. Yasmine is a leader in the classroom. Yasmine has been on the honor roll and has an overall GPA of 3.5. She has also participated in our CART program in Web Applications and Development.  In this program she has learned to create websites, collaborate with others, and learned HTML and CSS. She is vocal when she feels the situation calls for it, and has no problem stepping up to lead.  She also is willing to help with any tasks that need to be completed.</p>
                            <p class="p-indents">In closing, I have had the pleasure of knowing Yasmine Romero for the past year. In that time, she has been one of the top students in her class both academically and socially. She holds herself to the highest standards and will not compromise her values. Yasmine has an excellent academic record and has always shown to go above and beyond what is asked or required of her.</p>
                            <p class="p-indents">I give Yasmine Romero my highest recommendation. If you have any questions, please do not hesitate to contact me at (559) 327-5000.</p>
                            <p>Sincerely,</p>
                            <div class="cancel-margin-top">
                                <p>Mark Tackett</p>
                                <p>Social Science Dept.</p>
                                <p>Clovis North High School</p>
                            </div>
                        </div>
                    </div>
				</section>
			</article>
		</main>
   	</div>
	<script>
        resumeDisplaySlide(slideNumber);
        letterDisplaySlide(lettersSlideNumber);
    </script>
    <?php require 'footer.php'; ?>
</body>
</html>