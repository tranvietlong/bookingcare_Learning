var app = new Vue({
    el: '#app',
    data: {
        message: 'Hello Vue!'
    }
});

/*when hover in the element will be show a datetime*/
var app2 = new Vue({
    el: '#app-2',
    data: {
        message: 'You loaded this page on ' + new Date().toLocaleString()
    }
});
/*end*/

/*enable or disable contents by change true || false in data.seen*/
var app = new Vue({
    el: '#app1',
    data: {
        seen: false
    }
});
/*end*/

/*condition and loops*/
var app4 = new Vue({
    el: '#app-4',
    data: {
        todos: [
            { text: 'Học JavaScript' },
            { text: 'Học Vue' },
            { text: 'Xây dựng cái gì đó hay ho' }
        ]
    }
});
/*end*/

/*Handling user input*/
var app5 = new Vue({
    el: '#app-5',
    data: {
        message: 'Hello Long Tran'
    },
    methods: {
        reverseMessage: function () {
            this.message = this.message.split('').reverse().join('')
        }
    }
});

var app6 = new Vue({
    el: '#app-6',
    data: {
        message: 'Change the message'
    }
})
/*end*/

/*Composing with Components*/
Vue.component('todo-item', {
    props: ['todo'],
    template: '<li>{{ todo.text }}</li>'
})

var app7 = new Vue({
    el: '#app-7',
    data: {
        groceryList: [
            { id: 0, text: 'Vegetables' },
            { id: 1, text: 'Cheese' },
            { id: 2, text: 'Whatever else humans are supposed to eat' }
        ]
    }
})

/*end*/

var obj = {
    foo: 'hi!'
}

Object.freeze(obj)

new Vue({
    el: '#ap',
    data: obj
});


var watchExampleVM = new Vue({
    el: '#watch-example',
    data: {
        question: '',
        answer: 'I cannot give you an answer until you ask a question!'
    },
    watch: {
        // whenever question changes, this function will run
        question: function (newQuestion, oldQuestion) {
            this.answer = 'Waiting for you to stop typing...'
            this.debouncedGetAnswer()
        }
    },
    created: function () {
        // _.debounce is a function provided by lodash to limit how
        // often a particularly expensive operation can be run.
        // In this case, we want to limit how often we access
        // yesno.wtf/api, waiting until the user has completely
        // finished typing before making the ajax request. To learn
        // more about the _.debounce function (and its cousin
        // _.throttle), visit: https://lodash.com/docs#debounce
        this.debouncedGetAnswer = _.debounce(this.getAnswer, 100)
    },
    methods: {
        getAnswer: function () {
            if (this.question.indexOf('?') === -1) {
                this.answer = 'Questions usually contain a question mark "?". ;-)'
                return
            }
            this.answer = 'Thinking...'
            var vm = this
            axios.get('https://yesno.wtf/api')
                .then(function (response) {
                    vm.answer = _.capitalize(response.data.answer)
                })
                .catch(function (error) {
                    vm.answer = 'Error! Could not reach the API. ' + error
                })
        }
    }
})

/*Binding class in html*/

var TextDanger = new Vue({
    data: {
        classObject: {
            active: true,
            'text-danger': true
        }
    }
})

//

var example1 = new Vue({
    el: '#example-1',
    data: {
        items: [
            { message: 'Tran' },
            { message: 'Long' }
        ]
    }
})

new Vue({
    el: '#v-for-object',
    data: {
        object: {
            title: 'How to do lists in Vue',
            author: 'Jane Doe',
            publishedAt: '2016-04-10'
        }
    }
})