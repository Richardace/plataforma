<?php
require 'db_conn.php';
page_protect();
if (isset($_POST['numFactura'])) {
    function getRandomWord($len = 3)
    {
        $word = array_merge(range('a', 'z'), range('0', '9'));
        shuffle($word);
        return substr(implode($word), 0, $len);
    }
    $memid    = $_POST['numFactura'];
    $valorc    = $_POST['valorCancelar'];
    
    $query1 = "select * from factura_plan WHERE numFactura='$memid'";
    
    //echo $query;
    $result1 = mysqli_query($con, $query1);
    
    if (mysqli_affected_rows($con) == 1) {
        while ($row1 = mysqli_fetch_array($result1, MYSQLI_ASSOC)) {
            
            $codPlan = $row1['codPlan'];
            $mes   = $row1['mes'];
            $cliente      = $row1['cliente'];
            $valor      = $row1['valor'];
        }
    }
    $query5 = "select * from plan WHERE descripcion='$codPlan'";
    
    //echo $query;
    $result5 = mysqli_query($con, $query5);
    
    if (mysqli_affected_rows($con) == 1) {
        while ($row5 = mysqli_fetch_array($result5, MYSQLI_ASSOC)) {
            
            
            $numPlan = $row5['codPlan'];
                      
            
        }
    }
    $query2 = "select * from cliente WHERE name='$cliente'";
    
    //echo $query;
    $result2 = mysqli_query($con, $query2);
    
    if (mysqli_affected_rows($con) == 1) {
        while ($row2 = mysqli_fetch_array($result2, MYSQLI_ASSOC)) {
            
            $idCliente = $row2['login_id'];
            $sex = $row2['sex'];
           $telefono =  $row2['telefono'];
                      
            
        }
    }
    $query4 = "select * from cliente_sucursal WHERE clienteID='$cliente'";
    
    //echo $query;
    $result4 = mysqli_query($con, $query4);
    
    if (mysqli_affected_rows($con) == 1) {
        while ($row4 = mysqli_fetch_array($result4, MYSQLI_ASSOC)) {
            
            $sucursal = $row4['sucursal'];
                      
            
        }
    }

    $query3 = "select * from sucursal WHERE codSucursal='$sucursal'";
    
    //echo $query;
    $result3 = mysqli_query($con, $query3);
    
    if (mysqli_affected_rows($con) == 1) {
        while ($row3 = mysqli_fetch_array($result3, MYSQLI_ASSOC)) {
            
            $ciudad = $row3['ciudad'];
                      
            
        }
    }
    
    
    
    mysqli_query($con, "UPDATE factura_plan SET estado='pagado' WHERE numFactura='$memid'");
    echo "<head><script>alert('Payment Added ,');</script></head></html>";
    
    
    
} else {
    echo "<head><script>alert('Payment NOT Added, Check Again');</script></head></html>";
    echo "<meta http-equiv='refresh' content='0; url=new_entry.php'>";
    
}
?>
<!doctype html>

	<head>
		<meta charset="utf-8">
		<title>Recibo Telecomunicaciones RACE S.A.</title>
		<link rel="stylesheet" href="style.css">
		<script src="script.js"></script>
 <script type="text/javascript" src="jquery-1.3.2.min.js"></script>
    <script type="text/javascript" src="jquery-barcode.js"></script>
    <script type="text/javascript">
  
      function generateBarcode(){
        var value = "<?php
echo $invoice;
?>";
        var btype = "code128";
        var renderer = "css";
        
		var quietZone = false;
        if ($("#quietzone").is(':checked') || $("#quietzone").attr('checked')){
          quietZone = true;
        }
		
        var settings = {
          output:renderer,
          bgColor: $("#bgColor").val(),
          color: $("#color").val(),
         
          moduleSize: $("#moduleSize").val(),
          posX: $("#posX").val(),
          posY: $("#posY").val(),
          addQuietZone: $("#quietZoneSize").val()
        };
        if ($("#rectangular").is(':checked') || $("#rectangular").attr('checked')){
          value = {code:value, rect: true};
        }
        if (renderer == 'canvas'){
          clearCanvas();
          $("#barcodeTarget").hide();
          $("#canvasTarget").show().barcode(value, btype, settings);
        } else {
          $("#canvasTarget").hide();
          $("#barcodeTarget").html("").show().barcode(value, btype, settings);
        }
      }
          
      function showConfig1D(){
        $('.config .barcode1D').show();
        $('.config .barcode2D').hide();
      }
      
      function showConfig2D(){
        $('.config .barcode1D').hide();
        $('.config .barcode2D').show();
      }
      
      function clearCanvas(){
        var canvas = $('#canvasTarget').get(0);
        var ctx = canvas.getContext('2d');
        ctx.lineWidth = 1;
        ctx.lineCap = 'butt';
        ctx.fillStyle = '#FFFFFF';
        ctx.strokeStyle  = '#000000';
        ctx.clearRect (0, 0, canvas.width, canvas.height);
        ctx.strokeRect (0, 0, canvas.width, canvas.height);
      }
      
      $(function(){
        $('input[name=btype]').click(function(){
          if ($(this).attr('id') == 'datamatrix') showConfig2D(); else showConfig1D();
        });
        $('input[name=renderer]').click(function(){
          if ($(this).attr('id') == 'canvas') $('#miscCanvas').show(); else $('#miscCanvas').hide();
        });
        generateBarcode();
      });
  
    </script>
	</head>
	<body>
		<header>
			<a href="payments.php"><h1>RECIBO DE GENERACION DE PAGO ACEPTADO</h1></a>
      <address>
        <p>Telecomunicaciones RACE S.A.</p>
        <p>Cll 9AN Urb. El Bosque</p>
        <p>Linea Nacional : 018000454543</canvas> </span>
      </address>
			<span><img alt="" src="pic3.jpg">
		</header>
		<article><img alt="" src="pic2.jpg" width="100" height="100">
			<table class="meta">
				<tr>
					<th><span  >Factura N°</span></th>
					<td><span  ><?php
