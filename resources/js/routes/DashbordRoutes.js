


//imoprt Component
import UserDashbordEditProfile from "../components/Dashbord/user/Profile/UserDashbordEditProfile";
import UserDashbordHome from "../components/Dashbord/user/UserDashbordHome";
//admins
import AdminDashbordEditProfile from '../components/Dashbord/Admin/profile/AdminDashbordEditProfile';
import AdminDashbordSeeUsers from '../components/Dashbord/Admin/users/AdminDashbordSeeUsers';
import AdminDashbordHome from "../components/Dashbord/Admin/AdminDashbordHome";
export const routes = [
//for users
    { path: '/dashbord/user', name:'UserDashbordHome',component: UserDashbordHome},
    { path: '/dashbord/user/profile', name:'UserProfile',component: UserDashbordEditProfile},
//for admins
    { path: '/dashbord/admin', name:'AdminDashbordHome',component: AdminDashbordHome},
    { path: '/dashbord/admin/profile', name:'AdminProfile',component: AdminDashbordEditProfile},
    { path: '/dashbord/admin/users', name:'AdminSeeUsers',component: AdminDashbordSeeUsers},



];

