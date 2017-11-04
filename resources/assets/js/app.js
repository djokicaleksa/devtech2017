
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('example', require('./components/Example.vue'));
Vue.component('card-block', require('./components/CardBlock.vue'));

const app = new Vue({
    el: '#app',
    data:{
    	cans_number: 0,
    	cans_percent: 0,
    	cans_class: '',

    	pet_number: 0,
    	pet_percent: 0,
    	pet_class: '',

    	glass_number:0,
    	glass_percent:0,
    	glass_class:'',

    },

    computed: {
    	total: function () {
    		return this.cans_number + this.pet_number + this.glass_number;
    	},
    },

    created(){

    	Echo.channel('update-recycled')
    		.listen('RecycledEvent', (e) => {
    			
    			if(e.material_id == 1){
    				this.cans_number = e.number;
    				this.cans_percent = e.percent;
    				this.cans_class = e.css_class;	
    			}

    			if(e.material_id == 2){
    				this.pet_number = e.number;
    				this.pet_percent = e.percent;
    				this.pet_class = e.css_class;	
    			}

    			if(e.material_id == 3){
    				this.glass_number = e.number;
    				this.glass_percent = e.percent;
    				this.glass_class = e.css_class;	
    			}

    		});

    	axios.get('api/card-block-stats')
    		.then(function(response){
    			response['data'].forEach(function(e){
    				console.log(e.number);
    				this.cans_number = e.number;
    				this.cans_percent = e.percent;
    				this.cans_class = e.css_class;	
    			
    				this.pet_number = e.number;
    				this.pet_percent = e.percent;
    				this.pet_class = e.css_class;
    					
    				this.glass_number = e.number;
    				this.glass_percent = e.percent;
    				this.glass_class = e.css_class;	
    			
    			});
	    		
    		});	
    },


});
