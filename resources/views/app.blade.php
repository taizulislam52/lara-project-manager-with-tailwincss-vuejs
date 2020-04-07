<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Project Manager</title>

    <!-- Fonts -->
    {{--        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">--}}
    <link href="/css/app.css" rel="stylesheet">

</head>
<body>
<div id="app">
    <div class="container px-8">
        <header class="py-4 mb-4">
            <h1 class="text-3xl font-bold">Project Manager</h1>
        </header>
        <main class="flex">
            <aside class="w-1/5 pt-8">
                <div class="mb-8">
                    <h5 class="uppercase font-semibold mb-4 text-base">Summary</h5>
                    <ul >
                        <li class="text-sm leading-new-loose"> <router-link class="text-gray-50"  to="/" exact>Logs</router-link></li>
                        <li class="text-sm leading-new-loose"> <router-link class="text-gray-50"  to="/projects" exact>Projects</router-link></li>
                        <li class="text-sm leading-new-loose"><router-link class="text-gray-50"  to="/tasks">Tasks</router-link></li>
                    </ul>
                </div>
                <div class="mb-8">
                    <h5 class="uppercase font-semibold mb-4 text-base">Creates</h5>
                    <ul>
                        <li class="text-sm leading-new-loose"> <router-link class="text-gray-50"  to="/create-project">Project</router-link></li>
                        <li class="text-sm leading-new-loose"><router-link class="text-gray-50"  to="/create-task">Task</router-link></li>
                    </ul>
                </div><div>
                    <h5 class="uppercase font-semibold mb-4 text-base">History</h5>
                    <ul>
                        <li class="text-sm leading-new-loose"> <router-link class="text-gray-50"  to="/projects-history">Projects History</router-link></li>
                        <li class="text-sm leading-new-loose"> <router-link class="text-gray-50"  to="/logs-history">Logs History</router-link></li>

                    </ul>
                </div>
            </aside>
            <div class="primary flex-1"> <router-view></router-view></div>
        </main>
    </div>
</div>
<script src="/js/app.js"></script>
</body>
</html>
