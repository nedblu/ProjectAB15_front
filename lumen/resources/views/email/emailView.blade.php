<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" lang="es"/>		
	<title></title>
	<link href='https://fonts.googleapis.com/css?family=Raleway:400,600' rel='stylesheet' type='text/css'>
	<style type="text/css">
	html{
		font-family: 'Raleway', sans-serif;
		max-width: 700px;
		height: auto;
	}
	.header{
		width: 100%;
		height: 95px;
		position: relative;
	}
	.header img, svg{
		position: absolute;
	}
	.header img{
		width: 90px;
		height: auto;
		left: 12px;
		bottom: 5px;
	}
	.header svg{
		width:50px;
		height: auto;
		/*fill: #e74c3c;*/
		fill:#c0392b;
		right: 10px;
		bottom: 5px;
	}
	.title{
		width: 100%;
		min-height: 100px;
		/*border-radius: 10px 10px 0px 0px;*/
		background: #3498db;
		color:#FFFFFF;
		font-size: 1.5em;
		font-weight: bold;
		text-align: bottom;
		position: relative;
		
	}

	.title span{
		padding-left: 30px;
		bottom: 15px;
		position: absolute;
	}

	.content{
		font-size: 0.8em;
		padding: 15px;
		border-bottom: 1px solid #7f8c8d; 
		border-left: 1px solid #7f8c8d;
		border-right: 1px solid #7f8c8d;
		box-shadow: 0px 5px 3px #7f8c8d;
	}

	</style>
</head>
<body>	
	<section class="header">
		<img src="http://alphabeta.com.mx/img/ABlogo.png"/> 
		<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512" enable-background="new 0 0 512 512" xml:space="preserve">
   			 <path id="paper-plane-icon" d="M462,54.955L355.371,437.187l-135.92-128.842L353.388,167l-179.53,124.074L50,260.973L462,54.955z
			M202.992,332.528v124.517l58.738-67.927L202.992,332.528z"></path> 
 		</svg>
	</section>
	<section class="title">
		<span>{Nombre(s)} ha dejado un mensaje:</span>
	</section>
	<section class="content">
		<h4>Hola {Nombre(s) de recipiente},</h4>
		<p>
			{Mensaje del remitente}
		</p>
		<br/>
		<p>
			Los datos de contacto de {Nombre y Apellido de remitente} son:
			<ul>
				<li>Nombre(s): {Nombre(s) de remitente}</li>
				<li>Apellido(s): {Apellido(s) de remitente}</li>
				<li>Correo: {Correo de remitente}</li>
			</ul>
			<br/>
			Por favor {Nombre(s) de recipiente}, ponte en contacto con {Nombre(s) de remitente} para brindarle un excelente servicio. Gracias.
		</p>
	</section>


</body>
</html>