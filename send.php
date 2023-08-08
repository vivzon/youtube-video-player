<?php
    require"libs/database.php"; $prefix="vv_";
    
    if(!empty($_POST['ulink'])){
        
        $db = new Database();
        
        $db->select($prefix.'listing','*',null,"uid='".$_POST['unb']."' AND link='".$_POST['ulink']."'"); $getSelectResult = $db->getResult();
        
        $params = [
            'uid' => $db->escapeString($_POST['unb']),
            'link' => $db->escapeString($_POST['ulink'])
        ];
        
        session_start();
        
        $_SESSION['mob'] = $unb;
        
        if(count($getSelectResult)=='0'){
            $db->insert($prefix.'listing',$params); $getInsertResult = $db->getResult();
            
            if($getInsertResult[0]>0){
                $res = array('msg'=>'Successfully Added !!', 'success'=>'true');
                $_SESSION['res'] = json_encode($res);
                header('location:https://vivzon.in/tools/YTPlayer/');
            }else{
                $res = array('msg'=>'Opps, Somethings went worng.', 'success'=>'false');
                $_SESSION['res'] = json_encode($res);
                header('location:https://vivzon.in/tools/YTPlayer/');
            }
            
        }else{
            $res = array('msg'=>'Already Added !!', 'success'=>'false');
            $_SESSION['res'] = json_encode($res);
            header('location:https://vivzon.in/tools/YTPlayer/');
        }
        
    }
?>