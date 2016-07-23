<?php
/**Created by PhpStorm.*/

$name="Guest";
$comment="Comment on our blog now!";
 if( $_POST["name"] && $_POST["comments"] )
{
$name=$_POST['name'];
    $comment=$_POST['comments'];
}



?>
<html>
<body>
<html>
<head>
    <title>linda Ikeji upgrade</title>

    <link rel="stylesheet"href="css/style.css">
</head>
<body>
<div class="container">
    <div class="banner">
        <h1>Welcome to Linda<br> Ikeji's Blog</h1>
        <p>News,Events,Entertainment,livestyle,Fashion,<br>Beauty,Inspiration and yes...Gossip!"Wink" </p>

    </div>
    <div class="section">
    <h3>Friday,July 15,2016</h3>
  <h1>We have a game-changing<br> strategy to defeat poverty and unemployment</h1>
        <pre>
 <div class="image">
                <img src="images/game.jpg">
                <img src="images/game.jpg">

        </div>
        </pre>
    <div style="text-align: center;">    <p>Dr Soji-Ayomade Demilade (MBChB.Ife),<br>Golden Youth Investment Team.Golden<br>youth invesrment team is set up by a group of<br> young medical doctors with the sole aim of<br> eradicating unemployment/under-<br>employment and poverty amongst Nigeria<br> youths.In 2014,Dr Aisha Mahmood,special assistant on sustainable banking,Central Bank of Nigeria (CBN) stated that 70% of the <br>80million Nigerian youths are either underemployed or unemployed </p></div>
<pre>
<h1> Comments</h1>
  <form method="post" action="comments.php" class="contactform">
      <?php echo $name;?>
      <br>
      <?php echo $comment?>
      <br>

</form>




</pre>
        </div>
    </div>
</body>
    </html>