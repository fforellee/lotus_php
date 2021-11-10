function mascara(o,f){
    v_obj=o
    v_fun=f
    setTimeout("execmascara()",1)
}
function execmascara(){
    v_obj.value=v_fun(v_obj.value)
}

// Máscara Telefone
function mtel(v){
    v=v.replace(/\D/g,"");
    v=v.replace(/^(\d{2})(\d)/g,"($1) $2");
    v=v.replace(/(\d)(\d{4})$/,"$1-$2");
    return v;
}

// Máscara Data 
function mdata(d) {
    d=d.replace(/\D/g,"");
    d=d.replace(/^(\d{2})(\d)/g,"$1/$2");
    d=d.replace(/(\d)(\d{4})$/,"$1/$2"); 
    return d;
}

// Máscara CEP
function mcep(v){
    v=v.replace(/\D/g,"");
    //v=v.replace(/^(\d{2})(\d)/g,"$1.$2"); //ponto nos dois primeiros caracteres 
    v=v.replace(/^(\d{5})(\d)/g,"$1-$2");
    return v;
}

// Máscara CPF
function mcpf(v){
    v=v.replace(/\D/g,"");
    //alternativo, faz a máscara de uma vez só ao termino da inserção dos números
    //v=v.replace(/^(\d{3})(\d{3})(\d{3})(\d)/g,"$1.$2.$3-$4"); 
    v=v.replace(/^(\d{3})(\d)/g,"$1.$2");
    v=v.replace(/(\d{3})(\d)/,"$1.$2");
    v=v.replace(/(\d{3})(\d{1,2})$/,"$1-$2");
    return v;
}

// Máscara numero cartão
function mncard(v){
    v=v.replace(/\D/g,"");
    v=v.replace(/^(\d{4})(\d)/g,"$1.$2");
    v=v.replace(/(\d{4})(\d)/,"$1.$2");
    v=v.replace(/(\d{4})(\d)/,"$1.$2");
    v=v.replace(/(\d)(\d{4})/,"$1.$2");
    return v;
}

// Máscara vencimento cartão
function mdcard(v){
    v=v.replace(/\D/g,"");
    v=v.replace(/^(\d{2})(\d)/g,"$1/$2");
    return v;
}

function id( el ){
	return document.getElementById( el );
}
window.onload = function(){
	id('telefone').onkeyup = function(){
		mascara( this, mtel );
	}
}