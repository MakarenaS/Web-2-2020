

    

<div class="filtro">
    <p>Filtros:</p>
    <ul>

    {foreach $categories as $category}
        <li>
            <a href="{$category->id_category}">
            {$category->nombre}
            </a>
        </li>
        
        {/foreach}

    </ul>
</div>

