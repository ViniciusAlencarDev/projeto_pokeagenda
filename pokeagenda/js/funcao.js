$(function(){
	$(".cadaPokemon").click(function(){
		$("#boxTelaPokemon").html("<b>Aguarde...<b>");
		url = $(this).attr('id');
		$.ajax({
			type: "POST",
			url: "funcao/dadosPokemon.php",
			data: {url:url},
			success: function(data){
				$("#boxTelaPokemon").html(data);
			}
		});
	});
});