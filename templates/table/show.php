<?php

$paginationHTML = "<nav class='center'><ul class='pagination'><li class='page-item'><a class='page-link' href='" . $paginationLink . max($currentPage - 1, 1) . "'><<</a></li>";
for ($i = 1; $i <= $pageCount; $i++) {
    $paginationHTML .= '<li class="page-item ' . (($i == $currentPage) ? "active" : "") . '"><a class="page-link " href="' . $paginationLink . $i . '">' . $i . '</a></li>';
}
$paginationHTML .= "<li class='page-item'><a class='page-link' href='" . $paginationLink . min($currentPage + 1, $pageCount) . "'>>></a></li></ul></nav>";

echo "<br>";
echo $paginationHTML;

// echo "<div class='container'><div class='row justify-content-center'><div class='table-responsive'>";

echo "<table class='table_price'>";
echo "<caption></caption>";
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
echo "<div class='buttons'><a class='action-btn' href='$addLink'>Добавить новый</a></div>";
echo "</div></div></div>";
echo $paginationHTML;

