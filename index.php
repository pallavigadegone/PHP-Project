<!DOCTYPE html>
<!-- Coding By CodingNepal - youtube.com/codingnepal -->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agriculture</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
</head>
<body>
  <div class="wrapper">
    <!-- filter Items -->
    <nav>
      <div class="items">
        <span class="item active" data-name="all">All</span>
        <span class="item" data-name="summer">Summer</span>
        <span class="item" data-name="winter">Winter</span>
        <span class="item" data-name="monsoon">Monsoon</span>
      </div>
    </nav>
    <!-- filter Images -->
    <div class="gallery">
      <div class="image" data-name="winter"><span><img src="images/wheat.jpg" alt=""></span></div>
      <div class="image" data-name="summer"><span><img src="images/sb.jpg" alt=""></span></div>
      <div class="image" data-name="winter"><span><img src="images/fig.jpg" alt=""></span></div>
      <div class="image" data-name="summer"><span><img src="images/maize.jpg" alt=""></span></div>
      <div class="image" data-name="winter"><span><img src="images/plum.jpg" alt=""></span></div>
      <div class="image" data-name="summer"><span><img src="images/rice2.jpg" alt=""></span></div>
      <div class="image" data-name="summer"><span><img src="images/apricot.jpg" alt=""></span></div>
      <div class="image" data-name="winter"><span><img src="images/mustard.jpg" alt=""></span></div>
      <div class="image" data-name="monsoon"><span><img src="images/f1.jpg" alt=""></span></div>
    </div>
  </div>
  <!-- fullscreen img preview box -->
  <div class="preview-box">
    <div class="details">
      <span class="title">Image Category: <p></p></span>
      <span class="icon fas fa-times"></span>
    </div>
    <div class="image-box"><img src="" alt=""></div>
  </div>
  <div class="shadow"></div>

  <script src="script.js"></script>

</body>
</html>
