<?php include 'header.php' ?>
!
<div class="fondodecontra">
<center>
    <table border="1">
    <tr>
        <td>
            <div>
                <input type="radio" name="yatusa" id="persona"> Persona
            </div>
            <div>
                <input type="radio" name="yatusa" id="empresa"> Empresa
            </div>
        </td>
    </tr>
</table>

        <br><label for="categoria">Categoría del Producto:</label>
        <br><select name="categoria" id="categoria">
            <option value="televisores">Televisores</option>
            <option value="audifonos">Audífonos</option>
            <option value="celulares">Celulares</option>
        </select><br>

        <br><label for="correo">Correo:</label>
        <input type="email" name="correo" id="correo"><br>

        <br><label for="resumen">Resumen de la Información:</label>
        <br><textarea name="resumen" id="resumen" rows="4" cols="50"></textarea><br>

        <label for="aceptar_terminos">Acepto los Términos y Condiciones:</label>
        <input type="checkbox" name="aceptar_terminos" id="aceptar_terminos"><br> 
        <input type="submit" value="Guardar">
        </div>
    </form>
    </center>
</div>
    

<?php include 'footer.php' ?>