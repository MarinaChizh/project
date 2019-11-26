<link rel="stylesheet" href="public/css/style_AddEditForm.css">
<div>
    <div class='container'>
        <div>
            <form action="<?= $URL ?>" method="POST" class="contact_form">
                <?php
                foreach ($columnsNames as $name) {
                    if ($name != 'id') {
                        if ($name == 'cars_id') {

                            echo "<label>" . (empty($tableHeaders[$name]) ? $name : $tableHeaders[$name]);
                            echo "<br><select name='cars_id'>";
                            foreach ($cars as $id => $carsName) {
                                echo "<option value='$id'>$carsName</option>";
                            }

                            echo "</select></lable><br>";
                        } else {
                            echo "<label>"
                                . (empty($tableHeaders[$name]) ? $name : $tableHeaders[$name])
                                . "<input type='text' name='"
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