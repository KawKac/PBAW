<?php
/* Smarty version 4.1.0, created on 2022-03-28 14:13:02
  from 'C:\xampp\htdocs\PBAW\app\calc\CalcView.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_6241a64e18b539_35192386',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '01c36fcc6c6d5cec1cb46eb6c97d079eed3eb5f2' => 
    array (
      0 => 'C:\\xampp\\htdocs\\PBAW\\app\\calc\\CalcView.html',
      1 => 1648469360,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6241a64e18b539_35192386 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16877024196241a64e159f91_07129461', 'footer');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3073090326241a64e15dad0_91137285', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, ($_smarty_tpl->tpl_vars['config']->value->root_path).("/templates/main.html"));
}
/* {block 'footer'} */
class Block_16877024196241a64e159f91_07129461 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_16877024196241a64e159f91_07129461',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Domyślna treść stopki w szablonieu głównym.<?php
}
}
/* {/block 'footer'} */
/* {block 'content'} */
class Block_3073090326241a64e15dad0_91137285 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_3073090326241a64e15dad0_91137285',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<form action="<?php echo $_smarty_tpl->tpl_vars['config']->value->action_root;?>
calcCompute" method="post" class="pure-form pure-form-stacked">
	<legend>Kalkulator</legend>
	<fieldset>
		<label >Koszt całkowity:
			<input type="text" name="cost" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->cost;?>
" /><br />
		</label>
		<label>Na ile lat:
			<input type="text" name="year" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->year;?>
" /><br />
		</label>
		<label>Oprocentowanie:
			<input type="text" name="percent" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->percent;?>
" /><br />
		</label>
	</fieldset>
	<input type="submit" value="Oblicz" class="pure-button pure-button-primary" />
</form>	

</div>

<div class="messages">
	<?php if ($_smarty_tpl->tpl_vars['messages']->value->isError()) {?>
		<h3>Wynikowe błędy: </h3>
		<ol class="error">
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['messages']->value->getErrors(), 'errors');
$_smarty_tpl->tpl_vars['errors']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['errors']->value) {
$_smarty_tpl->tpl_vars['errors']->do_else = false;
?>
			<li><?php echo $_smarty_tpl->tpl_vars['errors']->value;?>
</li>
			<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		</ol>
	<?php }?>

	<?php if ($_smarty_tpl->tpl_vars['messages']->value->isInfo()) {?>
		<h3>Etap: </h3>
		<ol class="info">
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['messages']->value->getInfos(), 'info');
$_smarty_tpl->tpl_vars['info']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['info']->value) {
$_smarty_tpl->tpl_vars['info']->do_else = false;
?>
			<li><?php echo $_smarty_tpl->tpl_vars['info']->value;?>
</li>
			<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		</ol>
	<?php }?>

	<?php if ((isset($_smarty_tpl->tpl_vars['result']->value->result))) {?>
		<h3>Wynik:</h3>
		<p class="result"><?php echo $_smarty_tpl->tpl_vars['result']->value->result;?>
</p>
	<?php }?>
</div>

<?php
}
}
/* {/block 'content'} */
}
