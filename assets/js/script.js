document.getElementById('previewBtn').addEventListener('click', function() {
    const imageUpload = document.getElementById('imageUpload');
    const blogTitle = document.getElementById('blogTitle').value;
    const blogContent = document.getElementById('blogContent').value;
 
    // Display blog title
    document.getElementById('previewTitle').innerText = blogTitle;

    // Display blog content
    document.getElementById('previewText').innerText = blogContent;

    // Display blog image
    if (imageUpload.files && imageUpload.files[0]) {
        const reader = new FileReader();
        reader.onload = function(e) {
            document.getElementById('previewImage').style.backgroundImage = `url(${e.target.result})`;
        }
        reader.readAsDataURL(imageUpload.files[0]);
    }
});

document.getElementById('submitBtn').addEventListener('click', function() {
    alert('Blog submitted successfully!');
});
