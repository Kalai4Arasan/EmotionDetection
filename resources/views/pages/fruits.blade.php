<html>
    <head>
        <title>Homepage</title>
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
       <style>
       body
{
    background-image: url("/backgroundpicture/orange.jpg");
    background-repeat: no-repeat;
    background-size: cover;
    font-family: 'Nunito', sans-serif;
    color:white;
    text-transform:uppercase;
}
h1{
    text-align: center;
    background-color: black;
    border-radius: 10px;
    height: 60px;
    justify-content:center;
}
ul
{
    margin:0px;
    padding: 0px;
    list-style: none;
    display: block;
}
ul li
{
    float: left;
    background-color: black;
    height: 40px;
    width: 200px;
    opacity: .8;
    line-height: 40px;
    margin-right: 3px;
}
ul li:hover
{
    background-color:green;
}

ul li a
{
text-decoration: none;
color:white;
}
ul li ul li 
{
color:white;
display: none;
}
ul li ul li:hover
{
    background-color:grey;
}

ul li:hover ul li
{
   
    display: block;
}
button
{
    border-radius:60px;
    float:right;
}
input
{
    border-radius:60px;
    float:right;

}

       </style>
       </head>
    <body>
        <h1>Welcome To The World Of Fruits</h1>
        <ul>
            <li><a href="index.html">Home</a></li>
            <li><a href="">Fruitopedia</a>
            <ul>
                <li> Colors</li>
                <li> Names</li>
                <li> Images</li>
            </ul>
            </li>
            <li><a href="">Images</a>
            <ul>
                <li> Graphical</li>
                <li> 1080p</li>
                <li> png</li>
            </ul>
            </li>
            <li><a href="">About</a>
            <ul>
                <li> FruitWorld</li>
                <li> Contact Us</li>
            </ul>
            </li>
            <li><a href=""> Help Center</a>
            <ul>
                <li> Online Chat</li>
                <li> Report</li>
            </ul>
            </li>
            <li><a href="login.html">Login</a></li>
            <br>
        </ul>
    </body>
</html>
