<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>CLS JStack Solutions | Enterprise Software & AI</title>

  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
  
  <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css"/>

  <style>
    :root {
      --primary-blue: #3b82f6;
      --dark-bg: #0f172a;
      --slate-300: #cbd5e1;
      --white: #ffffff;
      --light-bg: #f8fafc;
    }

    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    html {
      scroll-behavior: smooth;
    }

    body {
      font-family: 'Inter', sans-serif;
      line-height: 1.6;
      color: #1f2933;
      background-color: #fff;
    }

    header {
      position: fixed;
      width: 100%;
      background: rgba(255, 255, 255, 0.95);
      backdrop-filter: blur(10px);
      box-shadow: 0 2px 10px rgba(0,0,0,0.08);
      z-index: 1000;
    }

    .navbar {
      max-width: 1100px;
      margin: auto;
      padding: 1rem;
      display: flex;
      justify-content: space-between;
      align-items: center;
    }
/* LOGO STYLES */
    .logo {
      display: flex;
      align-items: center;
      text-decoration: none;
    }

    .logo img {
      height: 40px; /* Adjust based on your logo's proportions */
      width: auto;
      margin-right: 10px;
    }
    .logo-test {
      font-weight: 700;
      font-size: 1.2rem;
      color: var(--dark-bg);
      letter-spacing: -0.5px;
    }

    .nav-links {
      list-style: none;
      display: flex;
      gap: 1.5rem;
    }

    .nav-links a {
      text-decoration: none;
      font-weight: 600;
      color: #475569;
      transition: color 0.3s;
    }

    .nav-links a:hover {
      color: var(--primary-blue);
    }

    /* HERO SECTION */
    #hero {
      height: 100vh;
      background:
        linear-gradient(rgba(15, 23, 42, 0.7), rgba(15, 23, 42, 0.7)),
        url("https://www.datocms-assets.com/132613/1724440968-creditgreenpeace-greatbearrainforest-spruceinterior-2.jpg?w=1200");
      background-size: cover;
      background-position: center;
      background-attachment: fixed;
      display: flex;
      align-items: center;
      justify-content: center;
      text-align: center;
      color: #fff;
      padding: 0 20px;
    }

    .hero-content h1 {
      font-size: clamp(2.5rem, 5vw, 4rem);
      margin-bottom: 1rem;
    }

    .hero-content p {
      margin-bottom: 2rem;
      font-size: 1.25rem;
      opacity: 0.9;
      max-width: 700px;
      margin-left: auto;
      margin-right: auto;
    }

    .btn-primary {
      display: inline-block;
      padding: 0.8rem 2rem;
      background: var(--primary-blue);
      color: #fff;
      border-radius: 6px;
      text-decoration: none;
      font-weight: 600;
      transition: transform 0.3s, background 0.3s;
    }

    .btn-primary:hover {
      background: #2563eb;
      transform: translateY(-2px);
    }

    /* GENERAL SECTION STYLING */
    section {
      padding: 100px 20px;
    }

    .container {
      max-width: 1100px;
      margin: auto;
    }

    h2 {
      text-align: center;
      font-size: 2.25rem;
      margin-bottom: 3rem;
      color: var(--dark-bg);
    }

    .section-subtitle {
      display: block;
      text-align: center;
      color: var(--primary-blue);
      text-transform: uppercase;
      letter-spacing: 2px;
      font-weight: 700;
      font-size: 0.9rem;
      margin-bottom: 10px;
    }

    /* SERVICES SECTION */
    #services {
      min-height: 90vh;
      background: 
        linear-gradient(rgba(15, 23, 42, 0.5), rgba(15, 23, 42, 0.7)),
        url("https://optazen.com/img/9-services.jpeg");
      background-size: cover;
      background-position: center;
      background-attachment: fixed;
      display: flex;
      align-items: center;
      color: #fff;
    }

    #services h2 { color: #fff; }

    .services-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
      gap: 30px;
    }

    .service-card {
      background: rgba(15, 23, 42, 0.6);
      backdrop-filter: blur(8px);
      border: 1px solid rgba(255, 255, 255, 0.1);
      padding: 40px;
      border-radius: 15px;
      transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
      position: relative;
      overflow: hidden;
    }

    .service-card:hover {
      transform: translateY(-10px);
      background: rgba(15, 23, 42, 0.8);
      border-color: var(--primary-blue);
    }

    .service-card h3 {
      font-size: 1.4rem;
      margin-bottom: 15px;
      color: #e5ebeb;
    }

    .service-card p {
      font-size: 1rem;
      color: var(--slate-300);
      line-height: 1.7;
    }

    .service-card::before {
      content: '';
      position: absolute;
      top: 0; left: 0;
      width: 4px; height: 0;
      background: var(--primary-blue);
      transition: height 0.3s ease;
    }

    .service-card:hover::before { height: 100%; }

    /* TEAM SECTION */
    #team {
      position: relative;
      background: 
        linear-gradient(rgba(248, 250, 252, 0.95), rgba(248, 250, 252, 0.95)),
        url("https://images.unsplash.com/photo-1497366216548-37526070297c?auto=format&fit=crop&q=80&w=2069");
      background-size: cover;
      background-position: center;
      background-attachment: fixed;
    }

    .team-grid {
      display: flex;
      justify-content: center;
      margin-top: 50px;
    }

    .team-member {
      text-align: center;
      padding: 3rem;
      background: #ffffff;
      border-radius: 20px;
      box-shadow: 0 20px 40px rgba(15, 23, 42, 0.1);
      max-width: 400px;
      transition: transform 0.3s ease;
      border: 1px solid #e2e8f0;
    }

    .team-member:hover { transform: translateY(-10px); }

    .member-image {
      width: 180px;
      height: 180px;
      margin: 0 auto 1.5rem;
      border-radius: 50%;
      overflow: hidden;
      border: 4px solid #fff;
      box-shadow: 0 10px 20px rgba(0,0,0,0.1);
      background: #f1f5f9;
    }

    .member-image img {
      width: 100%;
      height: 100%;
      object-fit: cover;
      filter: grayscale(20%);
    }

    .team-member h3 {
      font-size: 1.5rem;
      color: var(--dark-bg);
      margin-bottom: 0.5rem;
    }

    .team-member p {
      color: var(--primary-blue);
      font-weight: 700;
      text-transform: uppercase;
      font-size: 0.85rem;
      letter-spacing: 1px;
      margin-bottom: 1rem;
    }

    .team-bio {
      color: #64748b;
      font-size: 1rem;
      line-height: 1.6;
    }

    /* CONTACT FORM */
    .contact-form {
      max-width: 600px;
      margin: auto;
      display: flex;
      flex-direction: column;
      gap: 1.2rem;
    }

    .contact-form input,
    .contact-form textarea {
      padding: 1rem;
      border-radius: 8px;
      border: 1px solid #e2e8f0;
      font-family: inherit;
      font-size: 1rem;
    }

    .contact-form button {
      padding: 1rem;
      background: var(--dark-bg);
      color: #fff;
      border: none;
      border-radius: 8px;
      font-weight: 700;
      cursor: pointer;
      transition: background 0.3s;
    }

    .contact-form button:hover { background: var(--primary-blue); }

    /* TESTIMONIALS & FOOTER */
    #customers .swiper-slide {
      padding: 40px;
      background: #f8fafc;
      border-radius: 12px;
      text-align: center;
    }

    blockquote {
      font-style: italic;
      font-size: 1.2rem;
      color: #334155;
      margin-bottom: 1rem;
    }

    cite {
      font-weight: 700;
      color: var(--primary-blue);
      font-style: normal;
    }

    footer {
      background: var(--dark-bg);
      color: #94a3b8;
      text-align: center;
      padding: 2rem;
    }

    /* ANIMATIONS */
    .fade-in {
      opacity: 0;
      transform: translateY(30px);
      transition: opacity 0.8s ease-out, transform 0.8s ease-out;
    }

    .fade-in.visible {
      opacity: 1;
      transform: translateY(0);
    }
    .lg{width:40%;
      height:24px;
    }
  </style>
