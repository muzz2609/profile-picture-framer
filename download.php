<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:og="http://ogp.me/ns#" xmlns:fb="http://www.facebook.com/2008/fbml">
  <head>
    <title>Download Profile Picture | #Vaxsquad </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://thunkable.github.io/webviewer-extension/thunkableWebviewerExtension.js" type="text/javascript"></script>
    <link href="css/style.css" rel="stylesheet" async="async" />
  </head>
  <body>
    <div id="wrapper">
      <div id="content">
        <h1>Thanks for joining #vaxsquad</h1>
        <p>Make this your profile picture and share to spread the word!</p>
               
 <?php
        $url = htmlspecialchars($_GET["i"]);
        if(isset($_GET["i"]))
          echo "<img src='". $url ."' />";
        else
          header("Redirect: index.php");      
        
        ?>
                 
        <p>
          <a href="index.php"><button id="download">Share/Save your Vaccine Profile Picture!</button></a>
        </p>
       
        <div id="retry">
    <p>Don't see your meme? Click <a href="https://vaxsquad.azurewebsites.net/index.php" download>here</a> to try again.</p>
        </div>
        
                
        <?php
        require_once __DIR__ . "/footer.php";
        ?>
      </div>
    </div>
       
    <script type="text/javascript">
   <?php
       echo "var imageurl ='". $url ."';";
   ?>

   let imageurl2 = 'https://vaxsquad.azurewebsites.net/' + imageurl

    // when the button is clicked, send a message to the app
    document.getElementById('download').onclick = function() {
      ThunkableWebviewerExtension.postMessage(imageurl2);
    }
         
    </script>
    
  </body>
</html>
