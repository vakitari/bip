<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400..700&display=swap" rel="stylesheet">
    <title>Document</title>
    <style>
      body{
        font-family: "Dancing Script", cursive;
      }
     
      input, textarea {
        font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
      }

      .div-nav{
        display: flex;
        align-items: center
        
      }
      .div-nav p{
        padding-left: 1%;
      }
      .navbar-brand{
        font-size: 50px;
      }
      .prod-home{
        display: flex;
        justify-content: center;
        margin-top: 20px;
      }
      .p_b{
        display: flex;
        justify-content: center;
      }
      .p_b a{
        margin: 10px;
      }
      .prod-div{
        background: #D9D9D9;
        width: 300px;
        margin-left: 50px;
        margin-right: 50px;
        display: flex;
        flex-direction: column;
        border-radius: 15px;
      }
      .prod-div img{
        width: 100%;
      }
      .pp{
        margin-bottom: 0rem;
      }

      .prod-div p{
        margin-top: 5px;
        font-size: 25px;
        padding-left: 15px;
      }
      .home-inf{
        display: flex;
        justify-content: center;
        margin-top: 20px;
      }
      .inf-div{
        background: #D9D9D9;
        text-align: center;
        height: 300px;
        width: 300px;
        margin-left: 50px;
        margin-right: 50px;
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
        border-radius: 15px;
      }
      .inf-div h2{
        font-size: 100px;
      }
      .inf-div p{
        font-size: 25px;
      }
      .d-flex p{
        margin-top: 10px;
      }
      .home-div{
        background: #D6D6D6;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        height: 200px;
        border-radius: 15px;
        margin-top: 15px;
      }
      .home-div p{
        text-align: center;
        font-size: 50px;
        width: 80%;
      }
      .text{
        display: flex;
        flex-direction: row;
      }
      .imgReg img{
       width: 700px;
       height: 890px;
        
      }
      .imgReg::before {
      content: "Регистрация позволит нам отслеживать ваши покупки и лучше разбираться в ваших вкусах, спасибо что выбираете Flower. ";
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      color: white;
      font-size: 24px;
      text-align: center;
      background: rgba(0, 0, 0, 0.7);
      padding: 50% 174px 174px 174px;
      width: 100%;
      height: 100%;
      box-sizing: border-box;
      }
      .imgReg{
        position: relative;
        margin-left: 10px;
      }
      .imgLog img{
       width: 700px;
       height: 890px;
        
      }
      .imgLog::before {
      content: "Авторизируйтесь на нашем сайте для того чтобы иметь возможность продавать свои товары и мы бы могли подберать цветы специально для вас ";
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      color: white;
      font-size: 24px;
      text-align: center;
      padding: 50% 174px 174px 174px;
      width: 100%;
      height: 100%;
      background: rgba(0, 0, 0, 0.7);
      box-sizing: border-box;
      }
      .imgLog{
        position: relative;
        margin-left: 10px;
      }
    </style>
</head>
<body style="background-color: #EEEEEE;"> 

<nav class="navbar bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="/bas/home">Flower</a>
    <form class="d-flex" role="search">
    
    <p><a href="/bas/register" class="link-success link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover me-2">Зарегистрироваться</a></p>
    <p><a href="/bas/login" class="link-success link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover me-2">Войти</a></p>
      <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success" type="submit">Поиск</button>
    </form>
  </div>
</nav>
<div class="div-nav" style="background-color: #E0E0E0;">
<p>Все цветы</p><p>Доставка</p> <p>Контакты</p> <p>О нас</p>  
</div>

</div>
<div class="container">
    <div class="row">