echo $memid;
?></span></td>
				</tr>
				<tr>
					<th><span  >Fecha</span></th>
					<td><span  ><?php
echo date('Y-m-d');
?></span></td>
				</tr>
				<tr>
					<th><span  >ID Miembro</span></th>
					<td><?php
echo $idCliente;
?></span></td>
				</tr>
        </tr>
        <tr>
          <th><span  >Telefono</span></th>
          <td><?php
echo $telefono;
?></span></td>
        </tr>
			</table>	
<table class="meta">
				<tr>
					<th><span  >Nombre</span></th>
					<td><span  ><?php
echo $cliente;
?></span></td>
				</tr>
				<tr>
					<th><span  > Sexo</span></th>
					<td><span  ><?php
echo $sex;
?></td>
				</tr>
        <tr>
          <th><span  >Mes a Facturar</span></th>
          <td><?php
echo $mes;
?></span></td>
        </tr>
        </tr>
        <tr>
          <th><span  >Ciudad</span></th>
          <td><?php
echo $ciudad;
?></span></td>
        </tr>
			</table>	
<table class="inventory">
				<thead>
					<tr>
						<th><span  >Tipo Membresia</span></th>
						<th><span  >Details</span></th>
						
						
					</tr>
				</thead>

				<tbody>
					<tr>
						<td><span  ><?php
echo $numPlan;
?></span></td>
						<td><span  ><?php
echo $codPlan;
?></span></td>
					</tr>
				</tbody>
			</table>
			<img alt="" src="cliente.jpg" width="400" height="100">
			
			
			<table class="balance">
				<tr>
					<th><span  >Total</span></th>
					<td><span data-prefix>$</span><span><?php
echo $valor;
?></span></td>
				</tr><tr>
					<th><span  >Pagado</span></th>
					<td><span data-prefix>$</span><span><?php
echo $valorc;
?></span></td>
				</tr><tr>
          <th><span  >Deuda</span></th>
          <td><span data-prefix>$</span><span><?php
echo ($valor - $valorc);
?></span></td>
        </tr>
				
			</table>
    </article>
    <aside>
      <h1><span  >Notas Adicionales</span></h1>
      <div  >
        <h9><p>1 ) . Todos los clientes deben respetar nuestras normas. </br></br>2). El pago no es transferible y no reembolsable.</br></br>3).Una vez efectuado el pago, este instataneamente sera actualizado en la plataforma.</br></br>4).Todos los usuarios deben guardar su recibo de pago.</br></br>5).No se recibe queja o reclamo  de valores que no coincidan con los ingresados en el menu de pagar.</br></br>6). TELECOMUNICACIONES RACE S.A. siempre estara escuchando atentamente las solicitides y concejos de los usuarios con el fin de rpomover el mejoramiento continuo de la empresa.</h9>
      </div>

    </aside><center><br><br><a href="view_mem.php">Telecomunicaciones RACE S.A. ( www.telecomunicacionesrace.com )  <a href="index.php">Regresar</a></center>
  </body>
</html>
