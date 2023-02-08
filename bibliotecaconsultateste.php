<?php
include ("cabecalhoteste.html");
?>

<div class="container">


<h3>Publicações de Consultas</h3>

<div style="padding-top: 10px; padding-bottom: 20px; margin-bottom: 20px;">
<form method="POST" action="bibliotecaconsultateste.php">
Consulte as consultas por ano:
<select id="menu_ano" onchange="this.form.submit()" name="ano">

<option value=""></option>
<?php
$ano_inicial = 2000;
$ano_final = date("Y");
for ($i = $ano_final; $i >= $ano_inicial; $i--) {

?>
<option value="<?= $i ?>"><?= $i ?></option>
<?php
}
?>
</select>
</form>
</div>


<?php
if (isset ($_POST['ano'])) {
    $ano = $_POST['ano'];
    $arquivo = "consultas/".$ano.'.html';
    include ($arquivo);
} else {
  $ano = date("Y");
  $arquivo = "consultas/".$ano.'.html';
  include ($arquivo);
}
?>

</div>

<?php
include ("rodape.html");
?>
