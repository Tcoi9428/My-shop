<?php /* Smarty version 2.6.31, created on 2020-02-08 18:37:13
         compiled from product/edit.tpl */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'header.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php if ($this->_tpl_vars['product_id']): ?>
<form action="/products/editing.php" method="post">
    <input type="hidden" value="<?php echo $this->_tpl_vars['product_id']; ?>
" name="product_id">
    <?php $_from = $this->_tpl_vars['product']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['p']):
?><?php endforeach; endif; unset($_from); ?>
    <div class="form-group">
        <label for="product_name">Название товара</label>
        <input id="product_name" type="text" name="name" class="form-control" required value="<?php echo $this->_tpl_vars['p']['name']; ?>
">
    </div>
    <div class="form-group">
        <label for="product_price">Цена</label>
        <input id="product_price" type="text" name="price" class="form-control" required value="<?php echo $this->_tpl_vars['p']['price']; ?>
">
    </div>
    <div class="form-group">
        <label for="product_amount">Количество</label>
        <input id="product_amount" type="number" name="amount" class="form-control" required value="<?php echo $this->_tpl_vars['p']['amount']; ?>
">
    </div>

    <div class="form-group">
        <label for="product_vendor">Производитель</label>
        <select class="form-control" name="vendor_id" id="product_vendor">
            <option value="0">-</option>
            <?php $_from = $this->_tpl_vars['vendors']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['e']):
?>
                <option value="<?php echo $this->_tpl_vars['e']['id']; ?>
" <?php if ($this->_tpl_vars['e']['id'] == $this->_tpl_vars['p']['vendor_id']): ?>selected<?php endif; ?>><?php echo $this->_tpl_vars['e']['name']; ?>
</option>
            <?php endforeach; endif; unset($_from); ?>
        </select>
    </div>
    <div class="form-group">
        <label for="product_folders">Категории</label>
        <select multiple class="form-control" name="categories_ids[]" id="product_category">
                <?php $_from = $this->_tpl_vars['categories']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['e']):
?>
                    <option value="<?php echo $this->_tpl_vars['e']['id']; ?>
" <?php $_from = $this->_tpl_vars['product']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['c']):
?> <?php if ($this->_tpl_vars['product_id'] == $this->_tpl_vars['c']['id'] && $this->_tpl_vars['e']['id'] == $this->_tpl_vars['c']['category_id']): ?> selected <?php endif; ?><?php endforeach; endif; unset($_from); ?>><?php echo $this->_tpl_vars['e']['name']; ?>
</option>
                <?php endforeach; endif; unset($_from); ?>
        </select>
    </div>

    <div class="form-group">
        <label for="product_description">Описание товара</label>
        <textarea id="product_description" name="description" class="form-control" rows="3"><?php echo $this->_tpl_vars['p']['description']; ?>
</textarea>
    </div>

    <button type="submit" class="btn btn-primary mb-2">Добавить</button>
</form>
<?php else: ?>
    <form action="/products/editing.php" method="post">
        <input type="hidden" value="<?php echo $this->_tpl_vars['product_id']; ?>
" name="product_id">
        <div class="form-group">
            <label for="product_name">Название товара</label>
            <input id="product_name" type="text" name="name" class="form-control" required value="">
        </div>
        <div class="form-group">
            <label for="product_price">Цена</label>
            <input id="product_price" type="text" name="price" class="form-control" required value="">
        </div>
        <div class="form-group">
            <label for="product_amount">Количество</label>
            <input id="product_amount" type="number" name="amount" class="form-control" required value="">
        </div>

        <div class="form-group">
            <label for="product_vendor">Производитель</label>
            <select class="form-control" name="vendor_id" id="product_vendor">
                <option value="0">-</option>
                <?php $_from = $this->_tpl_vars['vendors']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['e']):
?>
                    <option value="<?php echo $this->_tpl_vars['e']['id']; ?>
"><?php echo $this->_tpl_vars['e']['name']; ?>
</option>
                <?php endforeach; endif; unset($_from); ?>
            </select>
        </div>
        <div class="form-group">
            <label for="product_folders">Категории</label>
            <select multiple class="form-control" name="categories_ids[]" id="product_category">
                <?php $_from = $this->_tpl_vars['categories']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['e']):
?>
                    <option value="<?php echo $this->_tpl_vars['e']['id']; ?>
"><?php echo $this->_tpl_vars['e']['name']; ?>
</option>
                <?php endforeach; endif; unset($_from); ?>
            </select>
        </div>

        <div class="form-group">
            <label for="product_description">Описание товара</label>
            <textarea id="product_description" name="description" class="form-control" rows="3"></textarea>
        </div>

        <button type="submit" class="btn btn-primary mb-2">Добавить</button>
    </form>
<?php endif; ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'bottom.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>