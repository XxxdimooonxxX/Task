<?php
    // require_once 'router.php';
    // $app = new Application();
    // $app->run();
    class Query{
        // protected $tasks;
        // protected $groups;
        
        // function __construct(){
        //     $tasks = Array("name", "description", "type_task_id", "complite", "groups_id", "projects_id", "data_begin",
        //         "data_end", "parent_id", "created_at", "created_by", "updated_at", "updated_by", "deleted_at", "deleted_by", "active", "lock");
        //     $groups = ["name", "date_begin", "date_end", "description", "complite", "projects_id", "created_at",
        //         "created_by", "updated_at","updated_by", "deleted_at","deleted_by", "active", "lock"];
        // }
        
        public function insertTasks($arr = [], $name){
            //$q = DB::create();
            $arrS = [];//
            $ins = "Insert into $name value (null, '";

            //массивы атрибутов
            $tasks = Array("name", "description", "type_task_id", "complite", "groups_id", "projects_id", "data_begin",
                "data_end", "parent_id", "created_at", "created_by", "updated_at", "updated_by", "deleted_at", "deleted_by", "active", "lock");
            $groups = ["name", "date_begin", "date_end", "description", "complite", "projects_id", "created_at",
                "created_by", "updated_at","updated_by", "deleted_at","deleted_by", "active", "lock"];
            
            //перебирает названия атрибутов в массиве конкретной таблицы
            for($i = 0; $i < count($$name); $i++){
                //перебирает эллементы в ассоциативном массиве
                foreach($arr as $key => $val){
                    //проверка, есть ли в ассоциативном массиве атрибут
                    if($$name[$i] == $key){
                        //если есть, то записываем его значение 
                        $arrS[$$name[$i]] = $val;
                        break;
                    }else{
                        //иначе присваеваем null. т.к его не указал 'пользователь'
                        $arrS[$$name[$i]] = "null";
                    }
                }
                //проверка, если этот элелемент последний, то добавляем к нему всё то, что нужно для sql(закрытие запроса)
                if($i == count($$name) - 1){
                    $ins .= $arrS[$$name[$i]]."');";
                }else{
                    $ins .= $arrS[$$name[$i]]."', '";
                }
            }
            echo $ins;
            //$q->qwery($ins)
        }
        
        //таблица groups
        //$arrName = ["name", "date_begin", "date_end", "description", "complite", "projects_id", "created_at", "created_by", "updated"]
    }
    //
    $a = new Query();
    $a->insertTasks(Array(
        'name' => 'Ivan',
        'projects_id' => '2'
    ), "groups");
?>


