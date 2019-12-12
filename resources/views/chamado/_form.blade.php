<div class="row">
    <div class="input-field col s12">
        <input type="text" name="titulo" value="{{ isset($chamado->titulo) ? $chamado->titulo : '' }}" required>
        <label>Título</label>
    </div>
</div>

<div class="row">
    <div class="input-field col s12">
        <input type="text" class="datepicker" name="data" value="{{ isset($chamado->data) ? date("d/m/Y", strtotime($chamado->data)) : '' }}" required>
        <label>Data</label>
    </div>
</div>

<div class="row">
    <div class="input-field col s12">
        <select name="id_cliente">
            <option value="" disabled selected>< Selecione ></option>
            @foreach ($clientes as $key => $value)
                <option value="{{ $key }}" {{ ( $key == $selectedID) ? 'selected' : '' }}>{{ $value }}</option>
            @endforeach
        </select>
        <label>Cliente</label>
    </div>
</div>

<div class="row">
    <div class="input-field col s12">
        <textarea name="descricao" class="materialize-textarea" required>{{ isset($chamado->descricao) ? $chamado->descricao : '' }}</textarea>
        <label for="textarea1">Descrição</label>
    </div>
</div>


