$(function () {

	var color;

	$('#compile').on('click', function (e) {
		e.preventDefault();

		var code = $('#code').val().replace(/(\s)/ig, ''),
			$this = $(this);

		code = $.trim(code);

		if (code.length == 0) {
			console.log('Sem conteúdo');
			return false;
		}

		
	});

	var compilaPorcentagem = function ($escopo) {
		var $this = $escopo.parents('.item-container'),
			// Nome da função
			functionName = $this.attr('data-function-name'),
			// Valor da porcentagem
			value = $escopo.val().replace(/%+/ig, '') + '%',
			// código a ser compilado
			code = '.s{color:'+functionName+'('+color+','+value+')}';

			console.log(functionName, code);

		$.ajax({
			url : 'parse.php',
			type : 'post',
			data : 'code=' + code + '&time=' + (new Date()).getTime(),
			success : function (response) {
				var res = response.replace(/.s{color:(#[\w\d]+);}/, '$1');
				$this.find('.color-result').css({background: res}).text(res);
			},
			error : function (err) {
				$this.find('.color-result').text('Ouve um erro.');
			}
		});
	}

	var getMyColor = function () {
		color = $('#my-color').val();
	}
	var getAllColors = function () {

		getMyColor();

		$('.colors-container').find('.number-input').each(function (i, e) {
			compilaPorcentagem($(this));
		});
	}

	$('#button-pronto').on('click', function () {
		// Pega a cor de cada uma das funções

		getAllColors();
	});

	//var esperaPraCompilar;

	$('.colors-container .number-input').on('change', function (e) {

		//clearTimeout(esperaPraCompilar);

		//esperaPraCompilar = setTimeout(function () {
			getMyColor();
			compilaPorcentagem($(this));
		//}, 500);
	});

	getAllColors();
});