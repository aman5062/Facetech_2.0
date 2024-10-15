
document.getElementById('news-image').addEventListener('change', function() {
    const fileInput = document.getElementById('news-image');
    const file = fileInput.files[0];
    const reader = new FileReader();

    reader.onload = function(e) {
        document.getElementById('preview-image').src = e.target.result;
    }

    if (file) {
        reader.readAsDataURL(file);
    }
});


document.getElementById('news-headline').addEventListener('input', function() {
    const headline = document.getElementById('news-headline').value;
    document.getElementById('preview-headline').textContent = headline;
});


document.getElementById('news-content').addEventListener('input', function() {
    const content = document.getElementById('news-content').value;
    document.getElementById('preview-content').textContent = content;
});


document.getElementById('upload-news-btn').addEventListener('click', function() {
    const headline = document.getElementById('news-headline').value;
    const content = document.getElementById('news-content').value;
    const imageSrc = document.getElementById('preview-image').src;

    if (headline && content && imageSrc) {
        alert('News uploaded successfully!');
    } else {
        alert('Please make sure all fields are filled out before uploading.');
    }
});
