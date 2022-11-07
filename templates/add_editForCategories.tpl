
</div>
    <div class="d-flex justify-content-evenly">
        <div class="p-2 bd-highlight">
            <h3>Agregar Categoria</h3>
                <form action="addCategory" method="POST">
                    <div class="mb-3">
                        <input type="text" name="nombre" placeholder="Inserte nombre" required>
                    </div>
                    <div class="mb-3">
                        <input type="text" name="descripcion" placeholder="Inserte descripcion" required>
                    </div>
                    <input type="submit" value="Agregar">
                </form>
        </div>
        <div class="p-2 bd-highlight">
            <h3>Editar Categoria</h3>
                <form action="editCategory" method="POST">
                    <div class="mb-3">
                        <select name="id_categoria" class="form-select">
                            {foreach from=$categorias item=$category}
                                <option value="{$category->id_categoria}">{$category->nombre}</option>
                            {/foreach}
                        </select>
                    </div>
                    <div class="mb-3">
                        <input type="text" name="nombre" placeholder="Inserte el nuevo nombre" required>
                    </div>
                    <div class="mb-3">
                        <input type="text" name="descripcion" placeholder="Inserte nueva descripcion" required>
                    </div>
                    <input type="submit" value="Editar">
                </form>
        </div>
    </div>