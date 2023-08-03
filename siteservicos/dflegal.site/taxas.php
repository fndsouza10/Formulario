

<script>
    
    var states = [
    
        'TESTE TESTE TESTE TESTE 123123123',
    
    ];

</script>
<html>



<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="/siteservicos/layout/modules/servicos/layouts/imagens/icones/brasao.ico" type="image/x-icon">
    <style type="text/css">.recentcomments a{display:inline !important;padding:0 !important;margin:0 !important;}</style>
    

    <title>Taxas - DF Legal</title>
    
    
        
        <link href="/layout/modules/servicos/layouts/css/servicos.css" rel="stylesheet" type="text/css"/>
        <link href="/layout/Componentes/validationEngine/css/style.css"   rel="stylesheet" type="text/css" />
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"/>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">            
        <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
        
        <link rel="stylesheet" href="https://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />
        
        <style type="text/css">
            #Titulo_APP {
                display: none !important;
            }

            .titulo_APLICACAO {
                display: none !important;
            }

            .titulo_TEXTO {
                display: none !important;
            }
            .tt-menu{
                background-color: rgba(255, 255, 255, 0.9);
                font-size: 22px;
                padding: 20px;
                margin-top: 5px;
                width: 100%;
                box-shadow: rgba(0, 0, 0, 0.75) 0px 5px 5px 0px;
                border-radius: 20px;
                cursor: pointer;
            }
            /*  INICIO CSS PARA O REFIZOMETRO */
            .boxes_imposto{
                background-color: #f2f2f2;
                min-height: 100px;
            }
            
            .box_refis {
                margin: 24px 0 24px 0;
                -webkit-border-radius: 30px;
                -moz-border-radius: 30px;
                border-radius: 30px;
                background: #ffffff;
                /* height: 94px; */
                padding: 20px 10px;
                color: #000;
                border: 1px solid #dedede;
            }
            .refis_aba1{
            }
            .refis_aba1 h2{
                font-size: 22px;
                font-weight: bold;
            }
            .refis_aba2{                    
                margin-bottom: 20px;
            }
            .refis_aba2 p{
                margin-bottom: 0;
            }
            .refis_aba2 h3{
                font-size: 20px;
                font-weight: bold;
            }
            .refis_aba3{
            }
            .refis_aba3 a{
                padding: 8px 16px;
                -webkit-border-radius: 30px;
                -moz-border-radius: 30px;
                border-radius: 30px;
                background: #0193d8;
                height: 100px;
                color: #fff;
                text-decoration: none;
                transition: all 0.4s ease;
            }
            .refis_aba3 a:hover{
                background: #016fa7;
            }

            /* ### Media Queries ### */
            
            @media screen and (max-width: 992px) {
            .box_refis{
                height: auto;
                padding: 10px 0;
            
            } 
            }
            /*  FIM CSS PARA O REFIZOMETRO  */          
        </style>
        
        <style>
            /* CSS Document */
            
            p {
                font-size: 16px;
                color: #000;
            }
            
            li {
                list-style: none;
                transition: all 0.4s ease;
            }
            
            h1 {
                font-size: 28px;
            }
            
            body {
                font-family: 'Open Sans', sans-serif;
            }
            
            
            /* ###### Topo site ###### */
            
            .menu_topo {
                background-color: #343a40;
            }
            
            .menu_topo a {
                color: #fff;
            }
            
            .separador_menu_topo {
                padding-top: 5px;
            }
            
            .separador_menu_topo::before {
                content: "|";
                color: #fff;
            }
            
            .inline_menu ul,
            .inline_menu li {
                display: inline-block;
            }
            
            .botoes_acesso {
                margin-top: 16px;
            }
            
            .botoes_acesso li {
                float: left;
            }
            
            .botoes_acesso li:last-child {
                margin-left: 20px;
            }
            
            .botoes_acesso a {
                display: block;
                color: #fff;
                background-color: #006837;
                padding: 4px 16px;
                -webkit-border-radius: 20px;
                -moz-border-radius: 20px;
                border-radius: 20px;
                text-align: center;
                transition: 0.3s;
                font-size: 16px;
                font-weight: 600;
            }
            .botoes_acesso a:hover {
                color: #fff;
                background-color: #069E56;
                text-decoration: none;
            }
            
            .logo_receita {
                margin-top: 10px;
            }
            
            .links_header {
                margin-bottom: 4px;
                margin-top: 16px;
                /*display: flex;
                flex-direction: row;
                flex-wrap: wrap;
                justify-content: space-between;
                */
                transition: all 0.4s ease;
            }
            
            .links_header a {
                background-color: #dedede;
                color: #8e8e8e;
                font-size: 16px;
                text-align: center;
                display: block;
                -webkit-border-radius: 12px;
                -moz-border-radius: 12px;
                border-radius: 12px;
                font-weight: 700;
                padding: 4px 16px;
                transition: 0.3s;
            }
            
            .links_header a:hover {
                text-decoration: none;
                background-color: #3255a9;
                color: #fff;
            }
            
            .link_header {
                width: 32%;
            }
            
            .busca_home {}
            
            .busca_home h1 {
                color: black;
                padding-top: 0;
            }

            .busca_home1 h1 {
                color: black;
                padding-top: 0;
            }
            
            
            /* ###### Banner Parallax ###### */
            
            .parallax {
                /* Coloque a imagem a ser usada como background */
                background-image: url("/siteservicos/layout/modules/servicos/layouts/imagens/icones/teste.png");
                /* Defina uma altura para a visÃ£o que o usuÃ¡rio terÃ¡ da imagem */
                height: auto!important;
                /* defina o background como fixo e posicione a imagem */
                /*background-attachment: fixed;*/
                background-position: center;
                background-repeat: no-repeat;
                background-size: cover;
                padding: 64px 0;
            }
            
            .parallax h1 {
                color: #fff;
                font-size: 32px;
                text-transform: uppercase;
                text-align: center;
            }
            
            .parallax input {
                -webkit-border-top-left-radius: 30px;
                -webkit-border-bottom-left-radius: 30px;
                -moz-border-radius-topleft: 30px;
                -moz-border-radius-bottomleft: 30px;
                border-top-left-radius: 30px;
                border-bottom-left-radius: 30px;
                height: 56px;
                text-indent: 20px;
            }
            
            .parallax button {
                background-color: #fff;
                -webkit-border-top-right-radius: 30px;
                -webkit-border-bottom-right-radius: 30px;
                -moz-border-radius-topright: 30px;
                -moz-border-radius-bottomright: 30px;
                border-top-right-radius: 30px;
                border-bottom-right-radius: 30px;
                height: 56px;
                margin-left: -3px;
                background-image: url(/siteservicos/layout/modules/servicos/layouts/imagens/icones/procurar.png);
                background-repeat: no-repeat;
                width: 138px;
                background-position: 44% 50%;
            }
            
            .parallax input::placeholder {
                /* Chrome, Firefox, Opera, Safari 10.1+ */
                color: #b9b9b9;
                opacity: 1;
                /* Firefox */
            }
            
            .parallax input:-ms-input-placeholder {
                /* Internet Explorer 10-11 */
                color: #b9b9b9;
            }
            
            .parallax input::-ms-input-placeholder {
                /* Microsoft Edge */
                color: #b9b9b9;
            }
            
            .parallax_padding_home {
                padding-bottom: 120px;
            }
            
            .tilulo_acesso {
                border-bottom: 1px solid #fff;
                padding-top: 64px;
            }
            
            .acesso_facil{
                
            }
            
            .acesso_facil a {
                background: rgba(0, 0, 0, 0.6);
                font-size: 22px;
                -webkit-border-radius: 30px;
                -moz-border-radius: 30px;
                border-radius: 30px;
                text-align: center;
                margin-top: 32px;
                border: 2px solid rgba(255, 255, 255, 0.3);
                color: #fff;
                width: 100%;
                display: block;
                padding: 10px 0;
                transition: 0.3s;
                font-weight: 600;
            }
            
            .acesso_facil a:hover {
                text-decoration: none;
                background-color: #3255a9;
                color: #fff;
                border: 2px solid #3255a9;
            }
            
            
            /* ###### Hacks Bootstrap ###### */
            
            .menu_topo .navbar {
                padding: 0px !important;
            }
            
            .menu_topo .navbar a {
                font-size: 14px !important;
            }
            
            .form-control {
                border: 0 !important;
            }
            
            .form-control:focus {
                box-shadow: none !important;
            }
            
            .perfis .nav-link.active {
                height: 100% !important;
                transition: all 0.4s ease;
            }
            
            .nav-pills .nav-link {
                -webkit-border-bottom-right-radius: 20px !important;
                -webkit-border-bottom-left-radius: 20px !important;
                -moz-border-radius-bottomright: 20px !important;
                -moz-border-radius-bottomleft: 20px !important;
                border-bottom-right-radius: 20px !important;
                border-bottom-left-radius: 20px !important;
            }
            
            .tabs_perfis .tab-content {
                margin-top: 40px;
            }
            
            .faq {
                margin-bottom: 64px;
            }
            
            .faq .card-header {
                margin-bottom: 0 !important;
            }
            
            .faq .card-header:first-child {
                border-radius: 0;
            }
            
            .faq .card {
                background-color: transparent;
                border: 0;
                border-radius: 0;
            }
            
            .faq .card-body {
                border-right: 1px solid rgb(194, 194, 194);
                border-left: 1px solid rgb(194, 194, 194);
            }
            
            .buscarCardBody {
                min-height: 280px !important;
            }
            
            .buscarCardBody .twitter-typeahead {
                width: 88%;
            }
            
            .buscarCardBody .tt-menu {
                margin-left: -160px;
            }
            
            .faq .form-control {
                font-size: 14px;
                background: transparent;
                border-radius: 0;
            }
            
            .faq h6 {
                color: #ffffff;
                background-color: #0061ac;
                padding: 8px 12px;
            }
            
            .faq input {
                border: 0;
            }
            
            .faq .fa-search:before {
                color: #0061ac;
            }
            
            .form-control:focus {
                box-shadow: none;
            }
            
            .busca_geral_faq {
                padding: 32px 0;
            }
            
            .perfis .nav-link.active {
                height: 100% !important;
                transition: all 0.4s ease;
            }
            
            .nav-pills .nav-link {
                -webkit-border-bottom-right-radius: 20px !important;
                -webkit-border-bottom-left-radius: 20px !important;
                -moz-border-radius-bottomright: 20px !important;
                -moz-border-radius-bottomleft: 20px !important;
                border-bottom-right-radius: 20px !important;
                border-bottom-left-radius: 20px !important;
            }
            
            .tabs_perfis .tab-content {
                margin-top: 40px;
            }
            
            
            /* ###### Links Perfis ###### */
            
            .tabs_perfis {
                margin-top: -140px;
                margin-bottom: 64px;
            }
            
            .tabs_perfis p {
                color: #fff;
            }
            
            .perfis {
                width: 100%;
                display: flex;
                flex-direction: row;
                flex-wrap: wrap;
                justify-content: space-between;
                transition: all 0.4s ease;
            }
            
            .perfis a {
                color: #fff;
                height: 100%;
            }
            
            .perfis h2 {
                font-size: 22px;
                text-transform: uppercase;
                margin-top: 16px;
                margin-bottom: 16px;
                font-weight: 700;
                padding: 0 20px;
            }
            
            .perfis p {
                font-size: 14px;
            }
            
            .item_perfil {
                width: 23%;
                transition: all 0.4s ease;
                text-align: center;
                -webkit-border-bottom-right-radius: 20px;
                -webkit-border-bottom-left-radius: 20px;
                -moz-border-radius-bottomright: 20px;
                -moz-border-radius-bottomleft: 20px;
                border-bottom-right-radius: 20px;
                border-bottom-left-radius: 20px;
                background-color: #969696;
            }
            
            .item_perfil a:hover {
                color: #fff;
            }
            
            .item_perfil:hover {
                background-color: #696969;
            }
            
            .divisor_perfis {
                height: 140px;
                background-color: #1a1a1a;
            }
            
            
            /* ###### INFORMAÃ‡Ã•ES E PUBLICAÃ‡Ã•ES ###### */
            
            .informacoes_publicacoes {
                background-color: #f2f2f2;
                padding: 64px 0;
            }
            
            .informacoes_publicacoes h1 {
                color: #494949;
                text-transform: uppercase;
                font-size: 28px;
                font-weight: 700;
                margin-bottom: 32px;
            }
            
            .informacoes_publicacoes h2 {
                color: #2259ab;
                font-size: 20px;
                font-weight: 700;
                text-transform: uppercase;
                margin-bottom: 32px;
            }
            
            .informacoes_publicacoes h3 {
                font-size: 16px;
                font-weight: 700;
                margin-bottom: 0;
            }
            
            .informacoes_publicacoes p {
                font-size: 14px;
                height: 40px;
            }
            
            .noticia {}
            
            .noticia a {
                margin-bottom: 32px;
                color: #494949;
                transition: all 0.4s ease;
            }
            
            .noticia a:hover {
                text-decoration: none;
                color: #717171;
            }
            
            .link_veja a {
                padding: 8px 16px;
                -webkit-border-radius: 20px;
                -moz-border-radius: 20px;
                border-radius: 20px;
                background-color: #2259ab;
                color: #fff;
                margin-top: 8px;
                display: inline-block;
            }
            
            .link_veja a:hover {
                background-color: #327ae8;
                color: #fff;
            }
            
            
            /* ###### LINKS DIVERSOS ###### */
            
            .links_diversos {
                background-color: #0061ac;
                padding: 32px 0;
            }
            
            .links_diversos a {
                color: #fff;
                font-size: 14px;
                transition: all 0.4s ease;
                font-weight: 600;
            }
            
            .links_diversos a:hover {
                color: #fff;
                text-decoration: none;
            }
            
            .links_diversos h2 {
                font-size: 22px;
                color: #fff;
                text-transform: uppercase;
                font-weight: 700;
                text-align: center;
                margin-top: 32px;
            }
            
            .links_diversos h2 a {
                font-size: 22px;
                color: #fff;
                border: 1px solid #fff;
                padding: 8px 32px;
                -webkit-border-radius: 20px;
                -moz-border-radius: 20px;
                border-radius: 20px;
                transition: all 0.4s ease;
            }
            
            .links_diversos h2 a:hover {
                background-color: #004b8d;
            }
            
            .links_diversos h3 {
                font-size: 18px;
                color: #fff;
                text-transform: uppercase;
                font-weight: 600;
            }
            
            .link_links_diversos ul li {
                display: block;
            }
            
            .link_links_diversos ul {
                padding-left: 0;
            }
            
            
            /* ###### LINKS DIVERSOS ###### */
            
            .base_site {
                background-color: #0061ac;
                padding: 32px 0;
            }
            
            .base_site h2 {
                font-size: 18px;
                font-weight: 700;
                color: #fff;
            }
            
            .base_site p {
                font-size: 14px;
                color: #d5d5d5;
            }
            
            .base_site ul li {
                display: block;
            }
            
            .base_site ul {
                padding-left: 0;
            }
            
            
            /* ###### BUSCA ###### */
            
            .item_busca {
                padding: 40px 20px;
                transition: all 0.4s ease;
                border-bottom: 1px solid #d7d7d8;
            }
            
            .item_busca a {
                text-decoration: none !important;
            }
            
            .item_busca p {
                font-weight: 500;
            }
            
            .item_busca:hover {
                background-color: #f2f2f2;
            }
            
            .item_busca h2 {
                font-weight: 700;
                font-size: 28px;
            }
            
            .paginacao_busca {
                padding: 40px 0;
                text-align: center;
            }
            
            .paginacao_busca ul {
                display: inline-flex;
            }
            
            .paginacao_busca a {
                font-size: 28px;
                padding: 4px 18px;
                margin: 0 10px;
                font-weight: 600;
                color: #cccccc;
            }
            
            .paginacao_busca a:hover {
                color: #999999;
            }
            
            .paginacao_busca a:hover {
                text-decoration: none;
            }
            
            /* CSS Document */


