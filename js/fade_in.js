$(document).ready(function(){
   $("#mobile-menu").click(function(){
        $("#mobile-menu").css("left","0px");
        function showMenu(){
            $("#mobile-menu").css("-webkit-clip-path","polygon(0 0,100% 0,100% 100%,0% 100%)");
            $("#mobile-menu").animate({right:'-100'},300);
        }
        setTimeout(showMenu,100);
   });
    
    $("#close").click(function(){
            $("#mobile-menu").css("-webkit-clip-path","polygon(0 0,0% 0,100% 100%,0% 100%)");
            function hideMenu(){
                    $("#mobile-menu").css("left","-300px");
                $("#mobile-menu").animate({right:'50'},300);
            }
        setTimeout(hideMenu,300);
        
        function originalLayout(){
            $("#mobile-menu").css("-webkit-clip-path","polygon(0 0,100% 0,0% 100%,0% 100%)");
        }
        setTimeout(originalLayout,600);
    });
});