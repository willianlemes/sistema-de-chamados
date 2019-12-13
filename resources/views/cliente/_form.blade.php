<div class="input-field">
    <input type="text" name="nome" value="{{ isset($cliente->nome) ? $cliente->nome : '' }}">
    <label>Nome</label>
</div>

<div class="input-field col s12">
    <select>
        <option value="" disabled selected>Choose your option</option>
        <option value="1">Option 1</option>
        <option value="2" selected>Option 2</option>
        <option value="3">Option 3</option>
    </select>
    <label>Materialize Select</label>
</div>

