function changeBg() {
    const images = [
        'url("./Images/1st.png")',
        'url("./Images/4th.png")',
        'url("./Images/3rd.png")',
    ]

    const section = document.querySelector('section');
    const bg = images[Math.floor(Math.random() * images.length)];

    section.style.backgroundImage = bg;
    section.style.transition = "ease-in 0.6s";
}

setInterval(changeBg, 3000);