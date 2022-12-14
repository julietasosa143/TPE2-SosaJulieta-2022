{include file="templates/header.tpl"}
{if $logged}
<div class="btn-outline-danger">
    <h3>ATENCION! Si se intenta borrar una categoria no se podra si la misma posee elementos por cuestiones de seguridad</h3>
</div>
{{/if}}
<div>
    <h3>~~Lista de categorias</h3>
    <p>Clickee sobre la categoria deseada para inspeccionarla</p>
    {foreach from=$categorias item=$category}
         <h4> <button type="button"><a href="showItemsInCat/{$category->id_categoria}">{$category->nombre}</a></button></h4>
         <p>{$category->descripcion}</p>
         {if $logged}
            <button type="button" class="btn btn-outline-danger"> <a
                href="deleteCategory/{$category->id_categoria}">Borrar</a></button>
        {/if}
    {/foreach}
</div>
    {if $logged}
        {include file="templates/add_editForCategories.tpl"}
    {/if}
{include file="templates/footer.tpl"}