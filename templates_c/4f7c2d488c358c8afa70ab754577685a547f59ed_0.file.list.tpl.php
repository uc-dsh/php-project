<?php
/* Smarty version 4.3.1, created on 2023-08-04 14:39:38
  from 'C:\xampp\htdocs\UCERTIFY\php-assignment\templates\inc\list.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_64ccc052d7c9d1_66635748',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4f7c2d488c358c8afa70ab754577685a547f59ed' => 
    array (
      0 => 'C:\\xampp\\htdocs\\UCERTIFY\\php-assignment\\templates\\inc\\list.tpl',
      1 => 1691133261,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64ccc052d7c9d1_66635748 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
    <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasExampleLabel">Questions</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
        <div>
            <div class="row mx-0 mb-3">

                <div class="btn-group">
                    <input type="radio" class="btn-check" name="options-base" id="option5" autocomplete="off" checked>
                    <label class="btn btn-outline-primary all_filter" for="option5">All</label>

                    <input type="radio" class="btn-check" name="options-base" id="option6" autocomplete="off">
                    <label class="btn btn-outline-primary attempted_filter" for="option6">Attempted</label>

                    <input type="radio" class="btn-check" name="options-base" id="option8" autocomplete="off">
                    <label class="btn btn-outline-primary unattempted_filter" for="option8">Unattempted</label>
                </div>
                            </div>
            <ul class="list-group">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ALL_QUESTIONS']->value, 'question');
$_smarty_tpl->tpl_vars['question']->iteration = 0;
$_smarty_tpl->tpl_vars['question']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['question']->value) {
$_smarty_tpl->tpl_vars['question']->do_else = false;
$_smarty_tpl->tpl_vars['question']->iteration++;
$__foreach_question_1_saved = $_smarty_tpl->tpl_vars['question'];
?>
                    <li class="list-group-item question_list">
                        <a href=<?php echo ("./test.php?question=").($_smarty_tpl->tpl_vars['question']->iteration);?>

                            class="h-100 text-dark fs-smaller text-decoration-none">
                            <span class="badge bg-secondary me-2"><?php echo $_smarty_tpl->tpl_vars['question']->iteration;?>
</span>
                            <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'substr' ][ 0 ], array( $_smarty_tpl->tpl_vars['question']->value["snippet"],0,51 ));?>

                        </a>
                        <span class="badge fs-10 badge-attempted bg-success" style="display: none;"
                            id=<?php echo ("question_a_").($_smarty_tpl->tpl_vars['question']->iteration);?>
>Attempted</span>
                        <span class="badge fs-10 badge-unattempted bg-warning"
                            id=<?php echo ("question_u_").($_smarty_tpl->tpl_vars['question']->iteration);?>
>Unattempted</span>
                    </li>
                <?php
$_smarty_tpl->tpl_vars['question'] = $__foreach_question_1_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </ul>
        </div>
    </div>
</div><?php }
}
