<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap');

*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;
}

.container{
    width: 100%;
    height: 100vh;
    background: #e3ebfe;
    display: flex;
    justify-content: center;
    align-items: center;
}

button{
    width: 270px;
    height: 80px;
    border: none;
    outline: none;
    background: #2f2f2f;
    color: #fff;
    font-size: 22px;
    border-radius: 40px;
    text-align: center;
    box-shadow: 0 6px 20px -5px rgba(0,0,0,0.4);
    position: relative;
    overflow: hidden;
    cursor: pointer;
}

.check-box{
    width: 80px;
    height: 80px;
    border-radius: 40px;
    box-shadow: 0 0 12px -2px rgba(0,0,0,0.5);
    position: absolute;
    top: 0;
    right: -40px;
    opacity: 0;
}

.check-box svg{
    width: 40px;
    margin: 20px;
}

svg path{
    stroke-width: 3;
    stroke: #fff;
    stroke-dasharray: 34;
    stroke-dashoffset: 34;
    stroke-linecap: round;
}

.active{
    background: #ff2b75;
    transition: 1s;
}

.active .check-box{
    right: 0;
    opacity: 1;
    transition: 1s;
}

.active p{
    margin-right: 125px;
    transition: 1s;
}

.active svg path{
    stroke-dashoffset: 0;
    transition: 1s;
    transition-delay: 1s;
}
    </style>
</head>
<body>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Submit Button</title>
    <link rel="stylesheet" href="./btn3.css">
</head>
<body>
    <div class="container">
        <button id="btn">
            <p id="btnText">Submit</p>
            <div class="check-box">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 50 50">
                    <path fill="transparent" d="M14.1 27.2l7.1 7.2 16.7-16.8" />
                </svg>
            </div>
        </button>
    </div>
    <script type="text/javascript">
        const btn = document.querySelector("#btn");
        const btnText = document.querySelector("#btnText");

        btn.onclick = () => {
            btnText.innerHTML = "Thanks";
            btn.classList.add("active");
        };
    </script>
</body>
</html>
</body>
</html>