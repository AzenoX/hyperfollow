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

                <h2>My Musics</h2>

                <?php foreach($json->musics as $i => $list_music): ?>

                <a class="list_item" href="<?= $baseurl ?>/<?= $i ?>">
                    <img class="list_item__img" src="<?= $list_music->image ?>" alt="<?= $list_music->name ?>">
                    <p class="list_item__title"><?= $list_music->name ?></p>
                    <p class="list_item__date"><?= $list_music->date ?></p>
                </a>

                <?php endforeach; ?>

            </div>
        </section>

        <!--Right side -> Current-->
        <section>
            <div class="link_header">
                <div>
                    <img class="current_img" src="<?= $music->image ?>" alt="<?= $music->name ?>">
                </div>
                <div>
                    <h1><?= $music->name ?></h1>
                </div>
            </div>

            <?php
            //dd($music);
            ?>

            <div class="wrapper_linkslist">

                <?php foreach($music->providers as $provider_name => $link): ?>

                <?php $provider = $providers[$provider_name]; ?>

                <a class="link_item" href="<?= $link ?>" target="_blank">
                    <div class="link_item__svg_wrapper" style="background: <?= $provider['color'] ?>;">
                        <svg class="link_item__svg" role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path d="<?= $provider['icon'] ?>"></path>
                        </svg>
                    </div>
                    <p class="link_item__provider"><?= $provider['name'] ?></p>
                    <svg class="link_item__exit" width="24" height="24" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd">
                        <path d="M21 13v10h-21v-19h12v2h-10v15h17v-8h2zm3-12h-10.988l4.035 4-6.977 7.07 2.828 2.828 6.977-7.07 4.125 4.172v-11z"/>
                    </svg>
                </a>

                <?php endforeach; ?>

            </div>
        </section>

    </main>
</body>

</html>
