<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AzenoX - Hyperfollow</title>


    <!--Fonts-->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ $css }}">
</head>


<body>
    <main>

        <!--Left side -> Musics-->
        <section>
            <div class="wrapper_musicslist">

                <div class="list_item">
                    <img class="list_item__img" src="https://i.imgur.com/msfc7Fe.jpg" alt="Scream">
                    <p class="list_item__title">Scream</p>
                    <p class="list_item__date">XX/XX/XXXX</p>
                </div>

            </div>
        </section>

        <!--Right side -> Current-->
        <section>
            <img class="current_img" src="https://i.imgur.com/msfc7Fe.jpg" alt="Scream">

            <div class="wrapper_linkslist">

                <div class="link_item">
                    <div class="link_item__svg_wrapper" style="background: #1ED760;">
                        <svg class="link_item__svg" role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path d="M12 0C5.4 0 0 5.4 0 12s5.4 12 12 12 12-5.4 12-12S18.66 0 12 0zm5.521 17.34c-.24.359-.66.48-1.021.24-2.82-1.74-6.36-2.101-10.561-1.141-.418.122-.779-.179-.899-.539-.12-.421.18-.78.54-.9 4.56-1.021 8.52-.6 11.64 1.32.42.18.479.659.301 1.02zm1.44-3.3c-.301.42-.841.6-1.262.3-3.239-1.98-8.159-2.58-11.939-1.38-.479.12-1.02-.12-1.14-.6-.12-.48.12-1.021.6-1.141C9.6 9.9 15 10.561 18.72 12.84c.361.181.54.78.241 1.2zm.12-3.36C15.24 8.4 8.82 8.16 5.16 9.301c-.6.179-1.2-.181-1.38-.721-.18-.601.18-1.2.72-1.381 4.26-1.26 11.28-1.02 15.721 1.621.539.3.719 1.02.419 1.56-.299.421-1.02.599-1.559.3z"></path>
                        </svg>
                    </div>
                    <p class="link_item__provider">Spotify</p>
                    <svg class="link_item__exit" width="24" height="24" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd">
                        <path d="M11 21h8v-2l1-1v4h-9v2l-10-3v-18l10-3v2h9v5l-1-1v-3h-8v18zm10.053-9l-3.293-3.293.707-.707 4.5 4.5-4.5 4.5-.707-.707 3.293-3.293h-9.053v-1h9.053z"/>
                    </svg>
                </div>

            </div>
        </section>

    </main>
</body>

</html>
