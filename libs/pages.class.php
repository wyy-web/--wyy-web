<?php
namespace libs;
class pages{
    public $fullpath;
    public $pages=10;  //在页面中呈现的分页数量
    public $currentpages;
    public $total=200;
    public $nums=10;//一页显示的条数
    public $limit="";
    private function geturlinfo(){
        $originpath="http://".$_SERVER["HTTP_HOST"].$_SERVER["REQUEST_URI"];
        $path="http://".$_SERVER["HTTP_HOST"].$_SERVER["PHP_SELF"];

        $search=substr(strchr($originpath,"?"),1);
        $reg='/&*pages=\d*/';
        $search=preg_replace($reg,"",$search);
        if(isset($_GET["pages"])){
            $this->currentpages=$_GET["pages"];
        }else{
            $this->currentpages=0;
        }

        $this->fullpath=$path."?".$search."&pages=";

    }
    public function  show(){
        $this->geturlinfo();
        $str="";
        $str.="<a href='{$this->fullpath}0'>[首页]</a>";
        $up= $this->currentpages-1>0?$this->currentpages-1:0;
        $str.="<a href='{$this->fullpath}$up'>[上一页]</a>";
        $start=$this->currentpages-floor($this->pages/2)<0?0:$this->currentpages-floor($this->pages/2);

//              $end=$this->currentpages+$this->pages>($this->total/$this->pages)?($this->total/$this->pages):$this->currentpages+$this->pages;
        $end=$start+$this->pages>ceil($this->total/$this->nums)?ceil($this->total/$this->nums):$start+$this->pages;
        for($i=$start;$i<$end;$i++){
            $num=$i+1;
            if($i==$this->currentpages){
                $style="style=color:red";
            }else{
                $style="";
            }
            $str.="<a href='{$this->fullpath}{$i}' $style>[{$num}]</a>";
        }
        $next=$this->currentpages+1>ceil($this->total/$this->nums)-1?ceil($this->total/$this->nums)-1:$this->currentpages+1;
        $str.="<a href='{$this->fullpath}$next'>[下一页]</a>";
        $last=floor($this->total/$this->pages);
        $str.="<a href='{$this->fullpath}$last'>[尾页]</a>";
        $this->limit=" LIMIT ".$this->currentpages*$this->nums.",".$this->nums;
        return $str;

    }

}
//$pages=new pages();
//$pages->show();
//echo $pages->limit;
