<?php 
// Recipe: title, author
$recipesList = [
  [
    "title" => "Cassoulet",
    "author" => "Yvette M.", 
  ],
  [
    "title" => "Pancakes au citron",
    "author" => "Sandrine D.", 
  ],
  [
    "title" => "Mille-feuilles à la vanille",
    "author" => "Maryse G.", 
  ],
  [
    "title" => "Pain cocotte",
    "author" => "Sophie P",
  ]
]
?>

<html>

  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Amazing Recipes in PHP</title>
  </head>

  <body>
    <h1>Amazing Recipes In PHP</h1>
    <h2>Welcome to our blog!</h2>
    <ul>
      <?php for ($lines = 0; $lines <= 3; $lines++): ?>
      <li>
        <?php echo $recipesList[$lines]['title'] . ' (from ' . $recipesList[$lines]['author'] . ')'; ?>
      </li>
      <?php endfor; ?>
    </ul>
  </body>

</html>