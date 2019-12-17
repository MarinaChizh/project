<link rel="stylesheet" href="public/css/style_AddEditForm.css">
<div class="formAddEdit">
     <form action="<?= $URL ?>" method="POST">
        <?php
            foreach ($columnsNames as $name) {
              if ($name != 'id') {
                echo "<div class='form-group'><label>"
                 .(empty($tableHeaders[$name]) ? $name : $tableHeaders[$name])
                    ."<input type='text' class='form-control' name='"
                     .$name."' placeholder='"
                    .$name."' value='"
                    .($editValues[$name] ?? '')."'></label></div><br/>";
                    }
                }
            ?>
            <br><div class="btn"><input type="submit" value="OK"></div>
        </form>
</div>