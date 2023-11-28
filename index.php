<?php
$games = [
  [
    'team_home' => 'Olimpia Milano',
    'team_away' => 'Pistoia',
    'score_home' => 81,
    'score_away' => 86,
  ],
  [
    'team_home' => 'Dinamo Sassari',
    'team_away' => 'Scafati',
    'score_home' => 79,
    'score_away' => 76,
  ],
  [
    'team_home' => 'Venezia',
    'team_away' => 'Reggiana',
    'score_home' => 90,
    'score_away' => 70,
  ],
  [
    'team_home' => 'Brindisi',
    'team_away' => 'Virtus Bologna',
    'score_home' => 83,
    'score_away' => 75,
  ],
  [
    'team_home' => 'Napoli',
    'team_away' => 'Cremona',
    'score_home' => 80,
    'score_away' => 70,
  ],
  [
    'team_home' => 'Brescia',
    'team_away' => 'Varese',
    'score_home' => 116,
    'score_away' => 73,
  ],
  [
    'team_home' => 'VL Pesaro',
    'team_away' => 'Universo Treviso',
    'score_home' => 95,
    'score_away' => 76,
  ],
  [
    'team_home' => 'Derthona',
    'team_away' => 'Trento',
    'score_home' => 83,
    'score_away' => 80,
  ]
]

  ?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="author" content="Michele Ebau">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
    rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
    integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
    crossorigin="anonymous" referrerpolicy="no-referrer">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <link rel="stylesheet" href="css/style.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.6.0/axios.min.js"
    integrity="sha512-WrdC3CE9vf1nBf58JHepuWT4x24uTacky9fuzw2g/3L9JkihgwZ6Cfv+JGTtNyosOhEmttMtEZ6H3qJWfI7gIQ=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
  <title>PHP Snacks</title>
</head>

<body>
  <header>

  </header>
  <main>

    <div class="container">
      <h2>Snack 1</h2>
      <h4>Lega Basket A 23/24</h4>
      <h6>Giornata 9 --- 26/11/2023</h6>
      <div class="row">
        <?php foreach ($games as $match) {
          ; ?>
          <div class="col-4">
            <div class="home">
              <?php echo "{$match['team_home']} - {$match['team_away']} {$match['score_home']} - {$match['score_away']}" ?>
            </div>
          </div>



        <?php } ?>
        <div class="col-4">

        </div>
      </div>

    </div>
  </main>

  <!-- <script src="js/utility.js"></script> -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
    crossorigin="anonymous"></script>
  <script src="js/script.js" type="module"></script>
</body>

</html>