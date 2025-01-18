<?php include 'header.php';?>
    <main>
        <section id="home top_home" class="hero hero-service">
            <div class="container" style="text-align:left;">
                <h2>Service</h2>
                <p>Service is the heart of our business; excellence is its soul.</p>
            </div>
        </section>
        <section id="services" class="section services">
            <div class="container">
                <h2>Our Services</h2>
                <div class="grid">
                    <div class="card">
                        <h4>Transcription & Translation</h4>
                        <p>Innovative solutions for [specific need].</p>
                    </div>
                    <div class="card">
                        <h4>ePub & XML Services</h4>
                        <p>Tailored strategies to enhance your business operations.</p>
                    </div>
                    <div class="card">
                        <h4>Web & App Development</h4>
                        <p>Leading-edge technologies for maximum efficiency.</p>
                    </div>
                </div>
                <div class="container">
                    <div class="grid">
                        <div class="card">
                            <h4>Data Annotation Services</h4>
                            <p>Innovative solutions for [specific need].</p>
                        </div>
                        <div class="card">
                            <h4>Voice Process</h4>
                            <p>Tailored strategies to enhance your business operations.</p>
                        </div>
                        <div class="card">
                            <h4>Medical Billing</h4>
                            <p>Leading-edge technologies for maximum efficiency.</p>
                        </div>
                    </div>
                    <div class="container">
                        <div class="grid">
                            <div class="card">
                                <h4>Content Moderation Services</h4>
                                <p>Innovative solutions for [specific need].</p>
                            </div>
                            <div class="card">
                                <h4>Insurance and Benefit Verification</h4>
                                <p>Tailored strategies to enhance your business operations.</p>
                            </div>
                            </div>
                            </div>
            </div>
        </section>
        <section>
            <div id="mySidenav" class="sidenav">
                <a href="#" id="transcription">Transcription & Translation</a>
                <a href="#" id="epub">ePub & XML Services</a>
                <a href="#" id="development">Web & App Development</a>
                <a href="#" id="annotation">Data Annotation Services</a>
                <a href="#" id="voice">Voice Process</a>
                <a href="#" id="billing">Medical Billing</a>
                <a href="#" id="moderation">Content Moderation Services</a>
                <a href="#" id="insurance">Insurance and Benefit Verification</a>
            </div>
        </section>
<?php include 'footer.php';?>
    <script src="script.js"></script>
    <script src="https://use.fontawesome.com/1744f3f671.js"></script>
</body>
<style>
    body{
    font-family: 'Times New Roman', Times, serif;
}
    .hero-service {
    background-image: url(image/service.png)!important;	
    color: white;
    text-align:left;
    padding: 5rem 1rem;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    font-weight: 700;
    color:white !important;
}
.hero h2 {
    font-size: 2.5rem;
    margin-bottom: 1rem;
}

.hero p {
    font-size: 1.2rem;
    margin-bottom: 2rem;
} 
#mySidenav a:hover {
    right: 0;
    width: 250px !important;
    font-size: 18px !important;
}
#mySidenav a {
    position: absolute;
    right: 0vh;
    transition: 0.3s;
    padding: 15px;
    width: 100px;
    text-decoration: none;
    font-size: 10px;
    color: white;
    padding-left: 20px;
    border-radius: 5px 0px 0px 5px;
}
#voice {
    top: 124vh;
    background-color: #673AB7;
}

#billing {
    top: 134vh;
    background-color: #FF9800;
}

#moderation {
    top: 145vh;
    background-color: #795548;
}

#insurance {
    top: 160vh;
    background-color: #9E9E9E;
}

    </style>
</html>

