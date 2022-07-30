<?php

use App\Models\ModuleGenerator;

class Helper{

    public static function sanitizeField($field){

        return ucfirst(str_replace("_"," ",$field));

    }

    public static function blend($str,$data) {
		$src = $rep = array();
		
		foreach($data as $k=>$v){
			$src[] = "{".$k."}";
			$rep[] = $v;
		}
		
		if(is_array($str)){
			foreach($str as $st ){
				$res[] = trim(str_ireplace($src,$rep,$st));
			}
		} else {
			$res = str_ireplace($src,$rep,$str);
		}
		
		return $res;
		
	}

	public static function getTableHeader($controller){
		$tableHeaders = [];
		$moduleConfig = ModuleGenerator::where('controller_name',$controller)->first();
		if($moduleConfig){
			$tableGrid = json_decode($moduleConfig->configuration)->table_configuration;
			if($tableGrid){
				foreach ($tableGrid as $tableItemKey => $tableItem){
					if($tableItem && isset($tableItem->listview)){
						$tableHeaders[] = $tableItemKey;
					}
				}
			}
		}
		return $tableHeaders;
	}

    

    
}