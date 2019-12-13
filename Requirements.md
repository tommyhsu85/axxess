Requirements
1. Create a user-facing page on route GET /signup that displays a form to add a new
patient. The form will make a request to POST /signup that handles patient creation.

'SignupController@index'
'SignupController@update'

2. Create a user-facing page on route GET /visit that displays a form to add a visit for an
existing patient. The form takes in the patient ID and the visit date as input, and will make a
request to POST /visit that handles visit creation.


'SignupController@visit'
'SignupController@vupdate'

3. Each patient has a start date field (start_date) that denotes their initial contact with our
center. Each patient has a deadline, which is 90 days after this start date, and is expected to
have a visit before this deadline.


Create a user-facing page on route GET /upcoming that displays a list of every patient
having their visit deadline within 4 weeks from today. Also, for each patient, display the
remaining days counting from today to that deadline.

'SignupController@upcoming'

4. Create a mechanism to process missed visits. You can either create a command, job, or a
web route, etc. for this. This will retrieve all patients that missed a visit by the deadline and
record the string missed in the follow_up field of these patients.

'ApiController@check_miss'

5. Create an API route GET /missed that returns the list of patients that missed their visits
in JSON format.

'ApiController@miss'

.env
APP_NAME=Laravel
APP_ENV=local
APP_KEY=base64:aIB2tWSvn6lbMpKXUAe3gdaxKhV7kr2q780l4SLy8sk=
APP_DEBUG=true
APP_URL=http://localhost

LOG_CHANNEL=stack

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=laravel
DB_USERNAME=root
DB_PASSWORD=

BROADCAST_DRIVER=log
CACHE_DRIVER=file
QUEUE_CONNECTION=sync
SESSION_DRIVER=file
SESSION_LIFETIME=120

REDIS_HOST=127.0.0.1
REDIS_PASSWORD=null
REDIS_PORT=6379

MAIL_DRIVER=smtp
MAIL_HOST=smtp.mailtrap.io
MAIL_PORT=2525
MAIL_USERNAME=null
MAIL_PASSWORD=null
MAIL_ENCRYPTION=null

AWS_ACCESS_KEY_ID=
AWS_SECRET_ACCESS_KEY=
AWS_DEFAULT_REGION=us-east-1
AWS_BUCKET=

PUSHER_APP_ID=
PUSHER_APP_KEY=
PUSHER_APP_SECRET=
PUSHER_APP_CLUSTER=mt1

MIX_PUSHER_APP_KEY="${PUSHER_APP_KEY}"
MIX_PUSHER_APP_CLUSTER="${PUSHER_APP_CLUSTER}"

