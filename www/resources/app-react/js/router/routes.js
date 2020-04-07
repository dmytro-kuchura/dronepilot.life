import Login from '../pages/auth/login'
import Logout from '../pages/logout';
import Register from '../pages/auth/register'
import ForgotPassword from '../pages/auth/forgot-password'
import ResetPassword from '../pages/auth/reset-password'
import Dashboard from '../pages/dashboard'
import RecordsList from '../pages/records/records-list';
import RecordsEdit from '../pages/records/records-edit';
import RecordsView from '../pages/records/records-view';
import NoMatch from '../pages/404'

const routes = [
    {
        path: '/admin',
        exact: true,
        auth: true,
        component: Dashboard
    }, {
        path: '/admin/login',
        exact: true,
        auth: false,
        component: Login
    }, {
        path: '/admin/logout',
        exact: true,
        auth: true,
        component: Logout
    }, {
        path: '/admin/register',
        exact: true,
        auth: false,
        component: Register
    }, {
        path: '/admin/forgot-password',
        exact: true,
        auth: false,
        component: ForgotPassword
    }, {
        path: '/admin/password/reset/:token',
        exact: true,
        auth: false,
        component: ResetPassword
    }, {
        path: '/admin/records',
        exact: true,
        auth: true,
        component: RecordsList
    }, {
        path: '/admin/records/:id',
        exact: true,
        auth: true,
        component: RecordsEdit
    }, {
        path: '/admin/records/view/:id',
        exact: true,
        auth: true,
        component: RecordsView
    }, {
        path: '',
        exact: true,
        auth: false,
        component: NoMatch
    }
];

export default routes;
