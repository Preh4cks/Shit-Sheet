    <canvas id="stars"></canvas>
<?php while (have_rows('profile_content')) : the_row(); ?>
<?php     if(get_row_layout() == 'hero'): ?>
    <section id="hero">
        <div id="text-content">
            <h1 data-aos="fade-right" data-aos-duration="1000"><?= get_sub_field('heading'); ?></h1>
            <h3 data-aos="fade-right" data-aos-duration="1500"><?= get_sub_field('sub_heading'); ?></h3>
            <button class="rainbow-button" type="button" data-aos="fade-right" data-aos-duration="2000"><?= get_sub_field('button'); ?></button>
        </div>
        <div id="planet"></div>
        <span id="down-arrow"></span>
    </section>

    <section id="journey">
        <h2>MY JOURNEY</h2>
        <div class="container left" data-aos="fade-right" data-aos-duration="800">
            <div class="content">
                <h3>2016</h3>
                <p>My passion in coding started dated back 2016 when my high school teacher introduced us to HTML and CSS, which as a final project I built a simple E-Commerce Website.</p>
            </div>
        </div>
        <div class="container right" data-aos="fade-left" data-aos-duration="800">
            <div class="content">
                <h3>2018</h3>
                <p>After graduating to junior high school, I went to AMA University to further enhance my coding skills, from here I learned the basics of Java and SQL.</p>
            </div>
        </div>
        <div class="container left" data-aos="fade-right" data-aos-duration="800">
            <div class="content">
                <h3>2020</h3>
                <p>I also took a lot of online courses to supplement my learnings. One of them is CS50 from Harvard which introduces me to C, Lua and Python. after this I able to built a simple game in just 2 days.</p>
            </div>
        </div>
        <div class="container right" data-aos="fade-left" data-aos-duration="800">
            <div class="content">
                <h3>2021</h3>
                <p>Then I graduated to Senior high school, And went to college where the fun begins. Spoiler Alert I spent the whole summer creating games. We also learned C++, more Java and SQL.</p>
            </div>
        </div>
        <div class="container left" data-aos="fade-right" data-aos-duration="800">
            <div class="content">
                <h3>2021</h3>
                <p>And here goes the Covid-19 Lockdown. Instead of turning this as disadvantage, I took my biggest step and tried to apply in companies. after numorous rejection I got accepted at FFUF Manila which is a German Based Company, they offered me a FREE Flutter Bootcamp with Zuitt, unfortunately I did'nt get absorbed, but I am really thankfull that I learned so much in just 3 months.</p>
            </div>
        </div>
        <div class="container right" data-aos="fade-left" data-aos-duration="800">
            <div class="content">
                <h3>2022</h3>
                <p>And now the most important piece of the puzzle, I got accepted at Village88 training where my coding knowledge expands 10 fold, I got to learn more than 30+ technologies. From the basic Web Fundamentals to Advanced PHP and to Advanced Javascript, and even Ruby on Rails. There are so much to it in detais but I want to keep this short since the next one is my first Actual Job.</p>
            </div>
        </div>
        <div class="container left" data-aos="fade-right" data-aos-duration="800">
            <div class="content">
                <h3>2022</h3>
                <p>Before even graduated to Village88 Training, they offered me a Job at Owner.com which is a US Based Company that provides Website, Delivery and Marketing Services to Small and Medium size Restaurants.</p>
                <p>My main role there was to Build and Manage PHP Wordpress Templates and help the marketing team for all the site changes, Analytics gathering etc.</p>
                <p>They called me The Batman since we were on a different time zone when they are past asleep then I am working.</p>
            </div>
        </div>
    </section>
    <section id="projects">
        <h2>MY PROJECTS</h2>
        <div id="project-container">
            <div class="flip-card" data-video-id="SyTr0xtTC0c" data-aos="fade-down" data-aos-duration="2000">
                <div class="flip-card-inner">
                    <div class="flip-card-front">
                        <iframe src="https://www.youtube.com/embed/SyTr0xtTC0c"></iframe>
                    </div>
                    <div class="flip-card-back">
                        <h3>Marvin</h3>
                        <p>A Google Web Assistant for Students, Built in just 1 week.</p>
                        <p class="technologies">Node.js, Express, JQuery, and Sockets</p>
                        <p id="preview">Click to preview</p>
                    </div>
                </div>
            </div>
            <div class="flip-card" data-video-id="QEbYQ5IY-84" data-aos="fade-down" data-aos-duration="2000">
                <div class="flip-card-inner">
                    <div class="flip-card-front">
                        <iframe src="https://www.youtube.com/embed/QEbYQ5IY-84"></iframe>
                    </div>
                    <div class="flip-card-back">
                        <h3>Prixxx Gaming Center</h3>
                        <p>A Computer E-Commerce Website, Built in just 1 week.</p>
                        <p class="technologies">PHP, MySQL, and CodeIgniter3</p>
                        <p id="preview">Click to preview</p>
                    </div>
                </div>
            </div>
            <div class="flip-card" data-video-id="w7NQC2X3Q-A" data-aos="fade-down" data-aos-duration="2000">
                <div class="flip-card-inner">
                    <div class="flip-card-front">
                        <iframe src="https://www.youtube.com/embed/w7NQC2X3Q-A"></iframe>
                    </div>
                    <div class="flip-card-back">
                        <h3>Friendster Clone</h3>
                        <p>Cloned Friendster App in just 4 hours.</p>
                        <p class="technologies">Ruby on Rails</p>
                        <p id="preview">Click to preview</p>
                    </div>
                </div>
            </div>
            <div class="flip-card" data-video-id="hTsgqoQVdDo" data-aos="fade-down" data-aos-duration="2000">
                <div class="flip-card-inner">
                    <div class="flip-card-front">
                        <iframe src="https://www.youtube.com/embed/hTsgqoQVdDo"></iframe>
                    </div>
                    <div class="flip-card-back">
                        <h3>Multiplayer Flappy bird</h3>
                        <p>Built with ranking system and chatbox in under 3 days.</p>
                        <p class="technologies">Node.js, Express, and Sockets</p>
                        <p id="preview">Click to preview</p>
                    </div>
                </div>
            </div>
            <div class="flip-card" data-video-id="LRh5yMn-KdE" data-aos="fade-down" data-aos-duration="2000">
                <div class="flip-card-inner">
                    <div class="flip-card-front">
                        <iframe src="https://www.youtube.com/embed/LRh5yMn-KdE"></iframe>
                    </div>
                    <div class="flip-card-back">
                        <h3>Just a Slime</h3>
                        <p>Single Level Game with Expert Difficulty built in 2 days.</p>
                        <p class="technologies">Game Maker Studio and Game Maker Language</p>
                        <p id="preview">Click to preview</p>
                    </div>
                </div>
            </div>
            <div class="flip-card" data-video-id="85sw3RBImv0" data-aos="fade-down" data-aos-duration="2000">
                <div class="flip-card-inner">
                    <div class="flip-card-front">
                        <iframe src="https://www.youtube.com/embed/85sw3RBImv0"></iframe>
                    </div>
                    <div class="flip-card-back">
                        <h3>My Mom Got Corona</h3>
                        <p>2D Platformer Game inspired by Super Mario</p>
                        <p class="technologies">Game Maker Studio and Game Maker Language</p>
                        <p id="preview">Click to preview</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php     endif; ?>
<?php endwhile; ?>