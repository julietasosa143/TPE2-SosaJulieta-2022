{include file="templates/header.tpl"}

<h1 class="text-center"> {$items->nombre} </h1>
<h2 class="text-center"> {$items->marca} </h2>
<p class="text-center lead"> {$items->descripcion}</p>
<p class="text-center"> {$items->contenido}</p>
<p class="text-center lead"> Categoria: {$items ->categoria}</p>
<h3 class="text-center">${$items->precio}</h3>

<h3 class="text-center">Reviews de este producto</h3>
<form action="order" id="filterForm">
    <select class="form-select " aria-label="Default select example" name="order">
        <option value="0">Sin orden</option>
        <option value="1"> Ordenar por cantidad de estrellas -mas a menos- </option>
        <option value="2"> Ordenar por cantidad de estrellas -menos a mas- </option>
    </select>
    <input type="submit" value="Ordenar">
</form>
<div id="reviewContainer">
 
</div>

<script src="js/api.js">

{include file="templates/footer.tpl"}