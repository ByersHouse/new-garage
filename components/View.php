<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of View
 *
 * @author Technocom
 */
class View {
    //put your code here
    
   static function render($template, $data = [])
    {       
        foreach($data as $key => $val){
            $$key = $val;
        }
	include ROOT.'/views/'.$template.'.php';
                
    }
    
}
