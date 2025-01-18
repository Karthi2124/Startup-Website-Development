<?php include 'header.php';?>

    <main>
        <section class="contact-hero">
            <div class="container" style="text-align:left;color:white;">
                <h2>Contact Us</h2>
                <p>We’re here to help. Reach out to us for inquiries, partnerships, or support.</p>
            </div>
        </section>

        <section class="section contact-details">
            <div class="container">
                <h3>Our Contact Information</h3>
                <p>Feel free to reach us through the following contact details:</p>
                <div class="grid">
                    <div class="card">
                        <h4>Head Office</h4>
                        <p>
                            123 Golden Street, <br>
                            Business Bay, Cityville, <br>
                            Country, 456789
                        </p>
                        <p>Email: <a href="mailto:info@vettrigroups.com">info@vettrigroups.com</a></p>
                        <p>Phone: <a href="tel:+1234567890">+1 234 567 890</a></p>
                    </div>
                    <div class="card">
                        <h4>Customer Support</h4>
                        <p>Email: <a href="mailto:support@vettrigroups.com">support@vettrigroups.com</a></p>
                        <p>Phone: <a href="tel:+1987654321">+1 987 654 321</a></p>
                        <p>Hours: Monday - Friday, 9 AM - 6 PM</p>
                    </div>
                    <div class="card">
                        <h4>Follow Us</h4>
                        <p>
                            <a href="#">LinkedIn</a> | <a href="#">Facebook</a> | <a href="#">Twitter</a>
                        </p>
                        <p>Stay connected with us on social media for updates and insights.</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="section contact-form">
            <div class="container">
                <h3>Send Us a Message</h3>
                <p>We'd love to hear from you. Please fill out the form below and we'll get back to you shortly.</p>
                <form class="form">
                    <input type="text" placeholder="Your Name" required>
                    <input type="email" placeholder="Your Email" required>
                    <textarea placeholder="Your Message" required></textarea>
                    <button class="button-carrer get side"><span>Submit</span>
                </form>
            </div>
        </section>

        <section class="section map">
            <div class="container">
                <h3>Our Location</h3>
                <p>Visit our head office to discuss your requirements in person.</p>
                <!-- Replace the iframe src with your Google Maps link -->
                <iframe 
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3153.835434509278!2d144.9556516153171!3d-37.81732397975148!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad642af0f11fd81%3A0xf4c1386f9cb234!2sYour%20Business%20Address!5e0!3m2!1sen!2s!4v1603845599416!5m2!1sen!2s" 
                    width="100%" height="350" style="border:0;" allowfullscreen="" loading="lazy">
                </iframe>
            </div>
        </section>
    </main>
    <?php include 'footer.php';?>
</body>
<style>
    body{
    font-family: 'Times New Roman', Times, serif;
}
.side{vertical-align:middle;margin-left:15vh;}
    .contact-hero {
    background-image: url(image/contact-v.jpg)!important;
    color: white;
    text-align:left;
    padding: 5rem 1rem;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    font-weight: 700;
    color: #1c1c1c;
}
.button-carrer {
    display: inline-block;
    border-radius: 4px;
    background-color: transparent;
    border: none;
    color:black;
    text-align: center;
    font-size: 22px;
    padding: 10px;
    transition: all 0.5s;
    cursor: pointer;
    margin-left: 15vh !important;
}
.button-carrer span {
    cursor: pointer;
    display: inline-block;
    position: relative;
    transition: 0.5s;
  }
  .button-carrer span:after {
    content: '\00bb';
    position: absolute;
    opacity: 0;
    top: 0;
    right: -20px;
    transition: 0.5s;
  }
  
  .button-carrer:hover span {
    padding-right: 25px;
    color: red !important;
  }
  
  .button-carrer:hover span:after {
    opacity: 1;
    right: 0;
  }
@media (max-width: 768px) {
    .side{vertical-align:middle;margin-left:1vh !important;}
}
    </style>
</html>
