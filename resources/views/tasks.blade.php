<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>MLP To-Do</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/css/app.css">
</head>
<body>
    <header>
        <div class="container">
            <div id="logo">
                <img src="/img/logo.png" alt="MLP Logo">
            </div>
        </div>
    </header>
    <div class="container" id="app">
        <aside>
            <form action="" class="form-group">
                @csrf
                <input type="text" placeholder="Insert task name" name="taskName" id="taskName" class="form-control">
                <input type="submit" value="Add" class="btn btn-primary">
            </form>
        </aside>
        <main>
            <table class="table">
                <thead>
                    <tr>
                        <th>
                            #
                        </th>
                        <th>
                            Task
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            1
                        </td>
                        <td>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut, iure laboriosam corporis
                        </td>
                        <td class="actions">
                            <button type="button" class="btn btn-success">
                                <svg xmlns="http://www.w3.org/2000/svg" height="20" width="20"><path d="M7.979 15.125q-.25 0-.5-.104t-.458-.313L3.5 11.188q-.396-.396-.385-.969.01-.573.406-.969t.979-.396q.583 0 .979.396l2.542 2.542 6.521-6.521q.396-.396.948-.406.552-.011.968.406.396.396.396.958 0 .563-.396.959l-7.52 7.52q-.209.209-.459.313-.25.104-.5.104Z"/></svg>
                            </button>
                            <button type="button" class="btn btn-danger">
                                <svg xmlns="http://www.w3.org/2000/svg" height="20" width="20"><path d="m10 11.896-3.688 3.687q-.395.396-.937.386-.542-.011-.937-.407-.396-.395-.396-.947 0-.553.396-.948L8.104 10 4.417 6.312q-.396-.395-.386-.947.011-.553.407-.948.395-.396.947-.396.553 0 .948.396L10 8.104l3.688-3.687q.395-.396.947-.396.553 0 .948.396.396.395.396.948 0 .552-.396.947L11.896 10l3.687 3.688q.396.395.396.937t-.396.937q-.395.396-.948.396-.552 0-.947-.396Z"/></svg>
                            </button>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            1
                        </td>
                        <td>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut, iure laboriosam corporis
                        </td>
                        <td class="actions">
                            <button type="button" class="btn btn-success">
                                <svg xmlns="http://www.w3.org/2000/svg" height="20" width="20"><path d="M7.979 15.125q-.25 0-.5-.104t-.458-.313L3.5 11.188q-.396-.396-.385-.969.01-.573.406-.969t.979-.396q.583 0 .979.396l2.542 2.542 6.521-6.521q.396-.396.948-.406.552-.011.968.406.396.396.396.958 0 .563-.396.959l-7.52 7.52q-.209.209-.459.313-.25.104-.5.104Z"/></svg>
                            </button>
                            <button type="button" class="btn btn-danger">
                                <svg xmlns="http://www.w3.org/2000/svg" height="20" width="20"><path d="m10 11.896-3.688 3.687q-.395.396-.937.386-.542-.011-.937-.407-.396-.395-.396-.947 0-.553.396-.948L8.104 10 4.417 6.312q-.396-.395-.386-.947.011-.553.407-.948.395-.396.947-.396.553 0 .948.396L10 8.104l3.688-3.687q.395-.396.947-.396.553 0 .948.396.396.395.396.948 0 .552-.396.947L11.896 10l3.687 3.688q.396.395.396.937t-.396.937q-.395.396-.948.396-.552 0-.947-.396Z"/></svg>
                            </button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </main>
        <div class="copyright">
            Copyright &copy; <?php echo date('Y'); ?> All Rights Reserved
        </div>
    </div>
</body>
</html>
