//https://github.com/flesler/jquery.scrollTo

$(".subheader").on("click",function(){
    $.scrollTo("#footer-container",1000,[{
        "axis": "y"
    }]);
});
