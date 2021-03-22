1. Run the migration and db seeder(have db named restproject). all the relationship are defined in models
2. The API, table relationship and and api authentication are working fine
3. test the api via postman since the api is not consumed using vue
4.Before testing you need to test the login api(have a form on postman with the email and paasword field) the email and pwd are:
   email= user@gmail.com
   password = abcd1234
 5 after testing the login route an access token is generated which should be passed on the header section before testing any api endpoint
 6. All the api are in api.php file
 
 7 -for add abd update order api pass the following field on postmast form
     order_number
	 
   -For add and update product api pass the following field on postmast form
     name
	 description
	 quantity
	 
   -For add and update suppliers api pass the following field on postmast form
     name
	API AUTHENTICATION IS DONE USING POST MAN
