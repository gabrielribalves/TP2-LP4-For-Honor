<?php include('process.php'); ?>
<html>
<head>
  <title>Cadastro de Usuario</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
 <form id="register_form" href="process.php" method="POST">
      <h1>Cadastro</h1>
      <div id="error_msg"></div>
	  <div>
	 	<input type="text" name="username" placeholder="Usuário" id="username" >
	    <span></span>
	  </div>
	  <div>
	    <input type="email" name="email" placeholder="Email" id="email">
		<span></span>
	  </div>
	  <div>
	   <input type="password" name="password" placeholder="Senha" id="password">
	  </div>
	  <div>
	 	<button type="button" name="register" id="reg_btn">Cadastrar</button>
	  </div>
	</form>
</body>
</html>
<!-- scripts -->
<script src="jquery-3.2.1.min.js"></script>
<script src="script.js"></script>