<?php
/* Smarty version 4.1.0, created on 2022-05-08 03:48:02
  from 'C:\xampp\htdocs\volleyshop.local\views\admin\adminProducts.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_62772152aaa9c8_24193996',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd74dc998b199d494101fd377b1fbf8d43bdf0b3e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\volleyshop.local\\views\\admin\\adminProducts.tpl',
      1 => 1651974476,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62772152aaa9c8_24193996 (Smarty_Internal_Template $_smarty_tpl) {
?><h2>Товар</h2>
    <table border="1" cellpadding="1" cellspacing="1">
        <caption>Добавить продукт</caption>
        <tr>
            <th>Название</th> 
            <th>Цена</th> 
            <th>Категория</th> 
            <th>Описание</th> 
            <th>Сохранить</th> 
        </tr>

        <tr>
            <td>
                <input type="edit" id="newItemName" value=""/>
            </td>
            <td>
                <input type="edit" id="newItemPrice" value=""/>
            </td>
            <td>
                <select id="newItemCatId">
                    <option value="0">Главная Категория
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rsCategories']->value, 'itemCat');
$_smarty_tpl->tpl_vars['itemCat']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['itemCat']->value) {
$_smarty_tpl->tpl_vars['itemCat']->do_else = false;
?>
                        <option value="<?php echo $_smarty_tpl->tpl_vars['itemCat']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['itemCat']->value['name'];?>

                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </select>
            </td>
            <td>
                <textarea id="newItemDesc"></textarea>
            </td>
            <td>
                <input type="button" value="Сохранить" onclick="addProduct();"/>
            </td>
        </tr>
    </table>
    
    <table border="1" cellpadding="1" cellspacing="1">
        <caption>Редактировать</caption>
        <tr>
            <th>№</th> 
            <th>ID</th> 
            <th>Название</th> 
            <th>Цена</th> 
            <th>Категория</th> 
            <th>Описание</th>
            <th>Удалить</th> 
            <th>Изображение</th> 
            <th>Сохранить</th> 
        </tr>
        
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rsProducts']->value, 'item', false, NULL, 'products', array (
  'iteration' => true,
));
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_products']->value['iteration']++;
?>
            <tr>
                <td><?php echo (isset($_smarty_tpl->tpl_vars['__smarty_foreach_products']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_products']->value['iteration'] : null);?>
</td> 
                <td><?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
</td>
                <td>
                    <input type="edit" id="itemName_<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
"/>
                </td>
                <td>
                    <input type="edit" id="itemPrice_<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['price'];?>
"/>
                </td>
                <td>
                    <select id="itemCatId_<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
">
                        <option value="0" disabled selected>Выберите категорию
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rsCategories']->value, 'itemCat');
$_smarty_tpl->tpl_vars['itemCat']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['itemCat']->value) {
$_smarty_tpl->tpl_vars['itemCat']->do_else = false;
?>
                            <?php if ($_smarty_tpl->tpl_vars['itemCat']->value['parent_id']) {?>
                                <option value="<?php echo $_smarty_tpl->tpl_vars['itemCat']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['itemCat']->value['name'];?>

                            <?php }?>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </select>
                </td>
                <td>
                    <textarea id="itemDesc_<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
">
                        <?php echo $_smarty_tpl->tpl_vars['item']->value['description'];?>

                    </textarea>
                </td>
                <td>
                    <input type="checkbox" id="itemStatus_<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" <?php if ($_smarty_tpl->tpl_vars['item']->value['status'] == 0) {?>checked="checked"<?php }?> />
                </td>
                <td>
                    <?php if ($_smarty_tpl->tpl_vars['item']->value['image']) {?>
                        <img src="/images/products/<?php echo $_smarty_tpl->tpl_vars['item']->value['image'];?>
" width="100"/>
                    <?php }?>
                    <form action="/admin/upload/" method="post" enctype="multipart/form-data">
                        <input type="file" name="filename"><br>
                        <input type="hidden" name="itemId" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
">
                        <input type="submit" value="Загрузить"><br>
                    </form>
                </td>
                <td>
                    <input type="button" value="Сохранить" onclick="updateProduct('<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
');"/>
                </td>
            </tr>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </table>
<?php }
}
