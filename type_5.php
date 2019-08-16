<style>
body{
    margin:0px
}
.wh-100{
    width:100vw;
    height:100vh;
}
.flex-content{
    flex:1;
    background-position:center;
    background-size:cover;
    transition:flex 1s ease;
    box-shadow:inset 0 0 0 5px rgba(255,255,255,0.2);
}
.flex-5{
    flex:5;
}
</style>
<div style="display:flex" class="wh-100">
    <div style="background-image:url(img/001.jpg);" class="flex-content"></div>
    <div style="background-image:url(img/002.jpg);" class="flex-content"></div>
    <div style="background-image:url(img/003.jpg);" class="flex-content"></div>
    <div style="background-image:url(img/004.jpg);" class="flex-content"></div>
    <div style="background-image:url(img/005.jpg);" class="flex-content"></div>
</div>
<script src="js/jquery.js"></script>
<script>
let self=10;
$(document).on("click",".flex-content",function(){
    console.log(123)
    let no=$(".flex-content").index(this);
    $(".flex-5").removeClass("flex-5");
    if(self!=no)
        $(".flex-content").eq(no).addClass("flex-5");
    self=no;
})
</script>