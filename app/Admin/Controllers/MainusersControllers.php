<?php

namespace App\Admin\Controllers;

use OpenAdmin\Admin\Controllers\AdminController;
use OpenAdmin\Admin\Form;
use OpenAdmin\Admin\Grid;
use OpenAdmin\Admin\Show;
use \App\Models\Mainusers;
use Illuminate\Http\Request;

class MainusersControllers extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Mainusers';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Mainusers());

        $grid->column('id', __('Id'));
        $grid->column('name', __('Name'));
        $grid->column('username', __('Username'));
        $grid->column('mail', __('Mail'));
        $grid->column('password', __('Password'));
        $grid->column('phone', __('Phone'));
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
        $show = new Show(Mainusers::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('name', __('Name'));
        $show->field('username', __('Username'));
        $show->field('mail', __('Mail'));
        $show->field('password', __('Password'));
        $show->field('phone', __('Phone'));
        $show->field('created_at', __('Created at'));
        $show->field('updated_at', __('Updated at'));

        return $show;
    }

    //login kısmı başlangıç-----------------------------------------------------

    public function showLoginForm()
    {
        return view('login'); 
    }

    
    public function login(Request $request)
{
    $mail = $request->input('mail');
    $password = $request->input('password');

    
    $user = Mainusers::where('mail', $mail)->first();

    
    if (!$user) {
        return redirect()->route('login')->withErrors(['message' => 'E-posta bulunamadı.']);
    }

    // Şifreyi kontrol et (düz şifre karşılaştırması)
    if ($password !== $user->password) {
        return redirect()->route('login')->withErrors(['message' => 'Şifre hatalı.']);
    }

    // Başarılı giriş
    session(['user_id' => $user->id]);

    return redirect()->route('dashboard');
}

public function dashboard()
{
    return view('frontend.dashboard');
}

public function logout()
{
    session()->flush(); 
    return redirect('/'); 
}

public function profile()
{
    return view('frontend.profile');
}


    //login kısmı bitiş-----------------------------------------------------

    protected function form()
    {
        $form = new Form(new Mainusers());

        $form->text('name', __('Name'));
        $form->text('username', __('Username'));
        $form->email('mail', __('Mail'));
        $form->password('password', __('Password'));
        $form->phonenumber('phone', __('Phone'));

        return $form;
    }
}
