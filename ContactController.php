namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact.index');
    }

    public function submit(Request $request)
    {
       

        // Redirect to the thank-you page after successful submission
        return view('contact.thank-you');
    }
}
