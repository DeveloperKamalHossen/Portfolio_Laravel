
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kamal Hossen - Web Developer Portfolio</title>
    <link rel="stylesheet" href="assets/styles.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
</head>
<body>
    <!-- Navigation -->
    <nav class="navbar" id="navbar">
        <div class="nav-container">
            <div class="nav-logo">
                <a href="#home">Kamal Hossen</a>
            </div>
            <div class="nav-menu" id="nav-menu">
                <a href="#home" class="nav-link">Home</a>
                <a href="#about" class="nav-link">About</a>
                <a href="#skills" class="nav-link">Skills</a>
                <a href="#projects" class="nav-link">Projects</a>
                <a href="#contact" class="nav-link">Contact</a>
            </div>
            <div class="nav-toggle" id="nav-toggle">
                <span class="bar"></span>
                <span class="bar"></span>
                <span class="bar"></span>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section id="home" class="hero">
        <div class="hero-container">
            <div class="hero-content">
                <h1 class="hero-title">
                    Hi, I'm <span class="highlight">Developer Kamal Hossen</span>
                </h1>
                <p class="hero-subtitle"> <span class="light"> A passionate front-end designer and developer from Bangladesh </span></p>
                <p class="hero-subtitle">Senior Full Stack Web Developer And Laravel Expert</p>
                <p class="hero-description">
                    I craft high-performance, responsive web applications with clean code and 
                    exceptional user experiences. Specializing in modern JavaScript frameworks 
                    and cloud architecture.
                </p>
                <div class="hero-buttons">
                    <a href="#projects" class="btn btn-primary">View My Work</a>
                    <a href="#contact" class="btn btn-secondary">Get In Touch</a>
                </div>
            </div>
             <!-- Replaced placeholder with real professional developer image -->
            <div class="hero-image">
                <div class="profile-card">
                    <div class="hero-image">
                        <img src="/assets/images/Kamal10-removebg-preview.png" 
                             alt="Kamal Hossen - Laravel Developer" 
                             class="img-fluid rounded-5 shadow-lg w-50 h-50"
                             loading="lazy">
                    </div>
                </div>
            </div>
        </div>
        <div class="scroll-indicator">
            <i class="fas fa-chevron-down"></i>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="about">
        <div class="container">
            <h2 class="section-title">About Me</h2>
            <div class="about-content">
                <div class="about-text">
                    <p>
                        I'm a senior full-stack developer with over 7 years of experience 
                        building scalable web applications. I specialize in JavaScript 
                        frameworks (React, Node.js, Vue.js) and have extensive experience 
                        with cloud platforms like AWS and serverless architectures.
                    </p>
                    <p>
                        My approach combines clean code principles with performance optimization 
                        and security best practices. I'm passionate about creating efficient, 
                        maintainable solutions that deliver real business value while 
                        providing exceptional user experiences.
                    </p>
                    <div class="about-stats">
                        <div class="stat">
                            <h3>80+</h3>
                            <p>Web Projects</p>
                        </div>
                        <div class="stat">
                            <h3>7+</h3>
                            <p>Years Experience</p>
                        </div>
                        <div class="stat">
                            <h3>95%</h3>
                            <p>Client Satisfaction</p>
                        </div>
                    </div>
                </div>
                <div class="about-image">
                    <div class="about-img-container">
                        <i class="fas fa-code"></i>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Skills Section -->
    <section id="skills" class="skills">
        <div class="container">
            <h2 class="section-title">Skills & Technologies</h2>
            <div class="skills-grid">
                <div class="skill-category">
                    <h3>Frontend</h3>
                    <div class="skill-items">
                        <div class="skill-item">
                            <i class="fab fa-html5"></i>
                            <span>HTML5</span>
                        </div>
                        <div class="skill-item">
                            <i class="fab fa-css3-alt"></i>
                            <span>CSS3</span>
                        </div>
                        <div class="skill-item">
                            <i class="fab fa-js-square"></i>
                            <span>JavaScript</span>
                        </div>
                        <div class="skill-item">
                            <i class="fab fa-react"></i>
                            <span>React</span>
                        </div>
                        <div class="skill-item">
                            <i class="fab fa-vue"></i>
                            <span>Vue.js</span>
                        </div>
                    </div>
                </div>
                <div class="skill-category">
                    <h3>Backend</h3>
                    <div class="skill-items">
                        <div class="skill-item">
                            <i class="fab fa-node-js"></i>
                            <span>Node.js</span>
                        </div>
                        <div class="skill-item">
                            <i class="fab fa-python"></i>
                            <span>Python</span>
                        </div>
                        <div class="skill-item">
                            <i class="fas fa-database"></i>
                            <span>MongoDB</span>
                        </div>
                        <div class="skill-item">
                            <i class="fas fa-server"></i>
                            <span>Express.js</span>
                        </div>
                        <div class="skill-item">
                            <i class="fas fa-cloud"></i>
                            <span>AWS</span>
                        </div>
                    </div>
                </div>
                <div class="skill-category">
                    <h3>Tools</h3>
                    <div class="skill-items">
                        <div class="skill-item">
                            <i class="fab fa-git-alt"></i>
                            <span>Git</span>
                        </div>
                        <div class="skill-item">
                            <i class="fab fa-docker"></i>
                            <span>Docker</span>
                        </div>
                        <div class="skill-item">
                            <i class="fas fa-tools"></i>
                            <span>Webpack</span>
                        </div>
                        <div class="skill-item">
                            <i class="fab fa-figma"></i>
                            <span>Figma</span>
                        </div>
                        <div class="skill-item">
                            <i class="fas fa-mobile-alt"></i>
                            <span>Responsive Design</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Projects Section -->
    <section id="projects" class="projects">
        <div class="container">
            <h2 class="section-title">Featured Projects</h2>
            <div class="projects-grid">
                <div class="project-card" data-category="web">
                    <div class="project-image">
                        <i class="fas fa-shopping-cart"></i>
                    </div>
                    <div class="project-content">
                        <h3>Enterprise SaaS Platform</h3>
                        <p>Led development of a scalable B2B SaaS solution with microservices architecture. Implemented real-time analytics, role-based access control, and automated deployment pipelines.</p>
                        <div class="project-tech">
                            <span>React</span>
                            <span>Node.js</span>
                            <span>MongoDB</span>
                            <span>Docker</span>
                            <span>AWS</span>
                        </div>
                        <div class="project-links">
                            <a href="#" class="project-link">
                                <i class="fas fa-external-link-alt"></i>
                                Live Demo
                            </a>
                            <a href="#" class="project-link">
                                <i class="fab fa-github"></i>
                                Code
                            </a>
                        </div>
                    </div>
                </div>

                <div class="project-card" data-category="web">
                    <div class="project-image">
                        <i class="fas fa-tasks"></i>
                    </div>
                    <div class="project-content">
                        <h3>AI-Powered Analytics Dashboard</h3>
                        <p>Developed a data visualization platform with machine learning integration for predictive analytics. Features include custom charting, data export, and automated report generation.</p>
                        <div class="project-tech">
                            <span>Vue.js</span>
                            <span>Python</span>
                            <span>TensorFlow</span>
                            <span>D3.js</span>
                        </div>
                        <div class="project-links">
                            <a href="#" class="project-link">
                                <i class="fas fa-external-link-alt"></i>
                                Live Demo
                            </a>
                            <a href="#" class="project-link">
                                <i class="fab fa-github"></i>
                                Code
                            </a>
                        </div>
                    </div>
                </div>

                <div class="project-card" data-category="mobile">
                    <div class="project-image">
                        <i class="fas fa-mobile-alt"></i>
                    </div>
                    <div class="project-content">
                        <h3>Serverless E-commerce API</h3>
                        <p>Architected a high-performance, serverless backend for an e-commerce platform using AWS Lambda, API Gateway, and DynamoDB. Achieved 99.99% uptime and sub-100ms response times.</p>
                        <div class="project-tech">
                            <span>AWS Lambda</span>
                            <span>Node.js</span>
                            <span>DynamoDB</span>
                            <span>Serverless</span>
                        </div>
                        <div class="project-links">
                            <a href="#" class="project-link">
                                <i class="fas fa-external-link-alt"></i>
                                Live Demo
                            </a>
                            <a href="#" class="project-link">
                                <i class="fab fa-github"></i>
                                Code
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="contact">
        <div class="container">
            <h2 class="section-title">Get In Touch</h2>
            <div class="contact-content">
                <div class="contact-info">
                    <h3>Let's Build Something Amazing!</h3>
                    <p>I'm currently available for freelance projects and full-time opportunities. Whether you need a complete web application, API development, or technical consulting, I'd love to discuss how I can help bring your ideas to life.</p>
                    <div class="contact-details">
                        <div class="contact-item">
                            <i class="fas fa-envelope"></i>
                            <span>info@developerkamal.com</span>
                        </div>
                        <div class="contact-item">
                            <i class="fas fa-phone"></i>
                            <span>+880 1717692742</span>
                        </div>
                        <div class="contact-item">
                            <i class="fas fa-map-marker-alt"></i>
                            <span>Narayanganj, Dhaka, Bangladesh-1460</span>
                        </div>
                    </div>
                    <div class="social-links">
                         <a href="https://github.com/DeveloperKamalHossen" target="-blank" class="social-link">
                            <i class="fab fa-github"></i>
                        </a>
                        <a href="https://www.linkedin.com/in/kamal-hossen742/" target="-blank" class="social-link">
                            <i class="fab fa-linkedin"></i>
                        </a>
                       
                        <a href="https://x.com/KamalDeveloper" target="-blank" class="social-link">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="https://www.instagram.com/developerkamal14101988" target="-blank" class="social-link">
                            <i class="fab fa-instagram"></i>
                        </a>
                    </div>
                </div>
                <form class="contact-form" id="contact-form">
                    <div class="form-group">
                        <input type="text" id="name" name="name" placeholder="Your Name" required>
                    </div>
                    <div class="form-group">
                        <input type="email" id="email" name="email" placeholder="Your Email" required>
                    </div>
                    <div class="form-group">
                        <input type="text" id="subject" name="subject" placeholder="Subject" required>
                    </div>
                    <div class="form-group">
                        <textarea id="message" name="message" placeholder="Your Message" rows="5" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Send Message</button>
                </form>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
             <div style="text-align: center; margin-top: 1rem; padding-top: 1rem;">
     <p>©Copyright 2025.<a href="https://developerkamal.com/" target="_blank"> Developer Kamal Hossen.</a> All Rights Reserved.</p>
  </div>
        </div>
    </footer>

    <script src="assets/script.js"></script>
</body>
</html>
