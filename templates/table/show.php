<link rel="stylesheet" href="public/css/show.css">
<link rel="stylesheet" href="public/css/about.css">
<?php
$paginationHTML = "<nav class='nav justify-content-center'><ul class='pagination'><li class='page-item'><a class='page-link' href='" . $paginationLink . max($currentPage - 1, 1) . "'><<</a></li>";
for ($i = 1; $i <= $pageCount; $i++) {
    $paginationHTML .= '<li class="page-item ' . (($i == $currentPage) ? "active" : "") . '"><a class="page-link " href="' . $paginationLink . $i . '">' . $i . '</a></li>';
}
$paginationHTML .= "<li class='page-item'><a class='page-link' href='" . $paginationLink . min($currentPage + 1, $pageCount) . "'>>></a></li></ul></nav>";

echo "<br>";
echo "<div class='container' id='pagination'>";
echo $paginationHTML;
echo "</div>";

// Таблица

echo "<div class='container'>
<div class='row justify-content-center'><div class='table-responsive'>";
echo "<table class='table table-hover'>";
// echo "<caption></caption>";
echo "<tr>";
foreach ($tableHeaders as $fieldName => $th ) {
    echo "<th>".(empty($th) ? $fieldName : $th)."</th>";
}
echo "<th colspan='2'></th></tr>";

foreach ($table as $row) {
    echo "<tr>";
    foreach ($row as $value) {
        echo "<td>$value</td>";
    }
    if($deleteEditAccess){
    echo "<td><a href='$editLink" . $row['id'] . "' class='btn btn-warning'>Edit</a></td>";
    echo "<td><a href='$delLink" . $row['id'] . "' class='btn btn-danger'>Delete</a></td></tr>";}
}
echo "</table>";
if ($addButton){
echo "<div class='buttons'><a class='action-btn' href='$addLink'>Добавить новый</a></div>";}
echo "</div></div></div>";
echo "<div class='container'>";
echo $paginationHTML;
echo "</div>";

?>

<br>
<br>
<div class='portfolio'>
     <h1 class='text-center'>Автопарк</h1>
    <div class='container'>
        <div class='row'>
            <div class='col-lg-4 col-md-4 col-sm-12'>
                <img align='center' src='public/img/5440_multi-tier_2_1.jpg' class='img-fluid'>
            </div>
            <div class='col-lg-4 col-md-4 col-sm-12'>
                <img align='center' src='public/img/5440_multi-tier_2_1.jpg' class='img-fluid'>
            </div>
<div class="col-lg-4 col-md-4 col-sm-12">
    <img align="center" src="public/img/5440_multi-tier_2_1.jpg" class="img-fluid">
   </div>
    <div class="col-lg-4 col-md-4 col-sm-12">
    <img align="center" src="public/img/NAZ 7.jpg" class="img-fluid">
   </div>
   <div class="col-lg-4 col-md-4 col-sm-12">
    <img align="center" src="public/img/s1200.webp" class="img-fluid">
   </div>
   <div class="col-lg-4 col-md-4 col-sm-12">
    <img align="center" src="public/img/s12000.webp" class="img-fluid">
   </div>
    <div class="col-lg-4 col-md-4 col-sm-12">
    <img align="center" src="public/img/5440_multi-tier_2_1.jpg" class="img-fluid">
   </div>
   <div class="col-lg-4 col-md-4 col-sm-12">
    <img align="center" src="public/img/5440_multi-tier_2_1.jpg" class="img-fluid">
   </div>
   <div class="col-lg-4 col-md-4 col-sm-12">
    <img align="center" src="public/img/5440_multi-tier_2_1.jpg" class="img-fluid">
   </div>
  </div>
 </div>
</div>


<footer>
<div class="container">
<ul class="foote_bottom_ul_amrc">
<li><a href="http://webenlance.com">Home</a></li>
<li><a href="http://webenlance.com">About</a></li>
</ul>

<p class="text-center">Copyright @2019 | Designed With by <a href="#">Your Company Name</a></p>

<ul class="social_footer_ul">
<li><a href="http://webenlance.com"><i class="fab fa-facebook-f"></i></a></li>
<li><a href="http://webenlance.com"><i class="fab fa-twitter"></i></a></li>
<li><a href="http://webenlance.com"><i class="fab fa-linkedin"></i></a></li>
<li><a href="http://webenlance.com"><i class="fab fa-instagram"></i></a></li>
</ul>

</div> 
</footer>


