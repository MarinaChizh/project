<link rel="stylesheet" href="public/css/style_AddEditForm.css">
        <div class="formAddEdit">
            <form action="<?= $URL ?>" method="POST">
                <?php
                foreach ($columnsNames as $name) {
                    if ($name != 'id') {
                        if ($name == 'user_group_id') {
                            echo "<div class='form-group'><label>" . (empty($tableHeaders[$name]) ? $name : $tableHeaders[$name]);
                            echo "<br><select class='form-control' name='user_group_id'>";
                            foreach ($userGroup as $id => $groupName) {
                                echo "<option value='$id'>$groupName</option>";
                            }
                            echo "</select></lable></div><br>";
                        } else {
                            echo "<div class='form-group'><label>"
                                . (empty($tableHeaders[$name]) ? $name : $tableHeaders[$name])
                                . "<input class='form-control type='text' name='"
                                . $name . "' value='"
                                . ($editValues[$name] ?? '') . "'></label></div><br>";
                        }
                    }
                }
                ?>
                <input class="btn btn-info my-4" type="submit" value="OK">
            </form>
        </div>
    