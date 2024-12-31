<?php

namespace App\Admin\Controllers;

use OpenAdmin\Admin\Controllers\AdminController;
use OpenAdmin\Admin\Form;
use OpenAdmin\Admin\Grid;
use OpenAdmin\Admin\Show;
use \App\Models\deneme2;

class deneme2controllers extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'deneme2';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new deneme2());

        $grid->column('id', __('Id'));
        $grid->column('ada', __('Ada'));
        $grid->column('gfa', __('Gfa'));
        $grid->column('awd', __('Awd'));
        $grid->column('created_at', __('Created at'));
        $grid->column('updated_at', __('Updated at'));

        return $grid;
    }

    /**
     * Make a show builder.
     *
     * @param mixed $id
     * @return Show
     */
    protected function detail($id)
    {
        $show = new Show(deneme2::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('ada', __('Ada'));
        $show->field('gfa', __('Gfa'));
        $show->field('awd', __('Awd'));
        $show->field('created_at', __('Created at'));
        $show->field('updated_at', __('Updated at'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new deneme2());

        $form->text('ada', __('Ada'));
        $form->text('gfa', __('Gfa'));
        $form->text('awd', __('Awd'));

        return $form;
    }
}
