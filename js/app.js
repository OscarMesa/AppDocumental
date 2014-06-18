 $().ready(function(){
     $('#page').css('min-height',($(window).height()-100)+"px");
    removerClasesMenu(); 
        
 });
$(window).resize(function(){
    removerClasesMenu();
  });

 function removerClasesMenu()
 {
     var current_width = $(window).width();
   //do something with the width value here!
        if(current_width < 953){
      jQuery('#mnu-entrar').removeClass("menu_ingreso menu_entrar");
      jQuery('#mnu-salir').removeClass("menu_salir menu_entrar");
      jQuery('#mnu-usuario').removeClass("menu_usuarios");
//      jQuery('#mnu-usuario a').html("usuarios");
    }else{
        jQuery('#mnu-entrar').addClass("menu_ingreso menu_entrar");
        jQuery('#mnu-salir').addClass("menu_salir menu_entrar");      
        jQuery('#mnu-usuario').addClass("menu_usuarios");
        
//        jQuery('#mnu-usuario a').html(" | usuarios");
    }
 }