</head>
<body>

<header>
  <nav class="navbar"><span class="lg">
    <a href="#hero" class="logo">
  <img src="logo.png" alt="CLS JStack Logo"></span>
  <span class="logo-text">CLS JStack Solutions</span>
</div>
    <ul class="nav-links">
      <li><a href="#hero">Home</a></li>
      <li><a href="#about">About</a></li>
      <li><a href="#services">Services</a></li>
      <li><a href="#customers">Clients</a></li>
      <li><a href="#team">Team</a></li>
      <li><a href="#contact">Contact</a></li>
    </ul>
  </nav>
</header>

<section id="hero">
  <div class="hero-content">
    <h1>CLS JStack Solutions</h1>
    <p>Engineering enterprise software, high-performance cloud architectures, and AI-driven automation.</p>
    <a href="#contact" class="btn-primary">Request a Inquiry</a>
  </div>
</section>

<section id="about" class="fade-in">
  <div class="container">
    <h2>Our Mission</h2>
    <p style="text-align: center; max-width: 800px; margin: auto;">At CLS JStack Solutions, we bridge the gap between complex business challenges and elegant technical solutions.</p>
  </div>
</section>

<section id="services">
  <div class="container">
    <span class="section-subtitle">What We Do</span>
    <h2>Expert Engineering Services</h2>
    <div class="services-grid">
      <div class="service-card">
        <h3>Custom Software Engineering</h3>
        <p>Architecting robust, scalable enterprise applications with a focus on modularity and growth.</p>
      </div>
      <div class="service-card">
        <h3>Cloud Infrastructure & DevOps</h3>
        <p>Optimizing your digital footprint through automated CI/CD pipelines and secure cloud-native architecture.</p>
      </div>
      <div class="service-card">
        <h3>Intelligent AI Integration</h3>
        <p>Leveraging LLMs and predictive analytics to automate complex workflows and enhance decision-making.</p>
      </div>
    </div>
  </div>
