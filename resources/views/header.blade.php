<!-- Top Navbar -->
 <style>
.auth-box {
  position: absolute;
  right: 20px;
  top: 20px;
  display: flex;
  align-items: center;
  
  font-weight: 500;
  font-size: 26px;
}

.auth-box i {
  margin-right: 6px;
  font-size: 30px;
}

.logout-button {
  padding: 4px 10px;
  margin-left: 8px;

  cursor: pointer;
  transition: background 0.3s, color 0.3s;


  background-color: red; color: white; border: none; padding: 8px 12px; border-radius: 5px;
}


.logout-button:hover {
  background: red;
  transform: scale(1.10);
  transition: all 0.3s ease;
}




 </style>

<header class="top-navbar">
  <span class="menu-icon" onclick="openNav()">☰</span>
  <div class="navbar-title">📚 NoteNest</div>
  <div class="name">
    @auth
<div class="auth-box">
  <i class="fas fa-user-circle"></i>
  {{ auth()->user()->name }}

<form method="POST" action="{{ route('logout') }}">
    @csrf
    <button type="submit" class ="logout-button">
        Logout
    </button>
</form>

</div>
@endauth

  </div>
</header>

<!-- Sidebar -->
<div id="mySidenav" class="sidenav">
  <span class="closebtn" onclick="closeNav()">&times;</span>
  
</form>
  <a href="#">Home</a>
  <a href="{{ url('contact') }}">Contact</a>
   <a href="{{ url('/contributors') }}">Contributors</a>
  
    <a href="{{ url('about') }}">About</a>
 
</div>

<div class="navbar-tagline-wrapper">
  <div class="navbar-tagline">
    A place to download notes, and also share your own to help others — by contacting us.
  </div>
</div>
