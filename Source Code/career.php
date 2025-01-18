<?php include 'header.php';?>

    <main>
        <section class="hero hero-careers">
            <div class="container" style="text-align:left;">
                <h2>Join Our Team</h2>
                <p>Shape the future with us. Be a <br>part of a dynamic, innovative, <br>and passionate team at Vettri Groups.</p>
            </div>
        </section>

        <section class="section careers">
            <div class="container">
                <h3>Current Openings</h3>
                <div class="grid">
                    <div class="card-career">
                        <h4>Software Engineer</h4>
                        <p>Develop cutting-edge solutions with our team of innovators.</p>
                        <a href="#apply" class="btn-primary">Apply Now</a>
                    </div>
                    <div class="card-career">
                        <h4>Cloud Specialist</h4>
                        <p>Drive cloud transformations and enable scalability for our clients.</p>
                        <a href="#apply" class="btn-primary">Apply Now</a>
                    </div>
                    <div class="card-career">
                        <h4>Marketing Manager</h4>
                        <p>Strategize and execute campaigns to expand our reach.</p>
                        <a href="#apply" class="btn-primary">Apply Now</a>
                    </div>
                </div>
            </div>
        </section>

        <section id="apply" class="section apply">
            <div class="container">
                <div class="center-form">
                <h3>Apply Now</h3>
                <p>Fill out the form below to start your journey with us.</p>
                </div>
                <form class="form_career">
                    <input type="text" placeholder="Your Name" required>
                    <input type="email" placeholder="Your Email" required>
                    <input type="text" placeholder="Position Applying For" required> 
                    <!-- <input type="file"value = "Choose a video please" required> -->
                    <input type="file" id="fileInput" required>
                    <label for="fileInput" id="fileInputLabel">Upload your resume</label>
                    <textarea placeholder="Your Cover Letter" required></textarea>
                    <button class="button-carrer get" style="vertical-align:middle;"><span>Submit</span>
                </form>
            </div>
        </section>
    </main>
    <?php include 'footer.php';?>
</body>
<style>
    body{
    font-family: 'Times New Roman', Times, serif;
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
    .hero-careers {
    background-image: url(image/career_1.jpg)!important;
    color: white;
    text-align:left;
    padding: 5rem 1rem;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    font-weight: 700;
}
    .apply h3 {
    font-size: 2rem;
    margin-bottom: 1rem;
}

.form_career {
    max-width: 600px;
    margin: 0 auto;
    text-align: left;
}

.form_career input, .form_career textarea {
    width: 100%;
    padding: 0.8rem;
    margin-bottom: 1rem;
    border: 1px solid #444; 
    border-radius: 5px;
    font-size: 1rem;
}
.center-form{
    text-align: center !important;
}
.card-career {
    background-color:white; 
    padding: 1.5rem;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    color: black;
    transition: transform 0.3s ease, background-color 0.3s ease;
}

.card-career:hover {
    background-color: #7d7a7a; 
    color: white !important;
    transform: translateY(-10px);
}

.card-career h4 {
    font-size: 1.5rem;
    margin-bottom: 0.5rem;
}

.card-career p {
    font-size: 1rem;
    line-height: 1.4;
}

.btn-primary {
    display: inline-block;
    background-color:white; 
    color: #1c1c1c; 
    padding: 0.75rem 1.5rem;
    text-decoration: none;
    border-radius: 5px;
    font-weight: bold;
    transition: background-color 0.3s ease;
}

.btn-primary:hover {
    background-color: #7d7a7a; 
    color: white;
}
#fileInput {
    display: none;
}

#fileInputLabel {
    display: inline-block;
    padding: 10px;
    border: 1px solid #444444;
    border-radius: 5px;
    cursor: pointer;
    width: 100%;
    color:#757575;
}
    </style>
    <script>
       const fileInput = document.getElementById('fileInput');
const fileInputLabel = document.getElementById('fileInputLabel');

fileInput.addEventListener('change', function() {
  if (this.files.length > 0) {
    fileInputLabel.textContent = this.files[0].name;
  } else {
    fileInputLabel.textContent = 'Upload your resume';
  }
});
        </script>
</html>
