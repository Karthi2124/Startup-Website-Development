<?php include 'header.php';?>
<main>
        <section id="home top_home" class="hero">
            <div class="container">
                <h2>Welcome to Vetri Groups</h2>
                <p>Delivering innovative solutions to meet your business goals.</p>
                <button class="button"><span class="text-font">Explore Our Services</span>
            </div>
        </section>

        <section id="about" class="section about">
            <div class="container">
                <h2 class="about_header">About Our Company</h2>
              <div class="container-fluid">
                <div class="row">
                  <div class="col-sm-6">
                    <p class="about-content">At InnovateX, we believe in the power of innovation to shape a better future. 
                    Founded with the vision of making cutting-edge technology accessible to businesses of all sizes, our 
                    startup is dedicated to helping organizations thrive in a rapidly changing world.</p></div>
                  <div class="col-sm-6">
                    <img src="image/about_image.png" class="about-image">
                  </div>
                </div>
              </div>
            </div>
        </section>

        <section id="services" class="section services">
            <div class="container">
                <h2>Our Services</h2>
                <div class="grid">
                    <div class="card">
                        <h3>Service 1</h3>
                        <p>Innovative solutions for [specific need].</p>
                    </div>
                    <div class="card">
                        <h3>Service 2</h3>
                        <p>Tailored strategies to enhance your business operations.</p>
                    </div>
                    <div class="card">
                        <h3>Service 3</h3>
                        <p>Leading-edge technologies for maximum efficiency.</p>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div style="text-align: center;">
                <h2 >Our Clients</h2>
                <p>"Our clients are our greatest brand ambassadors."</p>
            </div>
            <div class="container">
    <div class="grid client-show">
        <div class="card card-client">
           <a href="https://www.omegahms.com/"><img src="image/client-1.png" alt="client" class="client-img"></a>
        </div>
        <div class="card card-client">
        <a href="#"><img src="image/client-1.png" alt="client" class="client-img"></a>
        </div>
        <div class="card card-client">
        <a href="#"><img src="image/client-1.png" alt="client" class="client-img"></a>
        </div>
        <div class="card card-client">
        <a href="#"><img src="image/client-1.png" alt="client" class="client-img"></a>
        </div>
        <div class="card card-client">
        <a href="#"><img src="image/client-1.png" alt="client" class="client-img"></a>
        </div>
        <div class="card card-client">
        <a href="#"><img src="image/client-1.png" alt="client" class="client-img"></a>
        </div>
    </div>
</div>

    </main>
<section id="testim" class="testim">
                <div class="wrap">
    
                    <span id="right-arrow" class="arrow right fa fa-chevron-right"></span>
                    <span id="left-arrow" class="arrow left fa fa-chevron-left "></span>
                    <ul id="testim-dots" class="dots">
                        <li class="dot active"></li>
                        <li class="dot"></li>
                        <li class="dot"></li>
                        <li class="dot"></li>
                        <li class="dot"></li>
                    </ul>
                    <div id="testim-content" class="cont">
                        
                        <div class="active">
                            <div class="img"><img src="image/avatar.png"alt=""></div>
                            <h2>Lorem P. Ipsum</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>                    
                        </div>
    
                        <div>
                            <div class="img"><img src="image/avatar_girl.png" alt=""></div>
                            <h2>Mr. Lorem Ipsum</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>                    
                        </div>
    
                        <div>
                            <div class="img"><img src="image/avatar.png" alt=""></div>
                            <h2>Lorem Ipsum</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>                    
                        </div>
    
                        <div>
                            <div class="img"><img src="image/avatar_girl.png" alt=""></div>
                            <h2>Lorem De Ipsum</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>                    
                        </div>
    
                        <div>
                            <div class="img"><img src="image/avatar.png" alt=""></div>
                            <h2>Ms. Lorem R. Ipsum</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>                    
                        </div>
    
                    </div>
    
                </div>
                </section>
   <section>
    <div class="cotent_flow" style="margin-bottom: 20vh;">
        <h2>Ready to Elevate Your Business?</h2>
        <p>Transform your business with InnovateX. We help you develop innovative solutions that enhance your operations and drive growth.</p>
        <button class="button get" style="vertical-align:middle"><span>Get in Touch</span>
    </div>
   </section>
   <?php include 'footer.php';?>
    <script src="script.js"></script>
    <script src="https://use.fontawesome.com/1744f3f671.js"></script>
</body>
<style>
    .row_top {
    padding-top: 25px;
    padding-right: 28px;
}
.card-client{
    width: 95%;
    height: 85%;
}
.client-img{
    width: 56%;
    margin-left: 33px;
}
.client-img:hover{
    filter: drop-shadow(1px 10px 15px rgba(250,113,33,0.925));
}
.client-show{
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 10px;
}
body{font-family: 'Times New Roman', Times, serif;}
@media (max-width: 768px) {
  /* Styles for tablets and smaller screens */
  body {
    font-size: 16px;
  }
  .container {
    padding: 10px;
  }
  .no-display{
    visibility: hidden;
    display: none;
}
.display-view{
    visibility:visible !important;;
    display:block !important;
}
.hero h2 {
    font-size:35px !important;
    margin-bottom: 1rem;
}
.hero p {
    font-size:20px !important;
    margin-bottom: 2rem;
}
.button {
    display: inline-block;
    border-radius: 4px;
    background-color: transparent;
    vertical-align:middle;
    border: none;
    color: #FFFFFF;
    text-align: center;
    font-size: 22px;
    padding: 10px;
    width: 39vh !important;
    transition: all 0.5s;
    cursor: pointer;
    margin: 5px;
}
.get{
        vertical-align: middle;
        color: black;
        font-weight: 600;
     }
  .text-font{
    margin-right:0%;
  }
  .about-content {
    position: absolute;
    top: 5vh;
}
.about-image{
    margin-top: 65%;
}
.client-show{
    display: grid;
    grid-template-columns: repeat(1, 1fr)!important;
    gap: 10px;
}
.client-img {
    width: 56%;
    margin-left: 75px;
}
}
</style>
</html>