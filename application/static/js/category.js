$(".add").click(function (){
    var cid=$(this).attr("attr");
    $("input[type=hidden]").val(cid)
    $("<div class='mask'>").appendTo("body").css({
        width:"100%",
        height:"100%",
        opacity:0.3,
        background:"#000",
        position:"fixed",
        left:0,
        top:0,
    })
    $(".addpannel").css("display","block")

})
$(".close").click(function (){
    $(".pannel").css("display","none")
    $(".mask").remove();
})

var cid
$(".edit").click(function (){
    cid=$(this).attr("attr");
    var pid=$(this).attr("pid");
    $("input[type=hidden]").val(cid)
    $("<div class='mask'>").appendTo("body").css({
        width:"100%",
        height:"100%",
        opacity:0.3,
        background:"#000",
        position:"fixed",
        left:0,
        top:0,
    })
    $(".editpannel").css("display","block")
    $.ajax({
        url:"/mvc/index.php/admin/category/show",
        data:{cid},
        dataType:"json",
        success:function (e){
            console.log(e)
            $(".editpannel input[name=cname]").val(e["cname"]);
            if(e["isshow"]==1){
                $("#isshow option:eq(0)").prop("selected",true)
            }else{
                $("#isshow option:eq(1)").prop("selected",true)
            }
            $(".editpannel input[name=tpl_name]").val(e["tpl_name"]);
            $(".editpannel textarea").val(e["info"])
            $(".editpannel input[name=imgurl]").val(e["imgurl"]);
        }
    })
    $.ajax({
        url:"/mvc/index.php/admin/category/getoption",
        dataType: "json",
        success:function (e){
            tree(e,1,cid,pid)
            $("#opts").html(str)
            str="<option value='0'>一级</option>"
        }
    })

})


$(".editpannel input[type=button]").click(function (){
    var data=($(".editpannel form").serialize()+"&cid="+cid);
    $.ajax({
        url:"/mvc/index.php/admin/category/editcon",
        data:data,
        success:function (e){
            //$.trim() 去除空格
            if(e=="ok"){
                location.reload();
            }
        }
    })

})



function str_repeat(str,num){
    var result=""
    for(var i=0;i<num;i++){
        result+=str
    }
    return result;
}
var str="<option value='0'>一级</option>"
function tree(data,$i,cid,pid){
    for(var i=0;i<data.length;i++){
        if(data[i].child){
            if(data[i].cid!=cid) {
                if (data[i].cid == pid) {
                    str += "<option value='" + data[i].cid + "' selected>" + str_repeat("&nbsp;&nbsp;", $i) + data[i].cname + "</option>"
                    console.log(str);
                } else {
                    str += "<option value='" + data[i].cid + "'>" + str_repeat("&nbsp;&nbsp;", $i) + data[i].cname + "</option>"

                }
            }
            tree(data[i].child,$i+1,cid,pid)
        }else {
            if(data[i].cid!=cid) {
                if (data[i].cid == pid) {
                    str += "<option value='" + data[i].cid + "' selected>" + str_repeat("&nbsp;&nbsp;", $i) + data[i].cname + "</option>"

                } else {
                    str += "<option value='" + data[i].cid + "'>" + str_repeat("&nbsp;&nbsp;", $i) + data[i].cname + "</option>"
                }
            }
        }
    }

}
