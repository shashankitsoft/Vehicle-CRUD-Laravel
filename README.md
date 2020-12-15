

## Laravel CRUD Vehicle

## REST APIs - Test via postman

* Signup

http://127.0.0.1:8000/api/auth/signup

Header: 
Content-Type:application/json
X-Requested-With:XMLHttpRequest

Body:
name: Shashank
email: sha@gmail.com
password: 123456
password_confirmation: 123456

* Login

http://127.0.0.1:8000/api/auth/login

Body:

email: sha@gmail.com
password: 123456
remember_me: 1

* Logout

http://127.0.0.1:8000/api/auth/logout

headers:
Authorization: Bearer usertokentokentokentokentoken

* Get User Data

http://127.0.0.1:8000/api/auth/user

headers:
Authorization: Bearer usertokentokentokentokentoken


### Manufacturers

* Create Manufacturer

http://127.0.0.1:8000/api/auth/manufacturer

header:
Authorization: Bearer usertokentokentokentokentoken

body - x-www-form-url-encoded:
name: Manufacturer 1

* Get Manufacturer detail

http://127.0.0.1:8000/api/auth/manufacturer/id

header:
Authorization: Bearer usertokentokentokentokentoken






