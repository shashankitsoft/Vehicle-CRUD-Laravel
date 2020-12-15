

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

* List all manufacturers

http://127.0.0.1:8000/api/auth/manufacturer

header:
Authorization: Bearer usertokentokentokentokentoken

* Update Manufacturer

http://127.0.0.1:8000/api/auth/manufacturer/id

method: PUT
header:
Authorization: Bearer usertokentokentokentokentoken

body- x-www-form-url-encoded:
name: Manufacturer 1X


* Delete Manufacturer
http://127.0.0.1:8000/api/auth/manufacturer/id

method: DELETE
header:
Authorization: Bearer usertokentokentokentokentoken


### CARS

* Create Car

http://127.0.0.1:8000/api/auth/car

header:
Authorization: Bearer usertokentokentokentokentoken

body - x-www-form-url-encoded:
name: Car 1
manufacturer_id: 2


* Update Car

http://127.0.0.1:8000/api/auth/car/id

method: PUT
header:
Authorization: Bearer usertokentokentokentokentoken

body- x-www-form-url-encoded:
name: Car 1X
manufacturer_id: 1

* List all cars

http://127.0.0.1:8000/api/auth/car

header:
Authorization: Bearer usertokentokentokentokentoken


### Drivers

* Create Driver

http://127.0.0.1:8000/api/auth/driver

header:
Authorization: Bearer usertokentokentokentokentoken

body - x-www-form-url-encoded:
name: Driver 1

* Other routes Similar to Manufacturers