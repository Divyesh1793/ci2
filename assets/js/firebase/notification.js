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
    var count = $('.admin_notification_count').data('count');
    count = parseInt(count);
    count++;

    // $('.admin_notification_count_view').html(count);
    // $('.admin_notification_count_view2').html(count);
    // $('.admin_notification_count').data('count',count);

    refresh_notification_data();

    $('.admin_notification_count').on('click',function(){
        updatecountdata();
    });
    
    console.log(payload.data.notification);
    var data = payload.data.notification;
    var data = JSON.parse(data);

    var html = '';
    //html += '<li><a href="'+onclick_e+'" data-id="'+count+'"><b>'+data.subject+'</b>'+data.message+'</a></li>';
    // html += '<li><a href="'+data.click_action+'"><b>'+data.title+'</b>'+data.body+'</a></li>';
    // $('.admin_notification_detail').prepend(html);

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
        url: base_url+'/admin/Notification/token_update',
        method: 'post',
        data: {'token':currentToken,'type':'Admin'}
    }).done(function(result){
        console.log(result);
    })
    */
}

function updatecountdata(){
    $.ajax({
        dataType: "json",
        type: "POST",
        url: base_url+'admin/Notification/read_admin_notification_count',
        data: {notify_user_type:'Admin'},
        success: function (data) {
            if (data == 100) {
                $('.admin_notification_count_view').html(0);
                $('.admin_notification_count').data('count',0);
            }
        }
    });
}

$(document).ready(function(){
    $('.admin_notification_count').on('click',function(){
        updatecountdata();
    });

    document.addEventListener('visibilitychange', function(){
        refresh_notification_data();
    });
    // $(window).blur(function(e) {
        
    // });
    
});

function refresh_notification_data(){
    $.ajax({
        dataType: "json",
        type: "POST",
        url: base_url+'admin/Notification/refresh_notification_data',
        data: {notify_user_type:'Admin'},
        success: function (data) {
            if (data.status == 1) {
                $('.admin_notification_count_view').html(data.result.count);
                $('.admin_notification_count_view2').html(data.result.count);
                $('.admin_notification_count').data('count',data.result.count);
                var html = '';
                console.log(data.result.notifications);
                $.each( data.result.notifications, function( key,value ) {
                    html += '<li><a href="'+value.onclick+'" data-id="'+value.notification_id+'"><b>'+value.title+'</b>'+value.description+'</a></li>';
                });
                
                $('.admin_notification_detail').html(html);
            }
        }
    });
}

// $(document).ready(function(){
//     Push.Permission.request();
//     //test
//     $('.admin_notification_count').on('click',function(){
//         updatecountdata();
//     });

//     $('.chemist_notification_count').on('click',function(){
//         updatecountdatachemist();
//     });
    

    // socket.on('admin_notification', function( data ) {
    //     console.log(data.notification_id);
        
    //     var sound = 'https://dev.epharmaplatform.com/assets/notification.mp3';
    //     var timeout = 8000;
    //     var onclick_e = data.onclick_e;
    //     var icon = 'https://freeiconshop.com/wp-content/uploads/edd/notification-flat.png';
    //     //alert(data.subject);
    //     showDesktopNotification(data.subject, data.message, icon, sound, timeout,onclick_e)
        
    //     var count = $('.admin_notification_count').data('count');
    //     count = parseInt(count);
    //     count++;
    //     $('.admin_notification_count_view').html(count);
    //     $('.admin_notification_count_view2').html(count);
    //     $('.admin_notification_count').data('count',count);

    //     $('.admin_notification_count').on('click',function(){
    //         updatecountdata();
    //     });

    //     var html = '';
    //     //html += '<li><a href="'+onclick_e+'" data-id="'+count+'"><b>'+data.subject+'</b>'+data.message+'</a></li>';
    //     html += '<li><a href="#" data-id="'+count+'"><b>'+data.subject+'</b>'+data.message+'</a></li>';
    //     $('.admin_notification_detail').prepend(html);
    //     //play(sound);
    // });

//     socket.on('chemist_notification', function( data ) {
//         if (data.chemist_id == login_chemist_id) {
//             console.log(data.notification_id);
        
//             var sound = 'https://dev.epharmaplatform.com/assets/notification.mp3';
//             var timeout = 8000;
//             var onclick_e = data.onclick_e;
//             var icon = 'https://freeiconshop.com/wp-content/uploads/edd/notification-flat.png';
//             //alert(data.subject);
//             showDesktopNotification(data.subject, data.message, icon, sound, timeout,onclick_e)
            
//             var count = $('.chemist_notification_count').data('count');
//             count = parseInt(count);
//             count++;
//             $('.chemist_notification_count_view').html(count);
//             $('.chemist_notification_count_view2').html(count);
//             $('.chemist_notification_count').data('count',count);

//             $('.chemist_notification_count').on('click',function(){
//                 updatecountdatachemist();
//             });

//             var html = '';
//             //html += '<li><a href="'+onclick_e+'" data-id="'+count+'"><b>'+data.subject+'</b>'+data.message+'</a></li>';
//             html += '<li><a href="#" data-id="'+count+'"><b>'+data.subject+'</b>'+data.message+'</a></li>';
//             $('.chemist_notification_detail').prepend(html);
//             //play(sound);   
//         }
//     });

//     // $('.send_admin_notification').on('click',function(){
//     //     socket.emit('admin_notification', { 
//     //         notification_id: '1',
//     //         subject: 'New Order Place',
//     //         message: 'New Order Place and your order no is 0005',
//     //         onclick_e: 'http://localhost/dhani/admin/dashboard',
//     //         updated_at: '2020-03-20 00:00:00'
//     //     });
//     // });

// });

// function play(sound){
//     var audio = new Audio(sound);
//     audio.play();
// }
// function showDesktopNotification(subject, message, icon, sound, timeout,onclick_e) {
//     if (!timeout) {
//          timeout = 5000;
//      }
    
//     Push.create(subject, {
//         body: message,
//         icon: icon,
//         timeout: timeout,               // Timeout before notification closes automatically.
//         vibrate: [100, 100, 100],    // An array of vibration pulses for mobile devices.
//         onClick: function() {
//             // Callback for when the notification is clicked. 
//             window.open(onclick_e, '_blank');
//         }  
//     });
// }
// function updatecountdata(){
//     $.ajax({
//         dataType: "json",
//         type: "POST",
//         url: base_url+'admin/Notification/read_admin_notification_count',
//         data: {notify_user_type:'Admin'},
//         success: function (data) {
//             if (data == 100) {
//                 $('.admin_notification_count_view').html(0);
//                 $('.admin_notification_count').data('count',0);
//             }
//         }
//     });
// }

// function updatecountdatachemist(){
//    // alert();
//     $.ajax({
//         dataType: "json",
//         type: "POST",
//         url: base_url+'chemist/Dashboard/read_chemist_notification_count',
//         data: {notify_user_type:'Vendor',user_id:login_chemist_id},
//         success: function (data) {
//             if (data == 100) {
//                 $('.admin_notification_count_view').html(0);
//                 $('.admin_notification_count').data('count',0);
//             }
//         }
//     });
// }