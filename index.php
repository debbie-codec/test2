<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MGB's Portfolio</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.1/aos.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.1/aos.js"></script>
    <style>
        /* Global Styles */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background-color: #40E0D0;
            color: #fff;
            scroll-behavior: smooth;
        }

        /* Navbar Styles */
        header {
            position: fixed;
            top: 0;
            width: 100%;
            background-color:  #0E4C92;
            padding: 1rem;
            z-index: 1000;
        }

        nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
           
        }

        nav ul {
            list-style: none;
            display: flex;
            justify-content: center;
            gap: 2rem;
        }

        nav ul li a {
            color: gold;
            text-decoration: none;
            font-weight: bold;
        }

        .hamburger {
            display: none;
            flex-direction: column;
            cursor: pointer;
        }

        .hamburger div {
            width: 25px;
            height: 3px;
            background-color: gold;
            margin: 4px 0;
        }

        /* Home Section */
        #home {
            height: 90vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background: linear-gradient(#333, #b3d9ff, #40E0D0);
            
        }

        #landing-text {
            font-size: 5rem;
            text-align: center;
            color: black;
            animation: fadeIn 5s infinite;
        }

        @keyframes fadeIn {
            0% { opacity: 0; }
            50% { opacity: 1; }
            100% { opacity: 0; }
        }

        /* About Me Section */
        #about {
            padding: 4rem 2rem;
            background-color: #40E0D0;
            color: black;
            opacity: 0;
            transform: translateY(20px);
            animation: fadeInUp 1s forwards;
        }

        .about-content {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .about-text {
            max-width: 60%;
        }

        .about-text p {
            margin-bottom: 1rem;
        }

        .about-image img {
            max-width: 100%;
            border-radius: 50%;
            border: 2px solid gold;
        }

        @keyframes fadeInUp {
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* Services Section */
        #services {
            padding: 2rem;
            text-align: center;
            opacity: 0;
            transform: translateY(20px);
            animation: fadeInUp 1s forwards;
            animation-delay: 0.5s;
            background-color: #0099cc;
        }

        .service-cards {
            display: flex;
            justify-content: space-around;
            gap: 1rem;
        }

        .service-card {
            background-color: #111;
            padding: 1.5rem;
            border: 1px solid gold;
            border-radius: 8px;
            width: 30%;
            transition: transform 0.3s;
        }

        .service-card:hover {
            transform: scale(1.05);
        }

        .service-card h3 {
            color: gold;
        }

        /* Testimonials Section */
        #testimonials {
            padding: 2rem;
            background-color: #9b9190;
            opacity: 0;
            transform: translateY(20px);
            animation: fadeInUp 1s forwards;
            animation-delay: 1s;
        }

        .testimonial {
            max-width: 600px;
            margin: auto;
            padding: 1.5rem;
            border: 1px solid gold;
            border-radius: 8px;
        }

      /* Contact Section */
    #contact {
      padding: 2rem;
    }

    #contact-form {
      display: flex;
      flex-direction: column;
      gap: 1rem;
      max-width: 600px;
      margin: auto;
    }

    #contact-form label {
      color: black;
    }

    #contact-form input, 
    #contact-form textarea {
      padding: 0.5rem;
      border: 1px solid gold;
      border-radius: 4px;
      background-color: #333;
      color: #fff;
    }

    #contact-form button {
      padding: 0.75rem;
      background-color: #0E4C92;
      border: none;
      border-radius: 4px;
      color: black;
      font-weight: bold;
    }

    .contact-info {
      text-align: center;
      padding-top: 1rem;
    }

        /* Gallery Section */
        .gallery-section {
            padding: 2rem;
            background-color: #66ffff;
            opacity: 0;
            transform: translateY(20px);
            animation: fadeInUp 1s forwards;
            animation-delay: 2s;
        }

        .slider {
            position: relative;
            overflow: hidden;
            max-width: 800px;
            margin: auto;
        }

        .slides {
            display: flex;
            transition: transform 0.5s ease;
        }

        .slide {
            min-width: 100%;
        }

        .slide img {
            width: 100%;
            border-radius: 8px;
        }

        .prev,
        .next {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            background-color: gold;
            border: none;
            cursor: pointer;
            padding: 0.5rem;
            font-size: 1.5rem;
            border-radius: 50%;
            z-index: 10;
        }

        .prev {
            left: 10px;
        }

        .next {
            right: 10px;
        }

        /* Footer */
        footer {
            text-align: center;
            padding: 1rem;
            background-color: darkcyan;
            color: wheat;
        }

        /* Responsive */
        @media (max-width: 768px) {
            .service-cards {
                flex-direction: column;
                align-items: center;
            }

            .service-card {
                width: 80%;
            }

            .about-content {
                flex-direction: column;
                align-items: center;
            }

            .about-text {
                text-align: center;
            }
        }

        @media (max-width: 768px) {
      .about-content {
        flex-direction: column;
        text-align: center;
      }

      .about-text {
        max-width: 100%;
      }

      nav ul {
        display: none;
        flex-direction: column;
        position: absolute;
        background-color: rgba(0, 0, 0, 0.9);
        width: 100%;
        top: 60px; /* Adjusted for height of navbar */
        left: 0;
      }

      nav ul.active {
        display: flex;
      }

      .hamburger {
        display: flex;
      }
    }

    /* Services Section */
    #services {
      padding: 2rem;
      text-align: center;
    }

    .service-cards {
      display: flex;
      justify-content: space-around;
      gap: 1rem;
    }

    .service-card {
      background-color: #111;
      padding: 1.5rem;
      border: 1px solid gold;
      border-radius: 8px;
      width: 60%;
    }

    .service-card h3 {
      color: gold;
    }

    </style>
