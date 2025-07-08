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
