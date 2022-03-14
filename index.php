<?php
//connecting to DB
$conn = mysqli_connect('localhost', 'HIDDENUSERNAME', 'HIDDENPASSWORD', 'pizza_house');

//checking connection
if (!$conn) {
    echo 'Connection error: ' . mysqli_connect_error();
}

$sql = 'SELECT title, ingredients, id FROM pizzas ORDER BY created_at';

$result = mysqli_query($conn, $sql);

//fetch results as an array
$pizzas = mysqli_fetch_all($result, MYSQLI_ASSOC);


mysqli_free_result($result); //to free from memory
mysqli_close($conn); //closing connection 

?>
<!DOCTYPE html>
<html>
<?php include('templates/header.php'); ?>

<h4 class="center grey-text">Choose your Pizza!</h4>
<div class="container">
    <div class="row">
        <?php foreach ($pizzas as $pizza) { ?>
            <div class="col s6 md3">
                <div class="card z-depth-0">
                    <div class="card-content center">
                        <h6><?php echo htmlspecialchars($pizza['title']); ?></h6>
                        <div><?php echo htmlspecialchars($pizza['ingredients']); ?></div>
                    </div>
                    <div class="card-action right-align">
                        <a href="#" class="brand-text">More info</a>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
</div>

<?php include('templates/footer.php'); ?>

</html>