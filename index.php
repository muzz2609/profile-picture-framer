<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:og="http://ogp.me/ns#" xmlns:fb="http://www.facebook.com/2008/fbml">
  <head>
    <title> </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/croppie.css" rel="stylesheet" async="async" />
    <link href="css/style.css" rel="stylesheet" async="async" />
    <link href="css/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" async="async" />
    <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
    <script src="js/croppie.min.js" async="async"></script>
    <script src="js/app.js" async="async"></script>
    <script src="js/fb.js" async="async"></script>
    <script src="https://thunkable.github.io/webviewer-extension/thunkableWebviewerExtension.js" type="text/javascript"></script>
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-Q0MHQV6TJE"></script>
  </head>
  <body>
    <div id="wrapper">
      <div id="content">
        <h1>Join the #vaxsquad by changing your profile picture</h1>
        <p>Create your own vaccine meme!</p>
                <h2>Step 1: Upload your vaccine selfie</h2>
   
   <label for="file-upload" class="custom-file-upload">
  <i class="fa fa-camera "></i> Click here to upload your vaccine selfie
</label>
<input id="file-upload" type="file" type="file" name="file" onchange="onFileChange(this)" />
     
          <div id="Step_2+3">       
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
            <img src="https://github.com/muzz2609/profile-picture-framer/blob/master/images/person.png?raw=true" id="profile-pic" />
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
    </div>
  </body>
<script type="text/javascript">
    // when the button is clicked, send a message to the app
    document.getElementById('download').onclick = function() {
      ThunkableWebviewerExtension.postMessage('hello world');
    }

    // when we get a message from the app, display it on the page
    ThunkableWebviewerExtension.receiveMessage(function(message) {
      document.getElementById('messageDisplay').innerHTML = message;
    });

    // when we get a message from the app that needs a return value
    // return the string 'fast response' unless the message is
    // 'slow message'. If the message is 'slow message', wait for
    // four seconds, then return the string 'slow response'.
    // The slow response shows how this could work for API calls that
    // take time to execute.
    ThunkableWebviewerExtension.receiveMessageWithReturnValue(function(message, callback) {
      if (message === 'slow message') {
        setTimeout(() => callback('slow response'), 4000);
      } else {
        callback('fast response');
      }
    });
  
  function myFunction() {
  var x = document.getElementById("Step_2+3");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
}
  
    window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-Q0MHQV6TJE');
  
  </script>
</html>
