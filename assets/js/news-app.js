 document.addEventListener("DOMContentLoaded", function() {
    const newsTexts = document.querySelectorAll(".news-text");

    newsTexts.forEach((newsText) => {
        newsText.addEventListener("click", function() {
            // Toggle 'expanded' class to show/hide full content
            this.classList.toggle("expanded");
        });
    });
});
