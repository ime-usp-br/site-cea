<?php
include ("cabecalho.html");
?>
<div class="container">

<h3>Projetos</h3>

<p>Ano:
<form method="POST" action="projetos.php">
<select id="menu_ano" onchange="this.form.submit()" name="ano">
<option value="2019"></option>
<option value="2019">2019</option>
<option value="2018">2018</option>
<option value="2017">2017</option>
<option value="2016">2016</option>
<option value="2015">2015</option>
<option value="2014">2014</option>
<option value="2013">2013</option>
<option value="2012">2012</option>
<option value="2011">2011</option>
<option value="2010">2010</option>
<option value="2009">2009</option>
<option value="2008">2008</option>
<option value="2007">2007</option>
<option value="2006">2006</option>
<option value="2005">2005</option>
<option value="2004">2004</option>
<option value="2003">2003</option>
<option value="2002">2002</option>
<option value="2001">2001</option>
<option value="2000">2000</option>
<option value="1999">1999</option>
<option value="1998">1998</option>
<option value="1997">1997</option>
<option value="1996">1996</option>
<option value="1995">1995</option>
</select>
</form>
</p>
<?php
if (isset ($_POST['ano'])) {

    echo $_POST['ano'];
    $ano = $_POST[ano];
    $arquivo = $ano.'.html';
    include ($arquivo);
}
?>

</div>
<?php
include ("rodape.html");
?>
