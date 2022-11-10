<div>
    <form action="addItem" method="POST" id="reviewForm">
    <div class="mb-3">
        <select class="form select" aria-label="Default select example" name="item">
            {foreach from=$items item=$item}
                <option value="{$item->id_item}">{$item->id_item}-{$item->nombre}</option>
            {/foreach}
        </select>
    </div>
    <div class="mb-3">
        <textarea  placeholder="Su opinion del producto fue..." name="reviewBody" cols="30" rows="10"> </textarea>
    </div>
    <div class="mb-3">
        <select class="form-select " aria-label="Default select example" name="punctuation">
                <option value="0"> Sin estrellas</option>
                <option value="1"> 1 </option>
                <option value="2"> 2 </option>
                <option value="3"> 3 </option>
                <option value="4"> 4 </option>
                <option value="5"> 5 </option>
        </select>
    </div>
    <div class="mb-3">
        <input type="submit" value="Agregar">
    </div>
    </form>
</div>