<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Home Laravel</title>
    
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        header {
            height: 10rem;
            background-color: magenta;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 2rem;
        }

        ul {
            display: flex;
            list-style: none;
        }

        li {
            padding: 1rem;
        }

        li a{
            text-decoration: none;
            color: black;
            
        }
    </style>
</head>
<body>
    <header>
        <h1>
            Laravel
        </h1>

        <nav>
            <ul>
                <li>
                    <a href="/pagina2">Pagina 2</a>
                </li>

                <li>
                    <a href="/pagina3">Pagina 3</a>
                </li>

                <li>
                    <a href="/pagina4">Pagina 4</a>
                </li>

                <li>
                    <a href="/pagina5">Pagina 5</a>
                </li>
            </ul>
        </nav>
    </header>
</body>
</html>