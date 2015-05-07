<?php

namespace Craft;

class CraftButtonsWidget extends BaseWidget
{

    protected $buttons = array(
                                array("button_link" => "https://example.com", "button_text" => "Start", "button_header" => "Insert Heading Here"),
                                array("button_link" => "https://example.com", "button_text" => "Start", "button_header" => "Insert Heading Here")
                                )

    public function getName()
    {
        return Craft::t('Craft Buttons');
    }

    public function getBodyHtml()
    {

        if(sizeof($this->buttons) > 0) {
            foreach($this->buttons as $item) {

                $html .= '<div class="field">';
                $html .= '  <div class="heading"><p>'.$item["button_header"].'</p></div>';
                $html .= '  <div class="input"><a href="'.$item["button_link"].'" target="_blank" class="btn submit">'.$item["button_text"].'</a></div>';
                $html .= '</div>';

            }
        }

        return $html;

    }

}
