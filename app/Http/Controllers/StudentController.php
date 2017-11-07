<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/11/6
 * Time: 10:54
 */
namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Student;
class StudentController extends Controller
{
    public function info(){
        //使用 facede 直接操作数据表
        $tab = DB::table('student');
        //get  方法得到数据表的所有数据
        // $res = $tab -> get();
        //first 方法 得到第一条数据
        // $res = $tab -> orderBy('id', 'desc')->first();
        //多个条件查询
        // $res = $tab -> whereRaw('id >= ? and age>= ?', ['5', '33'])->get();
        // 返回单一字段,第二个参数指定字段作为下标
        //$res = $tab->pluck('name','age');
        //查询多个字段
        // $res = $tab ->select('id', 'name', 'age')->get();
        //chunk 方法 查询数据的时候,进行分段,一次查看指定条数
        /*  $res = $tab ->chunk(3,function($students){
              var_dump($students);

          });*/
        // 聚合函数
        $res = $tab ->whereRaw('id >3 and age >18')->avg('age');
        return $res;
    }
    public function add(){
        /*$db =DB::table('student');
       $res = $db -> where('id', 4) -> update(['age' => 77, 'name' => 'laji']);*/
        $tab = DB::table('student');
        $res = $tab -> insert(['name' => '小黑', 'age' => '18']);
    }

    public function orm(){
        echo '<pre>';
        /*$res = Student::all();
        var_dump($res[0]->attributesToArray());*/
        //根据主键查询一条记录
        $res = Student::find(4);
        var_dump($res);
    }
    public function orm2(){
        //使用模型新增数据

        $student = new Student();
        $student ->age = 33;
        $student ->name = '小强';
        $student -> save();
        $res = $student ->find(9);
        //echo date('Y:m:d H:i:s',$res->created_at);
        echo date_default_timezone_get();
        echo date('Y-m-d H:i:s');
    }
}