<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>



## CRUD PROJECT STEPS : 
###### Invironment Setup : 
* 1.Install Laravel and make a database named crud 
* 2.Ready the Blade 
* 3.Route callig 
* 4.Controller create 
* 5.model and migration create
* 6.Table create in Migration and submit table 
* 7.Use model to controller 
* 8.Use controller to route
* 9.In controller create a function to insert data 

```php
 function insert( Request $req ){
        $name = $req->get('pname');
        $price = $req->get('pprice');
        $pimage = $req->file('image')->getClientOriginalName();
      	//move upload file
        $req->image->move(public_path('images'),$pimage);


10.make path with controller function to save data
 //step 2 for save data after completing route with csrf token
        $prod = new product();
        $prod->PName = $name;
        $prod->PPrice = $price;
        $prod->Pimage = $pimage;
        $prod->save();
        return redirect('/');
```

Data inserted Done 


## Show Data :

* 1.Create function name readdata()
* 2.Create route
* 3.code in function
```php
 $pdata = product::all();
 return view('insertRead',['data'=>$pdata]);
 ```
* 4.Create Table in blade 
* 5.Use loop to show data 

## Edit & Delete Data : 
* 1.Create new blade
* 2.create form 
* 3.Route path 
* 4.keep insert form in form and set input for per td and show value via hidden type
* 5.Create controller 
* 6.Show value in upadteview blade
* 7.Delete data via else function 
* 8.keep protected $primaryKey = 'Id'; on model
* 9.take hidden input in updateview to take id 