/* ##################### SERVIÃ‡OS ############################# */

.servicos{
	/*width: 100%;
	display: flex;
	flex-direction: row;
	flex-wrap: wrap;
	justify-content: space-between;*/
	transition: all 0.4s ease;
	line-height: 120px;
}
.servicos::after {
	content: "";
	flex: 1 1 100%;
	max-width: 24%;
}
.servicos h3 {
	color: #fff;
	text-transform: uppercase;
	font-size: 18px;
	margin-bottom: 0;
	text-align: left;

}
.servicos p {
	font-size: 14px;
	line-height: 16px;
	text-align: left;
	color: #FFFFFF;
	display: none;
	-webkit-transition: opacity 600ms, visibility 600ms;
    transition: opacity 600ms, visibility 600ms;
	opacity: 0;
    visibility: hidden;
}
.servicos p:hover {
	transition: all 0.4s ease;
	display: block;
	visibility: visible;
    opacity: 1;
    animation: fade 1s;
}
.servicos a {
	display: block;
	height: 100%;
}
.servicos a:hover {
	color: #fff;
	text-decoration: #fff;
	height: 100%;
}

.item_servicos{
	/*background-color: #519640;*/
	/*width: 23%;*/
	transition: all 0.4s ease;
	-webkit-border-radius: 12px;
	-moz-border-radius: 12px;
	border-radius: 12px;
	overflow: hidden;
	margin-bottom: 30px;
	height: 120px;
	padding-right: 16px;
}
.item_servicos p{
	display: none;
	-webkit-transition: opacity 600ms, visibility 600ms;
    transition: opacity 600ms, visibility 600ms;
	opacity: 0;
    visibility: hidden;
}
.item_servicos:hover p{
	display: block;
	visibility: visible;
    opacity: 1;
    animation: fade 1s;
}
.item_servicos h3{
	-webkit-transition: visibility 600ms;
    transition: visibility 600ms;
}
.item_servicos:hover h3{
    display: block;
    animation: fade 1s;
}
.item_servicos:hover{
	-webkit-box-shadow: inset 0px -12px 0px 0px rgba(0,0,0,0.3);
	-moz-box-shadow: inset 0px -12px 0px 0px rgba(0,0,0,0.3);
	box-shadow: inset 0px -12px 0px 0px rgba(0,0,0,0.3);
}
.item_servicos img{
	    margin-left: 10px;
}
.item_servicos:hover img{
	    background-color: rgba(0, 0, 0, 0.3);
    border-radius: 50%;
}


