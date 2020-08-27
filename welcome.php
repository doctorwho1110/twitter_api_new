<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        body{ font: 14px sans-serif; text-align: center; }
    </style>
    <script>
    function prettyPrint()
    {
        // var ugly = document.getElementById('myTextArea').value;
        // var obj = JSON.parse(ugly); //To the string
        // // var pretty = JSON.stringify(obj, undefined, 4);
        // $written_text= obj.quote +"-"+obj.source ;
        // document.getElementById('myTextArea').value = $written_text;

        const toSend ={
            name:"Anıl Ugur",
            age: 35,
            occupaiton:"student"
        };

        const jsonString=JSON.stringify(toSend); //Convert toSend string to JSON string
        // console.log(jsonString);
        
        const xhr=new XMLHttpRequest();
        xhr.open("POST","receive.php"); //POST it to php file receive.php
        xhr.setRequestHeader("Content-Type","application/json");
        xhr.send(jsonString);





    }
</script>
</head>
<body>
    <div class="page-header">
        <h1>Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Welcome to our site.</h1>
    </div>
    <textarea id="myTextArea" cols="30" rows="10"></textarea><br>
    <button name="api_call_button" onclick="prettyPrint()">Bring a Quote</button><br>
    <button name="tweet_button">Tweet a Button</button><br>
    <a href="https://twitter.com/TwitterDev?ref_src=twsrc%5Etfw" class="twitter-follow-button" data-show-count="false">Follow @TwitterDev</a><script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
    <p>
        <a href="password-reset.php" class="btn btn-warning">Reset Your Password</a>
        <a href="logout.php" class="btn btn-danger">Sign Out of Your Account</a>
    </p>
</body>
</html>