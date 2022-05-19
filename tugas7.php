<html>
  <head>
      <title>Tugas 7</title>
  </head>
  <body>
    <?php
      $number = [1,2,3,4,5,6,7,8,9,10];
     ?>
     <h1>Table Bilangan</h1>
     <table border="1">
       <tr>
          <td>Bilangan</td>
          <td>Jenis</td>
       </tr>
       <tr>
          <td><?php echo "$number[0]" ?></td>
          <td><?php
                if($number[0] % 2 == 1){
                  echo "$number[0] adalah ganjil";
                }
              ?>
          </td>
       </tr>
       <tr>
          <td><?php echo "$number[1]" ?></td>
          <td><?php
                if($number[1] % 2 == 0){
                  echo "$number[1] adalah genap";
                }
              ?>
          </td>
       </tr>
       <tr>
          <td><?php echo "$number[2]" ?></td>
          <td><?php
                if($number[2] % 2 == 1){
                  echo "$number[2] adalah ganjil";
                }
              ?>
          </td>
       </tr>
       <tr>
          <td><?php echo "$number[3]" ?></td>
          <td><?php
                if($number[3] % 2 == 0){
                  echo "$number[3] adalah genap";
                }
              ?>
          </td>
       </tr>
       <tr>
          <td><?php echo "$number[4]" ?></td>
          <td><?php
                if($number[4] % 2 == 1){
                  echo "$number[4] adalah ganjil";
                }
              ?>
          </td>
       </tr>
       <tr>
          <td><?php echo "$number[5]" ?></td>
          <td><?php
                if($number[5] % 2 == 0){
                  echo "$number[5] adalah genap";
                }
              ?>
          </td>
       </tr>
       <tr>
          <td><?php echo "$number[6]" ?></td>
          <td><?php
                if($number[6] % 2 == 1){
                  echo "$number[6] adalah ganjil";
                }
              ?>
          </td>
       </tr>
       <tr>
          <td><?php echo "$number[7]" ?></td>
          <td><?php
                if($number[7] % 2 == 0){
                  echo "$number[7] adalah genap";
                }
              ?>
          </td>
       </tr>
       <tr>
          <td><?php echo "$number[8]" ?></td>
          <td><?php
                if($number[8] % 2 == 1){
                  echo "$number[8] adalah ganjil";
                }
              ?>
          </td>
       </tr>
       <tr>
          <td><?php echo "$number[9]" ?></td>
          <td><?php
                if($number[9] % 2 == 0){
                  echo "$number[9] adalah genap";
                }
              ?>
          </td>
       </tr>
     </table>
  </body>
</html>
