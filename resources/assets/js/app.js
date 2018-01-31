/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');
//for auto scroll
import Vue from 'vue'
import VueChatScroll from 'vue-chat-scroll'
//for notifications
import Toaster from 'v-toaster'
import 'v-toaster/dist/v-toaster.css'

Vue.use(VueChatScroll)

Vue.use(Toaster, {timeout: 5000})
/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('message', require('./components/message.vue'));

const app = new Vue({
    el: '#app',
    data: {
        message: '',
        chat: {
            message: [],
            user: [],
            color: [],
            time: []
        },
        typing: '',
        numberOfUsers: 0
    },
    watch: {
        message() {
            Echo.private('chat')
                .whisper('typing', {
                    name: this.message
                });
        }
    },
    methods: {
        send() {
            if (this.message.length != 0) {
                this.chat.message.push(this.message);
                this.chat.color.push('success');
                this.chat.user.push('você');
                this.chat.time.push(this.getTime());
                axios.post('send', {
                    message: this.message,
                    chat: this.chat
                })
                    .then(response = > {
                    this.message = '';
                //console.log(response);
                //this.chat.message.push(response.data.message);

            })
            .
                catch(error = > {
                    console.log(error.response.data);
            })
                ;
            }
        },
        getTime() {
            let time = new Date();
            return time.getHours() + ':' + time.getMinutes();
        },
        getOldMessages() {
            axios.post('/getOldMessage')
                .then(response = > {
                console.log(response);
            if (response.data != '') {
                this.data = response.data;
            }
        })
        .
            catch(error = > {
                console.log(error);
        })
            ;
        }
    },
    mounted() {
        Echo.private('chat')
            .listen('ChatEvent', (e) = > {
            this.chat.message.push(e.message);
        this.chat.color.push('warning');
        this.chat.user.push(e.user);
        this.chat.time.push(this.getTime());
        //console.log(e);
    })
    .
        listenForWhisper('typing', (e) = > {
            if(e.name != ''
    )
        {
            this.typing = 'digitando...';
        }
    else
        {
            this.typing = '';
        }

    })
        ;
        Echo.join(`chat`)
            .here((users) => {
                this.numberOfUsers = users.length;
            })
            .joining((user) = > {
            this.numberOfUsers += 1;
        //console.log(user);
        this.$toaster.success(user.name + ' entrou na sala.')
    }).
        leaving((user) = > {
            this.numberOfUsers -= 1;
        this.$toaster.warning(user.name + ' saiu da sala.')
    })
        ;
    }
});
