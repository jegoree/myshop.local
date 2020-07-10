<div id="blockNewCategory">
    New category:
    <input name="newCategoryName" id="newCategoryName" type="text" value="">
    <br>

    Sub-category:
    <select name="generalCatId">
        <option value="0">Head category
        {foreach $rsCategories as $item}
            <option value="{$item['id']}">{$item['name']}
        {/foreach}
    </select>
    <br>
    <input type="button" onclick="newCategory();" value="Create new category">
    <br>
</div>