<?php
/* Smarty version 4.3.0, created on 2023-08-25 15:13:45
  from 'C:\OSPanel\domains\swagelok_modx\manager\templates\default\element\tv\renders\input\number.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_64e89af90aaae7_90682797',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '189d9c1e2779fa8915f1208f4ebb482a6c202fb1' => 
    array (
      0 => 'C:\\OSPanel\\domains\\swagelok_modx\\manager\\templates\\default\\element\\tv\\renders\\input\\number.tpl',
      1 => 1673935102,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64e89af90aaae7_90682797 (Smarty_Internal_Template $_smarty_tpl) {
?><input id="tv<?php echo $_smarty_tpl->tpl_vars['tv']->value->id;?>
" name="tv<?php echo $_smarty_tpl->tpl_vars['tv']->value->id;?>
"
    type="text" class="textfield"
    value="<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['tv']->value->get('value'), ENT_QUOTES, 'UTF-8', true);?>
"
    <?php echo (($tmp = $_smarty_tpl->tpl_vars['style']->value ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>

    tvtype="<?php echo $_smarty_tpl->tpl_vars['tv']->value->type;?>
"
/>

<?php echo '<script'; ?>
>
// <![CDATA[

Ext.onReady(function() {
    const fld = MODx.load({
    
        xtype: 'numberfield'
        ,itemId: 'tv<?php echo $_smarty_tpl->tpl_vars['tv']->value->id;?>
'
        ,applyTo: 'tv<?php echo $_smarty_tpl->tpl_vars['tv']->value->id;?>
'
        ,width: '99%'
        ,enableKeyEvents: true
        ,autoStripChars: true
        ,allowBlank: <?php if ($_smarty_tpl->tpl_vars['params']->value['allowBlank'] == 1 || $_smarty_tpl->tpl_vars['params']->value['allowBlank'] == 'true') {?>true<?php } else { ?>false<?php }?>
        ,allowDecimals: <?php if ((($tmp = $_smarty_tpl->tpl_vars['params']->value['allowDecimals'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp) && (($tmp = $_smarty_tpl->tpl_vars['params']->value['allowDecimals'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp) != 'false' && (($tmp = $_smarty_tpl->tpl_vars['params']->value['allowDecimals'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp) != 'No') {?>true<?php } else { ?>false<?php }?>
        ,decimalPrecision: <?php if ((($tmp = $_smarty_tpl->tpl_vars['params']->value['decimalPrecision'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp) >= 0) {
echo sprintf("%d",(($tmp = $_smarty_tpl->tpl_vars['params']->value['decimalPrecision'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp));
} else { ?>2<?php }?>
        ,strictDecimalPrecision: <?php if ((($tmp = $_smarty_tpl->tpl_vars['params']->value['strictDecimalPrecision'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp) && (($tmp = $_smarty_tpl->tpl_vars['params']->value['strictDecimalPrecision'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp) != 'false' && (($tmp = $_smarty_tpl->tpl_vars['params']->value['strictDecimalPrecision'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp) != 'No') {?>true<?php } else { ?>false<?php }?>
        ,decimalSeparator: <?php if ((($tmp = $_smarty_tpl->tpl_vars['params']->value['decimalSeparator'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp)) {?>'<?php echo (($tmp = $_smarty_tpl->tpl_vars['params']->value['decimalSeparator'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
'<?php } else { ?>'.'<?php }?>
        <?php if ((($tmp = $_smarty_tpl->tpl_vars['params']->value['maxValue'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp) != '' && is_numeric((($tmp = $_smarty_tpl->tpl_vars['params']->value['maxValue'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp))) {?>,maxValue: <?php echo (($tmp = $_smarty_tpl->tpl_vars['params']->value['maxValue'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp);
}?>
        <?php if ((($tmp = $_smarty_tpl->tpl_vars['params']->value['minValue'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp) != '' && is_numeric((($tmp = $_smarty_tpl->tpl_vars['params']->value['minValue'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp))) {?>,minValue: <?php echo (($tmp = $_smarty_tpl->tpl_vars['params']->value['minValue'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp);
}?>
        ,msgTarget: 'under'
    
        ,listeners: {
            keydown: {
                fn: MODx.fireResourceFormChange,
                scope: this
            }
        }
    });
    MODx.makeDroppable(fld);
    Ext.getCmp('modx-panel-resource').getForm().add(fld);
});

// ]]>
<?php echo '</script'; ?>
>
<?php }
}
