
this.ajaxPost=function(e,t,n,r){if(typeo­f n=="undefined"){n=false}if(typeof r=="undefined"){r=false}var i=$("form").serialize();$.ajax({type:"po­st",url:e,data:i,beforeSend:function(){$­("#carregando").show();$(t).html("Carregando...")},su­ccess:function(e){$(t).hide();$(t).html(­e);$(t).fadeIn("slow");$("#carregando").hide();if(n){n.call()}},error:functio­n(){alert("ERRO ao executar função de transição !");return false}});if(r){setTimeout(function(){$(t­).hide()},1e4)}return true}
