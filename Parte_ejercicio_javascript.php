<html>
<head>
</head>
<body>
<script type="text/javascript">
  var precio;
  var cantidad;
  precio=prompt('Ingrese precio del artículo','');
  cantidad=prompt('Ingrese la cantidad de artículos a llevar:','');
  var importe;
  importe=parseInt(precio)*parseInt(cantidad);
  document.write('Debe abonar:');
  document.write(importe);
</script>
</body>
</html>