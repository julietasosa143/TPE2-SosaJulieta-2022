
{include file="templates/header.tpl"}
<div>
    {foreach from=$items item=$producto}
        <div>
            <h3><button type="button" class="btn btn-outline-primary"><a
            href="item/{$producto->id_item}">{$producto->nombre}</a></button></h3>
        
            <h4>$ {$producto->precio}</h4>
            <button type="button">Categoria: {$producto->categoria}</button>
            {if $logged}
                <button type="button" class="btn btn-outline-danger"> <a
                    href="deleteItem/{$producto->id_item}">Borrar</a></button>
            {/if}
        </div>
    {/foreach}
    {if $logged}
        {include file="templates/add_editForItems.tpl"}
    {/if}
    <div>
        <h4>Podes dejarnos tu opinion del producto para colaborar con otros compradores! (esta aparecera cuando entres a un la descripcion de un producto)</h4>
    </div>
    </div>
    <div>
        {include file="templates/reviewForms.tpl"}
    </div>
<script src="js/api.js">
{include file="templates/footer.tpl"}