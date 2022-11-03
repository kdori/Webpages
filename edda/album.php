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
        <h1>Albumok</h1>
        <?php
                if(!isset($_GET['albumok'])){
                $first = file_get_contents("albumok.cnt");
                $text = explode(PHP_EOL,$first);
                for ($i = 0; $i < count($text); $i++) {
                    $w=$text[$i];
                    if($w[0]=='1'||$w[0]=='2')
                        echo'<p>'.$text[$i].'</p>';
                    else echo'<h2>'.$text[$i].'</h2>';
                }
                }
                else
                {
                    $read=$_GET['albumok'];
                    $first = file_get_contents("albumok$read.cnt");
                    $text = explode(PHP_EOL,$first);
                    for ($i = 0; $i < count($text); $i++) {
                    $w=$text[$i];
                    if($w[0]=='1'||$w[0]=='2')
                        echo'<p>'.$text[$i].'</p>';
                    else echo'<h2>'.$text[$i].'</h2>';
                }
                }
             ?>
</main>
	<footer>
        <p>Hibák bejelentése <a href="">itt</a>.</p>
	</footer>
</body>
</html>