<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Edda Művek</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <header></header>
    <nav>
        <ul>
            <li>
                <a href="index.php">Kezdőlap</a>
            </li>
             <li>
                <a href="members.php">Tagok</a>
            </li>
             <li>
                <a href="album.php">Albumok</a>
            </li>
             <li>
                <a href="gallery.php">Galéria</a>
            </li>
        </ul>
    </nav>
    <main>
        <h1>Tagok</h1>
        <?php
                if(!isset($_GET['members'])){
                $first = file_get_contents("members.cnt");
                $text = explode(";",$first);
                for ($i = 0; $i < count($text); $i++) {
                    $lines = explode(PHP_EOL,$text[$i]);
                    echo '<h2>'.$lines[0].'</h2>';
                    echo '<section>';
                    switch($i){
                        case 0:
                            echo '<img src="members\0.jpg">';
                            break;
                        case 1:
                            echo '<img src="members\1.JPG">';
                            break;
                        case 2:
                            echo '<img src="members\2.jpg">';
                            break;
                        case 3:
                            echo '<img src="members\3.jpg">';
                            break;
                        case 4:
                            echo '<img src="members\4.jpg">';
                            break;      
                    }
                    echo'</section>';
                    echo '<section>';
                    for($j = 1;$j < count($lines);$j++){
                        echo'<p>'.$lines[$j].'</p>';
                    }
                    echo'</section>';
                }
                }
                else
                {
                    $read=$_GET['members'];
                    $first = file_get_contents("members$read.cnt");
                    $text = explode(";",$first);
                for ($i = 0; $i < count($text); $i++) {
                    $lines = explode(PHP_EOL,$text[$i]);
                    echo '<section> <h2>'.$lines[0].'</h2>';
                    switch($i){
                        case 0:
                            echo '<img src="members\0.jpg">';
                            break;
                        case 1:
                            echo '<img src="members\1.JPG">';
                            break;
                        case 2:
                            echo '<img src="members\2.jpg">';
                            break;
                        case 3:
                            echo '<img src="members\3.jpg">';
                            break;
                        case 4:
                            echo '<img src="members\4.jpg">';
                            break;      
                    }
                    for($j = 1;$j < count($lines);$j++)
                    {
                        echo'<p>'.$lines[$j].'</p>';
                    }
                    echo'</section>';
                }
                }
             ?>
        <h4>nyújt</h4>
    </main>
	<footer>
        <p>Hibák bejelentése <a href="">itt</a>.</p>
	</footer>

</body>
</html>