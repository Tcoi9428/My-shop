<?php /* Smarty version 2.6.31, created on 2020-02-08 09:18:57
         compiled from categories/edit.tpl */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "./header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<form action="/categories/editing.php" method="post">
    <input type="hidden" name="category_id" value="<?php echo $this->_tpl_vars['category_id']; ?>
">
    <div class="form-group">
        <label for="category_name">Название Категории</label>
        <input id="category_name" type="text" name="name" class="form-control" required value="<?php $_from = $this->_tpl_vars['categories']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['e']):
?><?php if ($this->_tpl_vars['e']['id'] == $this->_tpl_vars['category_id']): ?><?php echo $this->_tpl_vars['e']['name']; ?>
<?php endif; ?><?php endforeach; endif; unset($_from); ?>">
    </div>
    <button type="submit" class="btn btn-primary mb-2">Добавить</button>
</form>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "./bottom.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>