/* ##################### ICONES SERVIÃ‡OS ############################# */
	.icone{
		width: 70px;
    	height: 70px;
    	margin-top: 26px;
    	margin-left: 6px;
	}
	.item_servicos:hover .icone{
    	background-color: rgba(0, 0, 0, 0.3);
    	border-radius: 50%;
	}
	.icone path{
		fill: #fff !important;
	}
	.icone svg{
		width: 40px;
    	height: 40px;
   		vertical-align: top;
    	margin-left: 16px;
   		margin-top: 15px;
	}




@keyframes fade {
    0% {
        opacity: 0;
    }

    100% {
        opacity: 1;
    }
}



/* ################################################ Media Queries ########################### */
@media screen and (max-width: 1200px) {
	
.servicos h3{
    font-size: 14px;
    margin-left: 12px;
}
.servicos p{
    margin-left: 12px;
}

	
}

@media screen and (max-width: 992px) {
	
}

@media screen and (max-width: 768px) {

}

@media screen and (max-width: 600px) {
.noticia a {
    font-size: 12px;
}

.links_diversos h2 a {
    font-size: 14px;
}

.tabs_perfis {
    margin-top: -430px;
}
.divisor_perfis {
    height: 430px;
}
.link_header {
    width: 100%;
	margin-top: 8px;
}

}

@media screen and (max-width: 480px) {
}

