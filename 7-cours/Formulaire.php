<?php

namespace App;

class Formulaire
{


    // public $name;
    // public $value;
    // public $type;
    // public function __construct($name,$value,$type)
    // {
    //     $this->name= $name;
    //     $this->value = $value;
    //     $this->type = $type;
    // }
    //form post 
    public function form($method)
    {
?>
        <form method=<?= $method ?> action="">
            <?php

            $this->input("nom", "ff", "text");
            $this->input("prenom", "michel", "text");

            ?>
        </form>
    <?php
    }
    public function input($name, $value, $type)
    {
    ?>
        <input type=<?= $type ?> name=<?= $name ?> value=<?= $value ?>>
    <?php
    }
    public function submit($nomSubmit)
    {
    ?>
        <button type="submit"><?= $nomSubmit ?></button>
<?php
    }
}