</head>
<body>
    <header>
        <nav id="navbar">
          <div class="hamburger" id="hamburger">
            <div></div>
            <div></div>
            <div></div>
          </div>
          <div class="logo"><a href="#home" style="text-decoration: #0E4C92;color: goldenrod;"><H1>MGB.</H1></a></div>
          <ul id="nav-links">
            <li><a href="#home">Home</a></li>
            <li><a href="#about">About Me</a></li>
            <li><a href="#services">Services</a></li>
            <li><a href="#testimonials">Testimonials</a></li>
            <li><a href="#contact">Contact</a></li>
          </ul>
        </nav>
      </header>

    <section id="home">
        <h1 id="landing-text">Mgbemere Somto</h1>
    </section>

    <section id="about" data-aos="fade-up">
        <h2>About Me</h2>
        <div class="about-content">
            <div class="about-text" data-aos="fade-right">
                <p>  Hello! I am Mgbemere Somto, a passionate web developer, graphics designer, and digital marketer...</p>
                <p>
                 With a strong commitment to creating beautiful and functional web experiences, I bring creativity and precision to every project I work on. I am always eager to learn, grow, and take on new challenges in the ever-evolving world of technology.</p><br>
 </p> Whether it's crafting a visually stunning website or developing effective digital marketing strategies, I aim to deliver high-quality solutions for my clients.</p>
  <p>My journey started with a love for solving problems through code...</p>
            </div>
            <div class="about-image" data-aos="fade-left">
                <img src="image2.jpeg" alt="About Me Image">
            </div>
        </div>
    </section>

    <section id="services" data-aos="fade-up">
        <h2>Services</h2>
        <div class="service-cards">
            <div class="service-card" data-aos="flip-left">
                <h3>Product Design</h3>
                <p>Creating intuitive and engaging product designs...</p>
            </div>
            <div class="service-card" data-aos="flip-left">
                <h3>Graphics Design</h3>
                <p>Designing stunning graphics that effectively communicate...</p>
            </div>
            <div class="service-card" data-aos="flip-left">
                <h3>Hardware Implementations</h3>
                <p>Implementing hardware solutions...</p>
            </div>
        </div>
    </section>

    <section class="gallery-section" data-aos="fade-up">
        <h2 class="section-title">Gallery</h2>
        <div class="slider" id="slider">
            <div class="slides">
                <div class="slide"><img src="image.jpeg" alt="Gallery Image 1"></div>
                <div class="slide"><img src="image1.jpeg" alt="Gallery Image 1"></div>
                <div class="slide"><img src="image2.jpeg" alt="Gallery Image 2"></div>
                <div class="slide"><img src="image3.jpeg" alt="Gallery Image 2"></div>
                <div class="slide"><img src="image4.jpeg" alt="Gallery Image 2"></div>
                <div class="slide"><img src="image5.jpeg" alt="Gallery Image 2"></div>
                <!-- Add more images as needed -->
            </div>
            <button class="prev" onclick="changeSlide(-1)">&#10094;</button>
            <button class="next" onclick="changeSlide(1)">&#10095;</button>
        </div>
    </section>
    <section id="testimonials" data-aos="fade-up">
        <h2>Testimonials</h2>
        <div class="testimonial" data-aos="zoom-in">
            <p>"MGB's work is exceptional! She transformed our vision into reality." - lina</p>
        </div> <br>
        <div class="testimonial" data-aos="zoom-in">
            <p>"MGB's work is exceptional! She transformed our vision into reality." - Chinem</p>
        </div>
    </section>

    <!-- Contact Form with PHP -->
    <section id="contact">
        <h2>Contact Me</h2>
        <?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars(trim($_POST['name']));
    $email = htmlspecialchars(trim($_POST['email']));
    $message = htmlspecialchars(trim($_POST['message']));
    
    $to = "edwardsomto@gmail.com";
    $subject = "New Contact Form Submission";
    $body = "Name: $name\nEmail: $email\n\nMessage:\n$message";
    $headers = "From: $email";

    if (mail($to, $subject, $body, $headers)) {
        echo "Message sent successfully!";
    } else {
        echo "Sorry, something went wrong. Please try again later.";
    }
    
}
?>
        <form id="contact-form" method="POST" action="#contact">
            <label for="name">Your Name</label>
            <input type="text" id="name" name="name" required>
            <label for="email">Your Email</label>
            <input type="email" id="email" name="email" required>
            <label for="message">Message</label>
            <textarea id="message" name="message" rows="5" required></textarea>
            <button type="submit">Send Message</button>
        </form>
        <div class="contact-info">
            <p>Email: edwardsomto@gmail.com</p>
            <p>Phone: 09030623563</p>
        </div>
    </section>

  

        <div class="contact-info">
            <p>Email: edwardsomto@gmail.com</p>
            <p>Phone: +234 XXXXXXXXXX</p>
        </div>
    </section>



    <footer>
        <p>&copy; 2024 MGB-creative. All Rights Reserved.</p>
    </footer>

    <script>
          // Hamburger Menu Toggle
    const hamburger = document.getElementById('hamburger');
    const navLinks = document.getElementById('nav-links');

    hamburger.addEventListener('click', () => {
      navLinks.classList.toggle('active');
    });
        AOS.init({
            duration: 800, // Animation duration
        });

        // Slider functionality
        let slideIndex = 0;

        function showSlides(n) {
            const slides = document.querySelectorAll('.slide');
            if (n >= slides.length) {
                slideIndex = 0;
            } else if (n < 0) {
                slideIndex = slides.length - 1;
            } else {
                slideIndex = n;
            }
            slides.forEach((slide, index) => {
                slide.style.display = (index === slideIndex) ? 'block' : 'none';
            });
        }

        function changeSlide(n) {
            showSlides(slideIndex += n);
        }

        // Show the first slide
        showSlides(slideIndex);

        // Toggle mobile menu
        function toggleMenu() {
            const nav = document.querySelector('nav ul');
            nav.classList.toggle('active');
        }


        
        document.addEventListener("DOMContentLoaded", function() {
            // Change landing text every minute
            setInterval(() => {
                const landingText = document.getElementById("landing-text");
                landingText.innerText = landingText.innerText === "Mgbemere Somto" ? "I'm a Graphics Designer" : "Product Designer";
            }, 600);
        });


          // Initialize AOS animations
          AOS.init();
        
        // Form submission handling
        document.getElementById("contact-form").onsubmit = function(event) {
            event.preventDefault(); // Prevent the form from submitting immediately
            
            // Collect form data
            const name = document.getElementById("name").value;
            const email = document.getElementById("email").value;
            const message = document.getElementById("message").value;

            // Create an XMLHttpRequest to send the data
            const xhr = new XMLHttpRequest();
            xhr.open("POST", "", true); // Assuming the action is the same page
            xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
            
            // Define what happens on successful data submission
            xhr.onload = function() {
                if (xhr.status === 200) {
                    // Check if the response contains success or failure message
                    if (xhr.responseText.includes("success")) {
                        alert("Message sent successfully!");
                    } else {
                        alert("Message failed to send. Please try again.");
                    }
                    // Clear the form fields
                    document.getElementById("contact-form").reset();
                }
            };

            // Send the request with form data
            xhr.send(`name=${encodeURIComponent(name)}&email=${encodeURIComponent(email)}&message=${encodeURIComponent(message)}`);
        };
    </script>
</body>
</html>
