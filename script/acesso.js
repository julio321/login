$(function(){
	$('button#btnEntrar').on('click', function(e){
		e.preventDefault();

		var campoEmail =  $('form#formularioLogin #email').val();
		var campoSenha =  $('form#formularioLogin #senha').val();

		if(campoEmail.trim() == "" || campoSenha.trim() == ""){
					$('div#mensagem').show().removeClass('red').html('Preencha todos os campos');


		}
		else{

		$.ajax({
			url: 'acoes/login.php',
			type: 'POST',
			data: {
				email: campoEmail,
				senha: campoSenha
			},

			success: function(retorno){
				retorno = JSON.parse(retorno);
				if(retorno['erro']){
					$('div#mensagem').show().addClass('red').html(retorno['mensagem']);

				}
				else{
					window.location = 'dashboard.php';

				}
			}

		});
    }

	});

	$('button#btnCadastro').on('click', function(){
        $('div#formulario').addClass('cadastro');


		$('form#formularioLogin').hide();
		$('form#formularioCadastro').show();

		$('div#textoCadastro').hide();
		$('div#textoLogin').show();


	});

	$('button#btnLogin').on('click', function(){
        $('div#formulario').removeClass('cadastro');


		$('form#formularioCadastro').hide();
		$('form#formularioLogin').show();

		$('div#textoLogin').hide();
		$('div#textoCadastro').show();


	});

});