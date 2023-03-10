var login_chemist_id = $('#login_chemist_id').val();
var base_url = $('#base_url').val();
var apiKey = $('#apiKey').val();
var projectId = $('#projectId').val();
var messagingSenderId = $('#messagingSenderId').val();
var appId = $('#appId').val();
var vapidKey = $('#vapidKey').val();

var config = {
    apiKey: apiKey,
    projectId: projectId,
    messagingSenderId: messagingSenderId,
    appId: appId,
};
firebase.initializeApp(config);
const messaging = firebase.messaging();

messaging.getToken({ vapidKey: vapidKey }).then((currentToken) => {
    if (currentToken) {
        // Send the token to your server and update the UI if necessary
        // ...
        console.log(currentToken);
        saveToken(currentToken);
    } else {
        // Show permission request UI
        console.log('No registration token available. Request permission to generate one.');
        // ...
    }
    }).catch((err) => {
    console.log('An error occurred while retrieving token. ', err);
// ...
});

messaging.onMessage(function (payload) {
    // var count = $('.chemist_notification_count').data('count');
    // count = parseInt(count);
    // count++;

    // $('.chemist_notification_count_view').html(count);
    // $('.chemist_notification_count_view2').html(count);
    // $('.chemist_notification_count').data('count',count);

    refresh_notification_data();

    $('.chemist_notification_count').on('click',function(){
        updatecountdatachemist();
    });
    
    console.log(payload.data.notification);
    var data = payload.data.notification;
    var data = JSON.parse(data);

    // var html = '';
    // //html += '<li><a href="'+onclick_e+'" data-id="'+count+'"><b>'+data.subject+'</b>'+data.message+'</a></li>';
    // html += '<li><a href="'+data.click_action+'"><b>'+data.title+'</b>'+data.body+'</a></li>';
    // $('.chemist_notification_detail').prepend(html);

    console.log(data.title);
    var notification;
      notification = new Notification(
        data.title, {
            body: data.body,
            icon: data.icon,
            badge: data.badge,
            click_action: data.click_action,
      });
      return notification.onclick = function() {
        notification.close();
        window.open().close();
        return window.focus();
      };
      
});

// Notification.requestPermission();
function saveToken(currentToken) {
    /*
    $.ajax({
        url: base_url+'/chemist/Dashboard/token_update',
        method: 'post',
        data: {'token':currentToken,'type':'Vendor'}
    }).done(function(result){
        console.log(result);
    })
    */
}

function updatecountdatachemist(){
     
     $.ajax({
         dataType: "json",
         type: "POST",
         url: base_url+'chemist/Dashboard/read_chemist_notification_count',
         data: {notify_user_type:'Vendor',user_id:login_chemist_id},
         success: function (data) {
             if (data == 100) {
                 $('.chemist_notification_count_view').html(0);
                 $('.chemist_notification_count').data('count',0);
             }
         }
     });
 }
$(document).ready(function(){
    $('.chemist_notification_count').on('click',function(){
        
        updatecountdatachemist();
    });
    
    document.addEventListener('visibilitychange', function(){
        refresh_notification_data();
    });
    // $(window).blur(function(e) {
    //     refresh_notification_data();
    // });
    // $(window).focus(function(e) {
    //     // Do Focus Actions Here
    //     alert();
    // });
});

function refresh_notification_data(){
    $.ajax({
        dataType: "json",
        type: "POST",
        url: base_url+'chemist/Dashboard/refresh_notification_data',
        data: {notify_user_type:'Vendor',user_id:login_chemist_id},
        success: function (data) {
            if (data.status == 1) {
                $('.chemist_notification_count_view').html(data.result.count);
                $('.chemist_notification_count_view2').html(data.result.count);
                $('.chemist_notification_count').data('count',data.result.count);
                var html = '';
                console.log(data.result.notifications);
                $.each( data.result.notifications, function( key,value ) {
                    html += '<li><a href="'+value.onclick+'" data-id="'+value.notification_id+'"><b>'+value.title+'</b>'+value.description+'</a></li>';
                });
                
                $('.chemist_notification_detail').html(html);
            }
        }
    });
}

