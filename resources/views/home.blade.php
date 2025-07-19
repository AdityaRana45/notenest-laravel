<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Notenest</title>
  <link rel="icon" type="image/x-icon" href="{{ asset('notenest_favicon.ico') }}">

  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
<script src="https://unpkg.com/@dotlottie/player-component@2.7.12/dist/dotlottie-player.mjs" type="module"></script>
<script>
  function openNav() {
    document.getElementById("mySidenav").style.width = "260px";
  }

  function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
  }
</script>
    <style>
          * {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
    }

    body {
      
      background: linear-gradient(to right, #1a1a2e, #16213e, #0f3460);
      padding: 40px 20px;
      font-family: 'Segoe UI', sans-serif;
      color: #fff;
    }

    .section-title {
      font-size: 2em;
      text-align: center;
      margin: 20px auto 30px;
      color: #00ffff;
      border-bottom: 2px solid rgba(255,255,255,0.2);
      max-width: 300px;
      padding-bottom: 10px;
    }

    .card-container {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      gap: 20px;
      margin-bottom: 60px;
    }

    .card-link {
      text-decoration: none;
      flex: 1 1 100%;
      display: flex;
      justify-content: center;
    }

    .card {
      background: #07182E;
      width: 100%;
      max-width: 400px;
      height: 280px;
      border-radius: 20px;
      overflow: hidden;
      position: relative;
      text-align: center;
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      cursor: pointer;
      transition: transform 0.3s ease;
    }

    .card:hover {
      transform: scale(1.05);
    }

    lottie-player,
    dotlottie-player {
      width: 130px;
      height: 130px;
      margin-bottom: 5px;
      z-index: 1;
    }

    .card h3 {
      z-index: 1;
      color: white;
      font-size: 1.4em;
      padding: 5px 10px;
    }

    .card::after {
      content: "";
      position: absolute;
      background: #07182E;
      inset: 5px;
      border-radius: 15px;
      z-index: 0;
    }

    @media (min-width: 601px) and (max-width: 992px) {
      .card-link {
        flex: 0 0 48%;
      }
    }

    @media (min-width: 993px) {
      .card-link {
        flex: 0 0 30%;
      }
    }

    @media (max-width: 600px) {
      .card-container {
        flex-direction: column;
        align-items: center;
        gap: 15px;
      }

      .card-link {
        flex: 1 1 100%;
      }

      .card {
        width: 90vw;
        height: 280px;
      }

      .card h3 {
        font-size: 1.3em;
      }
    }




body {
  margin: 0;
  padding-top: 60px;

  background: linear-gradient(to right, #1a1a2e, #16213e, #0f3460);

  color: #fff;
  font-family: "Lato", sans-serif;
}

/* ✅ Classy Fixed Top Navbar */
.top-navbar {
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 75px;
  background-color: #081a2f;
  display: flex;
  align-items: center;
  padding: 0 20px;
  box-shadow: 0 2px 8px rgba(0,255,255,0.1);
  z-index: 1000;
  border-bottom: 1px solid #00bcd4; /* lighter and thinner border */
}

.menu-icon {
  font-size: 28px;
  color: #00bcd4;
  cursor: pointer;
  margin-right: 20px;
}

.navbar-title {
  font-size: 26px;
  font-weight: 600;
  color: #00bcd4;
  letter-spacing: 0.5px;
}

/* ✅ Sidebar */
.sidenav {
  height: 100%;
  width: 0;
  position: fixed;
  z-index: 1001; /* 👈 higher than navbar */
  top: 0;
  left: 0;
  background: #111827;
  border-right: 2px solid #00bcd4;
  box-shadow: 2px 0 10px rgba(0, 188, 212, 0.2);
  transition: 0.4s ease;
  padding-top: 70px; /* 👈 lower so close btn is visible */
  overflow-x: hidden;
}

.sidenav a {
  padding: 14px 32px;
  text-decoration: none;
  font-size: 18px;
  color: #00bcd4;
  display: block;
  transition: 0.2s;
}

.sidenav a:hover {
  color: #ffffff;
}

/* ✅ Close button (visible properly now) */
.sidenav .closebtn {
  position: absolute;
  top: 20px;
  right: 20px;
  font-size: 32px;
  color: #00bcd4;
  cursor: pointer;
}


.footer {
  width: 100%;
  background: #0b1a2d;
  padding: 30px 0;
  color: #ccc;
  border-top: 1px solid rgba(255, 255, 255, 0.1);
}

.footer-inner {
  width: 100%;
  max-width: 1300px;
  padding: 0 40px;
  margin: 0 auto;
  box-sizing: border-box;
  text-align: center; /* ✅ centers content inside */
}

.footer-title {
  color: #00bcd4;
  font-size: 26px;
  font-weight: bold;
  margin-bottom: 10px;
}

.footer-message {
  font-size: 15px;
  color: #bbb;
  margin-bottom: 12px;
}

.footer-contact {
  display: flex;
  justify-content: center;   /* ✅ centers horizontally */
  align-items: center;       /* ✅ aligns vertically */
  flex-wrap: wrap;
  gap: 20px;
  margin-bottom: 15px;
  text-align: center;
}

.footer-icon-link {
  color: #00bcd4;
  font-size: 16px;
  font-weight: 500;
  text-decoration: none;
  display: flex;
  align-items: center;
  gap: 6px;
  transition: color 0.3s ease;
}

.footer-icon-link i {
  font-size: 18px;           /* 🔥 Bigger icon */
  color: #ff9800;            /* 🎨 Highlight color */
  transition: color 0.3s ease;
}

.footer-icon-link:hover,
.footer-icon-link:hover i {
  color: #ffffff;
}

.footer-copy {
  font-size: 13px;
  color: #888;
  margin-top: 10px;
}

.divider {
  color: #555;
  font-size: 16px;
}

/* ✅ Mobile Responsive */
@media screen and (max-width: 600px) {
  .footer-contact {
    flex-direction: column;
    gap: 10px;
  }

  .divider {
    display: none;
  }

  .footer-title {
    font-size: 22px;
  }

  .footer-message {
    font-size: 14px;
  }
}




.navbar-tagline-wrapper {
  display: flex;
  justify-content: center;
  align-items: center;
  width: 100%;
  padding-top: 15px;
}

.navbar-tagline {
  font-size: 18px;
  color: #a0d7f0;
  font-weight: 400;
  text-align: center;
  max-width: 800px;
  padding: 4px 10px;
  letter-spacing: 0.2px;
  line-height: 1.5;
}
    </style>

</head>
<body>
@include('header')

@include('content')


@include('footer')



</body>
</html>
