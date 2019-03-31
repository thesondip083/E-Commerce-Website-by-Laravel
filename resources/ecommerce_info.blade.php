"php artisan vendor:publish"
is used to modify the existing default designs.Run the command.Choose what to change then.


2.paginator er bootstrap-4.blade.php is edited.default is not working as my videos.We set the design as our custom design in the theme.

3.https://stackoverflow.com/questions/39520825/laravel-pagination-three-dots-separator-customization (threedots...)


4.Script @php artisan package:discover handling the post-autoload-dump event returned with error code 1 
solution:composer require genealabs/laravel-caffeine ->run this command in cmd
(https://stackoverflow.com/questions/46986001/script-php-artisan-packagediscover-handling-the-post-autoload-dump-event-retur)


5.To change the tax in the cart system(https://github.com/hardevine/LaravelShoppingcart)
run 
         "php artisan venor:publish" 
and check the cart.php in the App\config file to change 
required value of tax.We can change it in the main vendor files but those change will not be persisted cause a new update will remove the set data.


6.If the changing not worked as the changing rate of the tax run those two commands sequentially  
             "php artisan cache:clear"
             "php artisan config:cache"