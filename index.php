<?php 
/* This is the PHP to generate the header and the quotes */
$welcome = array("Ø®ÙˆØ´ Ø¢Ù…Ø¯ÛŒØ¯", "ØªØ±Ø­ÙŠØ¨", "Õ¸Õ²Õ»Õ¸Ö‚ÕµÕ¶", "à¦¸à§à¦¬à¦¾à¦—à¦¤", "æ­¡è¿Ž", "æ¬¢è¿Ž", "àª¸à«àªµàª¾àª—àª¤", "×‘×¨×•×š ×”×‘×", "à¤†à¤ªà¤•à¤¾ à¤¸à¥à¤µà¤¾à¤—à¤¤ à¤¹à¥ˆ", "æ­“è¿Ž", "àºàº´àº™àº”àºµàº•à»‰àº­àº™àº®àº±àºš", "à¤¸à¥à¤µà¤¾à¤—à¤¤à¤¾à¤°à¥à¤¹", "Ø®ÙˆØ´ Ø¢Ù…Ø¯", "à¨¸à©à¨†à¨—à¨¤ à¨¹à©ˆ", "à¸¢à¸´à¸™à¸”à¸µà¸•à¹‰à¸­à¸™à¸£à¸±à¸š");

$quotes = array("Life is really simple, but we insist on making it complicated.", "Confucius", "Common sense often makes good law.", "William O. Douglas", "The difference between stupidity and genius is that genius has its limits.", "Albert Einstein", "A fool thinks himself to be wise, but a wise man knows himself to be a fool.", "William Shakespeare", "The weak can never forgive. Forgiveness is the attribute of the strong.", "Mahatma Gandhi", "Holding on to anger is like grasping a hot coal with the intent of throwing it at someone else; you are the one who gets burned.", "Buddha", "Where there is shouting, there is no true knowledge.", "Leonardo da Vinci", "Mistakes are always forgivable, if one has the courage to admit them.", "Bruce Lee");
$total = (count($quotes)/2);
$nmbr = (rand(0, ($total-1)));
$nmbr = $nmbr*2;
$quote = $quotes[$nmbr];
$nmbr = $nmbr+1;
$author = $quotes[$nmbr];
?>
<!DOCTYPE html>
<html>
<head>
    <title>QckDial</title>    
    <link href="default.css" type="text/css" rel="stylesheet"/>
    <meta content="text/html; charset=UTF-8" http-equiv="content-type">
    <meta name="viewport" content="width=device-width; initial-scale=1.0; minimum-scale=1.0; maximum-scale=1.0; user-scalable=0;"/>
</head>
<body>
    <div id="wrap">
	 <!-- the header is generated pseudo-randomly through PHP -->
    <header><h1><?php echo $welcome[array_rand($welcome)]; ?></h1></header>
    <article>
        <ul>
			      <!-- This is a single block to display some links for you -->
            <li>Websites
                <ul>
                    <li><a href="#">Link 1</a></li>
                    <li><a href="#">Link 2</a></li>
                    <li><a href="#">Link 3</a></li>
                    <li><a href="#">Link 4</a></li>
					          <li><a href="#">Link 5</a></li>
                </ul>
            </li>
			      <!-- You can add more content by providing additional blocks below this line and before the </ul> -->
        </ul>
		    <!-- quote and author are picked pseudo-randomly through PHP -->
        <blockquote>
            <p><?php echo $quote; ?></p>
            <span><?php echo $author; ?></span>
        </blockquote>
    </article>
    </div>
</body>
</html>