@media screen and (max-width: 380px) {
}

            
            /* ###### SERVIÃ‡OS INTERNOS ###### */
            
            .migalha {
                width: 100%;
                padding: 12px 0 0 0;
                font-size: 18px !important;
            }
            
            .migalha ul {
                padding-left: 20px;
            }
            
            .migalha li {
                float: left;
                margin-right: 8px;
            }
            
            .migalha li a {
                color: #b3b3b3;
            }
            
            .migalha li:last-child a {
                color: #515151;
                font-weight: 500;
            }
            
            .back_titulo_servico {
                margin: 64px 0 32px 0;
                color: #fff;
                padding: 5px;
            }
            
            .back_titulo_servico h1 {
                font-weight: 400;
                font-size: 28px;
                margin-top: 12px;
                float: left;
                width: 40%;
            }
            
            .back_titulo_servico img {
                background-color: rgba(0, 0, 0, 0.3);
                border-radius: 50%;
                margin-right: 20px;
                width: 40px;
                float: left;
                margin-top: 6px;
            }
            
            .back_titulo_servico a {
                color: #fff;
            }
            
            .back_titulo_servico a:hover {
                color: #fff;
            }
            
            .back_titulo_servico path {
                fill: #fff !important;
                color: #fff !important;
            }
            
            .conteudo_servico h2 {
                font-weight: 400;
                font-size: 28px;
            }
            
            .conteudo_servico a {
                font-weight: 700;
            }
            
            .conteudo_servico a:hover {
                text-decoration: none;
            }
            
            .link_emissao a {
                padding: 8px 16px;
                -webkit-border-radius: 20px;
                -moz-border-radius: 20px;
                border-radius: 20px;
                background-color: #2259ab;
                color: #fff;
                margin-top: 8px;
                display: inline-block;
                margin-left: 10px;
                font-weight: 700;
            }
            
            .link_emissao a:hover {
                text-decoration: none;
                background-color: #327ae8;
                color: #fff;
            }
            
            .conteudo_servico .panel-title {
                position: relative;
            }
            
            .conteudo_servico .panel-title::after {
                content: "\f107";
                color: #333;
                left: 0;
                top: -2px;
                position: absolute;
                font-family: "FontAwesome";
                font-size: 44px;
                line-height: 32px;
            }
            
            .conteudo_servico .panel-title[aria-expanded="true"]::after {
                content: "\f106";
            }
            
            .conteudo_servico h3 {
                padding-left: 42px !important;
                font-size: 22px;
                font-weight: 700;
                color: #4d4d4d;
                padding-bottom: 6px;
            }
            
            .conteudo_servico .panel-heading {
                cursor: pointer;
            }
            
            .conteudo_servico .panel-group {
                width: 100%;
            }
            
            .conteudo_servico .panel-body p {
                padding-left: 50px;
            }
            
            .titulo_busca {
                color: #808080;
            }
            
            .titulo_busca h1 {
                font-size: 28px;
                color: #808080;
                margin-top: 30px;
            }
            
            .titulo_busca p {
                color: #808080;
            }
            
            .icone_servicos {
                width: 60px;
                height: 60px;
                /* margin-top: 26px; */
                /* margin-left: 6px; */
                background-color: rgba(0, 0, 0, 0.3);
                border-radius: 50%;
                float: left;
                margin-right: 10px;
            }
            
            .icone_servicos svg {
                width: 40px;
                height: 40px;
                vertical-align: top;
                margin-left: 10px;
                margin-top: 10px;
            }
            
            .avisos {
                text-transform: uppercase;
                margin-left: 22px;
            }
            
            .avisos p {
                margin-bottom: 0px;
                line-height: 12px;
                font-size: 12px;
                font-weight: 900;
            }
            
            .avisos h2 {
                font-size: 18px;
                font-weight: 700;
                margin-top: 18px;
            }
            
            .avisos div:first-child {
                border: 2px solid #bfbfbf;
                border-right: 1px solid #bfbfbf;
                -webkit-border-top-left-radius: 8px;
                -webkit-border-bottom-left-radius: 8px;
                -moz-border-radius-topleft: 8px;
                -moz-border-radius-bottomleft: 8px;
                border-top-left-radius: 8px;
                border-bottom-left-radius: 8px;
                background-color: #f1f1f1;
            }
            
            .avisos div {
                border: 2px solid #bfbfbf;
                border-right: 1px solid #bfbfbf;
                border-left: 0;
                min-height: 60px;
                font-size: 12px;
            }
            
            .avisos div:first-child img {
                float: left;
                margin-left: -39px;
                margin-right: 30px;
                margin-top: 6px;
            }
            
            .avisos div:last-child {
                border: 2px solid #bfbfbf;
                border-left: 0;
                -webkit-border-top-right-radius: 8px;
                -webkit-border-bottom-right-radius: 8px;
                -moz-border-radius-topright: 8px;
                -moz-border-radius-bottomright: 8px;
                border-top-right-radius: 8px;
                border-bottom-right-radius: 8px;
            }
            
            .avisos small {
                padding-top: 4px;
                display: block;
            }
            
            
            /*#### CLASSE DE AVISO 2 DA DIV ###*/
            
            .avisos2 {
                text-transform: uppercase;
                margin-left: 22px;
            }
            
            .avisos2 p {
                margin-bottom: 0px;
                line-height: 12px;
                font-size: 12px;
                font-weight: 900;
            }
            
            .avisos2 h2 {
                font-size: 18px;
                font-weight: 700;
                margin-top: 18px;
            }
            
            .avisos2 div:first-child {
                border: 2px solid #bfbfbf;
                border-right: 1px solid #bfbfbf;
                -webkit-border-top-left-radius: 8px;
                -webkit-border-bottom-left-radius: 8px;
                -moz-border-radius-topleft: 8px;
                -moz-border-radius-bottomleft: 8px;
                border-top-left-radius: 8px;
                border-bottom-left-radius: 8px;
                background-color: #f1f1f1;
            }
            
            .avisos2 div {
                border: 2px solid #bfbfbf;
                border-right: 1px solid #bfbfbf;
                border-left: 0;
                min-height: 60px;
                font-size: 12px;
            }
            
            .avisos2 div:first-child img {
                float: left;
                margin-left: -39px;
                margin-right: 30px;
                margin-top: 6px;
            }
            
            .avisos2 div:last-child {
                border: 2px solid #bfbfbf;
                border-left: 0;
                -webkit-border-top-right-radius: 8px;
                -webkit-border-bottom-right-radius: 8px;
                -moz-border-radius-topright: 8px;
                -moz-border-radius-bottomright: 8px;
                border-top-right-radius: 8px;
                border-bottom-right-radius: 8px;
            }
            
            .avisos2 small {
                padding-top: 4px;
                display: block;
            }
            
            .download_arquivos {}
            
            .download_arquivos .panel-heading {
                background-color: #2259ab;
                -webkit-border-radius: 12px;
                -moz-border-radius: 12px;
                border-radius: 12px;
                color: #fff !important;
                padding-left: 10px !important;
            }
            
            .download_arquivos h3 {
                padding: 8px;
                color: #fff !important;
                padding-left: 10px !important;
            }
            
            .download_arquivos .panel-body {
                padding: 24px 12px;
                background-color: #f3f3f3;
                -webkit-border-radius: 12px;
                -moz-border-radius: 12px;
                border-radius: 12px;
                border: 1px solid #d8d8d8;
            }
            
            .download_arquivos h3 img {
                margin-left: 2px;
                margin-right: 12px;
                margin-top: -10px;
            }
            
            .download_arquivos h3::after {
                content: none !important;
            }
            
            
            /* ###### INTERNO INFORMAÃ‡Ã•ES E PUBLICAÃ‡Ã•ES ###### */
            
            .interno_publicacoes {}
            
            .interno_publicacoes h1 {
                font-size: 28px;
                margin-top: 32px;
                font-weight: 700;
                width: 100%;
            }
            
            .conteudo_publicacoes {
                margin: 32px 0;
            }
            
            .citacao p {
                color: #b3b3b3;
            }
            
            .header_noticia li {
                float: left;
            }
            
            .header_noticia li:first-child::after {
                content: "|";
                padding: 0 6px;
            }
            
            .header_noticia li a {
                color: #797979;
            }
            
            .header_noticia h1 {
                border-bottom: 1px solid #797979;
                padding-bottom: 6px;
            }
            
            .interno_publicacoes .custom-select {
                border: 1px solid #ced4da !important;
            }
            
            .interno_publicacoes input {
                border: 1px solid #ced4da;
            }
            
            .interno_publicacoes .pagination li {
                margin: 0 4px;
            }
            
            .interno_publicacoes .pagination li:first-child {
                border: 1px solid #ced4da;
                -webkit-border-radius: 4px;
                -moz-border-radius: 4px;
                border-radius: 4px;
            }
            
            .interno_publicacoes .page-link {
                padding: 4px 10px;
                background-color: #f2f2f2;
                border: 1px solid #f2f2f2;
                -webkit-border-radius: 4px;
                -moz-border-radius: 4px;
                border-radius: 4px;
                color: #030303;
            }
            
            .interno_publicacoes .page-item.active .page-link {
                background-color: #245aac !important;
                border-color: #245aac !important;
            }
            
            .interno_publicacoes .page-item.disabled .page-link {
                border: 1px solid #ced4da;
            }
            
            .interno_publicacoes .table.dataTable {
                color: #797979;
            }
            
            .interno_publicacoes .table.dataTable a {
                color: inherit;
            }
            
            .interno_publicacoes .table.dataTable a:hover {
                color: #505050;
                text-decoration: none;
            }
            
            .noticias {
                padding: 20px 0 60px 0;
            }
            
            .noticias h1 {
                padding-bottom: 40px;
            }
            
            .noticias table.dataTable thead .sorting:before,
            table.dataTable thead .sorting_asc:before,
            table.dataTable thead .sorting_desc:before,
            table.dataTable thead .sorting_asc_disabled:before,
            table.dataTable thead .sorting_desc_disabled:before {
                font-size: 32px;
            }
            
            .noticias table.dataTable thead .sorting:after,
            table.dataTable thead .sorting_asc:after,
            table.dataTable thead .sorting_desc:after,
            table.dataTable thead .sorting_asc_disabled:after,
            table.dataTable thead .sorting_desc_disabled:after {
                font-size: 32px;
            }
            
            .noticias table.dataTable thead .sorting:before,
            table.dataTable thead .sorting:after,
            table.dataTable thead .sorting_asc:before,
            table.dataTable thead .sorting_asc:after,
            table.dataTable thead .sorting_desc:before,
            table.dataTable thead .sorting_desc:after,
            table.dataTable thead .sorting_asc_disabled:before,
            table.dataTable thead .sorting_asc_disabled:after,
            table.dataTable thead .sorting_desc_disabled:before,
            table.dataTable thead .sorting_desc_disabled:after {
                bottom: 0.0em !important;
            }
            
            .twitter-typeahead {
                width: 80%;
            }
            
            
            /* ###### Media Queries ###### */
            
            @media screen and (max-width: 1200px) {
                .links_header a {
                    font-size: 18px;
                }
                .perfis h2 {
                    font-size: 18px;
                }
                .informacoes_publicacoes h2 {
                    font-size: 18px;
                }
                .busca_home h1 {
                    color: black;
                    padding-top: 0;
                }
                .busca_home1 h1 {
                color: black;
                padding-top: 0;
                }
                .tilulo_acesso {
                    padding-top: 64px;
                }
                .parallax h1 {
                    font-size: 22px;
                }
                .acesso_facil a {
                    font-size: 18px;
                }
                .parallax {
                    padding: 32px 0;
                }
                .links_header {
                    margin-top: 8px;
                }
                .conteudo_servico {
                    margin-left: 42%;
                }
                .servico_cidadao h3 {
                    font-size: 14px;
                }
                .twitter-typeahead {
                    width: 76%;
                }
                .buscarCardBody .tt-menu {
                    margin-left: -240px;
                }
            }
            
            @media screen and (max-width: 992px) {
                .botoes_acesso a {
                    font-size: 12px;
                }
                .links_diversos h2 a {
                    font-size: 16px;
                }
                .menu_topo .navbar {
                    padding: 10px !important;
                }
                .links_header a {
                    font-size: 12px;
                }
                .links_header a {
                    margin-top: 0;
                }
                .item_perfil {
                    width: 46%;
                    -webkit-border-radius: 20px;
                    -moz-border-radius: 20px;
                    border-radius: 20px;
                    margin-bottom: 20px;
                }
                .nav-pills .nav-link {
                    -webkit-border-radius: 20px !important;
                    -moz-border-radius: 20px !important;
                    border-radius: 20px !important;
                }
                .links_header {
                    margin-bottom: 16px;
                    margin-top: 16px;
                }
                .parallax h1 {
                    font-size: 22px;
                }
                .busca_home h1 {
                    color: black;
                    padding-top: 0;
                }
                .busca_home1 h1 {
                color: black;
                padding-top: 0;
                }
                .logo_receita {
                    margin-top: 10px;
                }
                .acesso_facil a {
                    font-size: 16px;
                    margin-top: 16px;
                }
                .parallax_padding_home {
                    padding-bottom: 0;
                }
                .tabs_perfis {
                    margin-top: -240px;
                }
                .divisor_perfis {
                    height: 240px;
                }
                .tabs_perfis .tab-content {
                    margin-top: 32px;
                }
                .twitter-typeahead {
                    width: 88%;
                }
                .buscarCardBody .tt-menu {
                    margin-left: -320px;
                }
            }
            
            @media screen and (max-width: 768px) {
                .links_diversos h2 {
                    display: flex;
                }
                .informacoes_publicacoes p {
                    font-size: 12px;
                }
                .conteudo_servico {
                    margin-left: 20%;
                }
                .parallax button {
                    background-image: url(/siteservicos/layout/modules/servicos/layouts/imagens/icones/icon_procurar_mobile.png);
                    background-repeat: no-repeat;
                    width: 54px;
                    background-position: 46% 50%;
                }
                .parallax h1 {
                    font-size: 22px;
                    text-align: center;
                }
                .parallax input {
                    text-indent: 10px;
                }
                .acesso_facil a {
                    font-size: 16px;
                    padding: 4px 0;
                }
                .tilulo_acesso {
                    padding-top: 64px;
                }
                .buscarCardBody .tt-menu {
                    margin-left: 0;
                }
                .faq .tt-menu {
                    width: 100% !important;
                }
            }
            
            @media screen and (max-width: 600px) {
                .item_perfil {
                    width: 100%;
                    -webkit-border-radius: 20px;
                    -moz-border-radius: 20px;
                    border-radius: 20px;
                    margin-bottom: 20px;
                }
                .perfis h2 {
                    font-size: 16px;
                    text-transform: uppercase;
                    margin-top: 8px;
                    margin-bottom: 8px;
                    font-weight: 700;
                }
                .informacoes_publicacoes h1 {
                    font-size: 18px;
                    margin-bottom: 16px;
                }
                .informacoes_publicacoes h2 {
                    margin-bottom: 16px;
                    margin-top: 16px;
                    font-size: 14px;
                }
                .informacoes_publicacoes h3,
                p {
                    font-size: 12px;
                }
                .links_diversos h2 {
                    font-size: 16px;
                    text-align: center;
                }
                .links_diversos h3 {
                    font-size: 14px;
                }
                .links_diversos a {
                    font-size: 12px;
                }
                .base_site h2 {
                    font-size: 14px;
                }
                .base_site p {
                    font-size: 12px;
                }
            }
            
            @media screen and (max-width: 480px) {
                .botoes_acesso a {
                    font-size: 12px;
                }
                .botoes_acesso li:last-child {
                    margin-left: 0px;
                }
                .botoes_acesso a {
                    width: 100% !important;
                    margin-bottom: 20px;
                }
            }
            
            @media screen and (max-width: 380px) {}
            
            
            /* ###### DETALHAR IMPOSTÃ”METRO ########## */
            
            .table-scroll {
                position: relative;
                max-width: 100%;
                margin: auto;
                overflow: hidden;
                border: 1px solid #000;
            }
            
            .table-wrap {
                width: 100%;
                overflow-y: hidden;
                transition: all ease-in-out 0.3s;
            }
            
            .table-wrap::-webkit-scrollbar {
                width: 10px;
                height: 10px;
            }
            
            .table-wrap::-webkit-scrollbar-thumb {
                background-color: #0061ac;
                border-radius: 10px;
            }
            
            .table-wrap a {
                color: #000;
                text-decoration: none;
                transition: all ease-in-out 0.2s;
            }
            
            .table-wrap a:hover {
                color: #016FA7;
                text-decoration: none;
            }
            
            .table-scroll table {
                width: 100%;
                margin: auto;
                border-collapse: separate;
                border-spacing: 0;
            }
            
            .table-scroll th,
            .table-scroll td {
                padding: 10px 10px;
                border: 0.1px solid #000;
                background: #fff;
                white-space: nowrap;
                vertical-align: top;
            }
            
            .table-scroll thead,
            .table-scroll tfoot {
                background: #f9f9f9;
            }
            
            .clone {
                position: absolute;
                top: 0;
                left: 0;
                pointer-events: none;
            }
            
            .clone th,
            .clone td {
                visibility: hidden
            }
            
            .clone td,
            .clone th {
                border-color: transparent
            }
            
            .clone tbody th {
                visibility: visible;
            }
            
            .clone .fixed-side {
                border: 1px solid #000;
                background: #eee;
                visibility: visible;
            }
            
            .clone thead,
            .clone tfoot {
                background: transparent;
            }
            
            .coluna_azul_claro {
                color: #fff;
                background-color: #016FA7 !important;
            }
            
            .pills_grafico .nav-pills {
                border-radius: 0 !important;
            }
            
            .pills_grafico {
                font-size: 16px;
                font-weight: 700;
            }
            
            .pills_grafico a {
                color: #000;
            }
            
            .pills_grafico .nav-link {
                border-radius: 0 !important;
                background-color: #d4d4d4;
                margin: 0 1px;
            }
            
            .apexcharts-canvas {
                position: relative;
                user-select: none;
                /* cannot give overflow: hidden as it will crop tooltips which overflow outside chart area */
            }
            
            
            /* scrollbar is not visible by default for legend, hence forcing the visibility */
            
            .apexcharts-canvas ::-webkit-scrollbar {
                -webkit-appearance: none;
                width: 6px;
            }
            
            .apexcharts-canvas ::-webkit-scrollbar-thumb {
                border-radius: 4px;
                background-color: rgba(0, 0, 0, .5);
                box-shadow: 0 0 1px rgba(255, 255, 255, .5);
                -webkit-box-shadow: 0 0 1px rgba(255, 255, 255, .5);
            }
            
            .apexcharts-inner {
                position: relative;
            }
            
            .apexcharts-text tspan {
                font-family: inherit;
            }
            
            .legend-mouseover-inactive {
                transition: 0.15s ease all;
                opacity: 0.20;
            }
            
            .apexcharts-series-collapsed {
                opacity: 0;
            }
            
            .apexcharts-tooltip {
                border-radius: 5px;
                box-shadow: 2px 2px 6px -4px #999;
                cursor: default;
                font-size: 14px;
                left: 62px;
                opacity: 0;
                pointer-events: none;
                position: absolute;
                top: 20px;
                display: flex;
                flex-direction: column;
                overflow: hidden;
                white-space: nowrap;
                z-index: 12;
                transition: 0.15s ease all;
            }
            
            .apexcharts-tooltip.apexcharts-active {
                opacity: 1;
                transition: 0.15s ease all;
            }
            
            .apexcharts-tooltip.apexcharts-theme-light {
                border: 1px solid #e3e3e3;
                background: rgba(255, 255, 255, 0.96);
            }
            
            .apexcharts-tooltip.apexcharts-theme-dark {
                color: #fff;
                background: rgba(30, 30, 30, 0.8);
            }
            
            .apexcharts-tooltip * {
                font-family: inherit;
            }
            
            .apexcharts-tooltip-title {
                padding: 6px;
                font-size: 15px;
                margin-bottom: 4px;
            }
            
            .apexcharts-tooltip.apexcharts-theme-light .apexcharts-tooltip-title {
                background: #ECEFF1;
                border-bottom: 1px solid #ddd;
            }
            
            .apexcharts-tooltip.apexcharts-theme-dark .apexcharts-tooltip-title {
                background: rgba(0, 0, 0, 0.7);
                border-bottom: 1px solid #333;
            }
            
            .apexcharts-tooltip-text-value,
            .apexcharts-tooltip-text-z-value {
                display: inline-block;
                font-weight: 600;
                margin-left: 5px;
            }
            
            .apexcharts-tooltip-text-z-label:empty,
            .apexcharts-tooltip-text-z-value:empty {
                display: none;
            }
            
            .apexcharts-tooltip-text-value,
            .apexcharts-tooltip-text-z-value {
                font-weight: 600;
            }
            
            .apexcharts-tooltip-marker {
                width: 12px;
                height: 12px;
                position: relative;
                top: 0px;
                margin-right: 10px;
                border-radius: 50%;
            }
            
            .apexcharts-tooltip-series-group {
                padding: 0 10px;
                display: none;
                text-align: left;
                justify-content: left;
                align-items: center;
            }
            
            .apexcharts-tooltip-series-group.apexcharts-active .apexcharts-tooltip-marker {
                opacity: 1;
            }
            
            .apexcharts-tooltip-series-group.apexcharts-active,
            .apexcharts-tooltip-series-group:last-child {
                padding-bottom: 4px;
            }
            
            .apexcharts-tooltip-series-group-hidden {
                opacity: 0;
                height: 0;
                line-height: 0;
                padding: 0 !important;
            }
            
            .apexcharts-tooltip-y-group {
                padding: 6px 0 5px;
            }
            
            .apexcharts-tooltip-candlestick {
                padding: 4px 8px;
            }
            
            .apexcharts-tooltip-candlestick>div {
                margin: 4px 0;
            }
            
            .apexcharts-tooltip-candlestick span.value {
                font-weight: bold;
            }
            
            .apexcharts-tooltip-rangebar {
                padding: 5px 8px;
            }
            
            .apexcharts-tooltip-rangebar .category {
                font-weight: 600;
                color: #777;
            }
            
            .apexcharts-tooltip-rangebar .series-name {
                font-weight: bold;
                display: block;
                margin-bottom: 5px;
            }
            
            .apexcharts-xaxistooltip {
                opacity: 0;
                padding: 9px 10px;
                pointer-events: none;
                color: #373d3f;
                font-size: 13px;
                text-align: center;
                border-radius: 2px;
                position: absolute;
                z-index: 10;
                background: #ECEFF1;
                border: 1px solid #90A4AE;
                transition: 0.15s ease all;
            }
            
            .apexcharts-xaxistooltip.apexcharts-theme-dark {
                background: rgba(0, 0, 0, 0.7);
                border: 1px solid rgba(0, 0, 0, 0.5);
                color: #fff;
            }
            
            .apexcharts-xaxistooltip:after,
            .apexcharts-xaxistooltip:before {
                left: 50%;
                border: solid transparent;
                content: " ";
                height: 0;
                width: 0;
                position: absolute;
                pointer-events: none;
            }
            
            .apexcharts-xaxistooltip:after {
                border-color: rgba(236, 239, 241, 0);
                border-width: 6px;
                margin-left: -6px;
            }
            
            .apexcharts-xaxistooltip:before {
                border-color: rgba(144, 164, 174, 0);
                border-width: 7px;
                margin-left: -7px;
            }
            
            .apexcharts-xaxistooltip-bottom:after,
            .apexcharts-xaxistooltip-bottom:before {
                bottom: 100%;
            }
            
            .apexcharts-xaxistooltip-top:after,
            .apexcharts-xaxistooltip-top:before {
                top: 100%;
            }
            
            .apexcharts-xaxistooltip-bottom:after {
                border-bottom-color: #ECEFF1;
            }
            
            .apexcharts-xaxistooltip-bottom:before {
                border-bottom-color: #90A4AE;
            }
            
            .apexcharts-xaxistooltip-bottom.apexcharts-theme-dark:after {
                border-bottom-color: rgba(0, 0, 0, 0.5);
            }
            
            .apexcharts-xaxistooltip-bottom.apexcharts-theme-dark:before {
                border-bottom-color: rgba(0, 0, 0, 0.5);
            }
            
            .apexcharts-xaxistooltip-top:after {
                border-top-color: #ECEFF1
            }
            
            .apexcharts-xaxistooltip-top:before {
                border-top-color: #90A4AE;
            }
            
            .apexcharts-xaxistooltip-top.apexcharts-theme-dark:after {
                border-top-color: rgba(0, 0, 0, 0.5);
            }
            
            .apexcharts-xaxistooltip-top.apexcharts-theme-dark:before {
                border-top-color: rgba(0, 0, 0, 0.5);
            }
            
            .apexcharts-xaxistooltip.apexcharts-active {
                opacity: 1;
                transition: 0.15s ease all;
            }
            
            .apexcharts-yaxistooltip {
                opacity: 0;
                padding: 4px 10px;
                pointer-events: none;
                color: #373d3f;
                font-size: 13px;
                text-align: center;
                border-radius: 2px;
                position: absolute;
                z-index: 10;
                background: #ECEFF1;
                border: 1px solid #90A4AE;
            }
            
            .apexcharts-yaxistooltip.apexcharts-theme-dark {
                background: rgba(0, 0, 0, 0.7);
                border: 1px solid rgba(0, 0, 0, 0.5);
                color: #fff;
            }
            
            .apexcharts-yaxistooltip:after,
            .apexcharts-yaxistooltip:before {
                top: 50%;
                border: solid transparent;
                content: " ";
                height: 0;
                width: 0;
                position: absolute;
                pointer-events: none;
            }
            
            .apexcharts-yaxistooltip:after {
                border-color: rgba(236, 239, 241, 0);
                border-width: 6px;
                margin-top: -6px;
            }
            
            .apexcharts-yaxistooltip:before {
                border-color: rgba(144, 164, 174, 0);
                border-width: 7px;
                margin-top: -7px;
            }
            
            .apexcharts-yaxistooltip-left:after,
            .apexcharts-yaxistooltip-left:before {
                left: 100%;
            }
            
            .apexcharts-yaxistooltip-right:after,
            .apexcharts-yaxistooltip-right:before {
                right: 100%;
            }
            
            .apexcharts-yaxistooltip-left:after {
                border-left-color: #ECEFF1;
            }
            
            .apexcharts-yaxistooltip-left:before {
                border-left-color: #90A4AE;
            }
            
            .apexcharts-yaxistooltip-left.apexcharts-theme-dark:after {
                border-left-color: rgba(0, 0, 0, 0.5);
            }
            
            .apexcharts-yaxistooltip-left.apexcharts-theme-dark:before {
                border-left-color: rgba(0, 0, 0, 0.5);
            }
            
            .apexcharts-yaxistooltip-right:after {
                border-right-color: #ECEFF1;
            }
            
            .apexcharts-yaxistooltip-right:before {
                border-right-color: #90A4AE;
            }
            
            .apexcharts-yaxistooltip-right.apexcharts-theme-dark:after {
                border-right-color: rgba(0, 0, 0, 0.5);
            }
            
            .apexcharts-yaxistooltip-right.apexcharts-theme-dark:before {
                border-right-color: rgba(0, 0, 0, 0.5);
            }
            
            .apexcharts-yaxistooltip.apexcharts-active {
                opacity: 1;
            }
            
            .apexcharts-yaxistooltip-hidden {
                display: none;
            }
            
            .apexcharts-xcrosshairs,
            .apexcharts-ycrosshairs {
                pointer-events: none;
                opacity: 0;
                transition: 0.15s ease all;
            }
            
            .apexcharts-xcrosshairs.apexcharts-active,
            .apexcharts-ycrosshairs.apexcharts-active {
                opacity: 1;
                transition: 0.15s ease all;
            }
            
            .apexcharts-ycrosshairs-hidden {
                opacity: 0;
            }
            
            .apexcharts-selection-rect {
                cursor: move;
            }
            
            .svg_select_boundingRect,
            .svg_select_points_rot {
                pointer-events: none;
                opacity: 0;
                visibility: hidden;
            }
            
            .apexcharts-selection-rect+g .svg_select_boundingRect,
            .apexcharts-selection-rect+g .svg_select_points_rot {
                opacity: 0;
                visibility: hidden;
            }
            
            .apexcharts-selection-rect+g .svg_select_points_l,
            .apexcharts-selection-rect+g .svg_select_points_r {
                cursor: ew-resize;
                opacity: 1;
                visibility: visible;
            }
            
            .svg_select_points {
                fill: #efefef;
                stroke: #333;
                rx: 2;
            }
            
            .apexcharts-svg.apexcharts-zoomable.hovering-zoom {
                cursor: crosshair
            }
            
            .apexcharts-svg.apexcharts-zoomable.hovering-pan {
                cursor: move
            }
            
            .apexcharts-zoom-icon,
            .apexcharts-zoomin-icon,
            .apexcharts-zoomout-icon,
            .apexcharts-reset-icon,
            .apexcharts-pan-icon,
            .apexcharts-selection-icon,
            .apexcharts-menu-icon,
            .apexcharts-toolbar-custom-icon {
                cursor: pointer;
                width: 20px;
                height: 20px;
                line-height: 24px;
                color: #6E8192;
                text-align: center;
            }
            
            .apexcharts-zoom-icon svg,
            .apexcharts-zoomin-icon svg,
            .apexcharts-zoomout-icon svg,
            .apexcharts-reset-icon svg,
            .apexcharts-menu-icon svg {
                fill: #6E8192;
            }
            
            .apexcharts-selection-icon svg {
                fill: #444;
                transform: scale(0.76)
            }
            
            .apexcharts-theme-dark .apexcharts-zoom-icon svg,
            .apexcharts-theme-dark .apexcharts-zoomin-icon svg,
            .apexcharts-theme-dark .apexcharts-zoomout-icon svg,
            .apexcharts-theme-dark .apexcharts-reset-icon svg,
            .apexcharts-theme-dark .apexcharts-pan-icon svg,
            .apexcharts-theme-dark .apexcharts-selection-icon svg,
            .apexcharts-theme-dark .apexcharts-menu-icon svg,
            .apexcharts-theme-dark .apexcharts-toolbar-custom-icon svg {
                fill: #f3f4f5;
            }
            
            .apexcharts-canvas .apexcharts-zoom-icon.apexcharts-selected svg,
            .apexcharts-canvas .apexcharts-selection-icon.apexcharts-selected svg,
            .apexcharts-canvas .apexcharts-reset-zoom-icon.apexcharts-selected svg {
                fill: #008FFB;
            }
            
            .apexcharts-theme-light .apexcharts-selection-icon:not(.apexcharts-selected):hover svg,
            .apexcharts-theme-light .apexcharts-zoom-icon:not(.apexcharts-selected):hover svg,
            .apexcharts-theme-light .apexcharts-zoomin-icon:hover svg,
            .apexcharts-theme-light .apexcharts-zoomout-icon:hover svg,
            .apexcharts-theme-light .apexcharts-reset-icon:hover svg,
            .apexcharts-theme-light .apexcharts-menu-icon:hover svg {
                fill: #333;
            }
            
            .apexcharts-selection-icon,
            .apexcharts-menu-icon {
                position: relative;
            }
            
            .apexcharts-reset-icon {
                margin-left: 5px;
            }
            
            .apexcharts-zoom-icon,
            .apexcharts-reset-icon,
            .apexcharts-menu-icon {
                transform: scale(0.85);
            }
            
            .apexcharts-zoomin-icon,
            .apexcharts-zoomout-icon {
                transform: scale(0.7)
            }
            
            .apexcharts-zoomout-icon {
                margin-right: 3px;
            }
            
            .apexcharts-pan-icon {
                transform: scale(0.62);
                position: relative;
                left: 1px;
                top: 0px;
            }
            
            .apexcharts-pan-icon svg {
                fill: #fff;
                stroke: #6E8192;
                stroke-width: 2;
            }
            
            .apexcharts-pan-icon.apexcharts-selected svg {
                stroke: #008FFB;
            }
            
            .apexcharts-pan-icon:not(.apexcharts-selected):hover svg {
                stroke: #333;
            }
            
            .apexcharts-toolbar {
                position: absolute;
                z-index: 11;
                max-width: 176px;
                text-align: right;
                border-radius: 3px;
                padding: 0px 6px 2px 6px;
                display: flex;
                justify-content: space-between;
                align-items: center;
            }
            
            .apexcharts-menu {
                background: #fff;
                position: absolute;
                top: 100%;
                border: 1px solid #ddd;
                border-radius: 3px;
                padding: 3px;
                right: 10px;
                opacity: 0;
                min-width: 110px;
                transition: 0.15s ease all;
                pointer-events: none;
            }
            
            .apexcharts-menu.apexcharts-menu-open {
                opacity: 1;
                pointer-events: all;
                transition: 0.15s ease all;
            }
            
            .apexcharts-menu-item {
                padding: 6px 7px;
                font-size: 12px;
                cursor: pointer;
            }
            
            .apexcharts-theme-light .apexcharts-menu-item:hover {
                background: #eee;
            }
            
            .apexcharts-theme-dark .apexcharts-menu {
                background: rgba(0, 0, 0, 0.7);
                color: #fff;
            }
            
            @media screen and (min-width: 768px) {
                .apexcharts-canvas:hover .apexcharts-toolbar {
                    opacity: 1;
                }
            }
            
            .apexcharts-datalabel.apexcharts-element-hidden {
                opacity: 0;
            }
            
            .apexcharts-pie-label,
            .apexcharts-datalabels,
            .apexcharts-datalabel,
            .apexcharts-datalabel-label,
            .apexcharts-datalabel-value {
                cursor: default;
                pointer-events: none;
            }
            
            .apexcharts-pie-label-delay {
                opacity: 0;
                animation-name: opaque;
                animation-duration: 0.3s;
                animation-fill-mode: forwards;
                animation-timing-function: ease;
            }
            
            .apexcharts-canvas .apexcharts-element-hidden {
                opacity: 0;
            }
            
            .apexcharts-hide .apexcharts-series-points {
                opacity: 0;
            }
            
            .apexcharts-gridline,
            .apexcharts-annotation-rect,
            .apexcharts-tooltip .apexcharts-marker,
            .apexcharts-area-series .apexcharts-area,
            .apexcharts-line,
            .apexcharts-zoom-rect,
            .apexcharts-toolbar svg,
            .apexcharts-area-series .apexcharts-series-markers .apexcharts-marker.no-pointer-events,
            .apexcharts-line-series .apexcharts-series-markers .apexcharts-marker.no-pointer-events,
            .apexcharts-radar-series path,
            .apexcharts-radar-series polygon {
                pointer-events: none;
            }
            
            
            /* markers */
            
            .apexcharts-marker {
                transition: 0.15s ease all;
            }
            
            @keyframes opaque {
                0% {
                    opacity: 0;
                }
                100% {
                    opacity: 1;
                }
            }
            
            
            /* Resize generated styles */
            
            @keyframes resizeanim {
                from {
                    opacity: 0;
                }
                to {
                    opacity: 0;
                }
            }
            
            .resize-triggers {
                animation: 1ms resizeanim;
                visibility: hidden;
                opacity: 0;
            }
            
            .resize-triggers,
            .resize-triggers>div,
            .contract-trigger:before {
                content: " ";
                display: block;
                position: absolute;
                top: 0;
                left: 0;
                height: 100%;
                width: 100%;
                overflow: hidden;
            }
            
            .resize-triggers>div {
                background: #eee;
                overflow: auto;
            }
            
            .contract-trigger:before {
                width: 200%;
                height: 200%;
            }
            
            
            /* ###### INTERNO INFORMAÃ‡Ã•ES E PUBLICAÃ‡Ã•ES ###### */
            
            .interno_publicacoes {}
            
            .interno_publicacoes .card-header {
                background-color: #0061ac;
                padding: 8px 16px;
            }
            
            .interno_publicacoes .card-header .btn-link {
                color: #fff;
                text-decoration: none;
            }
            
            .interno_publicacoes h1 {
                font-size: 28px;
                margin-top: 32px;
                font-weight: 700;
                width: 100%;
            }
            
            .conteudo_publicacoes {
                margin: 32px 0;
            }
            
            .citacao p {
                color: #b3b3b3;
            }
            
            .header_noticia li {
                float: left;
            }
            
            .header_noticia li:first-child::after {
                content: "|";
                padding: 0 6px;
            }
            
            .header_noticia li a {
                color: #797979;
            }
            
            .header_noticia h1 {
                border-bottom: 1px solid #797979;
                padding-bottom: 6px;
            }
            
            .interno_publicacoes .custom-select {
                border: 1px solid #ced4da !important;
            }
            
            .interno_publicacoes .pagination li {
                margin: 0 4px;
            }
            
            .interno_publicacoes .pagination li:first-child {
                border: 1px solid #ced4da;
                -webkit-border-radius: 4px;
                -moz-border-radius: 4px;
                border-radius: 4px;
            }
            
            .interno_publicacoes .page-link {
                padding: 4px 10px;
                background-color: #f2f2f2;
                border: 1px solid #f2f2f2;
                -webkit-border-radius: 4px;
                -moz-border-radius: 4px;
                border-radius: 4px;
                color: #030303;
            }
            
            .interno_publicacoes .page-item.active .page-link {
                background-color: #245aac !important;
                border-color: #245aac !important;
            }
            
            .interno_publicacoes .page-item.disabled .page-link {
                border: 1px solid #ced4da;
            }
            
            .interno_publicacoes .table.dataTable {
                color: #797979;
            }
            
            .interno_publicacoes .table.dataTable a {
                color: inherit;
            }
            
            .interno_publicacoes .table.dataTable a:hover {
                color: #505050;
                text-decoration: none;
            }
            
            .noticias {
                padding: 20px 0 60px 0;
            }
            
            .noticias h1 {
                padding-bottom: 40px;
            }
            
            #buscaGeral form {
                width: 100%;
                display: flex;
                margin-bottom: 0;
            }
            
            .faq select {
                border: 1px solid #ced4da !important;
            }
            
            #formBuscaGeral .twitter-typeahead {
                width: 100%;
            }
            
            .interno_publicacoes input {
                border: 1px solid #ced4da;
            }
            
            .tt-suggestion {
                border-bottom: 1px solid #a0a0a0;
                margin-bottom: 8px;
                padding-bottom: 8px;
            }
            
            .faq .tt-menu {
                width: 600px;
                font-size: 16px;
                max-height: 160px;
                overflow-y: scroll;
            }

            /* Estilos para o texto */
            .taxas {
                color: white;
                font-size: 12px;
                padding: 20px 0 60px 0;
            }
            
            .taxas p {
                padding-bottom: 40px;

            }
            </style>
        
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>            
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script> 
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>            
        <script src="https://code.jquery.com/jquery-1.9.1.js"></script>
        <script src="https://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
        <script src="/layout/js/typeahead/bloodhound.js"></script>
        <script src="/layout/js/typeahead/bloodhound.min.js"></script>
        <script src="/layout/js/typeahead/typeahead.bundle.js"></script>
        <script src="/layout/js/typeahead/typeahead.bundle.min.js"></script>
        <script src="/layout/js/typeahead/typeahead.jquery.js"></script>
        <script src="/layout/js/typeahead/typeahead.jquery.min.js"></script>

        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-110060443-1"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());
            gtag('config', 'UA-110060443-1');
        </script>

        <script type="text/javascript">
            $(function() {
                $(".titulo_APLICACAO").hide();
                $(".titulo_TEXTO").hide();
            });
                           
        </script>           
        
       
