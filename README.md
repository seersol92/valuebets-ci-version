# ValueBETS SYSTEM
Manage member user & login System for CodeIgniter. It's very small, secure (with notification to review activity log in, will Sent via Your Email) and very fast login system, :+1: with bootstrap 3 & Custom Theme.

Created By me [Hamad Hasan](http://seersol.com)


# Features
- Add user
- Delete user
- Ban, Unban user
- Register new user sent to email token
- Forget password
- Role user level
- Edit user profile
- Gravatar user profile
- Recaptcha by Google
- Compress HTML Settings, for more speed
- Secure Account (Notification to Review Activity Log In, Will Sent via Email like Google) :new: :tada:
- Active or Inactive Recaptcha :new:
- Add Settings :new:
- Add Theme :new: :tada:

# Settings
- database.php
```
'hostname' => 'localhost', 'username' => '', 'password' => '', 'database' => '',
```

- config.php
```
//Link URL
$config['base_url'] = '';
// Sent email from:
$config['register'] = '';
$config['forgot'] = '';
```

# User Level
- is_admin

# Install
- Clone or download
- Import Sql file
- Do Settings
- Done

# login
- Pass : admin
- User : admin@gmail.com

# Check User Level
controller.php
```
//check user level
if(empty($data['role'])){
    redirect(site_url().'main/login/');
}
$dataLevel = $this->userlevel->checkLevel($data['role']);
//check user level

if($dataLevel == "is_admin"){
  (your code here)
}
```

# About
