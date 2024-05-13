<?php

class Form
{
    private $action;
    private $method;
    private $htmlInput = [];
    private $htmlLabel = [];
    public function __construct($action, $method)
    {
        $this->action = $action;
        $this->method = $method;
    }

    public function addLabel($text, $for)
    {
        $this->htmlLabel[] = "<label for='id'>$text</label>";
    }

    public function addInput($type, $name, $value, $for)
    {
        $this->htmlInput[] = "<input type='$type' name='$name' value='$value'></input>";
    }



    public function generateForm()
    {
        echo "<form action='$this->action' method='$this->method'>";

        for ($i = 0; $i < count($this->htmlLabel); $i++) {
            echo $this->htmlLabel[$i];
            echo $this->htmlInput[$i];
        }


        echo "</form>";
    }
}

$form = new Form('action', 'POST');
$form->addLabel("name", "name");
$form->addInput("text", "name", "", "name");
$form->addLabel("surname", "surname");
$form->addInput("text", "surname", "", "surname");


echo $form->generateForm();
