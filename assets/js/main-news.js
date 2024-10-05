// Toggle the "Like" button state
function toggleLike() {
    const likeButton = document.querySelector('.like-btn');
    likeButton.classList.toggle('liked');
    if (likeButton.classList.contains('liked')) {
        likeButton.textContent = 'Liked';
    } else {
        likeButton.textContent = 'Like';
    }
}

// Show/Hide additional information
function toggleInfo() {
    const info = document.getElementById('extra-info');
    if (info.style.display === "none" || info.style.display === "") {
        info.style.display = "block";
    } else {
        info.style.display = "none";
    }
}
