<?php
#para realizar a navegação de paginas será utilizado  a estrutura switch

if(isset($_GET['inicial'])){
	$inicial = $_GET['inicial'];
}
else $inicial = 'home';
/* estrutura condicional if para realizar a verificação da existencia do metodo get;
se não possuir $_GET será criado uma variavel com o valor;
*/
switch ($inicial) {
    case 'value':

        break;
    
    default: 
        
        break;
}