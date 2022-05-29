Hello ini menggunakan tpl dari smarty

<ul>
{foreach from=$items key=$key item=item}
    <li>{$key} : {$item->object_created} - {$item->object_owner} </li>
{/foreach}
</ul>