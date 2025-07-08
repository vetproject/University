<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Our Special Day</title>
  <link href="https://fonts.googleapis.com/css2?family=Great+Vibes&family=Poppins:wght@300;600&display=swap" rel="stylesheet">
  <style>
    body {
      margin: 0;
      padding: 0;
      background: linear-gradient(135deg, #fff0f5, #ffe4e1);
      font-family: 'Poppins', sans-serif;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      flex-direction: column;
      overflow: hidden;
      position: relative;
      animation: fadeBg 3s ease-in-out;
    }

    @keyframes fadeBg {
      from { opacity: 0; }
      to { opacity: 1; }
    }

    h1 {
      color: #b30059;
      font-size: 3rem;
      font-family: 'Great Vibes', cursive;
      text-shadow: 0 0 10px #ff99cc;
      animation: glow 2s infinite alternate;
    }

    @keyframes glow {
      from { text-shadow: 0 0 5px #ff66cc; }
      to { text-shadow: 0 0 15px #ff66cc; }
    }

    .btn {
      background-color: #ff66a3;
      color: white;
      border: none;
      padding: 15px 30px;
      font-size: 18px;
      border-radius: 30px;
      cursor: pointer;
      transition: all 0.3s ease;
      margin-top: 10px;
      box-shadow: 0 4px 12px rgba(255, 105, 180, 0.4);
    }

    .btn:hover {
      background-color: #e60073;
      transform: scale(1.1);
    }

    .message-box {
      display: none;
      margin-top: 40px;
      padding: 25px;
      font-size: 1.3rem;
      color: #800040;
      background-color: #fff;
      border-radius: 20px;
      box-shadow: 0 0 20px rgba(255, 182, 193, 0.6);
      max-width: 85%;
      text-align: center;
      animation: fadeIn 1.5s ease forwards;
    }

    @keyframes fadeIn {
      from { opacity: 0; transform: scale(0.9); }
      to { opacity: 1; transform: scale(1); }
    }

    .heart {
      position: absolute;
      animation: float 6s infinite ease-in;
      pointer-events: none;
    }

    @keyframes float {
      0% {
        transform: translateY(0) rotate(0deg);
        opacity: 1;
      }
      100% {
        transform: translateY(-100vh) rotate(360deg);
        opacity: 0;
      }
    }

    audio {
      display: none;
    }
  </style>
</head>
<body>

  <h1>To My Sweetheart 💕</h1>
  <button class="btn" onclick="startSurprise()">Click Here For Your Surprise 💝</button>

  <div class="message-box" id="messageBox"></div>

  <!-- Optional couple image -->
  <!-- <img src="your-photo.jpg" style="max-width: 300px; margin-top: 20px; border-radius: 20px;" /> -->

  <!-- Background Music -->
  <audio id="bgMusic" loop>
    <source src="https://www.bensound.com/bensound-music/bensound-romantic.mp3" type="audio/mp3">
    Your browser does not support audio.
  </audio>

  <script>
    const messages = [
      "💌 Happy one-month University anniversary, my love!",
      "🌟 You make every single day feel magical and full of love.",
      "🥰 I smile more, laugh more, and dream more because of you.",
      "💖 You're not just my girlfriend, you're my favorite person ever.",
      "🌹 Thank you for being by my side in everything.",
      "🎉 Here's to many more beautiful moments together!",
      "❤️ I LOVE YOU, today, tomorrow, and always!"
    ];

    let currentMessage = 0;

    function startSurprise() {
      document.querySelector(".btn").style.display = "none";
      playMusic();
      showMessage();
      floatHearts();
    }

    function showMessage() {
      const box = document.getElementById("messageBox");
      box.innerText = messages[currentMessage];
      box.style.display = "block";

      currentMessage++;
      if (currentMessage < messages.length) {
        setTimeout(showMessage, 3500); // Show next message after 3.5s
      }
    }

    function floatHearts() {
      for (let i = 0; i < 40; i++) {
        const heart = document.createElement('div');
        heart.className = 'heart';
        heart.innerText = ['❤️', '💖', '💘', '💕', '💓'][Math.floor(Math.random() * 5)];
        heart.style.left = Math.random() * 100 + 'vw';
        heart.style.top = Math.random() * 20 + 100 + 'px';
        heart.style.fontSize = (20 + Math.random() * 25) + 'px';
        heart.style.animationDuration = 3 + Math.random() * 4 + 's';
        document.body.appendChild(heart);

        setTimeout(() => heart.remove(), 7000);
      }

      setTimeout(floatHearts, 4000); // Repeat heart float every 4 seconds
    }

    function playMusic() {
      const music = document.getElementById("bgMusic");
      if (music.paused) {
        music.play().catch(e => console.log("Autoplay blocked"));
      }
    }
  </script>

</body>
</html>