</head>
<body>        
    
        <div class="container-fluid menu_topo">
            <div class="container">
                <nav class="navbar navbar-expand-lg navbar navbar-dark bg-dark">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
                    <div class="collapse navbar-collapse" id="navbarNavDropdown">
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item"> <a class="nav-link" href="http://www.transparencia.df.gov.br/#/" target="_blank">Transparência <span class="sr-only">(current)</span></a> </li>
                            <li class="nav-item"> <a class="nav-link" href="https://www.ouvidoria.df.gov.br/" target="_blank">Ouvidoria</a> </li>
                            <li class="nav-item"> <a class="nav-link" href="https://www.economia.df.gov.br/category/acesso-a-informacao/" target="_blank">Acesso à informação</a> </li>
                            <li class="nav-item"> <a class="nav-link" href="https://www.dodf.df.gov.br/" target="_blank">Diário oficial</a> </li>
                            <li class="nav-item"> <a class="nav-link" href="https://www.agenciabrasilia.df.gov.br/" target="_blank">Agência Brasília</a> </li>
                            <!--<li class="nav-item"> <a class="nav-link" href="https://www.brasilia.df.gov.br" target="_blank">Portal Governo de Brasília</a> </li>-->
                        </ul>
                    </div>
                    <div class="navbar-collapse collapse inline_menu" id="navbarNavDropdown">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item"> <a class="nav-link" href="https://www.brasilia.df.gov.br/index.php/acessibilidade/">Acessibilidade</a> </li>
                            <li class="separador_menu_topo"></li>
                            <li class="nav-item"> <a class="nav-link" href="#">Aa</a> </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-5 col-xl-5 col-lg-5 col-md-5 col-sm-5 logo_receita">
                    <a href="http://www.dflegal.df.gov.br/" target="_blank"><img src="/siteservicos/layout/img/logoDfLegal.png" class="img-fluid"/></a>
                </div>
           <!--     <div class="col-xl-2 col-lg-2 col-md-3 col-sm-3 col-3 offset-xl-3 offset-lg-3 offset-md-1 offset-sm-1 offset-1 p-2 botoes_acesso"><a href="https://ww1.receita.fazenda.df.gov.br/area-restrita" target="_blank">Entrar</a></div>
                <div class="col-xl-2 col-lg-2 col-md-3 col-sm-3 col-3 p-2 botoes_acesso"><a href="https://ww1.receita.fazenda.df.gov.br/acesso/primeiro-acesso" target="_blank">Cadastre-se</a></div>-->
            </div>
        </div> 
        
        <style type="text/css">    