</section>

<section id="customers" class="fade-in">
  <div class="container">
    <h2>Trusted by Industry Leaders</h2>
    <div class="swiper-container">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
          <blockquote>“The team’s ability to translate complex requirements into a functional product was exceptional.”</blockquote>
          <cite>— CTO, Global Fintech</cite>
        </div>
      </div>
      <div class="swiper-pagination"></div>
    </div>
  </div>
</section>

<section id="team">
  <div class="container">
    <span class="section-subtitle">Our Leadership</span>
    <h2>The Minds Behind JStack</h2>
    <div class="team-grid">
      <div class="team-member">
        <div class="member-image">
          <img src="photo.png" alt="Lead Architect">
        </div>
        <h3>Founder Name</h3>
        <p>Lead Architect & Strategy</p>
        <div class="team-bio">
          Expert in distributed systems and AI integration, driving the technical vision of CLS JStack Solutions with over a decade of industry experience.
        </div>
      </div>
    </div>
  </div>
</section>

<section id="contact" class="fade-in">
  <div class="container">
    <h2>Let's Start a Conversation</h2>
    <form  id="contactForm" class="contact-form">
      <input type="text" id="name" name="name" placeholder="Full Name" required>
      <input type="email" id="email" name="email" placeholder="Business Email" required>
      <textarea id="message" name="message" placeholder="Tell us about your project" required></textarea>
      <button type="submit" class="btn" id="submitBtn">Submit Inquiry</button>
     <p id="formStatus"></p>
    </form>
  </div>
</section>

<footer>
  <p>© 2026 CLS JStack Solutions. Precision Engineering. Global Delivery.</p>
</footer>

<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<script>
  const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) entry.target.classList.add('visible');
    });
  }, { threshold: 0.1 });

  document.querySelectorAll('.fade-in').forEach(el => observer.observe(el));

  new Swiper('.swiper-container', {
    loop: true,
    autoplay: { delay: 5000 },
    pagination: { el: '.swiper-pagination', clickable: true }
  });
</script>

 <!-- EMAILJS -->
  <script src="https://cdn.jsdelivr.net/npm/emailjs-com@3/dist/email.min.js"></script>

  <script>
    (function () {
      emailjs.init("VRAfk8bmSTaPID3je"); // 🔑 Replace with your EmailJS Public Key
    })();

    const form = document.getElementById("contactForm");
    const status = document.getElementById("formStatus");
    const submitBtn = document.getElementById("submitBtn");

    form.addEventListener("submit", function (e) {
      e.preventDefault();

      submitBtn.disabled = true;
      status.style.color = "#1F4E5F";
      status.textContent = "Sending message...";

      const templateParams = {
        name: document.getElementById("name").value,
        email: document.getElementById("email").value,
        message: document.getElementById("message").value
      };

      emailjs
        .send(
          "service_key",   // 🔑 Replace
          "template_key",  // 🔑 Replace
          templateParams
        )
        .then(() => {
          status.style.color = "green";
          status.textContent = "✅ Message sent successfully!";
          form.reset();
          submitBtn.disabled = false;
        })
        .catch((error) => {
          console.error("EmailJS Error:", error);
          status.style.color = "red";
          status.textContent = "❌ Failed to send message. Please try again.";
          submitBtn.disabled = false;
        });
    });
  </script>

</body>
</html>
