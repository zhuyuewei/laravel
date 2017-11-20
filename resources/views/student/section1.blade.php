@extends("layout")
@section('header')
    @parent
    <br>
    我就是来测试一下头部的

@stop

@section('contents')
    <!-- 输出PHP变量-->
    {{$name}}
    <!--模板中使用php函数-->
    {{time()}}
    <br>
    {{date('Y-m-d H:i:s', time())}}
    {{---测试一下啊 啊啊 模板的注释,网页查看源代码不会显示--}}

    <!--include-->
    @include('student.inc',['test' => '我就是来测试一下的啊啊啊啊啊 '])
@stop