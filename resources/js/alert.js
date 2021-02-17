
$(function(){
    'use strict';
alert('here');
    iziToast.settings({
        timeout: 10000,
        resetOnHover: true,
        icon: 'material-icons',
        transitionIn: 'flipInX',
        transitionOut: 'flipOutX',
        onOpening: function() {
            console.log('callback abriu!');
        },
        onClosing: function() {
            console.log("callback fechou!");
        }
    });

    function success(message) {
        display([message],'warning');
    }

    function warn(messages) {
        display(messages,'warning');
    }

    function display(messages, type){
        for(message in messages)
        {
            iziToast.type(message);
        }
    }
})
