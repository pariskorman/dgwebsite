<!-- nav bar -->

<div id="nav">
    <div id="menu">
        <span id="hamburger" style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;</span>
    </div>
    <div id="dgtitle">
        <span><h1>cornell dg</h1></span>
    </div>
    <div id="links">
        <span class="navlinks"><a href="index.php">Home</a></span>
        <div class="dropdown">  
            <span class="navlinks"><a href="about.php">About</a></span>
            <div class="dropdown-content">  
                <a href="history.php">History</a> 
                <a href="officers.php">Officers</a>
                <a href="alumnae.php">Alumnae</a>
            </div>
        </div>
        <span class="navlinks"><a href="sisterhood.php">Sisterhood</a></span> 
        <div class="dropdown">
            <span class="navlinks"><a href="recruitment.php">Recruitment</a></span>
            <div class="dropdown-content">
                <a href="schedule.php">Information</a>
                <a href="faqs.php">FAQ's and Tips</a>
                <a href="sponsorship.php">Sponsorship</a>
            </div>
        </div>
        <div class="dropdown">
            <span class="navlinks"><a href="involvement.php">Involvement</a></span> 
            <div class="dropdown-content">
                <a href="philanthropy.php">Philanthropy</a>
            </div>
        </div>
        <span class="navlinks"><a href="contact.php">Contact Us</a></span>     
              
    </div>
    <div id="myNav" class="overlay">
      <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
      <div class="overlay-content">
        <a href="index.php">Home</a>
        <a id="about" href="#">&#xff0b;About</a>
          <div id="aboutdrop" class="drop">
                <a href="about.php">Welcome Message</a>
                <a href="history.php">History</a> 
                <a href="officers.php">Officers</a>
                <a href="alumnae.php">Alumnae</a>
            </div>
        <a href="sisterhood.php">Sisterhood</a>
        <a id="rec" href="#">&#xff0b;Recruitment</a>
          <div id="recdrop" class="drop">
              <a href="recruitment.php">Message from VPs Membership</a>
                <a href="schedule.php">Information</a>
                <a href="faqs.php">FAQ's and Tips</a>
                <a href="sponsorship.php">Sponsorship</a>
          </div>
        <a id="involvement" href="#">&#xff0b;Involvement</a>
          <div id="invdrop" class="drop">
            <a href="involvement.php">On-Campus Involvement</a>
            <a href="philanthropy.php">Philanthropy</a>
          </div>
        <a href="contact.php">Contact Us</a>
      </div>
    </div>

    <script>
        function openNav() {
            document.getElementById("myNav").style.width = "100%";
        }

        function closeNav() {
            document.getElementById("myNav").style.width = "0%";
        }
    </script>

