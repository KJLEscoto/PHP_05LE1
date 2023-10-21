<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>05 Laboratory Exercise 1</title>
  <link rel="stylesheet" href="css/style.css">
</head>

<body>

  <div class='diy'>
    <?php
        echo "D-I-Y Cake";
    ?>
  </div>
  <table>
    <tr>
      <th>Cake Shape</th>
      <th>Cake Flavor</th>
      <th>Cake Toppings</th>
    </tr>
    <tr>
      <td>
        <?php
          $arr_shapes = array("Heart", "Rectangle", "Square", "Round");
          echo "<form>";
          foreach ($arr_shapes as $shape) {
              echo "<input type='radio' name='shape' value='$shape'>$shape <br>";
          } 
          echo "</form>";
        ?>
      </td>
      <td>
        <?php
          $arr_flavors = array("Chocolate", "Vanilla", "Lemon", "Cheesecake");
          echo "<form>";
          foreach ($arr_flavors as $flavors) {
              echo "<input type='radio' name='shape' value='$flavors'>$flavors <br>";
          } 
          echo "</form>";
        ?>
      </td>
      <td>
        <?php
          $arr_toppings = array("Cookies", "Spun-sugar Flowers", "Mini Chocolate Candies", "Marshmallows"); 
          echo "<form>";
          foreach ($arr_toppings as $toppings) {
              echo "<input type='radio' name='shape' value='$toppings'>$toppings <br>";
          } 
          echo "</form>";
        ?>
      </td>
    </tr>
  </table>

</body>

</html>