a.mensagem_capa {
    background: #dedede;
    font-size: 22px;
    -webkit-border-radius: 30px;
    -moz-border-radius: 30px;
    border-radius: 30px;
    text-align: center;
    margin-top: 32px;
    border: 2px solid rgba(255, 255, 255, 0.3);
    color: #8e8e8e;
    width: 100%;
    display: block;
    padding: 10px 20;
    transition: 0.3s;
    font-weight: 600;
        white-space: nowrap;
overflow: hidden;
text-overflow: ellipsis;
}
a.mensagem_capa:hover {
    text-decoration: none;
    background-color: #3255a9;
    color: #fff;
    border: 2px solid #373737;
}
/* Estilos para o texto */
            .taxas {
                color: white;
                font-size: 12px;
                padding: 20px 0 60px 0;
            }
            
            .taxas p {
                padding-bottom: 40px;

            }
</style>


<div class="container links_header">
<div class="row flex-row  d-flex align-items-stretch">           
    
        <div class="col-xl col-lg col-md col-sm-12 col-12 p-2"><a href="/siteservicos/dflegal.site/index.php">VOLTAR AO PORTAL DE SERVIÇOS DA DF-LEGAL</a></div>
    
</div>
</div>

<div class="container-fluid parallax">
    <div class="container">
        <div class="row acesso_facil">
            
        <?php
    if ($_GET['taxa'] == 'teo') {
      echo '<div class="col-12 tilulo_acesso">
      <h1>TAXA DE EXECUÇÃO DE OBRAS</h1>
  </div>';

    
    } elseif ($_GET['taxa'] == 'tfe') {
        echo '<div class="col-12 tilulo_acesso">
        <h1>TAXA DE FUNCIONAMENTO DE ESTABELECIMENTO</h1>
    </div>';
    } else {
      echo '<a href="taxas.php?taxa=tfe">O que é TFE?</a>';
        echo '<a href="taxas.php?taxa=teo">O que é TEO?</a>';

    }
  ?>
        <div class="taxas">
            <div class="container">
  <?php
    if ($_GET['taxa'] == 'teo') {
      echo '<p>A Taxa TEO é a taxa de embarque obrigatória para todos os passageiros que embarcam em voos internacionais.</p>';
      echo '<p>Essa taxa é cobrada para financiar os serviços de segurança e controle migratório nos aeroportos.</p>';
    } elseif ($_GET['taxa'] == 'tfe') {
      echo '<p>A Taxa TFE é a taxa de fiscalização de exploração de recursos minerais.</p>';
      echo '<p>Essa taxa é cobrada pelo governo para compensar os danos ambientais causados pela exploração de recursos minerais.</p>';
    } 
  ?>
