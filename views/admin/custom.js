$(function() {

    // Atribui evento e função para limpeza dos campos
    $('#nome_vinho').on('input', limpaCampos);

    // Dispara o Autocomplete a partir do segundo caracter
    $( "#nome_vinho" ).autocomplete({
	    minLength: 3,
	    source: function( request, response ) {
	        $.ajax({
	            url: "views/admin/consulta.php",
	            dataType: "json",
	            data: {
	            	acao: 'autocomplete',
	                parametro: $('#nome_vinho').val()
	            },
	            success: function(data) {
	               response(data);
	            }
	        });
	    },
	    focus: function( event, ui ) {
	        $("#nome_vinho").val( ui.item.name );
	        carregarDados();
	        return false;
	    },
	    select: function( event, ui ) {
	        $("#nome_vinho").val( ui.item.name );
	        return false;
	    }
    })
    .autocomplete( "instance" )._renderItem = function( ul, item ) {
      return $( "<li>" )
        .append( "<a><b>Nome do vinho: </b>" + item.name + "Produtor: </b>" + item.producer + "<br><b>Preço: </b>" + item.price 
        	+ " - <b> País: </b>" + item.country + "</a><br>" )
        .appendTo( ul );
    };

    // Função para carregar os dados da consulta nos respectivos campos
    function carregarDados(){
    	var busca = $('#nome_vinho').val();

    	if(busca != "" && busca.length >= 3){
    		$.ajax({
	            url: "views/admin/consulta.php",
	            dataType: "json",	
	            data: {
	            	acao: 'consulta',
	                parametro: $('#nome_vinho').val()
	            },
	            success: function( data ) {
	               $('#nome_vinho').val(data[0].name);
	               $('#preco_vinho').val(data[0].price);
	               $('#produtor_vinho').val(data[0].producer);
	               $('#pais_vinho').val(data[0].country);
	               $('#tipo_vinho').val(data[0].type);
	               $('#harm_vinho').val(data[0].harmonization);
	               $('#hidden').val('update');
	               $('#id').val('id');
	            }
	        });
    	}
    }

    // Função para limpar os campos caso a busca esteja vazia
    function limpaCampos(){
       var nome_vinho = $('#nome_vinho').val();

       if(nome_vinho == ""){
           $('#nome_vinho').val('');
           $('#preco_vinho').val('');
           $('#produtor_vinho').val('');
           $('#pais_vinho').val('');
           $('#tipo_vinho').val('');
	       $('#harm_vinho').val('');
           $('#hidden').val('insert');
       }
    }
});