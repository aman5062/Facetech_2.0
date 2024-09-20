<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog Form</title>
    <link rel="stylesheet" href="../css/news_upload_style.css">
</head>
<body>
    
    <div class="container">
        <div class="form-section">
            <h2>UPLOAD NEWS</h2>
            <div class="form-group">
                <label for="imageUpload">Upload Image:</label>
                <input type="file" id="imageUpload" accept="image/*">
            </div>
            <div class="form-group">
                <label for="blogTitle">Blog Title:</label>
                <input type="text" id="blogTitle" placeholder="Enter blog title">
            </div>
            <div class="form-group">
                <label for="blogContent">Blog Content:</label>
                <textarea id="blogContent" rows="10" placeholder="Write your blog content here..."></textarea>
            </div>
            <div class="button-group">
                <button id="submitBtn">Submit</button>
                <button id="previewBtn">Preview</button>
            </div>
        </div>
        <div class="preview-section">
            <h2>PREVIEW</h2>
            <div class="preview-content">
                <div class="preview-image" id="previewImage"></div>
                <div class="preview-title" id="previewTitle"></div>
                <div class="preview-text" id="previewText"></div>
            </div>
        </div>
    </div>
    <script src="../js/script.js"></script>
</body>
</html>
