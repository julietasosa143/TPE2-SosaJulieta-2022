{include file="templates/header.tpl"}

<h1 class="text-center"> {$items->nombre} </h1>
<h2 class="text-center"> {$items->marca} </h2>
<p class="text-center lead"> {$items->descripcion}</p>
<p class="text-center"> {$items->contenido}</p>
<p class="text-center lead"> Categoria: {$items ->categoria}</p>
<h3 class="text-center">${$items->precio}</h3>

<h3 class="text-center">Reviews de este producto</h3>

{include file="templates/reviews.tpl"}

<script src="js/api.js">

{include file="templates/footer.tpl"}