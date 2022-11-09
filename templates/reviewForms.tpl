<div>
    <form action="add" method="POST" id="reviewForm">
        <select class="form select" aria-label="Default select example" name="item">
            {foreach from=$items item=$item}
                <option value="{$item->id_item}">{$item->id_item}-{$item->nombre}</option>
            {/foreach}
        </select>
        <input type="text" placeholder="Su opinion del producto fue..." name="reviewBody">
        <select class="form-select " aria-label="Default select example" name="punctuation">
                <option value="0"> Sin estrellas</option>
                <option value="1"> 1 </option>
                <option value="2"> 2 </option>
                <option value="3"> 3 </option>
                <option value="4"> 4 </option>
                <option value="5"> 5 </option>
        </select>
        
        <button id="submit-btn" class="btn btn-outline-secondary" type="button">Enviar</button>

    </form>
</div>