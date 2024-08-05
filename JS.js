document.addEventListener("DOMContentLoaded", function() {
    const headline = document.getElementById("headline");
    const subheadline = document.getElementById("subheadline");

    // Apply animation with delay
    setTimeout(() => {
        headline.style.animation = "slideUp 1s ease forwards";
    }, 500);

    setTimeout(() => {
        subheadline.style.animation = "slideUp 1s ease forwards";
    }, 1000);
});
