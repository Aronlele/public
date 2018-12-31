
<script type="text/javascript" src="../zxrs/jquery-1.7.2.min.js"></script>
<script language="javascript">
function top_money(){
   $.post("../zxrs/index.php",function (data){ 
   var strs= new Array(); 
   var strs = data.split("|");
   $("#users_online").html(strs[0]);
});
    setTimeout("top_money()",500);
}
top_money();
</script>