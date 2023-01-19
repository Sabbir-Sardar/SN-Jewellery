<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<div class="form">
  <div class="form__box">
    <div class="form__left">
      <div class="form__padding"><img class="form__image" src="https://i.pinimg.com/originals/8b/44/51/8b4451665d6b2139e29f29b51ffb1829.png"/></div>
    </div>
    <div class="form__right">
      <div class="form__padding-right">
        <form action="{{route('admincheck')}}" method="post">
          @csrf 
          <h1 class="form__title">Admin Login</h1>
          
          <input class="form__password" name="password" type="password" placeholder="******"/>
          <input class="form__submit-btn" type="submit" value="Login"/>
        
      </div>
    </div>
  </div>
</div>
      
      <style>
         @import url("https://fonts.googleapis.com/css?family=Ubuntu:700&display=swap");
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: "Ubuntu", sans-serif;
  text-decoration: none;
}

.form {
  width: 720px;
  height: 500px;
  margin: 50px auto;
  padding: 45px 65px;
  background: linear-gradient(to right, #8300cd, #b800c4);
}
.form__box {
  width: 100%;
  height: 100%;
  display: flex;
  justify-content: space-around;
  align-items: center;
  background: #fff;
  border-radius: 40px;
}
.form__left {
  width: 50%;
}
.form__padding {
  width: 210px;
  height: 210px;
  background: #f2f2f2;
  border-radius: 50%;
  margin: 0 auto;
  line-height: 210px;
  position: relative;
}
.form__image {
  max-width: 100%;
  width: 60%;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
}
.form__right {
  line-height: 26px;
  width: 50%;
}
.form__padding-right {
  padding: 0 25px;
}
.form__title {
  font-size: 18px;
  font-weight: bold;
  text-align: center;
  margin-bottom: 30px;
}
.form__submit-btn {
  background: #1fcc44;
  cursor: pointer;
}
.form__submit-btn:hover {
  background: #ff3f70;
}
.form__email {
  position: relative;
}

input {
  display: block;
  width: 100%;
  margin-bottom: 25px;
  height: 35px;
  border-radius: 20px;
  border: none;
  background: #f2f2f2;
  padding: 10px;
  font-size: 14px;
  position: relative;
}
input:after {
  position: absolute;
  content: "a***";
}

a {
  color: #71df88;
  position: relative;
}
a:hover {
  color: #ff3f70;
}

      </style>

   
</body>
</html>