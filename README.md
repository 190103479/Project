




## About Project

This is my project about FORUM, where people can log in to application and then they can start to share information
between each other, speak by typing and talk about interesting topics.
It's is like Clubhouse, but without audio.
This is very useful application, where people can get close to each other, and upgrade communication skills!


<img src="images/seventeen.png" width="900">


## My DATABASE
My database consist of four tables: USERS table; POSTS table; POST_IMAGES table; CONTACTS table;

### USERS table:
USERS table has information about authorized users, and contain informations like id, name, username(short form of name), 
email, description about user, password and user profile image.

<img src="images/twenty.PNG" width="900">

### POSTS table:
POSTS table contain user's posts. Table has attrubutes like body(post of user),id and user_id which is foreign key of 
the table.

<img src="images/twone.png" width="900">


### POST_IMAGES table:
 POST_IMAGES table contain user posted files, like gif,jpg and png. Table's attributes are id, post_id(foreign key) and
 postImage.

<img src="images/twtwo.png" width="900">


### CONTACTS table:
 CONTACTS table contain messages of users to Administration of the Forum. Table has id, user_id(foreign key), name, email,phone_number, subject and message attributes.

<img src="images/twthree.png" width="900">


## DATABASE ERD
  This is entity relationship diagram of my database.
  My database has one to many relationship between USERS and POSTS tables, also between USERS and CONTACTS tables.
  It has one to one relationship between POSTS and POST_IMAGES tables
   
<img src="images/eight.PNG" width="900">



## Pages of the Forum

### Register page
<img src="images/fivteen.png" width="900">

### Login page
<img src="images/fourteen.png" width="900">

### Home page
<img src="images/nine.png" width="900">

### Profile page
<img src="images/ten.png" width="900">

### Privacy page
<img src="images/eleven.PNG" width="900">

### Contact page
<img src="images/twelve.png" width="900">

## About my application in detail
My application has several features

### User can edit your profile

<img src="images/one.png" width="900">

<img src="images/two.png" width="900">

<img src="images/three.png" width="900">


### User can't edit profile of another user

<img src="images/four.png" width="900">

### User's posts will be shown in profile page, after posting it

<img src="images/five.png" width="900">

### User can reset password by sending email

<img src="images/sixteen.png" width="900">

<img src="images/six.png" width="900">

### User can email to admin by contact form

<img src="images/seven.png" width="900">
