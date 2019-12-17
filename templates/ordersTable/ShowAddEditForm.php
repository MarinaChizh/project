<link rel="stylesheet" href="public/css/style_AddEditForm.css">
<div class="formAddEdit">
            <form action="<?= $URL ?>" method="POST">
                <?php
                foreach ($columnsNames as $name) {
                    if ($name != 'id') {
                        if ($name == 'cars_id') {

                            echo "<div class='form-group'><label>" . (empty($tableHeaders[$name]) ? $name : $tableHeaders[$name]);
                            echo "<select class='form-control'  name='cars_id'>";
                            foreach ($cars as $id => $carsName) {
                                echo "<option value='$id'>$carsName</option>";
                            }

                            echo "</select></lable></div>";
                        } else {
                            echo "<div class='form-group'><label>"
                                . (empty($tableHeaders[$name]) ? $name : $tableHeaders[$name])
                                . "<input type='text' class='form-control' name='"
                                . $name . "' value='"
                                . ($editValues[$name] ?? '') . "'></label></div>";
                        }
                    }
                }
                ?>
                <br><div class="btn"><input type="submit" value="OK"></div>
            </form>
            </div>       