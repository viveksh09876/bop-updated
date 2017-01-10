<!DOCTYPE html>
 <head>
   <meta charset="utf-8" />
body {
 margin: 0;
 padding: 3em 0;
 color: #fff;
 background: #0080d2;
 font-family: Georgia, Times New Roman, serif;
}
 
#container {
 width: 600px;
 background: #fff;
 color: #555;
 border: 3px solid #ccc;
 -webkit-border-radius: 10px;
 -moz-border-radius: 10px;
 -ms-border-radius: 10px;
 border-radius: 10px;
 border-top: 3px solid #ddd;
 padding: 1em 2em;
 margin: 0 auto;
 -webkit-box-shadow: 3px 7px 5px #000;
 -moz-box-shadow: 3px 7px 5px #000;
 -ms-box-shadow: 3px 7px 5px #000;
 box-shadow: 3px 7px 5px #000;
}
 
ul {
 list-style: none;
 padding: 0;
}
 
ul > li {
 padding: 0.12em 1em
}
 
label {
 display: block;
 float: left;
 width: 130px;
}
 
input, textarea {
 font-family: Georgia, Serif;
}
  </head>
  <body>
   <div id="container">
    <h1>Send a Message To the Admin</h1>
    <form action="send.php" method="post">
     <ul>
      <li>
       <label for="smsMessage">Message</label>
       <textarea name="smsMessage" id="smsMessage" cols="45" rows="15"></textarea>
      </li>
     <li><input type="submit" name="sendMessage" id="sendMessage" value="Send Message" /></li>
    </ul>
   </form>
  </div>
 </body>
</html>
