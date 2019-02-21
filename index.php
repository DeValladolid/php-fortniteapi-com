<?php
require_once 'fortnite-api/Autoloader.php';

$api = new FortniteClient;

$data = $api->items->store();

var_dump($data);
?>

<!doctype html>
<html lang="en">
<html>

 <?php
           for ($i = 0; $i < count($data['items']); $i ++) {
               ?>

            <a href="#" class="fortnite-db-item fortnite-db-item--large-text fortnite-db-item--epic" style="grid-column: span 1 / auto;">
               <img src="<?php echo $data['items']['item'][$i]['image']['icon'] ?>" class="fortnite-db-item__image">
               <div class="fortnite-db-item__details">
                  <div class="fortnite-db-item__name">test</div>
                  <div class="fortnite-db-item__price"><img src="https://cdn.thetrackernetwork.com/cdn/trackernetwork/3C7Avbucks.png">
                     2000
                  </div>
               </div>
            </a>
            <?php
        }
        ?>
 </html>
