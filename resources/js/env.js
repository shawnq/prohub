window.Vue = require('vue');

Vue.component('head-sensor',{
    template: '',
    data: ()=>{return {
        sensor:{}
    };},
    created: () => {
        console.log("set referesh timer every 3 sec.");
        //timer update
        this.updateSensor();
        //this.timer = setInterval(this.updateMetrics,3000);
    },
    methods: {
        updateSensor: ()=>{
            console.log("referesh sensor metrics.");
            axios.get('/api/sensor/env/0')
                .then(response => {
                this.sensor=response.data;
            });
        }
    }
});
var app = new Vue({
    el:'#app',
    data: {
        sensor:{tmp:"",hum:"",pm25:"",co2:""}
    },
    mounted: () => {
        console.log("set referesh timer every 3 sec.");
        //timer update
        app=this;
        this.timer = setInterval(()=>{
            console.log("referesh sensor metrics.");
            axios.get('/api/sensor/env/0')
                .then(response => {
                app.sensor=response.data;
            });
        },3000);
    },
});