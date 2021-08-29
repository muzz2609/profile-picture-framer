<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:og="http://ogp.me/ns#" xmlns:fb="http://www.facebook.com/2008/fbml">
  <head>
    <title> </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/croppie.css" rel="stylesheet" async="async" />
    <link href="css/style.css" rel="stylesheet" async="async" />
    <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
    <script src="js/croppie.min.js" async="async"></script>
    <script src="js/app.js" async="async"></script>
    <script src="js/fb.js" async="async"></script>
  </head>
  <body>
    <div id="wrapper">
      <div id="content">
        <h1>Join the #vaxsquad by changing your profile picture</h1>
        <p>Create your own vaccine meme!</p>
                <h2>Step 1: Upload your vaccine selfie</h2>
        <input type="file" name="file" onchange="onFileChange(this)">
        <h2>Step 2: Choose your Design</h2>
        <div id="designs">
          <img class="design active" src="frames/frame-0.png" data-design="0" />
          <img class="design" src="frames/frame-1.png" data-design="1" />
          <img class="design" src="frames/frame-2.png" data-design="2" />
          <img class="design" src="frames/frame-3.png" data-design="3" />
          <img class="design" src="frames/frame-4.png" data-design="4" />
          <img class="design" src="frames/frame-5.png" data-design="5" />
        </div>
         <h2> </h2>
        <div id="preview">
          <div id="crop-area">
            <img src="https://github.com/muzz2609/profile-picture-framer/blob/master/images/person.png" id="profile-pic" />
          </div>
          <img src="frames/frame-0.png" id="fg" data-design="0" />
        </div>
                <h2>Step 3: Download your profile pic</h2>
        <p>
          <button id="download" disabled>Download Profile Picture</button>
        </p>
        <?php
        require_once __DIR__ . "/footer.php";
        ?>
      </div>
    </div>
  </body>
</html>
