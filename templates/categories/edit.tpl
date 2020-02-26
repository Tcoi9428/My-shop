{include file="./header.tpl"}
<form action="/categories/editing.php" method="post">
    <input type="hidden" name="category_id" value="{$category_id}">
    <div class="form-group">
        <label for="category_name">Название Категории</label>
        <input id="category_name" type="text" name="name" class="form-control" required value="{foreach from=$categories item=e}{if $e.id == $category_id}{$e.name}{/if}{/foreach}">
    </div>
    <button type="submit" class="btn btn-primary mb-2">Добавить</button>
</form>
{include file="./bottom.tpl"}