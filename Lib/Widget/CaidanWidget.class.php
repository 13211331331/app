<?php
class CaidanWidget extends Widget{

    public function render($data){

        $returnDate = array();
        $M=M('nav');
    	$condition=array('flag' => $data['flag'] );
        //$result['data']=$M->where($condition)->order('ord',' asc')->select();
        $result=$M->where($condition)->select();
        foreach ($result as $key=>$value) {
            if(strlen($value['pid']) == null){
                $temp = array();
                foreach ($result as $key1=>$value1) {
                    if($value['id'] == $value1['pid']){
                        array_push( $temp,$value1);
                    }
                }
                $value['chi'] =  $temp;
                array_push( $returnDate,$value);
            }
        }
        $returnDate1['data'] = $returnDate;
      //  dump($returnDate1);
        $content = $this->renderFile("menu",$returnDate1);
        return $content.$results;
   }

}