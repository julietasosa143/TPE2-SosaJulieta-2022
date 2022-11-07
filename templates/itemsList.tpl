
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
{include file="templates/footer.tpl"}