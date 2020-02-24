<?php /* Smarty version 2.6.31, created on 2020-02-24 08:23:04
         compiled from index.tpl */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<div class="row">
    <div class="col-6 mb-4"><a href="/products/edit.php" class="btn btn-success">Добавить товар</a></div>
</div>
<div class="row">
    <?php $_from = $this->_tpl_vars['products']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['e']):
?>

        <div class="col-md-4">
        <div class="card mb-4 shadow-sm">
            <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Фото товара</text></svg>
            <div class="card-body">
                <p class="card-text" style="font-weight:700; font-size: 20px;"><?php echo $this->_tpl_vars['e']['name']; ?>
</p>
                <div class="card-field">
                    <p class="card-text product-name">Цена:</p><small class="text-muted"><?php echo $this->_tpl_vars['e']['price']; ?>
</small>
                </div>
                <div class="card-field">
                    <p class="card-text product-name">Количество:</p><small class="text-muted"><?php echo $this->_tpl_vars['e']['amount']; ?>
</small>
                </div>
                <div class="card-field">
                    <p class="card-text product-name">Категории:</p>
                    <?php $_from = $this->_tpl_vars['categories']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['c']):
?>
                        <?php if ($this->_tpl_vars['c']['product_id'] == $this->_tpl_vars['e']['id']): ?>
                            <p class="card-text product-name"><?php echo $this->_tpl_vars['c']['name']; ?>
</p>
                        <?php endif; ?>
                    <?php endforeach; endif; unset($_from); ?>
                </div>
                <div class="card-field">
                    <p class="card-text product-name">Производитель:</p>
                    <?php $_from = $this->_tpl_vars['vendors']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['z']):
?>
                        <?php if ($this->_tpl_vars['z']['id'] == $this->_tpl_vars['e']['vendor_id']): ?>
                            <p class="card-text product-name"><?php echo $this->_tpl_vars['z']['name']; ?>
</p>
                        <?php endif; ?>
                    <?php endforeach; endif; unset($_from); ?>
                    <p class="card-text product-name"></p>
                </div>
                <div class="card-field">
                    <p class="card-text product-name">Описание:</p><p class="card-text product-name"><?php echo $this->_tpl_vars['e']['description']; ?>
</p>
                </div>
                <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                        <a href="/products/edit.php?product_id=<?php echo $this->_tpl_vars['e']['id']; ?>
" class="btn btn-sm btn-outline-secondary">Редактировать</a>
                        <form action="/products/editing.php" method="POST">
                            <input type="hidden" value="<?php echo $this->_tpl_vars['e']['id']; ?>
" name="product_id">
                             <button type="submit"  class="btn btn-sm btn-outline-secondary">Удалить</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php endforeach; endif; unset($_from); ?>
</div>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "bottom.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>