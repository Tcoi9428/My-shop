<?php /* Smarty version 2.6.31, created on 2020-02-24 12:23:18
         compiled from vendors/index.tpl */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "./header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<div class="row">
    <div class="col-6 mb-4"><a href="/vendors/edit.php" class="btn btn-success">Добавить Производителя</a></div>
    <div class="col-md-12" style="font-size: 25px;font-width: 700;margin-bottom: 30px;">
        Производители
    </div>
    <?php $_from = $this->_tpl_vars['vendors']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['e']):
?>
    <div class="col-md-12 category-card">
        <p class="card-text category-name"><?php echo $this->_tpl_vars['e']['name']; ?>
</p>
            <a href="/vendors/edit.php?vendor_id=<?php echo $this->_tpl_vars['e']['id']; ?>
"class="btn btn-primary">Редактировать</a>
        <form action="/vendors/delete.php" method="POST">
            <input type="hidden" value="<?php echo $this->_tpl_vars['e']['id']; ?>
" name="delete_id">
            <button type="submit"  class="btn btn-sm btn-outline-secondary">Удалить</button>
        </form>
    </div>
    <?php endforeach; endif; unset($_from); ?>
</div>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "./bottom.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>