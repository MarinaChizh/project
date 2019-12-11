<div class="container" style="margin-top: 5%;">
<div class="row">
<div class="col-sm-4"> </div>
<div class="col-md-4">
  


<div class="tab-content">
    
        <form action="<?= $URL ?>" method="POST">
            <?php
                foreach ($columnsNames as $name) {
                    if ($name != 'id') {
                        echo "<label>"
                        .(empty($tableHeaders[$name]) ? $name : $tableHeaders[$name])
                        ."<input type='text' class='form-control' name='"
                        .$name."' placeholder='"
                        .$name."' value='"
                        .($editValues[$name] ?? '')."'></label><br/>";
                    }
                }
            ?>
            <button type="submit" class="btn btn-default btn-lg">OK</button>
        </form>
   
</div>