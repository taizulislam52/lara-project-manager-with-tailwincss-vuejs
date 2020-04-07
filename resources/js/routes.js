import Projects from "./components/Projects";
import Home from "./components/Home";
import About from "./components/About";
import Tasks from "./components/Tasks";
import NotFound from "./components/NotFound";
import CreateProject from "./components/CreateProject";
import CreateTask from "./components/CreateTask";
import ProjectsHistory from "./components/ProjectsHistory";
import LogsHistory from "./components/LogsHistory";
import CreateHoursLog from "./components/CreateHoursLog";

export default {
    mode:'history',
    linkActiveClass: 'font-bold',
    routes:[
        {
            path:'*',
            component:NotFound
        },
        {
            path:'/',
            component:Home
        },
        {
            path:'/projects',
            component:Projects
        },
        {
            path:'/create-project',
            component:CreateProject
        },
        {
            path:'/tasks',
            component:Tasks
        },
        {
            path:'/create-task',
            component:CreateTask
        },
        {
            path:'/projects-history',
            component:ProjectsHistory

        },
        {
            path:'/logs-history',
            component:LogsHistory
        },
        {
            path:'/create-hour-logs',
            component:CreateHoursLog
        },
        {
            path:'/about',
            component:About
        },

    ]
}