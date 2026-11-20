<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test agenda</title>
    <link rel="stylesheet" href="stylecss">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/footer.css">
</head>
<body>
    <?php require __DIR__ . '/php/header.php'; ?>

    <main class="page-content">
        <section class="agenda">
            <div class="section-heading">
                <h2>Trucs à venir</h2>
                <p>Lorem ipsum ou juste du texte de test ici</p>
            </div>

            <div class="events">
                <article class="event event-featured">
                    <time class="event-date" datetime="2026-11-25">
                        <span class="date-day">25</span>
                        <span class="date-month">nov</span>
                    </time>
                    <div class="event-content">
                        <span class="category">Test 1</span>
                        <h3>Titre événement bidon</h3>
                        <p class="event-description">Petite description de test pour voir comment ça rend à l'écran.</p>
                        <p class="event-location">Salle A — 14h</p>
                    </div>
                </article>

                <article class="event">
                    <time class="event-date" datetime="2026-11-28">
                        <span class="date-day">28</span>
                        <span class="date-month">nov</span>
                    </time>
                    <div class="event-content">
                        <span class="category">Test 2</span>
                        <h3>Deuxième truc aléatoire</h3>
                        <p class="event-location">Salle B — 10h</p>
                    </div>
                </article>

                <article class="event">
                    <time class="event-date" datetime="2026-12-03">
                        <span class="date-day">03</span>
                        <span class="date-month">déc</span>
                    </time>
                    <div class="event-content">
                        <span class="category">Test 3</span>
                        <h3>Encore un autre item</h3>
                        <p class="event-location">Salle C — 16h</p>
                    </div>
                </article>

                <article class="event">
                    <time class="event-date" datetime="2026-12-10">
                        <span class="date-day">10</span>
                        <span class="date-month">déc</span>
                    </time>
                    <div class="event-content">
                        <span class="category">Test 4</span>
                        <h3>Dernier bloc pour tester</h3>
                        <p class="event-location">Salle D — 18h</p>
                    </div>
                </article>
            </div>

            <p class="agenda-note">Texte de fin à remplacer plus tard.</p>
        </section>
    </main>

    <?php require __DIR__ . '/php/footer.php'; ?>
</body>
</html>