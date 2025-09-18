<form method="POST" action="mvc20251/cliente/formulario">
    <label>Nome:</label>
    <input type="text" name="nome" value="<?= ($paramentro != null) ? $paramento[0]["nome"] : "" ?>" />
    <br />
    <label>Endereço:</label>
    <input type="text" name="endereco" value="<?= ($paramentro != null) ? $paramento[0]["endereco"] : "" ?>" />
    <br />
    <?php
    if ($paramento != null){
    ?>
        <input type="hidden" name="id" value="<?= $paramentro[0]["id"] : "" ?>" />
    <?php
    }
    ?>
    <input type="submit" value="enviar" />
</form>