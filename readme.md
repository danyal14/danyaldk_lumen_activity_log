# Activity Log for Lumen framework

Very simple package to log user activities. Aim is to capture which object was created / updated / deleted by which user.
Package it self has no relation implemented and stores whatever is passed.

### Developer
    
    Danyal - www.danyal.dk

### Installation

You can install the package via composer:

    composer require danyaldk/lumen-activity-log
    
### Register package in you Lumen API.

    edit: bootstrap/app.php & add fillowing code
    
    $app->register(\DANYALDK\ActivityLog\Providers\ActivityLogServiceProvider::class);

### Copy database migration.

This will copy the database migration file file to you api database/migrations folder.

    php artisan danyaldk:copy:migration

### Run database migration.

This will copy the database migration file file to you api database/migrations folder.

    php artisan migrate

### Usage 
Now when package is configured successfully, you are good to utilize the activity log. Take a look at example MyController.

    use DANYALDK\ActivityLog\ActivityLog;
    use Illuminate\Http\Request;

    /**
     * Class MyController
     *
     * @package App\Http\Controllers
     */
    class MyController extends Controller
    {
        public function store(Request $request)
        {
            // Example: 
            $object = Model::create([....]);
            
            // Log activity: 
            if ($object->id) {
                ActivityLog::log($request, ['object' => $object, 'user_id' => $user_id, 'message' => 'Object is created successfully']);
            }
        }
    }
