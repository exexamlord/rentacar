<?php

namespace App\Admin\Controllers;

use OpenAdmin\Admin\Controllers\AdminController;
use OpenAdmin\Admin\Form;
use OpenAdmin\Admin\Grid;
use OpenAdmin\Admin\Show;
use \App\Models\carsmain;

class carsmainController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'carsmain';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new carsmain());

        $grid->column('id', __('Id'));
        $grid->column('carname', __('Carname'));
        $grid->column('carbody', __('Carbody'));
        $grid->column('carseats', __('Carseats'));
        $grid->column('cardoors', __('Cardoors'));
        $grid->column('carfuel', __('Carfuel'));
        $grid->column('carprice', __('Carprice'));
        $grid->column('star', __('Star'));
        $grid->column('created_at', __('Created at'));
        $grid->column('updated_at', __('Updated at'));

        return $grid;
    }


    public function list()
    {
        // Arabaları veritabanından çek
        $cars = \App\Models\carsmain::all();
    
        // View'e arabaları gönder
        return view('frontend.master', compact('cars')); // 'master' view dosyasına yönlendiriyoruz
    }


    
    protected function detail($id)
    {
        $show = new Show(carsmain::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('carname', __('Carname'));
        $show->field('carbody', __('Carbody'));
        $show->field('carseats', __('Carseats'));
        $show->field('cardoors', __('Cardoors'));
        $show->field('carfuel', __('Carfuel'));
        $show->field('carprice', __('Carprice'));
        $show->field('star', __('Star'));
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
        $form = new Form(new carsmain());

        $form->text('carname', __('Carname'));
        $form->text('carbody', __('Carbody'));
        $form->text('carseats', __('Carseats'));
        $form->text('cardoors', __('Cardoors'));
        $form->text('carfuel', __('Carfuel'));
        $form->text('carprice', __('Carprice'));
        $form->text('star', __('Star'));

        return $form;
    }
}



