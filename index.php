<?php



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>２ちゃんねる掲示板</title>
    <link rel="stylesheet" href="./assets/css/style.css">
</head>

<body>
    <header>
        <h1 class="title">2ちゃんねる掲示板</h1>
        <hr>
    </header>
    <!-- thread -->
    <div class="threadWrapper">
        <div class="childWrapper">
            <div class="threadTitle">
                <span>
                    title
                </span>
                <h1>2ちゃんねるつくってみた</h1>
            </div>
            <section>
                <article>
                    <div class="wrapper">
                        <div class="nameArea">
                            <span>name:</span>
                            <p class="username">aaaaaa</p>
                            <time>2022/7/16 14:20</time>
                        </div>
                        <p class="comment">fdasgtrgrfgafdas</p>
                    </div>
                </article>
            </section>
            <form class="formWrapper">
                <div>
                    <input type="submit" value="書き込む">
                    <label>name:</label>
                    <input type="text">
                </div>
                <div>
                    <textarea class="commentTextArea"></textarea>
                </div>
            </form>
        </div>
    </div>
</body>

</html>