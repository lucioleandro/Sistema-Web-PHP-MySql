<?php require_once("cabecalho.php"); ?>

<form  action="envia-mensagem.php" method="post">
  <table class="table">
    <tr>
      <td>Nome:</td>
      <td><input class="form-control "type="text" name="nome"></td>
    </tr>
    <tr>
      <td>Email:</td>
      <td><input type="text" name="email" class="form-control"></td>
    </tr>
    <tr>
      <td>Mensagem:</td>
      <td><textarea name="mensagem" rows="8" cols="80" class="form-control"></textarea></td>
    </tr>

  </table>
</form>
<?php require_once("rodape.php");
