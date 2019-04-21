<?php require 'inc/head.php'; ?>
<section class="cookies container-fluid">
    <div class="row">

<?php 
foreach (array_count_values($_SESSION['panier']) as $key =>$value) {
echo $key.$value."<br/>";
}  
?>
    </div>
</section>
<?php require 'inc/foot.php'; ?>
