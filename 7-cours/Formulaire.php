<?php

namespace App;

class Formulaire
{
    public $name;
    public $value;
    public $type;
    public function __construct($name, $value, $type)
    {
        $this->name = $name;
        $this->value = $value;
        $this->type = $type;
    }
    public function Input()
    { ?>
        <Input type=<?= $this->type ?> name=<?= $this->name ?> value=<?= $this->value ?>>
    <?php
    }
    public function submit($nomSubmit)
    {
    ?>
        <button type="submit"><?= $nomSubmit ?></button>
<?php
    }
}
