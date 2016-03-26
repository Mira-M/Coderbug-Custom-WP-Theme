<?php
/**
 *
 * Template Name: Resume
 *
 * The template for displaying the left sidebar page.
 *
 * @package WordPress
 * @subpackage CoderBug
 */
?>
<?php get_header(); ?>
<div class="resume-wrapper">
<div class="container resume">

	<div class="resume-box">
      <div class="row resume-row">
        <div class="col-xs-12">
          <div id="photo-header" class="text-center">

            <!-- PHOTO (AVATAR) -->
            <div id="photo">
            </div>
            <div id="text-header">
              <h1>Shamireya T. Mollar</h1>
              <h4> <a href="https://drive.google.com/file/d/0B1-HiPAkImLMRHZPY1hTYVBjV00/view?usp=sharing"> <i class="fa fa-file-pdf-o fa-1x"></i> Printable Version </a></h4>
            </div>
          </div>
        </div>
      </div>
      <div class="row resume-row">
        <div class="col-xs-12 col-sm-7">
          <!-- ABOUT ME -->
          <div class="box">
            <h2>About Me</h2>
            <p>I am a full time Computer Science major at the University of Maryland, University College.  In early 2012, I made the decision
            	to change my career path from retail management to computer programming.  My goal is to become a video game programmer, specializing
            	in UI and AI programming.</p>
          </div>
          <!-- EDUCATION -->
          <div class="box">
            <h2>Education</h2>
            <ul id="education" class="clearfix">
              <li>
                <div class="year pull-left">2012</div>
                <div class="description pull-right">
                  <h3><i class="fa fa-graduation-cap"></i> University of Maryland, University College (Current)</h3>
                  <p>Major: Bachelor of Science - Computer Science.  </p>
                  <p>GPA: 4.0  </p>
                  <p>Awards: Dean's List, President's Excellence Award [2014], President's Scholarship [2015-2016] </p>
                </div>
              </li>
              <li>
                <div class="year pull-left">2009</div>
                <div class="description pull-right">
                  <h3><i class="fa fa-graduation-cap"></i> Anne Arundel Community College</h3>
                  <p>Major: Graphic Communication</p>
                </div>
              </li>
              <li>
                <div class="year pull-left">2001</div>
                <div class="description pull-right">
                  <h3><i class="fa fa-graduation-cap"></i> University of Maryland, Baltimore County</h3>
                  <p>Major: Computer Engineering</p>
                </div>
              </li>
            </ul>
          </div>
          <!-- EXPERIENCES -->
          <div class="box">
            <h2>Experiences</h2>

            <div class="job clearfix">
              <div class="col-xs-3">
                <div class="where">Exceptional Software Straties</div>
                <div class="year">2015 - Present</div>
              </div>
              <div class="col-xs-9">
                <div class="profession">Software Engineer I</div>
                <div class="description"><ul><li>Assists Project Managers and teammates in preparing and facilitating customer demonstrations and status meetings. </li>
                	<li>Collaborates with developers, SCRUM master, Project Managers, and clients to determine the best approach to implement software requirements.</li>
					<li>Developed REST-ful style Services layer that interacts with Keycloak, an external authentication server that manages the users for the 
						application.</li>
					<li>Implemented the Administration Panel using Angular JS, for managing Clinician and Administrator roles, and updating legal agreements.</li>
					<li>Collaborated with team member to implement a document repository using Amazon S3 services with an interface in Angular JS, for users to upload and 							manage files and other resources.</li>
					<li>Works side-by-side with clients during testing, providing live technical support, through identifying bugs and offering training where needed. </li>
                </ul></div>
              </div>
            </div>


            <div class="job clearfix">
              <div class="col-xs-3">
                <div class="where">Planet Pluto Games</div>
                <div class="year">2013 - 2015</div>
              </div>
              <div class="col-xs-9">
                <div class="profession">Game Programming Intern</div>
                <div class="description"><ul><li>Designing and implementing updates to art assets. </li>
                	<li>Handling task management through the use of Trello. </li>
                  <li>Assisting the team with identifying and fixing bugs.</li>
                  <li>Performing tests on prototypes and implementing code updates.</li>
                </ul></div>
              </div>
            </div>
            
            <div class="job clearfix">
              <div class="col-xs-3">
                <div class="where">Moore's Systems Maintenance LLC</div>
                <div class="year">2013 - 2015</div>
              </div>
              <div class="col-xs-9">
                <div class="profession">Administrative Assistant</div>
                <div class="description"><ul><li>Maintaining cohesive company branding through websites, flyers, business cards and other printed/digital media.</li>
                	<li>Processing certified state payroll and payments to vendors.</li>
                  <li>Reviewing contracts and ensuring that all terms are met within contractor's agreements.</li>
                  <li>Implemented a centralized system for income and expenses, saving the company over $4,000 annually.</li>
                </ul></div>
              </div>
            </div>
            
            <div class="job clearfix">
            	<div class="col-xs-3">
            		<div class="where">Best Buy Co. Inc.</div>
            		<div class="year">1999 - 2013</div>
            	</div>
            	<div class="col-xs-9">
                <div class="profession">General Manager</div>
                <div class="year">2010 - 2013</div>
                <div class="description">
	                <ul><li>Trained and led store team to work together cohesively to accomplish store-wide goals. </li>
                  		<li>Developed processes that delivered increased customer satisfaction results.</li>
				  		<li>Exceeded operational standards through controlling store revenue and costs.</li>
				  		<li>Played a pivotal role in the success of a region-wide initiative to retain female employees and customers, through co-founding a 											leadership development program for female leaders.</li>
                	</ul></div>
            		<div class="profession">Geek Squad Manager - Tier 1/Tier 2 Customer Support</div>
            		<div class="year">2004 - 2010</div>
            		<div class="description"><ul><li>Performed computer hardware installations on Windows and Mac devices, such as memory, hard drives, optical 								drives and power supply units.</li>
	            	<li>Planned, designed and installed user computer systems based on user specifications.</li>
	            	<li>Collaborated with team members to develop a new process that helped reduce customer completion time by 20%.</li>
	            	<li>Diagnosed software issues, performed system updates, and installed new software.</li>
	            	<li>Troubleshot systems and assisted clients in determining hardware and software updates. </li>
	            	<li>Performed data migrations and system backups in facilitating client’s updating hardware systems. </li>
	            	<li>Resolved client’s general software technical issues through troubleshooting using various scenarios and determining an appropriate 								solution.</li>
                </ul></div>
            	</div>
            </div>
          </div>
        </div>
        
        <div class="col-xs-12 col-sm-5">
          <!-- CONTACT -->
          <div class="box clearfix">
            <h2>Contact</h2>
            <div class="contact-item">
              <div class="icon pull-left text-center"><span class="fa fa-envelope fa-fw"></span></div>
              <div class="title only pull-right">mira@miramollar.com</div>
            </div>
            <div class="contact-item">
              <div class="icon pull-left text-center"><a href="https://twitter.com/coderbug83" target="_blank"><span class="fa fa-twitter fa-fw"></span></a></div>
              <div class="title pull-right">Twitter</div>
              <div class="description pull-right">https://twitter.com/coderbug83</div>
            </div>
            <div class="contact-item">
              <div class="icon pull-left text-center"><a href="https://www.facebook.com/coderbug83" target="_blank"><span class="fa fa-facebook fa-fw"></span></a></div>
              <div class="title pull-right">Facebook</div>
              <div class="description pull-right">https://www.facebook.com/coderbug83</div>
            </div>
            <div class="contact-item">
              <div class="icon pull-left text-center"><a href="https://github.com/Mira-M" target="_blank"><span class="fa fa-github-alt fa-fw"></span></a></div>
              <div class="title pull-right">GitHub</div>
              <div class="description pull-right">https://github.com/Mira-M</div>
            </div>
          </div>
          <!-- SKILLS -->
          <div class="box">
            <h2>Languages</h2>
            <div class="skills">
	          <div class="item-skills" data-percent="0.90">JAVA</div>
	          <div class="item-skills" data-percent="0.90">JAVASCRIPT</div>
              <div class="item-skills" data-percent="0.90">HTML/CSS</div>
              <div class="item-skills" data-percent="0.60">PYTHON</div>
              <div class="item-skills" data-percent="0.60">PHP</div>
              <div class="item-skills" data-percent="0.60">C++</div>
              <div class="item-skills" data-percent="0.50">LUA</div>
              <div class="skills-legend clearfix">
                <div class="legend-left legend">Beginner</div>
                <div class="legend-left legend"><span>Intermediate</span></div>
                <div class="legend-right legend"><span>Proficient</span></div>
                <div class="legend-right legend">Expert</div>
              </div>
            </div>
          </div>
          <!-- ADDITIONAL PROFICIENCIES & FRAMEWORKS -->
          <div class="box">
            <h2>Additional Proficiencies/Frameworks</h2>
            <div id="language-skills">
              <div class="skill">Linux Development <div class="icons pull-right"><div style="width: 80%;" class="icons-red"></div></div></div>
              <div class="skill">AngularJS <div class="icons pull-right"><div style="width: 80%;" class="icons-red"></div></div></div>
              <div class="skill">Protractor <div class="icons pull-right"><div style="width: 70%;" class="icons-red"></div></div></div>
              <div class="skill">UI Design <div class="icons pull-right"><div style="width: 60%;" class="icons-red"></div></div></div>
              <div class="skill">Bootstrap <div class="icons pull-right"><div style="width: 80%;" class="icons-red"></div></div></div>
              <div class="skill">Wordpress Development <div class="icons pull-right"><div style="width: 80%;" class="icons-red"></div></div></div>
              <div class="skill">Git <div class="icons pull-right"><div style="width: 80%;" class="icons-red"></div></div></div>
              <div class="skill">Graphic Design <div class="icons pull-right"><div style="width: 80%;" class="icons-red"></div></div></div>
            </div>
          </div>
          
          <!--  -->
          <div class="box">
            <h2>Skills and Additional Experience</h2>
            <div id="language-skills">
            <div class="skill">Aptitude for learning new processes and systems quickly. </div>
            <div class="skill">Ability to develop strong client relationships through active listening and effective communication. </div>
            <div class="skill">Excellent writing skills and able to communicate well to management and team members. </div>
            <div class="skill">Highly analytical thinker with the ability to identify issues, communicate concerns, and devise means of solving problems. </div>
          </div>
          
          <!-- HOBBIES -->
          <div class="box">
            <h2>Hobbies</h2>
            <div class="hobby">Gaming</div>
            <div class="hobby">Programming</div>
            <div class="hobby">Game Jams</div>
            <div class="hobby">RPi Hacking</div>
            <div class="hobby">Reading</div>
            <div class="hobby">Peer Tutoring</div>
            <div class="hobby">Peer Mentoring</div>
            <div class="hobby">Blogging</div>
            <div class="hobby">Writing</div>
            <div class="hobby">Drawing</div>
          </div>

          <!-- Associations and Affliations -->
          <div class="box">
            <h2>Affiliations/Organizations</h2>
            <div id="language-skills">
            <div class="skill">Phi Kappa Phi Honor Society</div>
            <div class="skill">Upsilon Pi Epsilon Honor Society</div>
            <div class="skill">Alpha Sigma Lambda Honor Society</div>
            <div class="skill">National Society of Collegiate Scholars</div>
            <div class="skill">Sigma Alpha Pi Honor Society</div>
            <div class="skill">Girl Develop It - Baltimore</div>
          </div>
          </div>
        </div>
      </div>
  </div>
    </div>
</div>
<?php get_footer(); ?>