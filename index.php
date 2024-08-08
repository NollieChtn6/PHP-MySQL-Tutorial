<?php 
// Recipe: title, author, isActive
$recipesList = [
  ["Cassoulet", "Yvette M.", true],
  ["Pancakes", "Sandrine D.", true],
  ["Mille-feuilles à la vanille", "Maryse F.", true],
  ["Pain cocotte", "Sophie P.", true],
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
        <?php echo $recipesList[$lines][0] . ' (from ' . $recipesList[$lines][1] . ')'; ?>
      </li>
      <?php endfor; ?>
    </ul>
  </body>

</html>