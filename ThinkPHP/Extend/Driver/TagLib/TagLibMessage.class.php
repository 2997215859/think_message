<?php  
Class TagLibMessage extends TagLib{
    protected $tags   =  array(
      // 定义标签
    'code'=>array('attr'=>'width,height','close'=>0), // input标签
    );
    public function _code($attr,$content)   {
            $tag    = $this->parseXmlAttr($attr,'code');
            $width   =   $tag['width'];
            $height   =   $tag['height'];
            $str = "<img src='__APP__/Public/code?width={$width}&height={$height}' onclick='this.src=this.src+'?'+Math.random()'>";
            return $str;
        }

}
?>
