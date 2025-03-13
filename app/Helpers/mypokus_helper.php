<?php

if(!function_exists('form_input_vyuka')) {
    /**
     * @param $data - asociativní pole s parametry inputu, nutný je name
     * @param $label - popisek, mterý se bude objevovat v labelu
     * @param $type - typ políčka - text, password, email apod.
     * @param $floating - jesli budu používat floating labels nebo ne
     * @param $div - classa do divu, který obaluje celý input
     */

     function form_input_vyuka(array $data, string $label = '', string $type = 'text', bool $floating = true, string $div = 'mb-3') {

        $quot = "\"";
        $endL = "\n";
        $tab = "\t";
        if(!array_key_exists('placeholder', $data) and $floating){
            $data['placeholder'] = "a";
        }
        
        if(array_key_exists('id', $data)) {
            $for = $data["id"];
        } else {
            $data['id'] = $data["name"];
            $for = $data["id"];
        }
        

        if (!$floating) {
            if ($div == '') {
                $return = "<div>" . $endL;
            } else {
                $return = "<div class=". $quot . $div .  $quot. ">" . $endL;
            }
        } else {
            $return = "<div class=" . $quot . $div . " " . "form-floating" . $quot . ">" . $endL;
        }

        $inputContent = $tab . "<input class=" . $quot . "form-control". $quot;
        foreach($data as $key => $value) {
            $inputContent .= " " . $key . "=" . $quot . $value . $quot;
        }

        $inputContent .= ">" . $endL;
        $labelContent = $tab . '<label for=' . $quot . $for . $quot . '>' . $label . "</label>" . $endL;

        if($floating){
            $return .= $inputContent . $labelContent;
        } else {
            $return .= $labelContent. $inputContent;
        }

        $return .= "</div>";

        return $return;
     }
}

if (!function_exists('form_input_bs')) {
    /**
     * Text Input Field. If 'type' is passed in the $type field, it will be
     * used as the input type, for making 'email', 'phone', etc input fields.
     *
     * @param array $data - pole atributu do inputu, předpokládá se prvek id
     * @param string $bs - třídy pro div, ve kterém celý input bude
     * @param string $label - text v labelu inputu
     * @param string $type - type inputu - text, number, password apod.
     * @param boolean $floating - jestli to má být floating label nebo ne
     * @param mixed $inputGroup - jestli chci vložit inputGroup nebo ne, prázdný řetězec v případě, že ne, jinak text v input groupu
     * @param boolean $notation - jestli se mají před uvozovky přidávat \ (pokud to cchi použít v javascriptu, dát false)
     */
    function form_input_bs($data = '',  string $label = '', string $type = 'text', $floating = true,  string $bs = 'mb-3',  $notation = true): string
    {
        if ($notation) {
            $quot = "\"";
            $endL = "\n";
            $tab = "\t";
        } else {
            $quot = "\\\"";
            $endL = "";
            $tab = "";
        }
        $defaults = [
            'type'  => $type,
            'name'  => is_array($data) ? '' : $data,
            'placeholder' => 'a'

        ];
      
        $input =  $tab . '<input class=' . $quot . 'form-control' . $quot . ' ' . my_parse_form_attributes($data, $defaults, $quot) . " />" . $endL;


        if (!$floating) {
            if ($bs == '') {
                $return = "<div>" . $endL;
            } else {
                $return = "<div class=" . $quot . $bs . $quot . ">" . $endL;
            }
        } else {
            $return = "<div class=" . $quot . $bs . " " . "form-floating" . $quot . ">" . $endL;
        }




        $input =  $tab . '<input class=' . $quot . 'form-control' . $quot . ' ' . my_parse_form_attributes($data, $defaults, $quot) . " />" . $endL;



        if ($label != '') {
            $for = $data["id"];
            if ($floating) {
                $return .= $input . $tab . '<label for=' . $quot . $for . $quot . '>' . $label . "</label>" . $endL;
            } else {
                $return .= $tab . '<label for=' . $quot . $for . $quot . ' class=' . $quot . 'form-label' . $quot . '>' . $label . "</label>" . $endL . $tab . $input;
            }
        }

        $return .= "</div>" . $endL;


        return $return;
    }
}

if (!function_exists('form_input_group_bs')) {
    /**
     * Text Input Field. If 'type' is passed in the $type field, it will be
     * used as the input type, for making 'email', 'phone', etc input fields.
     *
     * @param array $data - pole atributu do inputu, předpokládá se prvek id
     * @param string $label - text v labelu inputu
     * 
     * @param string $type - type inputu - text, number, password apod.
     * @param boolean $floating - jestli to má být floating label nebo ne
     * @param string $bs - třídy pro div, ve kterém celý input bude
     * @param boolean $notation - jestli se mají před uvozovky přidávat \ (pokud to cchi použít v javascriptu, dát false)
     */
    function form_input_group_bs($data = '',  string $label = '', string $inputTypeText = '', bool $inputGroupFront = true,  string $type = 'text', $floating = true,  string $bs = 'mb-3',  $notation = true): string {
        if ($notation) {
            $quot = "\"";
            $endL = "\n";
            $tab = "\t";
        } else {
            $quot = "\\\"";
            $endL = "";
            $tab = "";
        }

        $data["type"] = $type;
        if(!array_key_exists('placeholder', $data) and $floating){
            $data['placeholder'] = "a";
        }

        if(array_key_exists('id', $data)) {
            $for = $data["id"];
        } else {
            $data['id'] = $data["name"];
            $for = $data["id"];
        }

        $return = "<div class=" . $quot . "input-group " . $bs . $quot . ">" . $endL;

        $inputContent = $tab . "<input class=" . $quot . "form-control". $quot;
        foreach($data as $key => $value) {
            $inputContent .= " " . $key . "=" . $quot . $value . $quot;
        }

        $inputContent .= ">" . $endL;
        $labelContent = $tab . '<label for=' . $quot . $for . $quot . '>' . $label . "</label>" . $endL;

       

       
        if($floating) {
            $inputPart  = $tab . "<div class=" . $quot . "form-floating". $quot . ">" . $endL;
            $inputPart .= $tab . $inputContent . $tab . $labelContent;
            $inputPart .= $tab . "</div>" . $endL;
        } else {
            $inputPart = $labelContent . $inputContent;
        }

        if($inputGroupFront) {
            $return .= "<span class= ". $quot . "input-group-text" . $quot . ">" . $inputTypeText . "</span>" . $endL;
            $return .= $inputPart;
        } else {
            $return .= $inputPart;
            $return .= "<span class= ". $quot . "input-group-text" . $quot . ">" . $inputTypeText . "</span>" . $endL;
        }

        $return .= "</div>" . $endL;
        

        return $return;
    }
}


?>
