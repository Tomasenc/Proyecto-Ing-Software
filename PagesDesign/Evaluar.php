<?php

session_start();

$productividad=0;$calidad=0;$responsabilidad=0;$cooperacion=0;$relacionInter=0;$compromiso=0;$creatividad=0;$review=0;$training=0;$coaching=0;$documentacion=0;$valores=0;
	if( isset($_POST['txtProductividad']) )
	{
		$_SESSION['txtProductividad'] = $_POST["txtProductividad"];
		$productividad = $_SESSION['txtProductividad'];
		
	}else
	{
		var_dump($_POST["txtProductividad"]);
		header("Location: Desempenno.html");
	}
	
	if( isset($_POST["txtCalidad"]) )
	{
		$_SESSION['txtCalidad'] = $_POST['txtCalidad'];
		$calidad = $_SESSION['txtCalidad'];
	}else
	{
		echo "<script>alert('calidad') </script>";
		header("Location: Desempenno.html");
	}
	
	if( isset($_POST['txtResponsabilidad']) )
	{
		$_SESSION['txtResponsabilidad'] = $_POST['txtResponsabilidad'];
		$responsabilidad = $_SESSION['txtResponsabilidad'];
	}else
	{
		header("Location: Desempenno.html");
	}
	
	if( isset($_POST['txtCooperacion']) )
	{
		$_SESSION['txtCooperacion'] = $_POST['txtCooperacion'];
		$cooperacion = $_SESSION['txtCooperacion'];
	}else
	{
		header("Location: Desempenno.html");
	}
	
	if( isset($_POST['txtRelacionInter']) )
	{
		$_SESSION['txtRelacionInter'] = $_POST['txtRelacionInter'];
		$relacionInter = $_SESSION['txtRelacionInter'];
	}else
	{
		header("Location: Desempenno.html");
	}
	
	if( isset($_POST['txtCompromiso']) )
	{
		$_SESSION['txtCompromiso'] = $_POST['txtCompromiso'];
		$compromiso = $_SESSION['txtCompromiso'];
	}else
	{
		var_dump($_POST['txtCompromiso']);
		header("Location: Desempenno.html");
	}
	
	if( isset($_POST['txtCreatividad']) )
	{
		$_SESSION['txtCreatividad'] = $_POST['txtCreatividad'];
		$creatividad=$_SESSION['txtCreatividad'];
	}else
	{
		header("Location: Desempenno.html");
	}
	
	if( isset($_POST['txtReviews']) )
	{
		$_SESSION['txtReviews'] = $_POST['txtReviews'];
		$review= $_SESSION['txtReviews'];
	}else
	{
		header("Location: Desempenno.html");
	}
	
	if( isset($_POST['txtTraining']) )
	{
		$_SESSION['txtTraining'] = $_POST['txtTraining'];
		$training= $_SESSION['txtTraining'];
	}else
	{
		header("Location: Desempenno.html");
	}
	
	if( isset($_POST['txtCoaching']) )
	{
		$_SESSION['txtCoaching'] = $_POST['txtCoaching'];
		$coaching= $_SESSION['txtCoaching'];
	}else
	{
		header("Location: Desempenno.html");
	}
	
	if( isset($_POST['txtDocumentacion']) )
	{
		$_SESSION['txtDocumentacion'] = $_POST['txtDocumentacion'];
		$documentacion = $_SESSION['txtDocumentacion'];
	}else
	{
		header("Location: Desempenno.html");
	}
	
	if( isset($_POST['txtValores']) )
	{
		$_SESSION['txtValores'] = $_POST['txtValores'];
		$valores= $_SESSION['txtValores'];
	}else
	{
		header("Location: Desempenno.html");
	}
	
	$resultado=$productividad + $calidad + $responsabilidad + $cooperacion + $relacionInter + $compromiso + $creatividad + $review + $training + $coaching + $documentacion +$valores;
	
	$_SESSION['resultado']=$resultado;
	
	$fecha = new DateTime("now");
	$_SESSION['fechaEvaluacion']=$fecha->format('d-M-Y H:i');
	
	header ("Location: Index.php");
?>