</div>
</div>
<br><br><br> <br><br><br> <br><br><br> 
        </div>
    </div>
</div>

<br><br><br><br><br><br><br> 
 
 <b class='titulo_APLICACAO'>Rodapé Receita</b> 
<div class="container-fluid links_diversos">
<div class="container">
    <h2><a href="http://www.dflegal.df.gov.br/" target="_blank">Secretaria de Estado de Proteção da Ordem Urbanística do Distrito Federal</a></h2>
</div>
</div>
<div class="container-fluid base_site">
<div class="container">
    <div class="row">
        <div class="col-12 col-xl-4 col-lg-4 col-md-4 col-sm-12">
            <h2>Subsecretaria de Tecnologia da Informação</h2>
            <p>Secretaria de Estado de Proteção da Ordem Urbanística do Distrito Federal<br>
            <!--Governo de Brasília<br>-->
            SIA trecho 3 Lotes 1545 e 1555<br> Telefone: (61) 3961-5152/5186<br>
            CEP:71.200-039 </p>
        </div>
      
        <div class="col-12 col-xl-3 offset-col-5 col-lg-3 offset-lg-5 col-md-3 offset-md-5 col-sm-12 logo_site_bottom">
            <!--<img src="/layout/modules/servicos/layouts/imagens/icones//logo_gdf.jpg">-->
        </div>		  
      
    </div>
</div>
</div>
</body>
</html>
        <!-- pagina gerada em 03/04/2023 ?s 07:45:36 -->
    
