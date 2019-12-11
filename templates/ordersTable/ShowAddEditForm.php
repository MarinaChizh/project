<div class="container" style="margin-top: 5%;">
<div class="row">
<div class="col-sm-4"> </div>
<div class="col-md-4">
  


<div class="tab-content">
            <form action="<?= $URL ?>" method="POST">
                <?php
                foreach ($columnsNames as $name) {
                    if ($name != 'id') {
                        if ($name == 'cars_id') {

                            echo "<label>" . (empty($tableHeaders[$name]) ? $name : $tableHeaders[$name]);
                            echo "<br><select id='position' class='form-control' name='cars_id'>";
                            foreach ($cars as $id => $carsName) {
                                echo "<option value='$id'>$carsName</option>";
                            }

                            echo "</select></lable><br>";
                        } else {
                            echo "<label>"
                                . (empty($tableHeaders[$name]) ? $name : $tableHeaders[$name])
                                . "<input type='text' class='form-control' name='"
                                . $name . "' value='"
                                . ($editValues[$name] ?? '') . "'></label><br>";
                        }
                    }
                }
                ?>
                <input class="btn" type="submit" value="OK">
            </form>
        </div>
    </div>
</div>