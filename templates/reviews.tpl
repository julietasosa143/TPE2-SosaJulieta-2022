
{foreach from=$reviews item=$review}
    <div class="mb-3">
        <div>
        Usuario anonimo dijo:
        </div>
        <div>
            {$review->review}
        </div>
        <div>
            {$review->estrellas} Estellas
        </div>
        {if $logged}
            <button type="button" class="btn btn-outline-danger"> <a
                href="deleteReview/{$review->id_review}">Borrar</a></button>
        {/if}
    </div>
{/foreach}