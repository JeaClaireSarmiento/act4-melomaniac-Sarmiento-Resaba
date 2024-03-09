<!DOCTYPE html>
<html>
<head>
    <title>A Must Hear</title>
    <style>
        body {
            font-family: "Times New Roman", Times, serif;
            font-size: 15px;
			background-color: lavender;
        }
        h1 {
            text-align: center;
        }
        .song-container {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-wrap: wrap;
        }
        .song-container li {
            flex-basis: 33.33%;
            list-style: none;
            text-align: center;
            margin-bottom: 20px;
        }
		.song-container img {
            width: 200px;
            height: 200px;
        }
    </style>
</head>
<body>
    <h1>A Must Hear</h1>
    <div class="song-container">
        <li>
            <a href="song1.php">
                <img src="song1.png" alt="Thumbnail for Tumitigil Ang Mundo by BGYO">
                <br>
                Tumitigil Ang Mundo - BGYO
            </a>
        </li>
        <li>
            <a href="song2.php">
                <img src="song2.jpg" alt="Thumbnail for Kumpas by Moira Dela Torre">
                <br>
				Kumpas - Moira Dela Torre
            </a>
        </li>
        <li>
            <a href="song3.php">
                <img src="song3.jpg" alt="Thumbnail for Ballad of a Homeschooled Girl by Olivia Rodrigo">
                <br>
                Ballad of a Homeschooled Girl - Olivia Rodrigo
            </a>
        </li>
        <li>
            <a href="song4.php">
                <img src="song4.jpg" alt="Thumbnail for Bewitched by Laufey">
                <br>
                Bewitched - Laufey
            </a>
        </li>
        <li>
            <a href="song5.php">
                <img src="song5.jpg" alt="Thumbnail for Questions for the Universe by Laufey">
                <br>
                Questions for the Universe - Laufey
            </a>
        </li>
    </div>
</body>
</html>