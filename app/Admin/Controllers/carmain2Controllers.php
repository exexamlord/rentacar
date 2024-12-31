<?php

namespace App\Admin\Controllers;

use OpenAdmin\Admin\Controllers\AdminController;
use OpenAdmin\Admin\Form;
use OpenAdmin\Admin\Grid;
use OpenAdmin\Admin\Show;
use \App\Models\carmain2;

class carmain2Controllers extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'carmain2';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new carmain2());

        $grid->column('id', __('Id'));
        $grid->column('image')->image();
        $grid->column('carname', __('Carname'));
        $grid->column('carbody', __('Carbody'));
        $grid->column('cardoors', __('Cardoors'));
        $grid->column('carseats', __('Carseats'));
        $grid->column('carbagaj', __('Carbagaj'));
        $grid->column('carstar', __('Carstar'));
        $grid->column('carprice', __('Carprice'));
        $grid->column('carvites', __('Carvites'));
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
        $show = new Show(carmain2::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('carimage', __('Carimage'));
        $show->field('carname', __('Carname'));
        $show->field('carbody', __('Carbody'));
        $show->field('cardoors', __('Cardoors'));
        $show->field('carseats', __('Carseats'));
        $show->field('carbagaj', __('Carbagaj'));
        $show->field('carstar', __('Carstar'));
        $show->field('carprice', __('Carprice'));
        $show->field('carvites', __('Carvites'));
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
        $form = new Form(new carmain2());

        $form->image('carimage', __('Carimage'));
        $form->text('carname', __('Carname'));
        $form->text('carbody', __('Carbody'));
        $form->text('cardoors', __('Cardoors'));
        $form->text('carseats', __('Carseats'));
        $form->text('carbagaj', __('Carbagaj'));
        $form->text('carstar', __('Carstar'));
        $form->text('carprice', __('Carprice'));
        $form->text('carvites', __('Carvites'));

        return $form;
    }
}
