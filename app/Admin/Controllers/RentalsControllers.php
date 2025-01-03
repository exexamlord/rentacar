<?php

namespace App\Admin\Controllers;

use OpenAdmin\Admin\Controllers\AdminController;
use OpenAdmin\Admin\Form;
use OpenAdmin\Admin\Grid;
use OpenAdmin\Admin\Show;
use \App\Models\Rentals;
use Illuminate\Http\Request;
use Carbon\Carbon;

class RentalsControllers extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Rentals';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Rentals());

        $grid->column('id', __('Id'));
        $grid->column('car_id', __('Car id'));
        $grid->column('user_id', __('User id'));
        $grid->column('pickupLocation', __('PickupLocation'));
        $grid->column('dropoffLocation', __('DropoffLocation'));
        $grid->column('username', __('Username'));
        $grid->column('start_time', __('Start time'));
        $grid->column('end_time', __('End time'));
        $grid->column('created_at', __('Created at'));
        $grid->column('updated_at', __('Updated at'));
        $grid->column('durum', __('Durum'));

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
        $show = new Show(Rentals::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('car_id', __('Car id'));
        $show->field('user_id', __('User id'));
        $show->field('pickupLocation', __('PickupLocation'));
        $show->field('dropoffLocation', __('DropoffLocation'));
        $show->field('username', __('Username'));
        $show->field('start_time', __('Start time'));
        $show->field('end_time', __('End time'));
        $show->field('created_at', __('Created at'));
        $show->field('updated_at', __('Updated at'));
        $show->field('durum', __('durum'));

        return $show;
    }

    //form controller begin

    public function storeRental(Request $request)
{
    // Verilerin doğrulaması
    $validated = $request->validate([
        'car_id' => 'required|exists:cars,id', 
        'pickupLocation' => 'required|string',
        'dropoffLocation' => 'required|string',
        'username' => 'required|string',
        'pickup_date' => 'required|string', 
        'pickup_time' => 'required|string', 
        'dropoff_date' => 'required|string', 
        'dropoff_time' => 'required|string', 
        'durum' => 'required|string',
    ]);

    // Tarih ve saatleri alıyoruz
    $pickup_date = $validated['pickup_date'];
    $pickup_time = $validated['pickup_time'];
    $dropoff_date = $validated['dropoff_date'];
    $dropoff_time = $validated['dropoff_time'];

    // Carbon ile tarih ve saatleri birleştirip Carbon nesnesine dönüştürüyoruz
    $start_time = Carbon::createFromFormat('Y-m-d H:i', $pickup_date . ' ' . $pickup_time);
    $end_time = Carbon::createFromFormat('Y-m-d H:i', $dropoff_date . ' ' . $dropoff_time);

    // Eğer Carbon nesnesi oluşturulamazsa hata mesajı döndür
    if (!$start_time || !$end_time) {
        return response()->json(['error' => 'Geçersiz tarih veya saat formatı.'], 400);
    }

    // Veritabanına kaydediyoruz
    $rental = new Rentals();
    $rental->car_id = $validated['car_id'];
    $rental->user_id = auth()->id(); 
    $rental->pickupLocation = $validated['pickupLocation'];
    $rental->dropoffLocation = $validated['dropoffLocation'];
    $rental->username = $validated['username'];
    $rental->start_time = $start_time->format('Y-m-d H:i:s');  
    $rental->end_time = $end_time->format('Y-m-d H:i:s');  
    $rental->durum = $validated['durum'];
    $rental->save();

    return redirect('/dashboard')->with('success', 'Araç başarıyla kiralandı!');
}

    //form controller finish

    protected function form()
    {
        $form = new Form(new Rentals());

        $form->text('car_id', __('Car id'));
        $form->text('user_id', __('User id'));
        $form->text('pickupLocation', __('PickupLocation'));
        $form->text('dropoffLocation', __('DropoffLocation'));
        $form->text('username', __('Username'));
        $form->text('start_time', __('Start time'));
        $form->text('end_time', __('End time'));
        $form->text('durum', __('durum'));

        return $form;
    }
}
