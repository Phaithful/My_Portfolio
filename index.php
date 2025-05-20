<!DOCTYPE html>
<html lang="en">

<!-- Head Section-->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Febechukwu Madu</title>
    <link rel="stylesheet" href="style.css">

    <!-- CDN LINKS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" integrity="sha512-..." crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- CDN ENDING -->


</head>
<!-- Head Ending -->



<!-- Body Section -->
<body>

    <!--Nav Bar -->
    <nav class="navbar navbar-expand-lg navbar-light custom-navbar">
        <div class="container-fluid d-flex justify-content-between align-items-center px-5 pt-3 pb-4">
            <a class="navbar-brand fs-1 fw-bold" href="#home">FEBE</a>

            <!-- Hamburger Button -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="my-toggler bi bi-list" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M2.5 12.5a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1h-10a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1h-10a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1h-10a.5.5 0 0 1-.5-.5z"/>
                </svg>
            </button>
            <!-- Hamburger Button ENDING -->


            <!-- Nav Bar Links -->
            <div class="collapse navbar-collapse justify-content-end " id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#home">HOME</a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link" href="#services">SERVICES</a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link" href="#skillset">SKILLSET</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#about">ABOUT</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#contact">CONTACT</a>
                    </li>
                </ul>

            </div>
            <!-- Nav Bar Links ENDING -->

        </div>
    </nav>
    <!-- Nav Bar Ending -->


    <!-- HOME SECTION -->
    <section class="home-section" id="home">
        

        <!-- Home Page Text -->
        <div class="container-fluid ">
            <p class="home-p">I AM</p>
            <h1 class="home-h1"><span>FEBE</span>CHUKWU</h1>
            <p class="home-description">FULL-STACK WEB DEV <br> & VIDEO EDITOR </p>
            
        </div>
        <!-- Home Page Text ENDING -->


        <!-- EXTRA MOBILE CONTENT [displays only on mobile and tablets] -->
        <div class="mobile d-block d-md-none">
            <!-- This content will only be visible on screens smaller than 992px -->
            <p>I am a story teller who weaves world with code and brings visions to life through motion.</p>
        </div>
        <!-- EXTRA MOBILE CONTENT ENDING -->


        <!-- Home page Buttons -->
        <div>
            <!-- lets talk button -->
            <button class="btn btn-primary talk-btn">
                let's Talk
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chat-left-text" viewBox="0 0 16 16">
                    <path d="M14 1a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H4.414A2 2 0 0 0 3 11.586l-2 2V2a1 1 0 0 1 1-1zM2 0a2 2 0 0 0-2 2v12.793a.5.5 0 0 0 .854.353l2.853-2.853A1 1 0 0 1 4.414 12H14a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2z"/>
                    <path d="M3 3.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5M3 6a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9A.5.5 0 0 1 3 6m0 2.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5"/>
                </svg>
            </button>
            <!-- lets talk button ENDING -->


            <!-- download cv button -->
            <button class="btn btn-primary cv-btn">
                Download CV
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-download" viewBox="0 0 16 16">
                    <path d="M.5 13a.5.5 0 0 1 .5-.5h15a.5.5 0 0 1 0 1h-15a.5.5 0 0 1-.5-.5z"/>
                    <path fill-rule="evenodd" d="M8.354 11.354a.5.5 0 0 1-.708 0l-3-3a.5.5 0 1 1 .708-.708L7 10.293V2.5a.5.5 0 0 1 1 0v7.793l2.646-2.647a.5.5 0 1 1 .708.708l-3 3z"/>
                </svg>
            </button>
            <!-- download cv button ENDING -->

        </div>
        <!-- Home page Buttons ENDING -->


    </section>
    <!-- HOME SECTION ENDING -->



    <!-- About Section -->
    <section class="about" id="about">
        <div class="container-fluid about-div" style="display: flex;">

            <!-- Camera Image -->
            <div class="about-img" style="width: 30%; padding-left: 100px;">
                <img src="images/camera-1.jpg" alt="video camera" class="camera-image">
            </div>
        
            

            <!-- virtical line -->
            <div class="vertical-line2">
                
            </div>

            <!-- virtical line ending -->


            <!-- Heart Mealting About Text 😂 -->
            <div style="width: 70%; margin-left: 90px;" class="about-content">
                <h1>ABOUT <span>M</span>E</h1>
                <p>My name is Febechukwu Madu, a final-year Computer Science student at Godfrey Okoye University a dream that began long before I ever walked through those campus gates.</p>
                <p>My journey into programming started in solitude, a year before university. In the quiet, I found Python. And in Python, I found myself. Line by line, it stitched something back together in me. It wasn’t just a language it was healing, it was hope, it was the beginning of purpose. That love led me to pursue Computer Science, not just as a course, but as a calling.</p>
                <p>But purpose doesn’t stand still. Along the way, while searching for more of myself, I chose to volunteer at my church’s media unit. That decision unlocked a second passion... the world of videography and video editing. Through every frame and cut, I discovered yet another way to tell stories, solve problems, and connect with others.</p>
                <p>Now, I live at the intersection of code and creativity, building both digital experiences and visual stories. And every day, I’m still learning, still growing, and still falling in love with the journey.</p>
            </div>


        </div>
    </section>
    <!-- About Section ENDING -->



    <!-- Services Section -->
    <section class="services" id="services">
        <div class="container service-container" style="display: flex;  height: auto;">


            <!-- left division of services section -->
            <div class="col service-left-div">
                <div class="service-left-div-content">
                    <h1>What do i offer <span>?</span></h1>
                    <p>With over 4 years in filmmaking and 3 years in IT, these are the 4 services i offer at their PEAK!</p>
                    <h1>Previous Experience <span>?</span></h1>
                    

                    <!-- Table for previous experience -->
                    <table class="table table-borderless the-table">
                        <thead>
                            <tr>
                            <th scope="col"></th>
                            <th scope="col">Company</th>
                            <th scope="col">Role</th>
                            <th scope="col">Duration</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                            <th scope="row">1</th>
                            <td>SPACG Medias</td>
                            <td>Videographer & Editor</td>
                            <td>5 Years...</td>
                            </tr>
                            <tr>
                            <th scope="row">2</th>
                            <td>Access Solution</td>
                            <td>Full Stack Dev</td>
                            <td>6 Months</td>
                            </tr>
                            <tr>
                            <th scope="row">3</th>
                            <td>Oringo Australia</td>
                            <td>Junior Video Editor</td>
                            <td>Project Based</td>
                            </tr>
                            <tr>
                            <td></td>
                            <td colspan="3">I also Freelance as a video editor and full stack dev for companies on the side</td>
                            </tr>
                        </tbody>
                    </table>
                    <!-- Table for previous experience ENDING -->
                    

                </div>
                
            </div>
            <!-- left division of services section ENDING -->


            <!-- Right division of services section -->
            <div class="col service-right-div">

                <!-- i divided the boxes in to 2, 2 top boxes and 2 bottom boxes -->
                <!-- container for top boxes -->
                <div class="flex-container service-right-c1">

                    <!--Top left box-->
                    <div class="top-left">

                        <div class="icon-text-wrapper">
                            <svg width="45" height="45" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg" class="icon">
                                <path d="M15.0302 4.34304C15.3231 4.63584 15.3233 5.11071 15.0305 5.4037L13.0603 7.37514L15.0305 9.34673C15.3233 9.63973 15.3231 10.1146 15.0301 10.4074C14.7371 10.7002 14.2623 10.7 13.9695 10.407L11.4695 7.90527C11.1768 7.61241 11.1768 7.13781 11.4695 6.84496L13.9695 4.34337C14.2623 4.05039 14.7372 4.05024 15.0302 4.34304Z" fill="#323544"/>
                                <path d="M18.2198 4.34304C17.9269 4.63584 17.9267 5.11071 18.2195 5.4037L20.1897 7.37514L18.2195 9.34673C17.9267 9.63973 17.9269 10.1146 18.2199 10.4074C18.5129 10.7002 18.9877 10.7 19.2805 10.407L21.7805 7.90527C22.0732 7.61241 22.0732 7.13781 21.7805 6.84496L19.2805 4.34337C18.9877 4.05039 18.5128 4.05024 18.2198 4.34304Z" fill="#323544"/>
                                <path d="M22 15.344V11.6622C21.5725 12.1975 21.0667 12.6675 20.5 13.0549V15.344C20.5 15.7582 20.1642 16.094 19.75 16.094H4.25C3.83579 16.094 3.5 15.7582 3.5 15.344V6.75021C3.5 6.33599 3.83579 6.00021 4.25 6.00021H9.88753C9.99391 5.47609 10.1599 4.97363 10.3782 4.50021H4.25C3.00736 4.50021 2 5.50757 2 6.75021V15.344C2 16.5866 3.00736 17.594 4.25 17.594H11.25V19.2502H9.00003C8.58582 19.2502 8.25003 19.586 8.25003 20.0002C8.25003 20.4144 8.58582 20.7502 9.00003 20.7502H15C15.4142 20.7502 15.75 20.4144 15.75 20.0002C15.75 19.586 15.4142 19.2502 15 19.2502H12.75V17.594H19.75C20.9926 17.594 22 16.5866 22 15.344Z" fill="#323544"/>
                            </svg>

                            <h1 id="front-h1">Front-End Dev</h1>
                            <p id="front-p" >3 years worth of knowledge and expertise in HTML, CSS, BOOTSTRAP & JavaScript. </p>
                        </div>
                        
                    </div>
                    <!--Top left box ENDING-->


                    <!--Top right box-->
                    <div class="top-right">

                        <div class="icon-text-wrapper">
                            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-code-slash icon" viewBox="0 0 16 16">
                                <path d="M10.478 1.647a.5.5 0 1 0-.956-.294l-4 13a.5.5 0 0 0 .956.294zM4.854 4.146a.5.5 0 0 1 0 .708L1.707 8l3.147 3.146a.5.5 0 0 1-.708.708l-3.5-3.5a.5.5 0 0 1 0-.708l3.5-3.5a.5.5 0 0 1 .708 0m6.292 0a.5.5 0 0 0 0 .708L14.293 8l-3.147 3.146a.5.5 0 0 0 .708.708l3.5-3.5a.5.5 0 0 0 0-.708l-3.5-3.5a.5.5 0 0 0-.708 0"/>
                            </svg>


                            <h1>Back-End Dev</h1>
                            <p>Accumulated 4 years in python and 3 years worth of expertise in Php, MySql, GIT & React JS</p>

                        </div>
                        
                    </div>
                    <!--Top right box ENDING-->
  
                </div>
                <!-- container for top boxes ENDING -->


                <!-- container for bottom boxes -->
                <div class="flex-container service-right-c2" style="margin-top: -40px;">

                    <!--Bottom left box-->
                    <div class="bottom-left">
                        
                        <div class="icon-text-wrapper">
                            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-camera-reels icon" viewBox="0 0 16 16"">
                                <path d="M6 3a3 3 0 1 1-6 0 3 3 0 0 1 6 0M1 3a2 2 0 1 0 4 0 2 2 0 0 0-4 0"/>
                                <path d="M9 6h.5a2 2 0 0 1 1.983 1.738l3.11-1.382A1 1 0 0 1 16 7.269v7.462a1 1 0 0 1-1.406.913l-3.111-1.382A2 2 0 0 1 9.5 16H2a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2zm6 8.73V7.27l-3.5 1.555v4.35zM1 8v6a1 1 0 0 0 1 1h7.5a1 1 0 0 0 1-1V8a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1"/>
                                <path d="M9 6a3 3 0 1 0 0-6 3 3 0 0 0 0 6M7 3a2 2 0 1 1 4 0 2 2 0 0 1-4 0"/>
                            </svg>


                            <h1>Videography</h1>
                            <p>Understanding of Camera Theory with 5 years worth of experience in film making </p>
                        </div>

                    </div>
                    <!--Bottom left box ENDING-->


                    <!--Bottom right box-->
                    <div class="bottom-right">

                        <div class="icon-text-wrapper">
                            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="#dddddd" class="bi bi-laptop icon" viewBox="0 0 16 16">
                                <path d="M13.5 3a.5.5 0 0 1 .5.5V11H2V3.5a.5.5 0 0 1 .5-.5zm-11-1A1.5 1.5 0 0 0 1 3.5V12h14V3.5A1.5 1.5 0 0 0 13.5 2zM0 12.5h16a1.5 1.5 0 0 1-1.5 1.5h-13A1.5 1.5 0 0 1 0 12.5"/>
                            </svg>
                            <h1>Video Editing</h1>
                            <p>Understanding of cinematogrphy and sound design, with 5 years experience</p>

                        </div>
                       
                    </div>
                    <!--Bottom right box ENDING-->
                    
                </div>
                <!-- container for bottom boxes ENDING -->

            </div>
            <!-- Right division of services section ENDING -->

        </div>

    </section >
    <!-- Services Section ENDING -->
    
    

    <!-- Skillset Section -->
    <section class="skillset" id="skillset">


        <!-- i divided the skillset section in to 2, 1 left div and 1 right div -->
        <div class="container skill-class" style="display: flex; height: auto;">
            

            <!-- skillset section left div (my stats)-->
            <div class="skill-left-div" style="justify-content: space-around; margin-right: 70px; width: 20%">
                <div class="stats">
                    <h1>
                        12
                    </h1>
                    <p>Front-Ends completed</p>
                </div>

                <div class="stats">
                    <h1>
                        7
                    </h1>
                    <p>Back-Ends completed</p>
                </div>

                <div class="stats">
                    <h1>
                        15
                    </h1>
                    <p>Full Event Coverage</p>
                </div>

                <div class="stats">
                    <h1>
                        43
                    </h1>
                    <p>Videos Edited</p>
                </div>

                <div class="stats">
                    <h1>
                        82%
                    </h1>
                    <p>Client Satisfaction</p>
                </div>

                

            </div>
            <!-- skillset section left div (my stats) ending -->
                    



            <!-- virtical line -->
            <div class="vertical-line-wrapper">
                <div class="vertical-dot dot-1"></div>
                <div class="vertical-dot dot-2"></div>
                <div class="vertical-dot dot-3"></div>
                <div class="vertical-dot dot-4"></div>
            </div>

            <!-- virtical line ending -->



            <!-- skillset section right div (skillset) -->
            <div class="skill-right-div" style="width: 80%; margin-left: 50px;">

                <h1 class="skill-header">My Skills</h1>

                <!-- listing all my skills and their percentage -->
                <div class="container skillset-container" style="display: flex; width: 100%;">
                    <div style="width: 50%; margin-right: 60px;" class="front-end-skills">

                        
                        <h1>Front-End</h1>
                        <p style="padding-bottom: 20px;">These are my core front end skills for responsive web design, with the aim of delivering seemless websites in the shortest time possibel</p>
                        
                        <!-- Front-End Skills -->
                        <div>   
                            <p class="bar-values">HTML</p>
                            <div class="bar">
                                <div class="skills html"><p>85%</p></div>
                            </div>

                            <p class="bar-values">CSS</p>
                            <div class="bar">
                                <div class="skills css"><p>80%</p></div>
                            </div>

                            <p class="bar-values">BootStrap</p>
                            <div class="bar">
                                <div class="skills bootstrap"><p>50%</p></div>
                            </div>

                            <p class="bar-values">JavaScript</p>
                            <div class="bar">
                                <div class="skills js"><p>75%</p></div>
                            </div>

                            <p class="bar-values">jQuery</p>
                            <div class="bar">
                                <div class="skills jq"><p>65%</p></div>
                            </div>

                        </div>
                        <!-- Front-End Skills ENDING -->


                    </div>


                    <div style="width: 50%" class="back-end-skills">

                        <h1>Back-End</h1>
                        <p style="padding-bottom: 20px;">Where functionality and 0 delay in loading time is a priority, these are my core back-end skills that come in play</p>
                        
                        <!-- Back-End Skills -->
                        <div>   
                            <p class="bar-values">Python</p>
                            <div class="bar">
                                <div class="skills python"><p>90%</p></div>
                            </div>

                            <p class="bar-values">PHP</p>
                            <div class="bar">
                                <div class="skills php"><p>50%</p></div>
                            </div>

                            <p class="bar-values">MySql</p>
                            <div class="bar">
                                <div class="skills mysql"><p>60%</p></div>
                            </div>

                            <p class="bar-values">React JS</p>
                            <div class="bar">
                                <div class="skills react"><p>30%</p></div>
                            </div>

                            <p class="bar-values">GitHub</p>
                            <div class="bar">
                                <div class="skills git"><p>65%</p></div>
                            </div>

                            

                        </div>
                        <!-- Back-End Skills ENDING -->


                    </div>

                </div>

            </div>
            <!-- skillset section right div (skillset) ending -->


            <!-- Table for previous experience -->
            <div class="skill-table" style="display: none;">
                <table class="table table-borderless the-s-table">
                    <thead>
                        <tr>
                        <th scope="col"></th>
                        <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                        <th scope="row">12</th>
                        <td>Front-End completed</td>
                        </tr>
                        <tr>
                        <th scope="row">7</th>
                        <td>Back-End Completed</td>
                        </tr>
                        <tr>
                        <th scope="row">15</th>
                        <td>Full Video Coverage</td>
                        </tr>
                        <tr>
                        <tr>
                        <th scope="row">43</th>
                        <td>Video Edited</td>
                        </tr>
                        <tr>
                        <th scope="row">82%</th>
                        <td>client satisfaction</td>
                        </tr>
                    </tbody>
                </table>
                <!-- Table for previous experience ENDING -->

            </div>

        </div>

    </section>
    <!-- Skillset Section ENDING -->





    <!-- Contact Section -->
    <section class="contact" id="contact" style="display: flex;">

        <!-- i dividev the contact section into 2, 1 for the form, 1 for the socials -->
        <!-- Form Division -->
        <div style="width: 100%; margin-right: -50px">
            <h1>Contact <span>M</span>e</h1>


            <div class="container-fluid contact-container"">
            <!-- Contact Form Begin -->
                <div class="card">
                    <form action="">
                        <div class="names">
                            <input type="" placeholder="First Name" required id="first">
                            <input type="" placeholder ="Last Name" required>
                        </div>

                        <input type="email" id="email" name="email" placeholder="Email" required>

                        <input type="text" id="subject" name="subject" placeholder="Subject" required>  
                        <textarea name="message" id="message" cols="30" rows="10" placeholder="Message" required></textarea>

                        <input type="submit" name="" value="SUBMIT" class="btn submit-btn">

                    </form>

                </div>
            </div>    
            <!-- Contact Form ENDS -->

        </div>
        <!-- Form Division ENDING -->


        <!-- Socials Division -->
        <div class="social-div" style=" margin-left: -50px;">
            <!-- social media platforms -->
            <div class="socials">
                <a href="https://www.facebook.com/profile.php?id=61566282749285" class="text-white"><i class="fab fa-facebook fa-2x"></i></a>
                <a href="https://x.com/thebot_x" class="text-white"><i class="fab fa-x-twitter fa-2x"></i></a>
                <a href="https://www.instagram.com/thegarnet__/" class="text-white"><i class="fab fa-instagram fa-2x"></i></a>
                <a href="https://www.linkedin.com/in/madu-faithful-8310a2364/" class="text-white"><i class="fab fa-linkedin fa-2x"></i></a>
            </div>
        </div>
        <!-- Socials Division ENDING -->
       

    </section>
    <!-- Contact Section ENDING -->




            
        



<!-- JavaScript Section Links -->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
<script src="script.js"></script>   

<!-- JavaScript Ending -->


</body>
<!-- Body Ending -->



</html>



