## Symfony JS file upload tutorial

### Steps to follow:

1. Checkout this repository.
2. Execute **`composer install`** to install all Php dependencies
3. Execute **`bower install`** to install all JS dependencies
4. Execute **`php bin/console doctrine:schema:validate`** in the console to verify that everything is ok.
5. Execute **`php bin/console doctrine:schema:update --force`** to update the database. You can also use `php bin/console doctine:schema:update --dump-sql` 
before this to see the Raw sql queries that will be executed.
6. Navigate to http://yourHost/projectDirectory/web/app_dev.php to test this in action.

Drag-drop any image file in the dropzone to upload it. 
The Uploaded file should appear in `web/uploads/` directory.

Follow the detailed tutorial at [DigitalFortress](http://digitalfortress.tech/js/js-file-upload-dropzone-symfony/) in case you run into any errors.

