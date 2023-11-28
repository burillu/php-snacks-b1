<?php
#Snack 1
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
];


$paragraph = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi illo atque itaque exercitationem, inventore, architecto soluta, molestiae maxime quos odit eius dicta nobis! Deserunt nesciunt dolores rerum iusto eum aspernatur harum repellat nobis architecto? Asperiores enim voluptate quod, dignissimos placeat cumque assumenda vero ex natus voluptas optio magnam suscipit. Voluptates laborum vel quibusdam. Velit minima maiores illo a tenetur excepturi cum, corrupti itaque, voluptatum dolorem non laboriosam deleniti. Nihil ab minima quia, accusantium aspernatur quas. Fugit error placeat culpa tenetur expedita illum dolore quis maxime assumenda aperiam quibusdam qui cupiditate quaerat, totam accusantium repellat porro deserunt explicabo odio illo. Facere inventore modi laboriosam provident ex tempora vitae ipsum, eum iste praesentium nemo rerum corrupti ab ratione odit quod quibusdam ut labore sed fugiat aliquid dignissimos sequi? Officiis voluptatem at ipsam exercitationem doloribus aspernatur amet maiores culpa, quod nobis cum fugiat ratione dolor repellat eveniet quidem animi iste corporis blanditiis sunt, dolore voluptas, quas sapiente odit! Perferendis assumenda beatae ad esse quas est nesciunt odio, atque ducimus. Nesciunt distinctio illum rem cum aliquam nihil, ab cumque quos, quod blanditiis ex quasi vero nemo sapiente delectus? Enim doloribus at libero consequatur, fugiat expedita. Illum excepturi fugiat perspiciatis, corrupti iste unde ex. Velit cumque culpa cum voluptatem libero, saepe facere! Cum impedit similique libero illum, quae voluptatibus recusandae. Veritatis quam facere quia magni sed nam odio eius explicabo voluptate, deserunt sit beatae sint numquam, culpa, excepturi a cupiditate tenetur architecto. Non, amet sequi? Adipisci error quasi aliquid ut facere beatae repellendus placeat maiores inventore incidunt. Sit vel voluptatem voluptatum deserunt ad cupiditate, recusandae reprehenderit, dicta quas, facere totam perspiciatis. Dicta nulla adipisci quasi necessitatibus ipsam magni eligendi suscipit, quas quis pariatur obcaecati culpa sapiente autem ab magnam odio consectetur accusamus optio? Voluptatibus natus laudantium, nihil neque doloribus porro quos, assumenda eius error fugiat laboriosam? Deleniti sint commodi qui autem maxime doloribus, nesciunt asperiores perspiciatis totam ipsa praesentium enim incidunt officiis magnam quaerat fugiat quos nemo earum corporis dolorem, officia distinctio impedit. Laborum et sequi id hic amet non quibusdam porro assumenda. Placeat magnam cum architecto tenetur ipsam cupiditate odit eius accusamus error ipsum, unde ullam, temporibus laboriosam consectetur, illo animi! Quos porro tempora vero consectetur, eaque vel quo consequatur! Odit soluta aliquam ratione ab perferendis, doloribus error itaque esse adipisci quasi, debitis dicta nemo nesciunt reprehenderit vitae aspernatur nulla architecto sed ex sint accusantium? Minima quas similique culpa sequi, totam maiores ab impedit.';

$split_paragraph = explode('.', $paragraph)

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
      <div class="row mb-5">
        <?php foreach ($games as $match) {
          ; ?>
          <div class="col-4">
            <div class="home">
              <?php echo "{$match['team_home']} - {$match['team_away']} | {$match['score_home']} - {$match['score_away']}" ?>
            </div>
          </div>



        <?php } ?>
        <div class="col-4">

        </div>
      </div>
      <h2>Snack 2</h2>

      <form action="index.php" method="GET" class="row g-3">
        <div class="col-md-5">
          <label for="name" class="form-label">Name</label>
          <input type="text" class="form-control" id="name" name="name">
        </div>
        <div class="col-md-5">
          <label for="mail" class="form-label">Mail</label>
          <input type="text" class="form-control" id="mail" name="mail">
        </div>
        <div class="col-md-2">
          <label for="age" class="form-label">Age</label>
          <input type="number" class="form-control" id="age" name="age">
        </div>

        <div class="col-12">
          <button type="submit" class="btn btn-primary">Subscribe</button>
        </div>

        <?php
        #Snack 2
        if (isset($_GET['name']) && isset($_GET['mail']) && isset($_GET['age'])) {
          $name = $_GET['name'];
          $mail = $_GET['mail'];
          $age = intval($_GET['age']);
          //var_dump(is_int($age));
          if (strlen($name) > 3 && str_contains($mail, '@') && str_contains($mail, '.') && is_int($age)) {
            echo "<div class= 'bg-success'> Ciao $name, Accesso Ruscito </div> ";
          } else {
            echo "<div class= 'bg-danger'> Accesso Negato </div>";
          }
        }
        ?>
      </form>

      <h2>Bonus</h2>
      <div class="row">
        <div class="col-6">
          <h5>Paragrafo originale</h5>

          <p class="p-3">
            <?php echo $paragraph; ?>
          </p>

        </div>
        <div class="col-6">
          <h5>Paragrafo modificato</h5>
          <?php foreach ($split_paragraph as $par) { ?>

            <p class="p-3">
              <?php echo $par; ?>.
            </p>
          <?php } ?>


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