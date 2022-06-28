import { createRouter,createWebHistory } from "vue-router";

import welcomeCompents from "../../js/components/welcomeCompents.vue"
const routes = [
    {
        path:"/dashbord",
        name:"welcome.index",
        component:welcomeCompents
    }
];

export default createRouter({
      history:createWebHistory(),
      routes
});
