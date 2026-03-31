<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            background-color: #FBC3C1;
            font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif  }
        .im{
            width: 100px;
            height: 100px;
            border-radius: 20px;
        }
        .car{
            display: flex;
            justify-content: center;
            gap: 20px;
            position: relative;
            top: 30px;
        }
        .both{
            display: flex;
            flex-direction: column;
            gap: 15px;
            justify-content: center;
            position: relative;
            top: 30px;
            left: 100px;
            width: 600px;
            height: 400px;
            text-align: center;
        }
        h1{
            color: orangered;
            font-weight: bolder;
            position: relative;
            left: 200px;
        }
        img:hover{
            border-radius: 50px ;
            cursor: pointer;
        }
        img{
            transition: border-radius 2s ease;
        }
    </style>
</head>
<body>
    <div class="both">
        <h1>Play The Gaame</h>
        <div class="car">
            <img src="images/paper.jpeg" alt="paper" class="im">
            <img src="images/rock.jpeg" alt="rock" class="im">
            <img src="images/Scissors.jpeg" alt="sissors" class="im">
        </div>
    </div>
</body>
</html>