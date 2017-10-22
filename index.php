<?php

										// обрезать первый и последний символ в строке 
	/*function remove_char($s) {
		$str = substr($s, 1, -1);
		return $str;
	}
	echo remove_char('world');*/

										// есть массив и нужно вывести все с массива строкой
    /*$a = ["Hello", "my", "diar", "friend", "!"];
    function smash($words){
        foreach ($words as $value) {
            $res = $res . " " . $value . " ";            
        }
        $res = rtrim($res);
        return $res;
        // or 
        // return $res = implode(" ", $words);
    }
    echo smash($a);*/
    								// есть стока нужно вывести : если количество букв четное в этой строке то вывести одну центральную букву
    								// если не четное количество букв в заданой строке то вывести две центральных буквы
 	/*$word = "vladyslav";
 	$word2 = "twst1";
 	function getMidle($word){
 		$pro = strlen($word) / 2;
 		if (is_int($pro)) {
 			$res = $word[$pro -1] . $word[$pro];
 		}
 		else {
 			$pro = intval($pro);
			$res = $word[$pro]; 			
 		}
 		return $res;
 	}
 	echo getMidle($word);*/

?>