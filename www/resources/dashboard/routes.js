import Dashboard from "./views/Dashboard.jsx";
import Icons from "./views/Icons.jsx";
import Notifications from "./views/Notifications.jsx";
import BlogList from "./views/BlogList.jsx";
import UserProfile from "./views/UserProfile.jsx";

let routes = [
    // {
    //     path: "/dashboard",
    //     name: "Dashboard",
    //     icon: "tim-icons icon-chart-pie-36",
    //     component: Dashboard,
    //     layout: "/admin"
    // },
    // {
    //     path: "/icons",
    //     name: "Icons",
    //     icon: "tim-icons icon-atom",
    //     component: Icons,
    //     layout: "/admin"
    // },
    // {
    //     path: "/notifications",
    //     name: "Notifications",
    //     icon: "tim-icons icon-bell-55",
    //     component: Notifications,
    //     layout: "/admin"
    // },
    {
        path: "/user-profile",
        name: "User Profile",
        icon: "tim-icons icon-single-02",
        component: UserProfile,
        layout: "/admin"
    },
    {
        path: "/blog",
        name: "Список записей Блога",
        icon: "tim-icons icon-puzzle-10",
        component: BlogList,
        layout: "/admin"
    },
];
export default routes;
