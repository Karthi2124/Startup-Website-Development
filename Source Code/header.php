<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Vetri Groups</title>
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Professional corporate website for Vetri Groups, offering innovative solutions and exceptional services.">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        body {
            font-family: 'Times New Roman', Times, serif;
        }

        header {
            font-family: 'Times New Roman', Times, serif;
        }

        .hide_index {
            display: none;
            visibility: hidden;
        }

        .view_index {
            display: block !important;
            visibility: visible !important;;
        }

        @media (max-width: 768px) {
            .no-display {
                display: none;
            }

            .display-view {
                display: block !important;
            }

           /* Ensure sidenav menu covers the viewport when opened */
    .sidenav {
        width: 0;
        height: 100%;
        position: fixed;
        z-index: 10;
        top: 0;
        right: 0;
        background-color: #fff;
        overflow-x: hidden;
        transition: 0.5s;
        padding-top: 60px;
        border-left: 1px solid #ddd; /* Optional for better visibility */
    }

    /* Ensure visibility of mobile view elements */
    .display-view {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 10px 15px;
        background-color: #fff;
        border-bottom: 1px solid #ddd; /* Optional for styling */
    }

    .close{
  font-size: 30px;
  cursor: pointer;
  margin-top:-7vh; 
  float: right;
  margin-right: 20px; 
  margin-bottom: 18px; 
}
.close-btn {
        text-align: right;
        margin-right: 4%;
        font-size: 45px !important;
        margin-top: -60px;
        font-weight: bold;
    }

    .sidenav a {
        padding: 10px 20px;
        text-decoration: none;
        font-size: 25px;
        color:black !important;
        font-family:'Times New Roman', Times, serif;
        display: block;
        transition: 0.3s;
    }
    
    /* Handle visibility for mobile header elements */
    @media (max-width: 768px) {
        .no-display {
            display: none;
        }
    }
}
    </style>
</head>
<body>
    <!-- Desktop Menu -->
    <header class="header no-display">
        <div class="container header-container">
            <img src="image/logo_verti-1.png" class="logo" alt="Vetri Groups Logo">
            <h2 class="logo-name">Vetri Groups</h2>
            <nav class="nav stroke">
                <ul class="nav-list">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="about.php">About</a></li>
                    <li><a href="service.php">Service</a></li>
                    <li><a href="career.php">Careers</a></li>
                    <li><a href="contact.php">Contact</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <!-- Mobile Menu -->
    <section>
        <div class="display-view hide_index">
            <div>
                <img src="image/logo_verti-1.png" width="100px" height="100px" alt="Vetri Groups Logo">
            </div>
            <div id="mobile-menu" class="sidenav">
                <span><a href="javascript:void(0)" class="close-btn" onclick="closeNav()">&times;</a></span>
               <a href="index.php">Home</a>
               <a href="about.php">About</a>
               <a href="service.php">Service</a>
               <a href="career.php">Careers</a>
               <a href="contact.php">Contact</a>
            </div>
            <span class="close" onclick="openNav()">&#9776;</span>
        </div>
    </section>

    <script>
        function openNav() {
            document.getElementById("mobile-menu").style.width = "100%"; /* Adjust width */
        }

        function closeNav() {
            document.getElementById("mobile-menu").style.width = "0";
        }
    </script>
</body>
</html>
