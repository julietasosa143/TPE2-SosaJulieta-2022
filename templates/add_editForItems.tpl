
</div>
    <div class="d-flex justify-content-evenly">
        <div class="p-2 bd-highlight">
            <h3>Agregar Item</h3>
                <form action="addItem" method="POST">
                    <div class="mb-3">
                        <input type="text" name="nombre" placeholder="Inserte nombre" required>
                    </div>
                    <div class="mb-3">
                        <input type="text" name="marca" placeholder="Inserte marca" required>
                    </div>
                    <div class="mb-3">
                        <input type="text" name="descripcion" placeholder="Inserte descripcion" required>
                    </div>
                    <div class="mb-3">
                        <input type="text" name="contenido" placeholder="Inserte contenido en mililitros" required>
                    </div>
                    <div class="mb-3">
                        <input type="number" name="precio" placeholder="Inserte precio" required>
                    </div>
                    <div class="mb-3">
                        <select name="id_categoria" class="form-select">
                            {foreach from=$categorias item=$category}
                                <option value="{$category->id_categoria}">{$category->id_categoria}-{$category->nombre}</option>
                            {/foreach}
                        </select>
                    </div>
                    <input type="submit" value="Crear">
                </form>
        </div>
        <div class="p-2 bd-highlight">
            <h3>Editar Item</h3>
                <form action="editItem" method="POST">
                    <div class="mb-3">
                        <select name="id_item" class="form-select">
                            {foreach from=$items item=$item}
                                <option value="{$item->id_item}">{$item->id_item}-{$item->nombre}</option>
                            {/foreach}
                        </select>
                    </div>
                    <div class="mb-3">
                        <input type="text" name="nombre" placeholder="Inserte el nuevo nombre" required>
                    </div>
                    <div class="mb-3">
                        <input type="text" name="marca" placeholder="Inserte marca" required>
                    </div>
                    <div class="mb-3">
                        <input type="text" name="descripcion" placeholder="Inserte descripcion" required>
                    </div>
                    <div class="mb-3">
                        <input type="text" name="contenido" placeholder="Inserte contenido en mililitros" required>
                    </div>
                    <div class="mb-3">
                        <input type="number" name="precio" placeholder="Inserte precio" required>
                    </div>
                    <div class="mb-3">
                        <select name="id_categoria" class="form-select">
                            {foreach from=$categorias item=$category}
                                <option value="{$category->id_categoria}">{$category->id_categoria}-{$category->nombre}</option>
                            {/foreach}
                        </select>
                    </div>
                    <input type="submit" value="Editar">
                </form>
        </div>
    </div>