{include file='header.tpl'}


<div>
    <h2 class="text-center">{$categoria->nombre}</h2>
        {foreach from=$items item=$producto}
            <li><button type="button">{$producto->nombre}</button>  {$producto->marca}  ${$producto->precio}</li>
        {/foreach}
</div>


{include file='footer.tpl'}