<script>
$(function(){
  $(".post_del_btn").click(function(){
    if(confirm("削除しますか？")){
        //そのままsubmit（削除）
    }else{
        //cancel
        return false;
    }
  });
});
</script>