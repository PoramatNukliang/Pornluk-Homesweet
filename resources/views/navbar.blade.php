<!-- Navbar (sit on top) -->
<div class="w3-top">
  <div class="w3-bar w3-white w3-card" id="myNavbar">
    <a href="#home" class="w3-bar-item w3-button w3-wide">Pornluk Homesweet</a>
    
    <!-- Right-sided navbar links -->
    <div class="w3-right w3-hide-small">
      <a href="#about" class="w3-bar-item w3-button">โครงการ</a>
      <a href="#work" class="w3-bar-item w3-button"><i class="fa fa-th"></i> แกลเลอรี่</a>
      <a href="#promotion" class="w3-bar-item w3-button"><i class="fa fa-usd"></i> โปรโมชั่น</a>
      <a href="#contact" class="w3-bar-item w3-button"><i class="fa fa-envelope"></i> ติดต่อเรา</a>
    </div>
    <!-- Hide right-floated links on small screens and replace them with a menu icon -->

    <a href="javascript:void(0)" class="w3-bar-item w3-button w3-right w3-hide-large w3-hide-medium" onclick="w3_open()">
      <i class="fa fa-bars"></i>
    </a>
  </div>
</div>

<!-- Sidebar on small screens when clicking the menu icon -->
<nav class="w3-sidebar w3-bar-block w3-black w3-card w3-animate-left w3-hide-medium w3-hide-large" style="display:none" id="mySidebar">
  <a href="javascript:void(0)" onclick="w3_close()" class="w3-bar-item w3-button w3-large w3-padding-16">Close ×</a>
  <a href="#about" onclick="w3_close()" class="w3-bar-item w3-button">โครงการ</a>
  <a href="#work" onclick="w3_close()" class="w3-bar-item w3-button">แกลเลอรี่</a>
  <a href="#promotion" onclick="w3_close()" class="w3-bar-item w3-button">โปรโมชั่น </a>
  <a href="#contact" onclick="w3_close()" class="w3-bar-item w3-button">ติดต่อเรา</a>
</nav>
