(function(){
  'use strict';

  var vm = new Vue({
    el: '#app',
    data:{
      newItem :'',
      todos : []
    },
    watch:{
      todos: {
        handler: function(){
        localStorage.setItem('todos', JSON.stringify(this.todos));
      },
      deep: true
      }
    },
    mounted : function(){
      this.todos = JSON.parse(LocalStorage.getItem('todos')) || [];
    },
    methods:{
      addItem: function(){
        var item = {
          title : this.newItem,
          isDone : false
        }
        
        this.todos.push(item);
        this.newItem = '';
      },
      deleteItem: function(index){
        if(confirm("Are you Done?")){
          this.todos.splice(index,1);
        }
      },
      purge : function(){
        if(!confirm("Delete all finished tasks?")){
          return;
        }
        this.todos = this.todos.filter(function(todo){
          return !todo.isDone;
        })
      }
    },
    computed:{
      remaining : function(){
        var items = this.todos.filter(function(todo){
          return !todo.isDone;
        });
        return items.length;
      }
    }
  })
}());