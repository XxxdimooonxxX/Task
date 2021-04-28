<?php

class Query{
    public function insertTasks($arr = []){
        //$q = DB::create();
        //Таблица tsks
        $arrName = ["name", "description", "type_task_id", "complite", "groups_id", "projects_id", "data_begin", "data_end", "parent_id", "created_at", "created_by", "updated_at", "updated_by", "deleted_at", "deleted_by", "active", "lock"];
        $arrS = [];
        $ins = "Insert into tasks value (null, '";
        
        
        //перебирает названия атрибутов в массиве arrName
        for($i = 0; $i < count($arrName); $i++){
            //перебирает эллементы в ассоциативном массиве
            foreach($arr as $key => $val){
                //проверка, есть ли в ассоциативном массиве атрибут
                if($arrName[$i] == $key){
                    //если есть, то записываем его значение 
                    $arrS[$arrName[$i]] = $val;
                    break;
                }else{
                    //иначе присваеваем null. т.к его не указал 'пользователь'
                    $arrS[$arrName[$i]] = "null";
                }
            }
            //проверка, если этот элелемент последний, то добавляем к нему всё то, что нужно для sql(закрытие запроса)
            if($i == count($arrName) - 1){
                $ins .= $arrS[$arrName[$i]]."');";
            }else{
                $ins .= $arrS[$arrName[$i]]."', '";
            }
        }
        echo $ins;
        //$q->qwery($ins)
    }
    
    
    //таблица groups
    $arrName = ["name", "date_begin", "date_end", "description", "complite", "projects_id", "created_at", "created_by", "updated"]
    
    
    
    
    
    
}


//
$a = new Query();
$a->insertTasks(Array(
    'name' => 'Ivan',
    'projects_id' => '2'
));

?>
