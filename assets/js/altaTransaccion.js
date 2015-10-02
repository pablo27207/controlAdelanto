	$(document).ready(function() {
	  	$('#rootwizard').bootstrapWizard({onNext: function(tab, navigation, index) {
				if(index==2) {
					// Make sure we entered the name
					if(!$('#monto').val()) {
						alert('Debe ingresar un monto');
						$('#monto').focus();
						return false;
					}
				}

				// Set the name for the next tab
				$('#tab3').html(
						'<h3>Resumen</h3>'+
						'<br>'+
						'<h4>Usuarios:</h4>'+
						'<label>Monsalvo, Juan</label><br>'+
						'<label>Ponce, David</label><br>'+
						'<label>Hernandez, Claudia</label><br>'+
						'<br>'+
						'<h4>Tipo Operaci&oacute;n: </h4>'+
						'<label>Egreso</label>'+
						'<h4>Monto</h4>'+
						'<label>$'+ $('#monto').val()+'</label>');

			}, onTabShow: function(tab, navigation, index) {
				var $total = navigation.find('li').length;
				var $current = index+1;
				var $percent = ($current/$total) * 100;
				$('#rootwizard .progress-bar').css({width:$percent+'%'});
			}});
	  
	  
		window.prettyPrint && prettyPrint()
	});