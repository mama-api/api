<?php
/**
 * Created by zhoukai
 * User: YiDian
 * Date: 2016/8/8
 * Time: 16:53
 */
namespace app\index\model;
use think\Model;
class Api extends Model{
    protected $name='list';
    public function getStatusCnAttr($value,$data){
        $arr=['1'=>'创建中','2'=>'已完成','3'=>'修改中'];
        return $arr[$data['status']];
    }
    public function param(){
        return $this->hasMany('Request','list_id','id');
    }
}