<?php 
namespace App\Http\ViewComposers;

use Illuminate\View\View;

class HomepageComposer
{
    
    /**
     * Bind data to the view.
     *
     * @param  View  $view
     * @return void
     */
    public function compose(View $view)
    {
        $view->with('pt12312', '2018');
    }
}
 ?>